<?php

class Validate {
    private $_passed = false;
    private $_errors = array();
    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstance();
    }

    public function check($source, $items = array()) {
        foreach($items as $item => $rules) {
            foreach($rules as $rule => $rule_value) {
                $value = $source[$item];
                $item = escape($item);

                if($rule === 'required' && empty($value)) {
                    $this->addError("{$item} is required");
                } else if (!empty($value)) {
                    switch($rule) {
                        case 'min':
                            if(strlen($value) < $rule_value) {
                                $this->addError("{$item} must be a minimum of {$rule_value} characters.");
                            }
                            break;

                        case 'max':
                            if(strlen($value) > $rule_value) {
                                $this->addError("{$item} must be a maximum of {$rule_value} characters.");
                            }
                            break;
                        case 'matches':
                            if($value != $source[$rule_value]) {
                                $this->addError("{$rule_value} must match {$item}.");
                            }
                            break;
                        case 'unique':
                            $check = $this->_db->get($rule_value, array($item, '=', $value));

                            if($check->count()) {
                                $this->addError("{$item} already exists.");
                            }
                            break;

                        case 'exists':
                            $check = $this->_db->get($rule_value, array($item, '=', $value));
                            
                            if(!$check->count()) {
                                $this->addError("{$item} does not exist.");
                            }
                            break;

                        case 'exclusive':
                            $roll = $rule_value['roll'];
                            $course_id = $rule_value['course_id'];
                            $item1 = 'roll';
                            $item2 = 'course_id';
                            $check = $this->_db->get('marks_details', array('roll', '=', $roll, 'AND', 'course_id', '=', $course_id));

                            if($check->count()) {
                                $this->addError("Marks of {$course_id} for {$roll} already exists.");
                            }
                            break;

                        case 'high':
                            if($value > $rule_value) {
                                $this->addError("{$item} must be lower than {$rule_value}.");
                            }
                            break;
                        case 'low':
                            if($value < $rule_value) {
                                $this->addError("{$item} must be higher than {$rule_value} characters.");
                            }
                            break;
                        case 'not_exist':
                            $check = $this->_db->get($rule_value, array($item, '=', $value));

                            if(!$check->count()) {
                                $this->addError("{$item} does not exist.");
                            }
                            break;
                    }
                }
            }
        }

        if(empty($this->_errors)) {
            $this->_passed = true;
        }
    }

    private function addError($error) {
        $this->_errors[] = $error;
    }

    public function errors() {
        return $this->_errors;
    }

    public function passed() {
        return $this->_passed;
    }
}

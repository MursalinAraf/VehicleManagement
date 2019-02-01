<?php

class Result {
    private $_db,
            $_data,
            $_gpa;

    public function __construct($user = null) {
        $this->_db = DB::getInstance();
        
    }

    public function create($fields = array()) {
        if(!$this->_db->insert('marks_details', $fields)) {
            throw new Exception('Sorry, there was a problem submitting the result.');
        }
    }

    public function publish($fields = array()) {
        $user = new user();
    	if(true/*$user->hasPermission('admin')*/){
            if(!$this->_db->calculate_result('marks_details', $fields)) {
                throw new Exception('Sorry, there was a problem ragarding publishing result.');
            }
        }
        
    }

    public function find_all($roll = null, $semister = null) {
        if($roll && !$semister) {
            $data = $this->_db->find_all('marks_details', $roll, null);

            if(true/*$data->count()*/) {
                $this->_data = $data;
                return $data;
            }
        } else if($roll && $semister){
            $data = $this->_db->find_all('marks_details', $roll, $semister);

            if(true/*$data->count()*/) {
                $this->_data = $data;
                return $data;
            }
        }
        return false;
    }

    public function gpa($roll = null, $semister = null) {
        if($roll && $semister) {
            $data = $this->_db->gpa('marks_details', $roll, $semister);

            if(true/*$data->count()*/) {
                $this->_data = $data;
                return $data;
            }
        } else if($roll && $semister){
            $data = $this->_db->find_all('marks_details', $roll, $semister);

            if(true/*$data->count()*/) {
                $this->_data = $data;
                return $data;
            }
        }
        return false;
    }

    public function update_result($fields = array(), $roll, $course_id) {

    	$user = new user();
    	if($user->hasPermission('admin')){
	        if(!$this->_db->update_result('marks_details',  $fields, $roll, $course_id)) {
	            throw new Exception('There was a problem updating result');
	        }
	    }
    }

    public function find($roll = null,$course_id) {
        if($roll) {
            $data = $this->_db->get('marks_details', array('roll', '=', $roll, 'AND', 'course_id', '=', $course_id));

            if($this->count()) {
                $this->_data = $data;
                return $this;
            }
        }
        return false;
    }



    

    public function exists() {
        return (!empty($this->_data)) ? true : false;
    }

    

    public function data(){
        return $this->_data;
    }

}
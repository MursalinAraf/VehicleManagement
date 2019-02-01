<?php

class Message {
    private $_db,
            $_data,
            $_gpa;

    public function __construct($user = null) {
        $this->_db = DB::getInstance();
        
    }

    public function insert($fields = array()) {
        if(!$this->_db->insert('chat', $fields)) {
            throw new Exception('Sorry, there was a problem submitting the message.');
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

    public function find_all($from, $to) {
        if($from && $to){
            $data = $this->_db->find_conversation('chat', $from, $to);

            if(true/*$data->count()*/) {
                $this->_data = $data;
                return $data;
            }
        }
        return false;
    }


    public function read($from, $to) {
        if($from && $to){
            $data = $this->_db->read('chat', $from, $to);

            if(true/*$data->count()*/) {
                $this->_data = $data;
                return $data;
            }
        }
        return false;
    }
    



    public function isUnread($username) {
        if($username) {
            $data = $this->_db->message_count('chat', $username);

            if($data) {
                $this->_data = $data;
                return $data;
            }
        }
        return false;
    }

        public function unreadPeople($username) {
        if($username) {
            $data = $this->_db->people('chat', $username);

            if($data) {
                $this->_data = $data;
                return $data;
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
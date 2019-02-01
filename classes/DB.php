<?php

class DB {
    private static $_instance = null;
    private $_pdo,
            $_query,
            $_error = false,
            $_results,
            $_count = 0;

    private function __construct() {
        try {
            $this->_pdo = new PDO('mysql:host=' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance() {
        if(!isset(self::$_instance)) {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

    public function query($sql, $params = array()) {
        $this->_error = false;

        if($this->_query = $this->_pdo->prepare($sql)) {
            $x = 1;
            if(count($params)) {
                foreach($params as $param) {
                    $this->_query->bindValue($x, $param);
                    $x++;
                }
            }

            if($this->_query->execute()) {
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
            } else {
                $this->_error = true;
            }
        }

        return $this;
    }


    

    public function action($action, $table, $where = array()) {
        if(count($where) === 3) {
            $operators = array('=', '>', '<', '>=', '<=', '!=');

            $field = $where[0];
            $operator = $where[1];
            $value = $where[2];

            if(in_array($operator, $operators)) {
                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";

                if(!$this->query($sql, array($value))->error()) {
                    return $this;
                }
            }

        } else if(count($where) === 7) {
            $operators = array('=', '>', '<', '>=', '<=', '!=');

            $field1 = $where[0];
            $operator1 = $where[1];
            $value1 = $where[2];
            $logic = $where[3];
            $field2 = $where[4]; 
            $operator2 = $where[5];
            $value2 = $where[6];

            if(in_array($operator1, $operators)) {
                $sql = "{$action} FROM {$table} WHERE {$field1} {$operator1} ? {$logic} {$field2} {$operator2} ?";
                if(!$this->query($sql, array($value1,$value2))->error()) {
                    return $this;
                }
            }

        }

        return false;
    }
	
	
	
	
	public function isVerified() {

        $sql = "SELECT * FROM `users` WHERE `group` = 0;";
        if($this->direct_query($sql,null)->error()){
            echo "problem at _db_isVerified";
            return false;
        }
        return $this->_results;
    }

    public function verify($id, $group) {

        $sql = "UPDATE `users` SET `group`= {$group} WHERE `id` = {$id};";
        if($this->direct_query($sql,null)->error()){
            echo "problem at _db_verify";
            return false;
        }
        return true;
    }

    public function not_verify($id, $group) {

        $sql = "DELETE FROM `users` WHERE `id` = {$id} AND `group` = {$group}";
        if($this->direct_query($sql,null)->error()){
            echo "problem at _db_verify";
            return false;
        }
        return true;
    }


    public function insert($table, $fields = array()) {
        $keys = array_keys($fields);
        $values = null;
        $x = 1;

        foreach($fields as $field) {
            $values .= '?';
            if ($x < count($fields)) {
                $values .= ', ';
            }
            $x++;
        }

        $sql = "INSERT INTO {$table} (`" . implode('`, `', $keys) . "`) VALUES ({$values})";

        if(!$this->query($sql, $fields)->error()) {
            return true;
        }

        return false;
    }

    public function update($table, $id, $fields) {
        $set = '';
        $x = 1;

        foreach($fields as $name => $value) {
            $set .= "{$name} = ?";
            if($x < count ($fields)) {
                $set .= ', ';
            }
            $x++;
        }

        $sql = "UPDATE {$table} SET {$set} WHERE id = {$id}";

        if(!$this->query($sql, $fields)->error()) {
            return true;
        }

        return false;
    }
    public function update_result($table, $fields, $roll, $course_id) {
        $set = '';
        $x = 1;

        foreach($fields as $name => $value) {
            $set .= "{$name} = ?";
            if($x < count ($fields)) {
                $set .= ', ';
            }
            $x++;
        }

        $sql = "UPDATE {$table} SET {$set} WHERE roll = {$roll} AND course_id = '{$course_id}'";

        if(!$this->query($sql, $fields)->error()) {
            return true;
        }

        return false;
    }
    public function direct_query ($sql, $fields = array()){
        $this->_error = FALSE;
        $this->_query = $this->_pdo->prepare($sql);
        if($this->_query->execute()) {
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
            } else {
                $this->_error = true;
            }
        return $this;
    }

    public function calculate_result($table,$fields = array()) {

        $sql = "UPDATE {$table} SET `ct_avg`=ceil((((ct_1+ct_2+ct_3+ct_4)-(SELECT least (ct_1,ct_2,ct_3,ct_4))))/3) WHERE course_id = '{$fields}';";
        if($this->direct_query($sql, $fields)->error()) {
            return false;
        }
        
        $sql = "UPDATE {$table} SET `total`= ceil(ct_avg+attendence+sem_final) WHERE course_id = '{$fields}';";
        
        if($this->direct_query($sql, $fields)->error()) {
            echo "Total A Somossa";
            return false;
        }
        
        $sql = "UPDATE {$table} JOIN `course_detail` ON {$table}.course_id=course_detail.course_id 
            SET `cgp` = CASE 
                WHEN total>=80 THEN 4*credit 
                WHEN total>=75 THEN 3.75*credit 
                WHEN total>=70 THEN 3.5*credit
                WHEN total>=65 THEN 3.25*credit 
                WHEN total>=60 THEN 3.00*credit 
                WHEN total>=55 THEN 2.75*credit 
                WHEN total>=50 THEN 2.50*credit 
                WHEN total>=45 THEN 2.25*credit 
                WHEN total>=40 THEN 2.00*credit 
                ELSE 0.00 
                END 
            ,`gp` = CASE 
                WHEN total>=80 THEN 4 
                WHEN total>=75 THEN 3.75
                WHEN total>=70 THEN 3.5
                WHEN total>=65 THEN 3.25 
                WHEN total>=60 THEN 3.00
                WHEN total>=55 THEN 2.75
                WHEN total>=50 THEN 2.50
                WHEN total>=45 THEN 2.25
                WHEN total>=40 THEN 2.00
                ELSE 0.00 
                END 
            WHERE {$table}.course_id = '{$fields}';";
                
        if($this->direct_query($sql, $fields)->error()) {
            echo "gp te Somossa Te Somossa";
            return false;
        }
        
        
        return true;
    }

    public function find_conversation($table,$from, $to) {

        $sql = "SELECT `from`,`to`,`message`,`time` FROM {$table} WHERE (`from` = '{$from}' AND `to` = '{$to}') OR (`from` = '{$to}' AND `to` = '{$from}')   GROUP BY `time`;";
        
        if($this->direct_query($sql, null)->error()) {
            echo "problem at _db_find_conversation";
            return false;
        }
        return $this->_results;
    }

    public function read($table,$from, $to) {

        $sql = "UPDATE {$table} SET `status`= 2 WHERE `from` = '{$to}' AND `to` = '{$from}';";

        if($this->direct_query($sql, null)->error()) {
            echo "problem at _db_read_notation";
            return false;
        }
        return true;
    }

    public function message_count($table,$username) {

        $sql = "SELECT count(DISTINCT `from`) AS message_counter FROM {$table} WHERE `to` = '{$username}' AND `status` = 1;";

        if($this->direct_query($sql, null)->error()) {
            echo "problem at _db_message_count";
            return false;
        }
        return $this->_results;
    }



    public function people($table,$username) {

        $sql = "SELECT DISTINCT `from` FROM {$table} WHERE `to` = '{$username}' AND `status` = 1;";

        if($this->direct_query($sql, null)->error()) {
            echo "problem at _db_people";
            return false;
        }
        return $this->_results;
    }



    public function find_all($table,$fields = array(), $semister = array()) {

        $sql = "SELECT course_detail.course_id,course_detail.course_title, 
                    (CASE 
                        WHEN total>=80 THEN 'A+' 
                        WHEN total>=75 THEN 'A' 
                        WHEN total>=70 THEN 'A-' 
                        WHEN total>=65 THEN 'B+' 
                        WHEN total>=60 THEN 'B' 
                        WHEN total>=55 THEN 'B-' 
                        WHEN total>=50 THEN 'C' 
                        WHEN total>=45 THEN 'C+' 
                        WHEN total>=40 THEN 'D' 
                        ELSE 'F' 
                    END) 
                AS 'Grade' 
                FROM marks_details 
                INNER JOIN course_detail 
                ON course_detail.course_id=marks_details.course_id 
                WHERE marks_details.roll={$fields}";
        
        if($semister){
            $sql = $sql . " AND course_detail.semister='{$semister}'";
        }
        $sql = $sql . " ;";
        
        if($this->direct_query($sql, $fields)->error()) {
            echo "problem at _db_find_all";
            return false;
        }
        return $this->_results;
    }

    public function gpa($table,$roll = array(), $semister = array()) {

        $sql = "SELECT SUM({$table}.cgp)/SUM(course_detail.credit)
                AS 'gpa'
                FROM {$table} INNER JOIN course_detail 
                ON course_detail.course_id={$table}.course_id
                WHERE course_detail.semister='{$semister}'
                GROUP BY {$table}.roll 
                HAVING {$table}.roll={$roll};";
        if($this->direct_query($sql, $roll)->error()) {
            echo "problem at _db_gpa";
            return false;
        }
        return $this->_results;
    }


    public function delete($table, $where) {
        return $this->action('DELETE ', $table, $where);
    }

    public function get($table, $where) {
        return $this->action('SELECT *', $table, $where);
    }



    public function results() {
        return $this->_results;
    }

    public function first() {
        $data = $this->results();
        return $data[0];
    }

    public function count() {
        return $this->_count;
    }

    public function error() {
        return $this->_error;
    }
}
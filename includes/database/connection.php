<?php


include("connection_params.php");

$connection = new mysqli(HOST, USER, PASSWORD, DATABASE);

if($connection->connect_error){
    die("connection failed: ".$connection->connect_error);
}


function query_update($sql){
    global $connection;
    if ($connection->query($sql) === TRUE) {
//        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $connection->error;
    }

}

function query_insert($sql){
    global $connection;
    if ($connection->query($sql) === TRUE) {
//        echo "New record created successfully";
        return $connection->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
        die();
    }

}

function query_multi_insert($sql){
    global $connection;
    if ($connection->multi_query($sql) === TRUE) {
//        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}

function query_result($sql){
    global  $connection;
    $result = $connection->query($sql);

    return $result;
}

function query_single_row($sql){
    global $connection;

    $result = $connection->query($sql);
    while($row = $result->fetch_assoc()){
        return $row;
    }
    return array();
}

<?php 
include("connection.php");

function insert_message() {
    global $db;
    $query = "INSERT INTO msg (message, user_id,) VALUES ('".$_POST['message']."', '".$_POST['user_id']."')";
    $result = $db->query($query);
}

function get_messages() {
    global $db;
    $query = "SELECT msg.id AS message_id, msg.message, user.username, user.img FROM msg
        LEFT JOIN user ON user.id = msg.user_id";
    $result = $db->query($query);
    echo json_encode($result->FetchAll());
}


function login(){
    global $db
    $query = "SELECT id FROM user WHERE username = '".$_POST['username']."'AND password = '".$_POST['password']."'";
    $result = $db ->query($query);

    echo json_encode($result->fetchAll());
}

function getall_message(){
    global $db
    $query = "SELECT * FROM msg"
    $result = $db->query($query);
    
    echo json_encode($result->FetchAll());
}

function delete_message(){
    global $db;
    $query = "DELETE FROM msg WHERE id = ".$_POST['id']."";
    $result = $db ->query($query);

    echo json_encode("DELETED!");
}



?>
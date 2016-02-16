<?php 
include("connection.php");

function insert_message() {
    global $db;
    $query = "INSERT INTO msg (user_id, message) VALUES ('".$_POST['user_id']."', '".$_POST['message']."')";
    $result = $db->query($query);
}
/*
function get_messages() {
    global $db;
    $query = "SELECT msg.id AS message_id, msg.message, user.username, user.img FROM msg
        LEFT JOIN user ON user.id = msg.user_id";
    $result = $db->query($query);
    echo json_encode($result->FetchAll());
}*/

function get_user_by_username_password() {
    // grab user based on the username and password
    global $db;
    $query = "SELECT id FROM user WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
    $result = $db->query($query);
    
    echo json_encode($result->fetchAll());
}

function getall_messages(){
    global $db;
    $query = "SELECT * FROM msg";
    $result = $db->query($query);
    
    echo json_encode($result->FetchAll());
}

function delete_message(){
    global $db;
    $query = "DELETE FROM msg WHERE id = ".$_POST['user_id']."";
    $result = $db ->query($query);

    echo json_encode("DELETED!");
}



?>
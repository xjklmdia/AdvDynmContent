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


function update_message(){

}

function delete_message(){

}

function insert_like(){
    global $db;
    $query = "INSERT INTO likes (user_id, message_id) VALUES ('".$_POST['user_id']."', '".$_POST['message_id']."')";
    $result = $db->query($query);
}

function get_likes(){
    global $db;
    $query = "SELECT * FROM likes";
    $result = $db->query($query);
    echo json_encode($result->FetchAll());
}

?>
<?php 
include("connection.php");

function insert_img() {
    global $db;
    $query = "INSERT INTO images (title, user_id, path) VALUES ('".$_POST['title']."', '".$_POST['user_id']."', '".$_POST['path']."')";
    $result = $db->query($query);
}

function get_imgs() {

}


function update_img(){

}

function delete_img(){

}


?>
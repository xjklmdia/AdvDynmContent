<?php 
include("connection.php");

function insert_item() {
    // insert info into the users table
    global $db;
    
    $query = "INSERT INTO item (name, description, price, img) VALUES ('".$_POST['name']."', '".$_POST['description']."', '".$_POST['price']."', '".$_POST['img']."')";
    $result = $db->query($query);
}

function getall_items() {
    global $db;
    $query = "SELECT * FROM item";
    $result = $db->query($query);
    echo json_encode($result->fetchALL());
}

function get_user_by_username_password() {
    // grab user based on the username and password
    global $db;
    $query = "SELECT id FROM user WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
    $result = $db->query($query);
    
    echo json_encode($result->fetchAll());
}

function update_item(){
    global $db;
    $query = "UPDATE item SET name = '".$_POST['new_name']."' WHERE name = '".$_POST['name']."'";
    $result = $db->query($query);
}

function delete_item() {
  global $db;
  $query = "DELETE FROM item WHERE id = ".$_POST['id']."";
  $result = $db->query($query);
  echo json_encode("DELETED!");
}


?>
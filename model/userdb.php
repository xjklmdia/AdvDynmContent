<?php 
include("connection.php");

function insert_user() {
    // insert info into the users table
    global $db;
    
    $query = "INSERT INTO user (username, password, img, admin) VALUES ('".$_POST['username']."', '".$_POST['password']."', '".$_POST['img']."', '".$_POST['admin']."')";
    $result = $db->query($query);
}

function getall_usernames() {
    global $db;
    $query = "SELECT * FROM user";
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

function update_user(){
    global $db;
    $query = "UPDATE user SET username = '".$_POST['new_username']."', password = '".$_POST['new_password']."', img = '".$_POST['new_img']."', admin = '".$_POST['new_admin']."' WHERE id = '".$_POST['user_id']."'";
    $result = $db->query($query);
}

function delete_user() {
  global $db;
  $query = "DELETE FROM user WHERE id = ".$_POST['id']."";
  $result = $db->query($query);
  echo json_encode("DELETED!");
}

function viewall_user_imgs() {
    global $db;
    //$query = "SELECT * FROM item";
    $query = "SELECT item.id AS item_id, item.description, item.name, item.price, item.img, user.username, item.user_id
                FROM item
                LEFT JOIN user ON user.id = item.user_id";
    
    $result = $db->query($query);
    echo json_encode($result->fetchALL());
}
?>
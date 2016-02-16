<?php
include("../model/itemdb.php");

if($_POST['method'] == "insert") {
    insert_item();
}

if($_POST['method'] == "login") {
    get_user_by_username_password();
}

if($_POST['method'] == "view") {
    getall_items();
}

if($_POST['method'] == "update") {
    update_item();
}

if($_POST['method'] == "delete") {
    delete_item();
}

?>
<?php
include("../model/msgdb.php");

if($_POST['method'] == "insert") {
    insert_message();
}

if($_POST['method'] == "get") {
    get_messages();
}

if($_POST['method'] == "login") {
    get_user_by_username_password();
}

if($_POST['method'] == "like") {
    insert_like();
}

if($_POST['method'] == "view") {
    getall_messages();
}

if($_POST['method'] == "delete") {
    delete_msg();
}
?>
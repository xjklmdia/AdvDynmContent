<?php
include("../model/userdb.php");

if($_POST['method'] == "insert") {
    insert_user();
}

if($_POST['method'] == "login") {
    get_user_by_username_password();
}

?>
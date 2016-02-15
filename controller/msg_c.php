<?php
include("../model/msgdb.php");

if($_POST['method'] == "insert") {
    insert_message();
}

if($_POST['method'] == "get") {
    get_messages();
}

if($_POST['method'] == "like") {
    insert_like();
}

?>
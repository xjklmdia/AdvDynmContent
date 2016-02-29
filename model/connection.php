<?php
    try {
        $db = new PDO("mysql:dbname=telus;host=localhost:8889", "root","root");
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

?>
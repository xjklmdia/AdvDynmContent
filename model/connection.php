<?php
    try {
        $db = new PDO("mysql:dbname=telus;host=localhost", "root","root");
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

?>
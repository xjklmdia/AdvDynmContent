<?php 
    var_dump($_POST);
    var_dump($_FILES);
    

    //check if directory exists
    if(!is_dir("../img/".$_POST['user_id']."/")) {
        //make a new directory if it doesn't exists
        mkdir("../img/".$_POST['user_id']."/", 0775);
       
    }

    $filename = substr(md5(rand()), 0, 7);
    if(move_uploaded_file($_FILES["images"]["tmp_name"][0], "../img/".$_POST['user_id']."/".$filename.".jpg")) {
        include ("connection.php");
        global $db;
        
        $query = "INSERT INTO image (path, user_id) VALUES ('../img/".$_POST['user_id']."/".$filename.".jpg', '".$_POST['user_id']."')";
        $result = $db->query($query);
    }


?>
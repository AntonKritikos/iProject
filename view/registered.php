<?php
    $query="SELECT username FROM users WHERE username='".$_POST["username"]."'";
    $result = $mysqli->query($query);
    if($result->num_rows > 0){
        echo "username no ";
    }
    $query="SELECT email FROM users WHERE username='".$_POST["email"]."'";
        if($result->num_rows > 0){
        echo "email no ";
    }
    else {
        if($_POST['username'] != "" && $_POST['email'] != "" && $_POST['password'] != ""){
            $query="INSERT INTO users (username, email, password) VALUES ('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."')";
            $result = $mysqli->query($query);
        }
        header("Location: ?page=lr");
        die();
    }  
?>
<?php
    require 'includes/config.php';
    require_once 'includes/database.php';
    include_once 'view/head.html';
    include_once 'view/header.php';
    
    $page = isset($_GET['page']) ? $_GET['page'] : "home";
    if ($page != "home"){
            echo "<script>document.getElementsByClassName('".$page."')[0].classList.toggle('active');  </script>";
    }
    include_once "view/buffer.html";
    include_once "view/".$page.".php";
    include_once 'view/footer.html';
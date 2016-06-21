<?php
session_start();
?>
    <header id="header">
    <div class="headerCenter">
        <a href="?page=new">
            <div class="button headerLeft new"><p>New</p><div class="buttonHover"></div></div>
        </a>
        <a href="?page=popular">
            <div class="button headerLeft popular"><p>Popular</p><div class="buttonHover"></div></div>
        </a>
        <a href="?page=browse">
            <div class="button headerLeft browse"><p>Browse</p><div class="buttonHover"></div></div>
        </a>
       
       <?php 
            if($_SESSION['user_id']){
                echo '
                    <a href="?page=logout">
                        <div class="button headerRight"><p>Logout</p><div class="buttonHover"></div></div>
                    </a>
                    <a href="?page=account">
                        <div class="button headerRight account"><p>'.$_SESSION['username'].'</p><div class="buttonHover"></div></div>
                    </a>
                    <a href="?page=upload">
                        <div class="button headerRight upload"><p>Upload</p><div class="buttonHover"></div></div>
                    </a>';
            }
            else{
                echo ' <a href="?page=lr">
                            <div class="button headerRight lr"><p>Login / Register</p><div class="buttonHover"></div></div>
                        </a>';
            }
       
       ?>
    </div>
</header>
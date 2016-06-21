<?php
$action = (empty($_GET['action'])) ? '' : $_GET['action'];
$request_username = (empty($_POST['username'])) ? '' : $_POST['username'];
$request_password = (empty($_POST['password'])) ? '' : $_POST['password'];

if ($request_username != '' && $request_password != '') {
            $result = $mysqli->query("SELECT * FROM users
									WHERE username = '".$request_username."' AND password = '".$request_password."'");
            $user_match_count = $result->num_rows;

            if ($user_match_count == 1) {
                $user_row = $result->fetch_assoc();
                $_SESSION['user_id'] = $user_row['user_id'];
                $_SESSION['username'] = $user_row['username'];
            } else {
                echo '<h3>Inloggen mislukt</h3>';
            }
            print_r($_SESSION);
            header("Location: ?page=account");
            die();
        }

?>
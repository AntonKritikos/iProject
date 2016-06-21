<?php
if (isset($_POST["delete"])) {
    $query = "DELETE FROM posts WHERE post_id='".$_POST['delete']."'";
    $result = $mysqli->query($query);
    echo "<a href='?page=account'>The post has been deleted, Click here to return to your account.</a>";
}
else{
    echo "<form action='?page=delete' method='post'>
          <p>Are you sure you want to delete this?<p>
          <button type='submit' name='delete' value='".$_POST["id"]."'>Yes</button>
          </form><a href='?page=account'>Click here to cancel</a>";
}

?>
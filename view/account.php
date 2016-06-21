<?php
$query="SELECT * FROM posts WHERE user_id='".$_SESSION['user_id']."'  ORDER BY date DESC";

$result = $mysqli->query($query);


    echo "<section id='popularpage'>";
        
        
        
        echo "<h1>".$_SESSION['username']."</h1>";
        while($row = $result->fetch_assoc()) {
        
            echo   "<form method='post' action='?page=delete' class='popularshow'>
                    <div class='posttitle'>".nl2br($row["post_title"])."</div>
                    <div class='postcontent'><pre>".nl2br($row["postcontent"])."</pre></div>
                    <button class='deletebutton' type='submit' name='id' value='".$row["post_id"]."'>Delete</button>
                    <div class='language'>".nl2br($row["codelanguage"])."</div>
                    </form><br>
                    <hr>";
        }
        echo "</section>";
    ?>
    
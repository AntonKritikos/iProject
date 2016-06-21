<?php
//alleen de 5 hoogste van de likes
$query="SELECT * FROM posts ORDER BY likes DESC LIMIT 5";

$result = $mysqli->query($query);

?>
    <section id="popularpage">
        <h1>Popular</h1>
        
        <?php
        while($row = $result->fetch_assoc()) {
        
            echo   "<div class='popularshow'>
            <div class='posttitle'>".nl2br($row["post_title"])."</div>
            <div class='postcontent'><pre>".nl2br($row["postcontent"])."</pre></div>
            <div class='language'>".nl2br($row["codelanguage"])."</div>
            </div><br>";
        }
    ?>
    </section>
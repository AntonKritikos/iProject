<?php
    if (isset($_POST["submit"])){
        $title = htmlspecialchars($_POST['title'],ENT_QUOTES);
        $content = htmlspecialchars($_POST['content'],ENT_QUOTES);
        $tags = htmlspecialchars($_POST['tags'],ENT_QUOTES);
        $query="INSERT INTO posts (codelanguage, post_title, postcontent, tags, user_id) 
                VALUES ('".$_POST['language']."','".$title."','".$content."','".$tags."','".$_SESSION['user_id']."')";
        $result = $mysqli->query($query);
        header("Location: ?page=account");
        die();
    }  
?>
<form action="?page=upload" method="post">
    <select name="language">
             <option value="html">HTML</option>
             <option value="css">CSS</option>
             <option value="javascript">JAVASCRIPT</option>
             <option value="java">JAVA</option>
             <option value="php">PHP</option>
             <option value="sql">SQL</option>
             <option value="c#">C#</option>
             <option value="c++">C++</option>
             <option value="python">PYTHON</option>
             <option value="c">C</option>
             <option value="ruby">RUBY</option>
             <option value="other">OTHER</option>
        </select>
    <input type="text" name="title" maxlength="100" placeholder="title" required/>
    <textarea name="content" rows="10" cols="50" maxlength="500" placeholder="content" required></textarea>
    <input type="text" name="tags" size="50px" maxlength="100" placeholder="tags" required/>
    <input type="submit" value="Submit" name="submit"/>
</form>
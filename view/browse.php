<?php
    if(isset($_POST['search'])){
        $query="SELECT * FROM posts WHERE codelanguage='".$_POST['language']."'";
        $result = $mysqli->query($query);
        print_r ($result);
    }
?>

    <section id="browsepage">
        <h1>Browse through all codes</h1>
            
    <div class='browsesearch'>
        <form method="post" action="?page=browse">
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
        <input type="text" name="title"/>
        <input type="submit" value="Submit" name="search"/>
    </form>
    </div>
    
            <div id="browsesetting">
                <p>language</p>
                <p>title</p>
                <p>author</p>
                <p>date</p>
            </div>
       
    </section>
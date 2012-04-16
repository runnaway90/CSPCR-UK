<div id="menu"><?php
    for ($i=0; $i<sizeof($pagelinks); $i++) {
        echo '<a href="?p='.$pagelinks[$i].'"';
        if ($pagetoload==$pagelinks[$i]) 
            echo ' id="selected"';
        echo '>'.$pagetitles[$i].'</a>';
    }
?></div>
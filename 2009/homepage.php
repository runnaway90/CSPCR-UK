<?php
    if (isset($_COOKIE['lang'])) 
        if ($_COOKIE['lang']=='ro')
        {
            include substr($pagetoload,0,-4).'_r.php';
            return;
        }
?>

<p><h1>Conference of Romanian Students, Professors and Researchers in the United Kingdom</h1></p>
<p>The Conference was held <b>Where?</b></p>
<p>More details to follow soon!</p>


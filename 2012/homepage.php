<?php
    if (isset($_COOKIE['lang'])) 
        if ($_COOKIE['lang']=='ro')
        {
            include substr($pagetoload,0,-4).'_r.php';
            return;
        }
?>

<p><h1>Conference of Romanian Students, Professors and Researchers in the United Kingdom</h1></p>
<p>The Conference is going to be hosted by <a href="http://www.ed.ac.uk">The University of Edinburgh</a> on 20<sup>th</sup> October.</p>
<p>More details to follow soon!</p>

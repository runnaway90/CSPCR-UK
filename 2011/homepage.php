<?php
    if (isset($_COOKIE['lang'])) 
        if ($_COOKIE['lang']=='ro')
        {
            include substr($pagetoload,0,-4).'_r.php';
            return;
        }
?>
<p>Try Romanian....</p>


<?php
    /* ---------START OF CONFIGURE--------- */
    $title = '2011';
    $subtitle = '22 Oct, London';
    $toplink = 'top.png'; /* link to background image on top */
    $topheight = '8.6em'; /* if set to '', it expands downwards to contain the whole image 
                                can also be expressed in pixels (px instead of em) */
    
    /* below, we define the links on the left-hand side-menu */
    $pagetitles[] = 'Home';
    $pagelinks[] = 'homepage.php'; 
    
    
    $pagetoload = $pagelinks[0]; /* page to load first, homepage usually */
    /* ---------END OF CONFIGURE--------- */

    
    
    /* do not touch code below */
    if (isset($_GET['p']))
    {   // check if allowed to load that page (and if it needs changed)
        if (in_array($_GET['p'],$pagelinks) && $_GET['p']!=$pagetoload) 
            { $pagetoload = $_GET['p']; }
        else { header('Location: .'); } // else redirect to index.php
    }
    
    include '../struct.php';
?>

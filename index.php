<!DOCTYPE html>
<html>
<!--HEAD CONTENT------------------------------------->
<?php
    $title = 'PHP ENGINE';                  // Page Title

    $meta = array();
    $meta['desc'] = 'TEMPLATE DESIGN';      // Description
    $meta['keys'] = 'KEYS';                 // Keys

    $links = array();                       // Style Sheets
    $links = ['lib/reset.css', 
              'template/grid.css'];

    include('template/head.php');           // PHP Include Head File
?>
<!--BODY CONTENT------------------------------------->
    <body>
        <?php include('lib/snippets.php') ?>
        <!-- Header -->
        <?php include('template/header.php') ?>
    </body>
</html>
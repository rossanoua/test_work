<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Test Work</title>

    <?php
    // Init
    define( "DEBUGGING", true ); // or false in production environment
    // Functions
    function get_cache_prevent_string( $always = true ) {
        return (DEBUGGING || $always) ? date('_Y-m-d_H:i:s') : "";
    }
    ?>
    <link rel="stylesheet" href="./css/styles.css?version=0.1<?php echo get_cache_prevent_string(); ?>">

</head>
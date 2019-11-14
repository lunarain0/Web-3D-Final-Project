<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'>
    <link rel="stylesheet" href="css/custom.css">


    <title>Playstation Museum</title>
    <link rel=”shortcut icon” href="favicon.ico">
   
</head>
<body id="bodyColor">



<?php
// Define configuration variables here

// Display error message cause by your PHP scripts
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors',1);

// The require or include statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include (or require) statement.
require 'application/mvc.php';
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
    <!-- Custom JavaScript code for your 3d App -->

    <script type="text/javascript" src="js/model_interaction.js"></script>
    <!-- Also, intialises popovers-->
    <script src="js/custom.js" crossorigin="anonymous"></script>
</body>
</html>
<?php
    //create a server side session
    if(!isset($_COOKIE['username'])) {
        header('index.php');
    }
    if(!isset($_COOKIE['textlist']) || $_COOKIE['textlist'] == null) {
        setcookie('textlist', json_encode(array()), time()+3600);
    }
    $text_errMsg = "";
    if($_SERVER['REQUEST_METHOD'] == "GET") {
        if(!isset($_COOKIE['textlist']) || json_decode($_COOKIE['textlist']) == null) {
            setcookie('textlist', json_encode(array()), time()+3600);
        }
        if(isset($_GET['sendtext']) && $_GET['sendtext'] != null) {
            $textlist = json_decode($_COOKIE['textlist'], true);
            array_push($textlist, array("You-" . $_GET['sendtext']));
            setcookie('textlist', json_encode($textlist), time()+3600);
        }
    }
?>
<html lang-eng>
    <head>
        <!-- Meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Henry Alcaine & Andrew Tam" content="define author of the page -- your name">
        <meta name="description" content="define a description of this page">
        <meta name="keywords" content="define keywords for search engines">
        <!-- Title -->
        <title>Secret Dictator - Lobby</title>
        <!-- Stylesheets Scripts and Resources -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/buttons.js"></script>
        <script src="js/fitPlayers.js"></script>
        <!-- Document Styling -->
        <style>
            .rectangle {
                height: 150px;
                width: 250px;
                /* background-color:coral; */
                margin: 40x;
                padding: 20px;
            }
            body {
                background-image: url('images/background.png');
                /* background-color:coral ;  */
                background-size: 100% 100%;
                background-repeat: no-repeat;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
        
        <!-- header row -->
        <div class="row">
            <div class="col-md-2" style="color:black;font-size:150%;text-align:left;"><B>Group Code: </B></div>
            <div class="col-md-2" style="color:white;font-size:200%;text-align:left;"><B>ABCD</B></div>
            <div class="col-md-4" style="color:black;font-size:300%;text-align:center;"> <B>Lobby</B> </div>
            <!-- join game button -->
            <div class="col-md-2"> 
                <button class="btn btn-default d-flex" style="float: right;" onclick=" goGame() ">
                    <img id="hostGame" class="imgfit" src="images/startGame.png" style="width:90%; height:90%;"><!-- Change image from leavegame to join game-->
                </button>
            </div>
            <!-- Leave button -->
            <div class="col-md-2"> 
                <button class="btn btn-default d-flex" style="float: right;" onclick=" goHome() ">
                    <img id="hostGame" class="imgfit" src="images/leaveGame.png" style="width:90%; height:90%;">
                </button>
            </div>
        </div>
        <!-- Row for Slots-->
        <div class="row">
            <!-- First Row of Players-->
            <!-- First row will use the host icon -->
            <div class="col-md-3">
                <div class="rectangle"> <img id="waiting1" class="imgfit" src="images/hostIcon.png" style="width:120%; height:120%"> </div>
                <div class="rectangle"> <img id="waiting2" class="imgfit" src="images/waitingIcon.png" style="width:120%; height:120%"> </div>
                <div class="rectangle"> <img id="waiting3" class="imgfit" src="images/waitingIcon.png" style="width:120%; height:120%"> </div>
                <div class="rectangle"> <img id="waiting4" class="imgfit" src="images/waitingIcon.png" style="width:120%; height:120%"> </div>
                <div class="rectangle"> <img id="waiting5" class="imgfit" src="images/waitingIcon.png" style="width:120%; height:120%"> </div>
            </div>
            <div class="col-md-3">
                <div class="rectangle"> <img id="waiting6" class="imgfit" src="images/waitingIcon.png" style="width:120%; height:120%"> </div>
                <div class="rectangle"> <img id="waiting7" class="imgfit" src="images/waitingIcon.png" style="width:120%; height:120%"> </div>
                <div class="rectangle"> <img id="waiting8" class="imgfit" src="images/waitingIcon.png" style="width:120%; height:120%"> </div>
                <div class="rectangle"> <img id="waiting9" class="imgfit" src="images/waitingIcon.png" style="width:120%; height:120%"> </div>
                <div class="rectangle"> <img id="waiting10" class="imgfit" src="images/waitingIcon.png" style="width:120%; height:120%"> </div>
            </div>
            <div class="col-md-6"><?php include('textchat.php'); ?></div>
        </div>
    </body>
</html>
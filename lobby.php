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
            <div class="col-md-2" style="color:white;font-size:200%;text-align:left;"><B>2342 </B></div>

            <div class="col-md-4" style="color:black;font-size:300%;text-align:center;"> <B>Lobby</B> </div> 
            <!-- join game button -->
            <div class="col-md-2"> 
                <button class="btn btn-default d-flex" style="float: right;" onclick=" goGame() ">
                    <img id="hostGame" class="imgfit" src="images/startGame.png" style="width:90%; height:90%;"> <!-- Change image from leavegame to join game-->
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
            <div class="col-md-6">
                <!-- <div class="rectangle" style="position:relative; left: 20px; top: 50px; width:100%; height:50%; background-color: coral; float: right;">
                    <div class="col-md-12 col-md-offset-4" id="chatbox">
                        <h2 style="text-align: center;">Messages</h2>
                            <form class="form-container" style="position: relative; left: 50px">
                                <textarea type="text" placeholder="Type text... " name="msg" required="" style="height:200px;width:350px; background-color: white;"></textarea>
                                <br/>
                                <button type="submit" class="btn btn-info btn-sm btn-send">Send</button>
                            </form>
                    </div>
                </div> -->
                <div class="fitImg" style="width: 100%; height: 100%; background-position: bottom 0 right 0; background-size: auto 100%; background-image: url('images/textChat.png')">
                    <h1 style="margin-left: 55%; padding-top: 3%" >Text Chat</h1>
                    <div style="margin: 0 5% 5% 37%; padding-top: 5%; height: 57%">
                        <table id="textchat" class="mt-auto">
                            <thead>
                            </thead>                    
                        </table>
                    </div>
                    <div style="margin: 0 5% 5% 37%;">
                        <form name="textform">
                            <div class="form-group">
                                <textarea id="sendtext" class="form-control" rows="2" cols="40" placeholder = "type here..." style="border-radius: 7px;"></textarea>
                            </div>
                            <input type="button" class="btn btn-dark btn-block" id="add" value="Send" onclick="sendText('You')"/> 
                            <span class="error" id="text_errmsg" style="color: red;"></span>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
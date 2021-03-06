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
        <title>Secret Dictator - Title</title>

        <!-- Stylesheets Scripts and Resources -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/buttons.js"></script>
        <script src="js/fitPlayers.js"></script>

        <!-- Document Styling -->
        <style>
            body {
                background-image: url('images/background.png');
                background-size: 100% 100%;
                background-repeat: no-repeat;
                margin: 0;
                padding: 0;
            }
        </style>

    </head>
    <body style="margin: 0; padding: 0;">
        <header style="padding: 0; margin: 0; width: 100%;">
            <!-- Header Information -->
            <div class="row" style="margin: 0; padding: 0;"> 
                <div class="col-md-2 col-lg-2 col-sm-2" style="margin: 1rem 0 1rem 0;">
                    <a href="index.html">
                        <img class="img-fluid" src="images/sd_big1.png" style="width:100%;">
                    </a>
                </div>
                <!-- Turn Information -->
                <div class="col-md-5 col-lg-7 col-sm-5">
                    <div class = "fitImg" style="background-image: url('images/turnInfo.png'); background-position: top 0 left 0; height: 100%;">
                        <p class="important_txt" style="color: var(--darkbrown); font-size: 1.5rem; text-align: center;">
                            Turn information about <span style="color: white;">players</span> will go here
                        </p>
                    </div>
                </div>
                <!-- Leave Game Button -->
                <div class="col-md-3 col-lg-3 col-sm-3" style="right: 0;">
                    <button class="btn btn-default d-flex" style="right: 0;" onclick=" goHome() ">
                        <img id="hostGame" class="imgfit" src="images/leaveGame.png" style="width:90%; height:90%;">
                    </button>
                </div>
            </div>
        </header>
        <div class="row" style="margin: 0; padding: 0; width: 100%;">
            <!-- Player Names -->
            <div class="col-lg-4 col-md-4 col-sm-3">
                <table id="playertable" class="floaty" style="width: 50%;">
                    <thead>
                        <!-- Your Player Card -->
                        <tr >
                            <td>
                                <div id="name" class="playercard fitImg" style="background-image: url('images/player_orange.png'); margin: 0; padding: 0; height: 100px; width: 150px;">
                                    <p class="white_txt" style="display: table-cell; vertical-align: middle;">You</p>
                                </div>
                            </td>
                        </tr>
                    </thead>                    
                </table>
                <table id="playertable2" style="width: 50%;">
                    <thead>
                    </thead>                    
                </table>
            </div>
            <!-- Game Boards -->
            <div class="col-lg-2 col-md-2 col-sm-2">
                <img class="absolutepos" src="images/libBoard.png" style="top: 0; right: 0; height: 100%;" >
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2">
                <img class="absolutepos" src="images/fascBoard.png" style="top: 0; left: 0; height: 100%;" >
            </div>
            <!-- Text Chat -->
            <div class="col-lg-4 col-md-4 col-sm-4" style="padding: 0;">
                <div class="fitImg" style="width: 100%; height: 100%; background-position: bottom 0 right 0; background-size: auto 100%; background-image: url('images/textChat.png')">
                    <h1 style="margin-left: 45%; padding-top: 3%" >Text Chat</h1>
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
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <form name="mainform" >
                    <div class="form-group">
                        <input type="text" id="addplayername" placeholder = "Add Player" class="form-control" name="name" />
                    </div>
                    <input type="button" class="btn btn-dark" id="add" value="Add Player" onclick="addPlayer()"/> 
                </form>
            </div>
        </div>
        
        <script>
            var i = 1;
            while(i < 5) {
                i++;
                addPlayerByName("player" + i);
            };
        </script>
    </body>
</html>
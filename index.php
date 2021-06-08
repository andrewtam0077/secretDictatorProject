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
    <body>
        <!-- Envelope and Username -->
        <img class = "absolutepos envelope_group" src="images/envelope.png" style="height:100%; top: 0; left: 0; z-index: -1;">
        
        <?php 
            if(isset($_COOKIE['username'])) { ?>
                <div class="absolutepos important_txt envelope_tilt envelope_group" style="top: 28%; left: 5.5%; z-index: 0;">
                    <div style="padding: 0; margin: 0;">
                        <B style="padding: 0; margin: 0; line-height: 100%;">Welcome</B>
                    </div>
                    <div style="padding: 0; margin: 0;">
                        <B style="padding: 0; margin: 0; line-height: 100%;">Mr. Name</B>
                    </div>
                    <buton type="submit" id="logout-btn" class="btn btn-outline-dark btn-block" style="width:50%; margin-top: 10%;">logout</button>
                </div>
        <?php } else {
        ?>
            <div class="absolutepos important_txt envelope_tilt envelope_group" style="top: 20%; left: 4%; width: 30%; z-index: 0;">
                <B>Please Sign In</B>

                <!-- Added the username,password inputs and submit login button -->
                <!-- need to incorporate POST -->
                <form class="important_txt" style="width: 90%; padding: 10% 0 0%" method="post">
                    <input class="logininput" type="username" placeholder="username" name="username" required>
                    <br/>
                    <input class="logininput" type="password" placeholder="password" name="pwd" required>
                    <button type="submit" id="loginButton" class="btn btn-default btn-light btn-block" style="width:75%">Login</button>    
                </form>
            </div>
        <?php } ?>
        

        <div class="container">
            <!-- Title Logo -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <img class="img-fluid" src="images/sd_big1.png" style="left: 20%; width:60%;" alt="Secret Dictator">
                </div>
            </div>
            
            <!-- Buttons -->
            <div class="row" style="height: 20%">
                <div class="col-md-2 col-sm-2"></div>
                <div class="col-md-4 col-sm-8" style="height: 100%;">
                    <button class="btn btn-default d-flex justify-content-center" style="text-align: center;">
                        <img id="hostGame" class="imgfit" src="images/hostGame.png" style="width:100%; height:100%">
                    </button>
                </div>
                <div class="phonepadding col-sm-2"></div>
                <div class="phonepadding col-sm-2"></div>
                <div class="col-md-4 col-sm-8" style="height: 100%; margin: 0;">
                    <button class="btn btn-default d-flex justify-content-center" style="text-align: center;">
                        <img id="joinGame" class="imgfit" src="images/joinGame.png" style="width:100%; height:100%">
                    </button>
                    <div id="joinform" class="d-flex justify-content-center text-center hide" style="background-color: white; border-radius: 10px; height: 70%; width: 70%; transform: rotate(6deg); padding: 2%;">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                            <p style="font-weight: bold; font-size: 0.8rem; line-height: 0px; padding-top: 4%">Enter the Group Code</p>
                            <input type="text" name="joinGroupCode" placeholder="ex. 'ABCD'" style="width: 100%; font-size: 0.8rem;">
                            <div class="btn-group">
                                <input class="btn btn-secondary btn-sm" id="cancelJoin" value="cancel" style="width: 30%; height: 4vh;">
                                <input type="submit" class="btn btn-primary btn-sm" id="submitJoin" value="join" style="width: 30%; height: 4vh;">
                            </div>
                        </form>
                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == "POST") {
                                if(isset($_POST['joinGroupCode']) {
                                    $errMsg = "";
                                    $code = $_POST['joinGroupCode'];
                                    if(strlen($code) != 4) {
                                        $errMsg = "Group Code must have 4 Letters"
                                    } //Then test if it can find an existing game with the given group code in an else if statement

                                    if($errMsg == "") {
                                        setcookie('groupCode', $_POST['joinGroupCode'], time()+3600); //expire in 1 hour
                                        header('Location: lobby.php');
                                    } else { ?>
                                        <i style="color: red; text-shadow: 1px 1px 3px black; font-size: 1.5rem;">
                                            <?php echo $errMsg ?>
                                        </i>
                                    <?php }
                                }
                                }
                        ?>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                </div>
                <div class="col-md-3 col-sm-2 text-center "></div>
                <div class="col-md-6 col-sm-8 text-center ">
                    <button class="btn btn-default floaty d-flex justify-content-center" style="text-align: center; width: 50%;">
                        <img id="howToPlay" class="imgfit" src="images/howToPlay.png" style="width:100%; height:100%">
                    </button>
                    <button class="btn btn-default floaty d-flex justify-content-center" style="text-align: center; width: 50%">
                        <img id="aboutUs" class="imgfit" src="images/aboutUs.png" style="width:100%; height:100%">
                    </button>
                </div>
                <div class="col-md-3 col-sm-2 text-center "></div>
            </div>
        </div>

        <div id="instructions" class="absolutepos title_info" style="background-color: var(--red);">
            <button id="close_ins" class="btn btn-outline-light btn-sm absolutepos" style="top: 1rem; right: 1.5rem;">close</button>
            <p class="important_txt">
                HELLO MY NAME IS HENRY AND I SURE HOPE THAT THIS WORKS
            </p>
        </div>
        <div id="aboutInfo" class="absolutepos title_info" style="background-color: var(--red);">
            <button id="close_about" class="btn btn-outline-light btn-sm absolutepos" style="top: 1rem; right: 1.5rem;">close</button>
            <p class="important_txt">
                Secret Dictator was created by Henry Alcaine and Andrew Tam and heavily inspired by a board game
            </p>
        </div>

        
        <script>
            //arrow function to output error since login hasn't been incoporated
            //make buttons go to destination when clicked 
            document.getElementById("hostGame").addEventListener("click", function() {goLobby();}, false);
            //make buttons expand when hovered over
            var growth = 1.05;
            document.getElementById("hostGame").addEventListener("mouseover", function() {grow("hostGame", growth);}, false);
            document.getElementById("joinGame").addEventListener("mouseover", function() {grow("joinGame", growth);}, false);
            document.getElementById("howToPlay").addEventListener("mouseover", function() {grow("howToPlay", growth);}, false);
            document.getElementById("aboutUs").addEventListener("mouseover", function() {grow("aboutUs", growth);}, false);
            
            document.getElementById("hostGame").addEventListener("mouseout", function() {restore("hostGame");}, false);
            document.getElementById("joinGame").addEventListener("mouseout", function() {restore("joinGame");}, false);
            document.getElementById("howToPlay").addEventListener("mouseout", function() {restore("howToPlay");}, false);
            document.getElementById("aboutUs").addEventListener("mouseout", function() {restore("aboutUs");}, false);

            //Buttons show more information
            document.getElementById("howToPlay").addEventListener("click", function () {show("instructions");}, false);
            document.getElementById("close_ins").addEventListener("click", function () {hide("instructions");}, false);
            document.getElementById("aboutUs").addEventListener("click", function () {show("aboutInfo");}, false);
            document.getElementById("close_about").addEventListener("click", function () {hide("aboutInfo");}, false);

            document.getElementById("joinGame").addEventListener("click", function () {makeVisible("joinform");}, false);
            document.getElementById("joinGame").addEventListener("click", function () {hide("joinGame");}, false);
            document.getElementById("cancelJoin").addEventListener("click", function () {show("joinGame");}, false);
            document.getElementById("cancelJoin").addEventListener("click", function () {makeInvisible("joinform");}, false);
        </script>
    </body>
</html>
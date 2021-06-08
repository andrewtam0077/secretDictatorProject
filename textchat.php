<div class="fitImg" style="width: 100%; height: 100%; 
                            background-position: top 0 left 0; 
                            background-size: auto 100%; background-image: url('images/textChat.png')">
    <h1 style="margin-left: 45%; padding-top: 3%" >Text Chat</h1>
    <div style="margin: 0 5% 5% 25%; padding-top: 5%; height: 57%">
        <?php 
            //create a server side session
            if(!isset($_COOKIE['textlist'])) {
                setcookie('textlist', array(), time()+3600);
            }
            foreach($_COOKIE['textist'] as $user => $msg) {
                $color = 'color: black;'
                if($user == $_COOKIE['username'])
                    $color = 'color: var(--darkred)';
                ?>
                <p style=" <?php echo $color ?>"> <?php echo $user . ": " . $msg ?> </p>
                <?php
            }
        ?>
    </div>
    <div style="margin: 0 5% 5% 25%;">
        <form name="textform" action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <div class="form-group">
                <textarea id="sendtext" class="form-control" rows="2" cols="40" placeholder = "type here..." style="border-radius: 7px;"></textarea>
            </div>
            <input type="button" class="btn btn-dark btn-block" id="add" value="Send"/> 
        </form> 
        <?php 
            //These should be creating and modifying server sessions NOT COOKIES
            if($_SERVER['REQUEST_METHOD'] == "GET") {
                $text_errMsg = "";
                if(isset($_GET['sendtext']) {
                    if(strlen($_GET['sendtext']) > 280) {
                        $text_errMsg = "Message is too long to send";
                    }
                } else {
                    $text_errMsg = "Enter text to send a message";
                }
                if($text_errMsg == "") {
                    $textlist = $_COOKIE['textlist']
                    array_push($textlist, "you" => $_GET['sendtext'])
                    setcookie('textlist', $textlist, time()+3600);
                } else { ?>
                    <span class="error" id="text_errmsg" style="color: red;"> <?php echo $text_errMsg ?></span>
                <?php}
            }
        ?>
    </div>
</div>
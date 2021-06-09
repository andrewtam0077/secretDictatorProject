<div class="fitImg" style="width: 100%; height: 100%;
                            background-position: top 0 left 0; 
                            background-size: auto 100%; background-image: url('images/textChat.png')">
    <h1 style="margin-left: 45%; padding-top: 3%" >Text Chat</h1>
    <div style="margin: 0 5% 5% 25%; padding-top: 5%; height: 57%; overflow-y: auto;">
        <?php
            if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_COOKIE['textlist'])) {
                foreach(json_decode($_COOKIE['textlist']) as $data) {
                    $dataexp = explode("-", $data[0], 2);
                    $user = $dataexp[0];
                    $msg = $dataexp[1];
                    if(isset($user) && isset($msg) && $msg != null) {
                        $color = 'color: black;';
                        if($user == $_COOKIE['username'] || $user == "You") {
                            $color = 'color: var(--darkred)';
                        }
                        ?><p style="line-height: 9px; <?php echo $color; ?>"> <?php echo $user . ": " . $msg; ?></p><?php
                    }  
                }
                if(isset($_GET['sendtext']) && $_GET['sendtext'] != null) {
                    ?><p style="line-height: 9px; color: var(--darkred)"> You: <?php echo $_GET['sendtext'] ?></p><?php
                }
            }
        ?>
    </div>
    <div style="margin: 0 5% 5% 25%;">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <input type="text" name="sendtext" placeholder=" get type..." style="border-radius: 5px; width: 80%">
            <div class="btn-group">
                <input type="submit" class="btn btn-primary btn-block" id="submitJoin" value="send" style="width: 30%; height: 4vh;">
            </div>
        </form>
        <?php
            //These should be creating and modifying server sessions NOT COOKIES
            if($_SERVER['REQUEST_METHOD'] == "GET") {
                if(isset($_GET['sendtext'])) {
                    $sentmsg = $_GET['sendtext'];
                    if(strlen($sentmsg) > 280) {
                        $errMsg = "Sent message is too long";
                    } //Then test if it can find an existing game with the given group code in an else if statement

                    if($text_errMsg != '' || $sentmsg == '') {
                        $dud = 0;
                        ?><span class="error" id="text_errmsg" style="color: red;"> <?php echo $text_errMsg ?></span><?php
                    }
                }
            }
        ?>
    </div>
</div>
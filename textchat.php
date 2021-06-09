<div class="fitImg" style="width: 100%; height: 100%;
                            background-position: top 0 left 0; 
                            background-size: auto 100%; background-image: url('images/textChat.png')">
    <h1 style="margin-left: 45%; padding-top: 3%" >Text Chat</h1>
    <div style="margin: 0 5% 5% 25%; padding-top: 5%; height: 57%">
        <?php
            foreach(json_decode($_COOKIE['textlist']) as $user => $msg) {
                $color = 'color: black;';
                if($user == $_COOKIE['username']) {
                    $color = 'color: var(--darkred)';
                }
                ?><p style=" <?php echo $color ?>"> <?php echo $user . ": " . $msg ?> </p><?php
            }
        ?>
    </div>
    <?php
        $textToSend = '';
        if(isset($_GET['sendtext'])) {
            $textToSend = htmlspecialchars($_GET['sendtext']);
        }
    ?>
    <div style="margin: 0 5% 5% 25%;">
        <form id="textform" action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
            <textarea name="sendtext" id="textsend" class="form-control" rows="2" cols="40" placeholder = "type here..." style="border-radius: 7px;"></textarea>
            <input type="button" name="submit" class="btn btn-dark btn-block" id="add" value="Send"/>
            <?php
                //These should be creating and modifying server sessions NOT COOKIES
                if($_SERVER['REQUEST_METHOD'] == "GET") {
                    $text_errMsg = '';
                    if($textToSend > 280) {
                        $text_errMsg = 'Message is too long to send';
                    }
                    if($text_errMsg == '' && $textToSend != '')) {
                        $textlist = json_decode($_COOKIE['textlist']);
                        array_push($textlist, array("You" => $textToSend);
                        setcookie('textlist', json_encode($textlist), time()+3600);
                    } else { 
                        $dud = 0;
                        ?><span class="error" id="text_errmsg" style="color: red;"> <?php echo $text_errMsg ?></span><?php
                    }
                }
            ?>
        </form> 
    </div>
</div>
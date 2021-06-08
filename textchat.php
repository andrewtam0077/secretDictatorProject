<!-- Stylesheets Scripts and Resources -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="js/buttons.js"></script>

<div class="fitImg" style="width: 100%; height: 100%; 
                            background-position: bottom 0 right 0; 
                            background-size: auto 100%; background-image: url('images/textChat.png')">
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
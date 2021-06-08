<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
  <title>Secret Dictator - Logout</title>    
</head>
<body>
  
  <?php
  if(count$_COOKIE) > 0) {
    foreach ($_COOKIE as $key => $val) {
      unset($_COOKIE[$key]);  //only removes from server side cookies
      setcookie($key, '', time()-3600); //permanently remove from client (make it expire in the past
    }
    header("refresh:3; url=index.php"); //redirect within 5 second
  }
  ?>

  <div class="container">
    <h1>CS4640 Survey</h1>
    Successfully logged out 
  </div>


</body>
</html>

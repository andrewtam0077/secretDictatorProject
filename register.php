<?php 
    require("connectDB.php");
    global $db;
    $errMes = '';
    session_start();   
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
        <title>Secret Dictator - Register</title>

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
        <div class="signup-form">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <h2>Register</h2>
                <p class="hint-text">Create your account</p>
                <div class="form-group">
                    <div class="row">
                        <div class="col"><input type="text" class="form-control" name="user_id" placeholder="username" required="required"></div>
                    </div>        	
                </div>       
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <input type="submit" name="btn_register" class="btn btn-success" value="Register">
                </div>
                <div class="text-center">Already have an account? <a href="index.php">Sign in</a></div>
                <div class="alert alert-danger"><?php echo $errMes; ?></div>
            </form>
            <?php 
            $user_id = $password = ""; //default
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                if(isset($_POST['user_id']) && isset($_POST['password'])) {
                    $user_id = $_POST['user_id'];
                    $password = $_POST['password'];
                    
                    if(empty($user_id) && empty($password)) {
                        $errMes = "Please enter a username and password";
                    }
                    if(empty($user_id)) {
                        $errMes = "Please enter a username";
                    }
                    else if(empty($password)) {
                        $errMes = "Please enter a password";
                    }
                    else {
                        $query = $db->prepare("SELECT * FROM player WHERE user_id=:user_id");
                        $query->bindParam(":user_id",$user_id);
                        $query->bindParam(":password",$password);
                        $row=$query->fetch(PDO::FETCH_ASSOC);
                        echo $row["user_id"];
                        #echo $user_id;
                        if($user_id==$row["user_id"]) {
                            
                            $errMes = "this username already exists";
                        }
                        else {
                            $query = "INSERT INTO player (user_id, password) values ('$user_id', '$password')";
                            $statement = $db->prepare($query);
                            $statement->execute([
                                ':user_id' => $user_id,
                                ':password' => $password
                            ]);
                            //header("Location: index.php");
                        }
                    }
                }
            }
            ?>
        </div>
    </body>
</html> 
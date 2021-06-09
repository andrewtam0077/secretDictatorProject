<?php
    require("connectDB.php");
    session_start();

    function updateNickname($user_id, $nickname) {
        global $db;
        $query = "UPDATE player SET nickname=:nickname WHERE user_id=:user_id";
        $statement = $db->prepare($query);
        $statement->bindParam(':user_id', $user_id);
        $statement->bindParam(":nickname", $nickname);
        return $statement->execute();
    }
    function retrieveNickname($user_id) {
        global $db;
        $query = "SELECT * FROM player WHERE user_id=?";
        $statement = $db->prepare($query);
        $statement->execute([$user_id]);
        $result = $statement->fetch();
        echo "your nickname is: " . $result['nickname'];
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
  <title>Secret Dictator - Update Details</title>    
</head>
<body>
  <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="nickname" placeholder="nickname">
    <input type="submit" value="Update" name="Update">
    <input type="submit" value="Get Nickname" name="Retrieve">
  </form>
  <?php
    $currentid = $_SESSION['user_id'];
    if(isset($_POST['Update'])) {;
        $nickname = str_replace(" ","",strip_tags($_POST['nickname']));
        if(empty($nickname)) {
            echo "<div class='alert alert-danger'> You need to enter a nickname. </div>";
        }
            else {
            $query = "SELECT * FROM player WHERE user_id = '$currentid'";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":user_id", $currentid);
            if(updateNickname($currentid, $nickname)) {
                $_SESSION['user_id'] = $currentid;
                header("Location: index.php");
            }
            else {
                echo "<p>something is wrong </p>";
            }
        }
    }
    if(isset($_POST['Retrieve'])) {
        retrieveNickname($currentid);
    }
  ?>
</body>
</html>

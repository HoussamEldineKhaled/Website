<?php




    $un = isset($_POST["username"]) ? $_POST["username"] : "";
    $pw = isset($_POST["pass"]) ? $_POST["pass"] : "";

    $signList = file_get_contents("SignUpInfo.json");

    $signList = json_decode($signList , true);
    $isSigned = false;
    foreach ($signList as $user){
        if($user["username"] ==$un && $user["password"] == $pw){
            $isSigned = true;
            break; 
        }
    }
    
    if ($isSigned == true){
        header("Location: Menu.php?username=" . urlencode($un));
        exit();
    } else {
        
        header("Location: login.php?error=1");
        exit();
    }


?>
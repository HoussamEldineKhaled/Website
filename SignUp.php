<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $un = $_POST["username"];
        $fn = $_POST["firstname"];
        $ln = $_POST["lastname"];
        $pw = $_POST["pass"];
        $sx = $_POST["sex"];
        $dt = $_POST["birthday"];
        
        $userData = array(
            "username" => $un,
            "firstname" => $fn,
            "lastname" => $ln,
            "password" => $pw,
            "sex" => $sx,
            "birthday" => $dt
        );
        $file = file_get_contents("SignUpInfo.json");
        

        $userList = json_decode($file);

        $userList[] = $userData;


        file_put_contents("SignUpInfo.json" , json_encode($userList));

        echo "Congrats you're in!!!!!";

    } else {
        echo "Requests are Invalid!!!";
    }



?>
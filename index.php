<?php

    include("connection.php");
    // $data = json_decode(file_get_contents('php://input'), true);
    if(isset($_POST["username"]) && $_POST["username"] != ""){
        $username = $_POST["username"];
    }if(isset($_POST["useremail"]) && $_POST["useremail"] != ""){
        $useremail = $_POST["useremail"];
    }if(isset($_POST["userpassword"]) && $_POST["userpassword"] != ""){
        $userpassword = $_POST["userpassword"];
    }else{
        $response = [];
        $response["success"] = false;   
        echo json_encode($response);
        return; 
    }
    echo "nvmvkj";
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];


    $query = $mysqli->prepare("INSERT into users(user_name,user_email,user_password) values(?, ?, ?)");
    $query->bind_param('sss', $username, $useremail, $userpassword);
    $query->execute();

    $response = [];
    $response["success"] = true;

    echo json_encode($response);
?>
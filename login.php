<?php
    include("connection.php");


    if(isset($_POST["username"]) && $_POST["username"] != ""){
        $username = $_POST["username"];
    }if(isset($_POST["userpassword"]) && $_POST["userpassword"] != ""){
        $userpassword = $_POST["userpassword"];
    }else{
        $response = [];
        $response["success"] = false;   
        echo json_encode($response);
        return; 
    }

    $username = $data['username'];
    $userpassword = $data['userpassword'];

    $query = $nabiha->prepare("SELECT * FROM Users WHERE user_name = '$user_name' AND user_password = '$user_password'");
    $query->execute();

    $array = $query->get_result();
    $response = [];
    while($article = $array->fetch_assoc()){
        $response[] = $article;
    }

    echo json_encode($response);

?>
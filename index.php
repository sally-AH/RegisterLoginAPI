<?php
    include("connection.php");

    if(isset($_POST["username"]) && $_POST["username"] != ""){
        $username = $_POST["username"];
    }else{
        $response = [];
        $response["success"] = false;   
        echo json_encode($response);
        return; 
    }

    $username = $_POST['username'];
    $userpassword = $_POST['userpassword'];

    $query = $mysqli->prepare("SELECT * from users where user_name=? and user_password=?");
    $query->execute();

    $array = $query->get_result();
    $response = [];
    while($user = $array->fetch_assoc()){
        $response[] = $user;
    }

    echo json_encode($response);

?>
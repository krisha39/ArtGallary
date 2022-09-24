<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php';
    include_once '../class/contact.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Contact($db);

    $data = json_decode(file_get_contents("php://input"));

    $item->message = $data->message;
    $item->user_id = $data->user_id;

    if($item->contactUs()){
        echo 'thank you for contact with us';
    } else{
        echo 'somthing went wrong';
    }
?>
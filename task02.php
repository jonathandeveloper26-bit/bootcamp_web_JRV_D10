<?php
    header("Content-Type: application/json");

    $email = $_POST["email"] ?? "";

    if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
        http_response_code(200);
        exit;
    }

    else {
        http_response_code(400);
        exit;
    }

    echo json_encode(["error" => "An Error has Occurred"]);


    

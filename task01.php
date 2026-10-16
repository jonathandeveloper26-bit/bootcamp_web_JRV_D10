<?php
    header("Content-Type: application/json");

    $name = $_GET["name"] ?? "";

    if ($name === "") {
        http_response_code(400);
        echo json_encode(["error" => "no name provided"]);
        exit;
    }

    echo json_encode(["name" => $name]);

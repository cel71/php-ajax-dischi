<?php
    require_once __DIR__ . "/../database/database.php";

    $genre = $_GET["genre"];

    $filter = function ($item) use ($genre) {
        return $item["genre"] === $genre;
    };

    $result= array_filter($database, $filter);

    header('Content-Type: application/json');
    echo json_encode($result); 
?>
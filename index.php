<?php
    $broadcastersWithFiltered = array(
        0 => array(
            "photoURL" => "http://localhost/assets/images/broadcasters/logo3.png", 
            "fuulName" => "Vatanını Sevmeyenler",
            "Job" => "Hain Unsurlar"
        )
        );

    $broadcasters = array(  
        0 => array(
            "photoURL" => "http://localhost/assets/images/broadcasters/logo2.png",
            "fuulName" => " Vatanını Sevenler",
            "Job" => "Ana Unsurlar"
        ),
        1 => array(
            "photoURL" => "http://localhost/assets/images/broadcasters/logo3.png", 
            "fuulName" => "Vatanını Sevmeyenler",
            "Job" => "Hain Unsurlar"
        ),

        2 => array(
            "photoURL" => "http://localhost/assets/images/broadcasters/logo.png", 
            "fuulName" => "Türkiyem",
            "Job" => "Vatanım"
        )
        
     );

    header("Access-Control-Allow-Origin: *");

    $response = $broadcasters;

    if(isset($_GET["isFiltered"])) {
        $response = $broadcastersWithFiltered;
    }
    echo json_encode($broadcasters, JSON_UNESCAPED_SLASHES);
?>
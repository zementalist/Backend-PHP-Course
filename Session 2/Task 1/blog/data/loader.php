<?php

    if(!isset($_SESSION)) {
        session_start();
        if(!isset($_SESSION["users"])){
        $_SESSION["users"] = [
            "ahmed" => [
                "id" => 1,
                "username" => "ahmed",
                "password" => "12345",
            ],
            "maram" => [
                "id" => 2,
                "username" => "maram",
                "password" => "54321",
            ]
        ];


        $_SESSION["posts"] = [
            [
                "id" => 1,
                "title" => "Why do we fall in love",
                "body" => "This is my first post in the world",
                "img" => "1.jpg",
                "user_id" => 1
            ],
            [
                "id" => 2,
                "title" => "MBTI Psychological Types",
                "body" => "dlrow eht ni tsop tsrif ym si sihT",
                "img" => "1.jpg",
                "user_id" => 1
            ],
            [
                "id" => 3,
                "title" => "Physiognomy vs Graphology",
                "body" => "Two different methods for personality traits analysis",
                "img" => "2.jpg",
                "user_id" => 2,
            ]
        ];
    }
    }

?>
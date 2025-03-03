<?php

    // Dvoudimenzionalní pole (pole v poli)
    $students = [
        [
            "first_name" => "Marat",
            "second_name" => "Fedorov",
            "age" => 19
        ],
        [
            "first_name" => "Gabriel",
            "second_name" => "Čonka",
            "age" => 18
        ],
        [
            "first_name" => "Martin",
            "second_name" => "Brunclík",
            "age" => 18
        ],
    ];

    echo $students[0]["first_name"];
    echo "<br>";
    echo $students[0]["second_name"];
    echo "<br>";
    echo $students[0]["age"];
    echo "<br>";
    echo $students[2]["first_name"];
    echo "<br>";
    echo $students[2]["second_name"];
    echo "<br>";
    echo $students[2]["age"];
    echo "<br>";

?>
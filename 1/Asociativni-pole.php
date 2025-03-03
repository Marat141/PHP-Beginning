<?php

    // Asociativní pole (array)
    $students = [
        "jedna" => "Marat", 
        "čtyři" => "Gabriel", 
        "pět" => "Martin"
    ];

    var_dump($students);

    echo("<br>");

    echo $students ["jedna"];
    echo("<br>");

    echo $students ["čtyři"];
    echo("<br>");

    echo $students ["pět"];
    echo("<br>");

    $students1 = [
        "first_name" => "Marat",
        "second_name" => "Fedorov",
        "college" => "Souepl",
        "age" => 19,
        "result" => null,
    ];

    echo $students1 ["second_name"]

?>
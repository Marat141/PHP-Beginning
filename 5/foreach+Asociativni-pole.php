<?php

    // Foreach cyklus + Asociativni pole
    $student = [
        "first_name" => "Marat",
        "second_name" => "Fedorov",
        "age" => 19
    ];

    foreach ($student as $index => $info_student) {
        echo $index.": ".$info_student."<br>";
    }

?>
<?php

    //Podmínky a logické operátory - and, or
    $age = 18;

    if ($age >= 18 and/* && */ $age <= 65) {
        echo "Dospělý, není důchodce";
    } elseif ($age < 18) {
        echo "Dospívajicí";
    } else {
        echo "Důchodce";
    }

    // and - a zárověň
    // true, true = true
    // true, false = false
    // false, true = false
    // false, false = false
<?php

    //Podmínky a empty
    $articles = [];
    var_dump(empty($articles));

    if (empty($articles)) {
        echo "neexistuji";
    } else {
        echo "Blabla";
    }
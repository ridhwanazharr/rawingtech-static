<?php
// functions.php

function get_header($name = null) {
    $file = __DIR__ . "/templates/header";
    $file .= $name ? "-$name.php" : ".php";

    if (file_exists($file)) {
        include $file;
    } else {
        echo "<!-- Header not found: $file -->";
    }
}

function get_footer($name = null) {
    $file = __DIR__ . "/templates/footer";
    $file .= $name ? "-$name.php" : ".php";

    if (file_exists($file)) {
        include $file;
    } else {
        echo "<!-- Footer not found: $file -->";
    }
}

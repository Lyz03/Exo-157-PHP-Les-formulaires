<?php

// Premiere ligne
if (isset($_POST['fname'])) {
    $fname = $_POST['fname'];
    $fname = strip_tags($fname);
    echo "Bienvenue". " " . $fname ;
}








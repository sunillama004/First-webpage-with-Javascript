<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Submission error due to " . mysqli_connect_error());
    }
    echo "Your Trail form was Submitted. Thank you !!";
?>
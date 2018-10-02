<?php
    $host = 'localhost';
    $dbname = 't7aaju00';
    $username = 't7aaju00';
    $password = 'salasana';

    $con = mysqli_connect($host,$username, $password, $dbname);

    if (mysqli_connect_errno())
    {
        echo "Failed to connext to MySQL: " . mysqli_connect_error();
    }
    else
    {
        echo "OK";
    }

    mysqli_close($con);
?>
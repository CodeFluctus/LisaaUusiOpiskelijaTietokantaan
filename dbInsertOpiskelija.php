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
    
    $etunimi = mysqli_real_escape_string($con, $_POST['etun']);
    $sukunimi = mysqli_real_escape_string($con,$_POST['sukn']);
    $osoite = mysqli_real_escape_string($con, $_POST['os']);
    $ltunnus = mysqli_real_escape_string($con, $_POST['lt']);

    $sql = "INSERT INTO Opiskelija (Etunimi, Sukunimi, Osoite, Luokkatunnus)
    VALUES ('$etunimi', '$sukunimi', '$osoite', '$ltunnus')";

    if (!mysqli_query($con, $sql))
    {
        die('Error: ' . mysqli_error($con));
    }
    echo "1 record added!";
    
    mysqli_close($con);
?>
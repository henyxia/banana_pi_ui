<?php
require_once("creds.php");
exec("sensors -u | grep temp1_input | cut -d ' ' -f4", $output);
$temp = number_format(floatval($output[0]), 1);
$conn = new mysqli(__MYSQL_HS__, __MYSQL_US__, __MYSQL_PS__, __MYSQL_DB__);
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$sql = "INSERT INTO temp VALUES (NULL, '$temp')";

if ($conn->query($sql) === TRUE)
    echo "New record created successfully";
else
    echo "Error: " . $sql . "<br>" . $conn->error;

$conn->close();

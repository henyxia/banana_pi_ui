<?php
require_once("creds.php");
exec("mpstat -P ALL | tail -2 | cut -d ' ' -f43", $output);
$cpu1 = number_format(100 - floatval($output[0]), 2);
$cpu2 = number_format(100 - floatval($output[1]), 2);
$conn = new mysqli(__MYSQL_HS__, __MYSQL_US__, __MYSQL_PS__, __MYSQL_DB__);
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$sql = "INSERT INTO cpu VALUES (NULL, '$cpu1', '$cpu2')";

if ($conn->query($sql) === TRUE)
    echo "New record created successfully";
else
    echo "Error: " . $sql . "<br>" . $conn->error;

$conn->close();

<?php

require "connection.php";

$method = $_GET["method"];
$id = $_GET["heroes.id"];
$var = $_GET["id"];
// var_dump($var);

$delete = "DELETE FROM heroes WHERE id=".$var; 
     if ($conn->query($delete) === TRUE) {
            echo "Record deleted successfully";
            header("Location: /index.php");
        } else {
         echo "Error deleting record: " . $conn->error;
        }


$conn->close();
?>

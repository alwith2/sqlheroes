<?php
require "connection.php";
require "header.php";

$method = $_POST["method"];

// create hero
$name = $_POST["name"];
$about_me = $_POST["about_me"];
$biography = $_POST["biography"];

$sql = "INSERT INTO heroes (name, about_me, biography) VALUES ('$name', '$about_me', '$biography')";
$result = $conn->query($sql);
if ($result === TRUE) {
        $last_id = $conn->insert_id;
         echo $last_id;
}

$conn->close();
 header("Location: /hero.php?id=" . $last_id);

?>
<?php
require "connection.php";
require "header.php";

$method = $_POST["method"];

// create hero
$name = $_POST["name"];
$about_me = $_POST["about_me"];
$biography = $_POST["biography"];
$ability = $_POST["ability"];

// edit bio


$id = $_POST["hero_id"];
// $updateBio = $_POST["updateBio"];
if ($method == "updateBio") {
    $updateBio = str_replace("'", "&#039;", $_POST["updateBio"]);
    updateBio($updateBio, $id);
}

function updateBio($updateBio, $id) {
    require "connection.php";
    $sql = "UPDATE heroes SET biography='$updateBio' WHERE id=".$id;
        if ($conn->query($sql) === TRUE) {  
            echo "Record updated successfully";
            header("Location: /hero.php?id=".$id);
        } else {
            echo "Error updating record: " . $conn->error;
        }
       var_dump($sql);
       
}



$sql = "INSERT INTO heroes (name, about_me, biography) VALUES ('$name', '$about_me', '$biography')";
$result = $conn->query($sql);
if ($result === TRUE) {
        $last_id = $conn->insert_id;
         echo $last_id;
}

$sql = "INSERT INTO abilities (ability) VALUES ('$ability')";
$result = $conn->query($sql);
if ($result === TRUE) {
        $last_id = $conn->insert_id;
        echo $last_id;
}
$sql = "INSERT INTO ability_hero (ability_id) VALUES ('$abilities.id')";
$result = $conn->query($sql);
if ($result === TRUE) {
        $last_id = $conn->insert_id;
         echo $last_id;
}


$conn->close();
?>
<?php

require "connection.php";
require "header.php";

$id = $_GET["id"];

$sql = "SELECT * FROM heroes WHERE id = " . $id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $hero = "hero.php?id=" . $row["id"];
        echo "<h3> $row[name]</h3></a>" . $row["about_me"] . "<br>" . "<br>";
       
    }
} else {
    echo "0 results";
}

$conn->close();

?>

echo "<h5>Enemies</h5>";
    while ($row = $result->fetch_assoc()) {
        $output .= "<li class='pl-3'>$row[name]</li>";
    }
    echo $output;
} else {
    echo "<p class='pl-5'>Friends</p>";
}


<!-- src="./Images/hero'.$row["id"].'.jpg"> -->

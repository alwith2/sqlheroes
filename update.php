<?php
// sets values
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "connection.php";
require "header.php";
$id = $_GET["id"];

$sql = "SELECT biography FROM heroes WHERE id=".$id;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {  
        $bio = $row["biography"];
    }
}


?>
<form action="newinfo.php" method="post">
  <div class="form-group p-3">
    <label class="btn btn-primary">previous bio</label><br>
    <label></label>
    <input type="text" rows="5" col="40" value="<?php echo $bio; ?>" class="form-control" name="updateBio" id="updateBio"  >
  </div>
  <button type="submit" class="btn btn-primary ml-3">MODIFY</button>
  <input type="hidden" id="method" value="updateBio" name="method">
  <input type="hidden" id="hero_id" value="<?php echo $id; ?>"name="hero_id">
</form>
<?php
require 'footer.php';
$conn->close();

 ?>
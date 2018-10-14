
<?php

session_start();
$servername = "localhost";
$dbname = "project";
$dbusername = "root";
$dbpassword = "";

try {
  $last_id = $_SESSION["last_id"];
  //echo "<br/>ID: $last_id<br/>";
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT userName, password, firstName,
    lastName, address1, address2, city, state, zipCode, phone, email, gender,
    maritalStatus, dateOfBirth
  "." FROM registration WHERE id = '$last_id'");

  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  // var_dump($stmt->fetchAll()[0]);
  $assocArray = $stmt->fetchAll()[0];

  // points to pos in sql server

  $username = $assocArray["userName"];
  $pw = $assocArray["password"];



}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;

?>

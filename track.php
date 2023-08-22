<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve data from the form
  $registrationNumber = $_POST["registrationNumber"];
  $serialNumber = $_POST["serialNumber"];
  $entryDate = date("Y-m-d H:i:s");
  $exitDate = null; // You can set this when equipment is returned

  // Perform database operations here (insert or update)

  // Simulate a response
  $response = "Equipment with Registration Number: $registrationNumber and Serial Number: $serialNumber has been tracked.";
  echo $response;
}
?>

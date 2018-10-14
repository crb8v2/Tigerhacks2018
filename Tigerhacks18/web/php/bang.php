<?php

  //declare variables and set empty
  $usernameError = $pwError = $pwCompError = $fNameError = "";
  $lNameError = $pNumError = $emailError = $add1Error = $add2Error = "";
  $cityError = $zipError = $stateError = $dobError = $genderError = $mStatusError = "";
  $username = $pw = $pw2 = $fName = $lName = $pNum = $add1 = $add2 = "";
  $reg = $email = $city = $zip = $state = $dob = $gender = $mStatus = "";
  $topic = $body = $last_updated = $emails_to_send = "";
  $user_id = 2;

  //variable to check if form is valid
  $theOne = TRUE;

  //if post method is made....//
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // does the things
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


    $username = test_input($_POST["username"]);
    $pw = test_input($_POST["password"]);
    $city = 1;


     if($theOne == TRUE){
       session_start();
       $_SESSION = $_POST;
       session_write_close();
       header("Location: confirmation.php");
     }
  }
 ?>

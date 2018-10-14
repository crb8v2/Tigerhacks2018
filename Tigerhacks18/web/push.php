<!DOCTYPE html>
<html lang="en_US">

  <head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/validate.js"> </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>

  <header id="header" class="bg-success" style="height:100px;">
    <img src="img/thebeans.jpg" alt="CBK_Productions Logo" style="width:100px;height:90px; float: left;">

    <title id="title">Lovejoy</title>
    <br><h1 id="CBK">Lovejoy</h1>
  </header>

  <body id="homebody">

    <div id="navigation" class="col-xs-2 col-sm-1 col-md-1 col-lg-1"></div>

    <div id="homediv" class="col-xs-12 col-sm-9 col-md-9 col-lg-9; hometext">
      <h1 id="home">ADD CONTENT:</h1>


       <!-- goes to bang.php with POST -->
      <form id="formleft" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div id="formdivleft" class="col-xs-12 col-sm-8 col-md-4 col-lg-4">

          <!-- the php -->
          <?php
          require_once "php/bang.php";
           include 'sql/sqlConfirmation.php';
          ?>

          <!--removed required from input for php project -->
          <span style="color:#011f4b">HEADLINE:</span><br>
          <input class="box" type="text" name="username"
            onkeyup="ValUsername(this)" value="<?php echo $username; ?>"> <!-- required> --><br>

          <br>
          <br>

          <span style="color:#011f4b">CONTENT:</span><br>
          <input class="box" type="text" name="password"
            onkeyup="ValUsername(this)" value="<?php echo $pw; ?>"> <!-- required> --><br>

          <br>
          <br>

          <input class="box" type="submit" value="Submitttt" name="submit">
          <input class="box" type="reset" value="Reset"><br>
          <br>

        </div>





        </div> <br>

      </form>
    </div>

    <div id="navigation" class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>

  </body>
  <footer id="animationfooter">
    <div id="footer" class="row, column col-xs-12 col-sm-12 col-md-12 col-lg-12">

    </div>
  </footer>

</html>

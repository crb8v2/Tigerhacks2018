
<?php

session_start();
$servername = "67.205.133.104";
$dbname = "tigerhacks";
$dbusername = "root";
$dbpassword = "sqlpass";



	if ($theOne) {
		try {

			$conn = new PDO("mysql:host=$servername;port=3306;dbname=$dbname", $dbusername, $dbpassword);

			// if (!$conn) {
    	// 	die("Connection failed: " . mysqli_connect_error());
			// }

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


			$sql = "INSERT INTO story (user_id, topic, body)
				VALUES ($user_id, $topic, $body)";

				var_dump(topic);

				$conn-> exec($sql);
			}
			catch(PDOException $e) {
				echo "Connection failed: " . $e->getMessage();
			}
			$conn = null;
	}
?>

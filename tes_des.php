<?php
// refer to the des.php file, similar with link to the des.js file (the fourth highlight part in test_des.html)
include('des.php');
?>

<html>
	<body>

		<h1>Lab 7 Demo 2: PHP DES test</h1>
		
		<?php
			//set up a des key for encryption and decryption
			$key = "this is your key, could be anything";

			//enter a message
			$message = "this is the message";

			echo "key: " . $key . "<br/>";
			echo "message: " . $message . "<br/>";
			
			// PHP des encryption API (in des.php)
			$ciphertext = php_des_encryption($key, $message);

			echo "DES encrypted message: " . $ciphertext;
			echo "<br/>";
			
			// PHP des decryption API (in des.php)
			$recovered_message = php_des_decryption($key, $ciphertext);
			echo "DES decrypted message: " . $recovered_message;
		?>

	</body>

</html>

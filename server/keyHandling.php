<?php
// refer to the des.php file, similar with link to the des.js file (the fourth highlight part in test_des.html)
include('des.php');
?>
<html>
	<body>

		<h1>Lab 7 Demo 2: PHP DES test</h1>
		
        <?php
            $input = $_POST['message'];
            $key = $_POST['DES_Encryption_Key'];
            
			//set up a des key for encryption and decryption 

			//enter a message
			// $message = "this is the message";

			// echo "key: " . $key . "<br/>";
			// echo "message: " . $message . "<br/>";
			
			// PHP des encryption API (in des.php)
			$ciphertext =$input;

			echo "DES encrypted message: " . $ciphertext;
			echo "<br/>";
			
			// PHP des decryption API (in des.php)
			$recovered_message = php_des_decryption($key, $ciphertext);
            echo "DES decrypted message: " . $recovered_message;
            $file = fopen("../database/database.txt","a");
		    //insert this input (plus a newline) into the database.txt
            fwrite($file, $recovered_message."\n");
            fclose($file);
		?>

	</body>

</html>

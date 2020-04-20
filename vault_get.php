<!DOCTYPE html>
<html>
<head>
	<title>Password Vault: Get Data</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
	<h2>Here is your login data</h2>

	<?php
		# origin variable represents the account name of the login info and corresponds to two values in the text file,
		# those values are userName and passWord. All seperated by ':'
		$origin = $_POST['origin'];
		
		$data = fopen("data.txt", "r");
		
		while(! feof($data))
		{
			$result = fgets($data);
			list($originData,$userName,$passWord) = array_pad(explode(":", $result), 3, null);
			if ($originData == $origin)
				{
					print("<p> Your username is: $userName and your password is: $passWord");
				} 	
		}
		fclose($data);

	?>
</body>
</html>

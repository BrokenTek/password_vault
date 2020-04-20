<!DOCTYPE html>
<html>
<head>
	<title>Store login</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
	<h2> Login information has been stored!</h2>

	<?php
		$accountName = $_POST['accountName'];
		$userName = $_POST['userName'];
		$passWord = $_POST['passWord'];
		$newLine = "\n";
		$delim = ":";

		$data = fopen("data.txt", "a");

		fwrite($data, $accountName);
		fwrite($data, $delim);
		fwrite($data, $userName);
		fwrite($data, $delim);
		fwrite($data, $passWord);
		fwrite($data, $newLine);

		fclose($data);
	?>


</body>
</html>	
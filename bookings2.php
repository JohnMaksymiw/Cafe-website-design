<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>

Thanks <?php echo $_POST["name"]; ?>
Your booking is confirmed for: <?php echo $_POST["date"]; ?>
A confirmation email has been sent to: <?php echo $_POST["email"]; ?>


</body>
</html>
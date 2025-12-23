<?php
	include 'mail.php';
	
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		
		$reciver = $_POST["email"];
		
		$subject = "snippet-phpmail test";
		
		$html = "
		<html lang='de'>
			<body>
				<h2>Hello!</h2>
				<p>This is a E-Mail!</p>
				<a href='https://mabgl.com/'>Download this snippet</a>
			</body>
		</html>
		";
		if (sendMail($reciver, $subject, $html)) {
			$msg = "Mail sent successfully!";
		} else {
			$msg = "Mail Error!";
		}
	}
?>

<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>Mail Formular</title>
	</head>
		<body>
		
		<form method="post">
			<label>
				E-Mail-Adress:<br>
				<input type="email" name="email" required>
			</label>
			<br><br>
			<button type="submit">Send</button>
		</form>
		
		<br>
		
		<?= $msg ?>
		
	</body>
</html>

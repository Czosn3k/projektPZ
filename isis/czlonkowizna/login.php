<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Strona logowania</title>
	</head>
	<body onload="document.frm1.submit()">
		<?php

		$user = $_POST['login'];
		$pass = $_POST['password'];

		if($user == 'login1' || $user == 'login2')
		{
			if($pass=='pass')
			{		echo "
				Zalogowano jako użytkownik $user . <br> Żeby przejść do Panelu Gracza kliknij <a href='index2.php'>TUTAJ</a>
				";
			}
			else echo 'Błędne hasło!';
		}
		else echo 'Błędny login!<br> <a href="index.php">Wróć do poprzedniej strony</a>';
		?>

		<form name="frm1" id="frm1" action="index2.php" method="post">
		    <input type="hidden" name="uname" id="uname" value="<?php echo $user;?>" />
		</form>
	</body>
</html>
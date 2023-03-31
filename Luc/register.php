<!DOCTYPE html>
<html>
<head>
	<title>Đăng Ký</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./register.css">
</head>
<body>
	<div class="main">  
			<div class="signup">
				<form method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="Name" placeholder="User name" required="">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="number" name="Phone" placeholder="Phone" required="">
          <input type="password" name="Passwork" placeholder="Password" required="">
          <input type="password" name="Conf_passwork" placeholder="Confirm Passwork" required="">
					<button name="submit">Sign up</button>
          <button name="submit"><a href="./Log_In.php">Log in</a> </button>
				</form>
			</div>
	</div>
</body>
</html>
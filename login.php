<?php
session_start();
if(isset($_SESSION['email'])){
	echo '<script>window.location.replace("./index.php");</script>';
} else {
?>	


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
	content="IE=edge">
	<meta name="viewport"
	content="width=device-width, initial-scale=1.0">
	<title>One Direction Merchandise</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family:'Gill Sans', 'Gill Sans MT',
			Calibri, 'Trebuchet MS', sans-serif;
		}
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: gray;
		}
		.container {
			width: 100%;
			display: flex;
			max-width: 850px;
			background: white;
			box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
		}
		.login {
			width: 400px;
		}
		form {
			width: 250px;
			margin: 60px auto;
		}
		h1 {
			margin: 20px;
			text-align: center;
			font-weight: bolder;
			text-transform: uppercase;
		}
		hr {
			border-top: 2px solid black;
		}
		p {
			text-align: center;
			margin: 10px;
		}
		.right img {
			width: 450px;
			height: 100%;
			border-top-right-radius: 15px;
			border-bottom-right-radius: 15px;
		}
		form label {
			display: block;
			font-size: 16px;
			font-weight: 600;
			padding: 5px;
		}
		input {
			width: 100%;
			margin: 2px;
			border: none;
			outline: none;
			padding: 8px;
			border-radius: 5px;
			border: 1px solid gray;
		}
		button {
			border: none;
			outline: none;
			padding: 8px;
			width: 252px;
			color: white;
			font-size: 16px;
			cursor: pointer;
			margin-top: 20px;
			border-radius: 5px;
			background: black;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="login">
			<form action="./ceklogin.php" method="post">
				<h1>Login</h1>
				<hr>
				<p>One Direction Merchandise</p>
				<label for="">Email</label>
				<input type="email" name="email" placeholder="Email" alt="email" required="required">
				<label for="">Password</label>
				<input type="password" name="password" placeholder="Password" alt="password" required="required">
				<button type="submit">Login</button>
			</form>
		</div>
		<div class="right">
			<img src="image.jpg" alt="">
		</div>
	</div>
</body>
<?php } ?>


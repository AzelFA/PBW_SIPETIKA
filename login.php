<?php 
session_start();
	require 'server/config.php';
	if (isset($_SESSION['email'])) {
		header('Location: index.php');
	}
	require 'pages/templates/header.php';
 ?>
 <style>
/* CSS untuk membuat tampilan aesthetic */

body {
  background-color: #f8f8f8;
  font-family: 'Josefin Sans', sans-serif;
  background-color:#bc6b1a;
  max-width: 500px;
	margin: 0 auto;
	padding-top: 100px;
}

.header-login {
  background-color: #ffac12;
  padding: 20px;
  border-radius: 10px;
  margin: 20px auto;
  width: 500px;
  color: #fff;
}

.header-login h1 {
  font-size: 28px;
  font-weight: bold;
}

.login {
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  margin: 20px auto;
  width: 500px;
  box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.5);
}

.login label {
  font-size: 14px;
  color: #555;
}

.login input[type="text"],
.login input[type="password"] {
  padding: 10px;
  width: 100%;
  background-color: #f0f0f0;
  border: none;
  border-radius: 4px;
  margin-bottom: 10px;
}

.login input[type="submit"] {
  background-color: #ffac12;
  color: #fff;
  border: none;
  padding: 10px 15px;
  font-size: 14px;
  font-weight: bold;
  border-radius: 4px;
  cursor: pointer;
}
	</style>
 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<div class="wrapper">
<div class="header-login text-center mt-4">
	<h1>Login</h1>
</div>
<div class="login">
	<br/>
	<form action="q_login.php" method="post">
		<div>
			<label>Username:</label>
			<input type="text" name="email" id="email" />
		</div>
		<div>
			<label>Password:</label>
			<input type="password" name="password" id="password" />
		</div>			
		<div>
			<input type="submit" value="Login" name="login" class="tombol">
		</div>
	</form>
</div>

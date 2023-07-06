<?php include 'pages/templates/header.php'; ?>
<style>
	* {
	margin: 15px;
	padding: 0;
	}
	body {
		font-family: 'Josefin Sans', sans-serif;
		background-color: #bc6b1a;
		max-width: 500px;
		margin: 10px auto;
		padding-top: 150px;
	}

	.container {
		max-width: 500px;
	}

	.container h1 {
		font-size: 28px;
		background-color: #ffac12;
		padding: 18px;
		border-radius: 10px;
		margin: 20px auto;
		width: 500px;
		color: #fff;
	}

	.form-controll {
		background-color: #fff;
		border-radius: 10px;
		width: 500px;
		box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.5);
	}

	.form-controll label {
		font-size: 14px;
		color: #555;
	}

	input[type="text"],
	input[type="password"] {
		padding: 10px;
		width: 24rem;
		background-color: #f0f0f0;
		border: none;
		border-radius: 4px;
		margin-bottom: 10px;
	}

	input[type="submit"] {
		background-color: #ffac12;
		color: #fff;
		border: none;
		padding: 10px 15px;
		font-size: 14px;
		font-weight: bold;
		border-radius: 4px;
		cursor: pointer;
	}

	.form-group {
		margin-bottom: 10px;
	}

</style>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;700&display=swap" rel="stylesheet">

<div class="container">
	<h1 class="text-center">Register</h1>
</div>
<div class="form-controll">
	<form method="post" action="q_register.php">
		<div class="container">
			<div class="row mt-5">
				<div class="col-sm-8">
					<div class="form-group">
						<label>Email:</label>
						<input type="text" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" placeholder="Password">
					</div>
					<input class="btn btn-primary" type="submit" name="btn" value="Register">
				</div>
			</div>
		</div>
	</form>
</div>

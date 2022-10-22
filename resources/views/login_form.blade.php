<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../css/general_login_form.css">
	<title>Login Form</title>
</head>
<body>
	<div class="container">

        <form action="#" class="loginas active">
			<h2 class="title" style="text-align: center;">Login As</h2>
			<button type="submit" class="btn-submit"><a class="txt" href="#" onclick="switchForm('login1', event)">Admin</a></button>
            <button type="submit" class="btn-submit"><a class="txt" href="#" onclick="switchForm('login2', event)">Guard</a></button>
		</form>

		<form action="#" class="login1">
			<h2 class="title" style="text-align: center;">Login with your Admin account</h2>
			<div class="form-group">
				<label for="email">Email</label>
				<div class="input-group">
					<input type="email" id="email" placeholder="Email address">
					<i class='bx bx-envelope'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<div class="input-group">
					<input type="password" pattern=".{8,}" id="password" placeholder="Your password">
					<i class='bx bx-lock-alt' ></i>
				</div>
				<span class="help-text">At least 8 characters</span>
			</div>
			<button type="submit" class="btn-submit"><a class="txt" href="/admin">Login</a></button>
			<a href="#">Forgot password?</a>
			<p>I don't have an account. <a href="#" onclick="switchForm('register', event)">Register</a></p>
		</form>

		<form action="#" class="login2">
			<h2 class="title" style="text-align: center;">Login with your Guard account</h2>
			<div class="form-group">
				<label for="email">Email</label>
				<div class="input-group">
					<input type="email" id="email" placeholder="Email address">
					<i class='bx bx-envelope'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<div class="input-group">
					<input type="password" pattern=".{8,}" id="password" placeholder="Your password">
					<i class='bx bx-lock-alt' ></i>
				</div>
				<span class="help-text">At least 8 characters</span>
			</div>
			<button type="submit" class="btn-submit"><a class="txt" href="/dashboard">Login</a></button>
			<a href="#">Forgot password?</a>
			<p>I don't have an account. <a href="#" onclick="switchForm('register', event)">Register</a></p>
		</form>

		<form action="#" class="register">
			<h2 class="title" style="text-align: center;">Register your account</h2>
			<div class="form-group">
				<label for="email">Email</label>
				<div class="input-group">
					<input type="email" id="email" placeholder="Email address">
					<i class='bx bx-envelope'></i>
				</div>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<div class="input-group">
					<input type="password" pattern=".{8,}" id="password" placeholder="Your password">
					<i class='bx bx-lock-alt' ></i>
				</div>
				<span class="help-text">At least 8 characters</span>
			</div>
			<div class="form-group">
				<label for="confirm-pass">Confirm password</label>
				<div class="input-group">
					<input type="password" id="confirm-pass" placeholder="Enter password again">
					<i class='bx bx-lock-alt' ></i>
				</div>
				<span class="help-text">Confirm password must be same with password</span>
			</div>
			<button type="submit" class="btn-submit">Register</button>
			<p>I already have an account. <a href="#" onclick="switchForm('login1', event)">Login</a></p>
		</form>
	</div>

	<script src="../js/script.js"></script>
</body>
</html>
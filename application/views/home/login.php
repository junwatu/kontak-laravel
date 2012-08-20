<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Start Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="laravel/css/style.css">
</head>
<body>
	<div class="wrapper">
		<header>
				<h2>Start Laravel</h2>
		</header>
		<div class="main">
			    <h4>Login</h4>
			    <?php
				echo Form::open(URL::to('user/login'));
				?>
				<?php
				echo Form::label('username','Username : ');
				echo Form::text('username');
				?>

				<?php
				echo Form::label('password','Password : ');
				echo Form::text('password');

				echo Form::submit("Login");
				echo Form::close();
				?>
		</div>
	</div>
</body>
</html>
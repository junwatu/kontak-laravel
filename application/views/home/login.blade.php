<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Start Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo URL::to('laravel/css/style.css')?>">
</head>
<body>
	<div class="wrapper">
		<header>
			<h1>Kontak Laravel</h1>
			<h2>Simple Login Register Web Application</h2>

			<p class="intro-text" style="margin-top: 45px;">
			</p>
		</header>
		<div class="main">
				
			    <h4>Login</h4>
			    
			    <div id="loginForm" class="loginForm">
			    <?php
				echo Form::open(URL::to('user/login'));
				?>
				<?php
				echo Form::label('username','Username');
				echo Form::text('username');
				?>

				<?php
				echo Form::label('password','Password');
				echo Form::text('password');

				echo Form::submit("Login");
				echo Form::close();
				?>
			</div>
			<div id="loginMessage" style="color:red;padding-top:10px;">
					<?php 
						if(isset($loginMessage)){
							echo $loginMessage;
						}
					?>
			</div>
			 <h4><a href="<?php echo URL::to('user/registration');?>">New Registration?</a></h4>
			<footer><p>Copyright &copy; 2012 junwatu.com</p></footer>
		</div>
	</div>
</body>
</html>
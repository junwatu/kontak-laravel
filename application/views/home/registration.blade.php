<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Kontak Laravel: Registration</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo URL::to('laravel/css/style.css')?>">
</head>
<body>
	<div class="wrapper">
		<header>
			<h1>Kontak Laravel</h1>
			<h2>Web Application For Your Contact Data</h2>

			<p class="intro-text" style="margin-top: 45px;">
			</p>
		</header>
		<div class="main">
				
			    <h4>Registration</h4>
			    
			    <div id="regForm" class="loginForm">
			    <?php
					echo Form::open(URL::to('user/newregistration'));
	
					// username			
					echo Form::label('username','Username');
					echo Form::text('username');
				
					//email
					echo Form::label('email','Email');
					echo Form::text('email');
				
					//website
					echo Form::label('website','Website');
					echo Form::text('website');
				
					//password
					echo Form::label('password','Password');
					echo Form::text('password');

					echo Form::submit("Save");
					echo Form::close();
				?>
			</div>
			<div id="regMessage" style="color:blue;padding-top:10px;">
					<?php 
						if(isset($regMessage)){
							echo $regMessage;
						}
					?>
			</div>
			<footer><p>Copyright &copy; 2012 junwatu.com</p></footer>
		</div>
	</div>
</body>
</html>
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
			<h4><a href="<?php echo URL::to('/user/logout');?>">Logout</a></h4>
		</header>
		<div class="main">
			<p>Welcome <?php echo $username;?>,</p>
			<p>You are on the registered page!</p>
		</div>
		<footer><p>Copyright &copy; 2012 junwatu.com</p></footer>
	</div>
</body>
</html>
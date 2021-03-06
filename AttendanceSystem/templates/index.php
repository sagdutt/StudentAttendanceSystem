<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet' type='text/css'>
</head>
<style>
	body{ 
		background: url(background.jpg) no-repeat;
		background-size : cover;
		font-family: 'Allura', cursive;
	}
	label {
		font-size: 200%;
	}
	h1{
		font-size: 400%;
	}
</style>
<body>
	<div class="container">
		<h1>Welcome to Hogwarts</h1>
		<?php if(isset($_GET['error']) && ($_GET['error']!=null)) { ?>
			<div class="error">
				<h3><?= $_GET['error']?></h3> 
			</div>
		<?php } ?>
		<div class="container ">	
			<form action="/login" method="post">
				<div class="form-group">
					<label for="username">Username  </label>
					<input type="text" id="username" name="username" >
				</div>
				<div class="form-group">
					<label for="password">Password  </label>
					<input type="password" id="password" name="password">
				</div>
				<input type="submit" class="btn btn-primary btn-lg" value="Login">
			</form>

		</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('body').addClass('text-primary');
	});
</script>
</html>
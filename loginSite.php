<!DOCTYPE HTML>
<html>
	<head>
		<title>Riksnet</title>
		<meta charset="utf-8" />
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div id="page-wrapper">
			<?php include("./includes/header.php"); ?>
				<section id="banner">
					<div class="content">
						<header>
							<h2>Logga in</h2>
						</header>
						<form id="formLogin" action="./run/login.php" method="POST">
							<div  class="form-group">
								<label for="username">Användarnamn</label>
								<input type="text" class="form-control" name="username" id="username" placeholder="Användarnamn">
							</div>
							<div class="form-group">
								<label for="password">Lösenord</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="Lösenord">
							</div>
							<button type="submit" class="btn btn-primary">Logga in</button>
						</form>
					</div>
				</section>

				<footer id="footer">
					<ul class="icons">
						
					</ul>
					<ul class="copyright">
						<li>&copy; Riksnet. All rights reserved.
					</ul>
				</footer>
		</div>
	</body>
</html>
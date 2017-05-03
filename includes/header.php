<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
?>
	<header id="header">
	<img id="logo" src="./images/riksnet_logo.png" alt="Riknet Logo" style="width:15%;height:70%;">
		<nav id="nav">
			<ul>
				<li><a href="index.php">Hem</a></li>
				<li><a href="services.php">Tjänster</a></li>
				<li><a href="about.php">Om oss</a></li>
				<li><a href="support.php">Support</a></li>
				<?php if($_SESSION['id'] == 0){ ?>
					<li><a href="loginSite.php"><p class="sidebar_links">Kundportal</p></a></li>
				<?php } ?>
			</ul>
		</nav>
	</header>
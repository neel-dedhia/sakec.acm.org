<?php
	$cur_dir = '';
	$dir = '';
	$cur_dir = end(explode("/", getcwd()));
	$dir = ($cur_dir == "modules")? "": "modules/";

	$index_dir = ($cur_dir == "modules")? "../": "";
	// echo $index_dir . "\n" . $dir;
?>

<header>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar grey-text">
		<div class="brand-logo text-center">
			<a href=<?php echo $index_dir . "index.php"; ?>><img src=<?php echo $index_dir . "assets/img/logo.png";?> class="img-responsive" /></a>
		</div>
		<button class="navbar-toggler collapsed mobile-menu-btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</button>
		<div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href=<?php echo $index_dir . "index.php"; ?>>Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href=<?php echo $dir . "about-us.php"; ?>>About-us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href=<?php echo $index_dir . "index.php#contact"; ?>>Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href=<?php echo $dir . "events.php"; ?>>Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href=<?php echo $dir . "registration.php"; ?>>Register</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href=<?php echo $dir . "team.php"; ?>>Our-Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href=<?php echo $dir . "gallery.php"; ?>>Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href=<?php echo $dir . "benifits.php"; ?>>Why-join-us?</a>
				</li>
			</ul>
		</div>
	</nav>
</header>

<div id="set-top-margin"></div>
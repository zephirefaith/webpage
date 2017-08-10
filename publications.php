<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Publications</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<?php include("header.html"); ?>

							<!-- Content -->
								<section>
									<header class="main">
										<h2>Publications</h2>
									</header>
									<?php 
										$contents = file_get_contents("https://bibbase.org/service/mendeley/0b71aa78-438f-3334-b55b-1f6bd8c32d5a"); 
										print_r($contents); 
									?>

								</section>

						</div>
					</div>

		<!--Sidebar-->

		<?php include("sidebar.html"); ?>

		<!-- Scripts -->
		<?php include("scripts.html"); ?>

	</body>
</html>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Priyam Parashar</title>
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

				<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>About Me</h2>
						</header>
						<p>I am a second year graduate student at <i>University of California, San Diego</i>, studying for my <b>PhD in Computer Science with an emphasis on Robotics</b>.
							My research interests lie in creating a <b>social architecture for robots</b> which supports <b>Human Robot Interaction</b>							and <b>long-term development and survival of autonomous mobile robots</b>. My research mainly focuses on creating
							<b>socially sensitive knowledge-based agents</b> and integrating them with explainable machine learning, with a secondary
							interest in using cloud as an informational database. I am being co-advised by <b>Dr Henrik Christensen</b> and <b>Dr Ashok Goel</b>,
							from Georgia Tech.</p>

					</div>
					<span class="image object">
										<img src="images/my_image.jpg" alt="" />
									</span>
				</section>

				<section>
					<h2>Education</h2>
					<p>Before UC San Diego, I spent a year at <i>Georgia Institute of Technology</i> as a PhD student. Prior to which I studied
						at <i>Robotics Institute, Carnegie Mellon University</i> for my MS in Robotics, graduating in 2014. My undegraduate
						studies were at <i>International Institute of Information Technology, Hyderabad</i> with a major in Electronics and
						Communication and minor in Mobile Robotics.</p>
					<!-- <ul class="actions">
										<li><a href="#" class="button big">Learn More</a></li>
									</ul> -->
				</section>
                <header class="main">
					<h2>Research Interest</h2>
				</header>
				<p><span class="image right"><img src="images/fetch_halloween.jpg" alt="Lab robot as Harry Potter on Halloween" width="20%"/></span>
					I am interested in bridging the gap between <b>knowledge-based algorithms</b> and <b>data-based learning</b> to endow robotic
					agents with the ability to make sense of the world and repair knowledge gaps by using data on the fly. A part of my research
					statement focuses on how to develop interpretable machine learning, in an effort to make machines more usable and transparent.
					By bootstrapping an agent with a knowledge-base and giving it tools to learn from data, we can mpve towards readily deployable
					machines which have a basic sense of how to repair or ask for repair when the need be.</p>
				<p> My current goal is to study methods like inverse reinforcement learning which can abstract reward function out of instructions or
				demonstrations and to pair this up with knowledge-based systems to interpret world better. The end-game is to have agents which can
				reason about their own failure and employ self-guided reinforcement learning to repair their plans. My current projects focus on:
					<ul>
						<li>Scalable ways of abstracting continuous demonstrations and different instructions into a united symbolic framework,
						</li>
						<li>To use a mixture of inverse reinforcement learning, optimization and guided reinforcement learning to make self-reliant agents</li>
					</ul>
				</p>

				<header>
					<h2>Core Interests</h2>
				</header>
				<div class="features">
					<article>
						<span class="icon fa-clock-o"></span>
						<div class="content">
							<h3>Long-term Autonomy</h3>
							<p>By endowing agents with a sense of 'goal', we can expect agents to recover better from unexpected enviornmental changes</p>
						</div>
					</article>
					<article>
						<span class="icon fa-users"></span>
						<div class="content">
							<h3>Socially Smart Agents</h3>
							<p>In order to tackle constantly changing world, an agent needs to know how to interact with people and use their knowledge for better plan recovery</p>
						</div>
					</article>
					<article>
						<span class="icon fa-cloud"></span>
						<div class="content">
							<h3>Cloud as Scalable Knowledge Database</h3>
							<p>For transfer of knowledge between multiple platforms</p>
						</div>
					</article>
					<article>
						<span class="icon fa-comments"></span>
						<div class="content">
							<h3>Explanation and Communication</h3>
							<p>This goes hand in hand with social smarts, in order to interact the agent must also know how to articulate its state</p>
						</div>
					</article>
				</div>

			</div>
		</div>

		<!--Sidebar-->

		<?php include("sidebar.html"); ?>

		<!-- Scripts -->
		<?php include("scripts.html"); ?>

</body>

</html>

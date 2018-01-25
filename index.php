<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('assets/resources.php'); ?>
	</head>
	<body>
		<!--Header section  -->
		<?php include("header.php");?>
		<div id="home">
			<div class="container">
				<div class="row ">
					<div class="col-md-8 col-sm-6">
						<h1 class="head-main">ShotsFired Team</h1>
						<div class="head-last">
							<p class="head-last">
								Welcome to our website, the hub for all things ShotsFired!
							</p>
						</div>

					</div>
					<div class="col-md-4 col-sm-6">
							<?php
								$quote=array("Gold hundred is twelve.",
														 "I spent 36 dollars on money.",
														 "The nucleus is the powerhouse of the cell...",
													 	 "Cats are more rubber than babies.",
													 	 "Can I make coffee juice?",
													   "Cacao my life!",
													 	 "Close your door. I'll s**t on your floor.");
								$author=array("Vitani",
															"Vitani",
															"Odega",
															"KR0N05",
														  "KR0N05",
															"BabyDucks",
														  "R3VAK");
								$q_idx=rand(0,6);
							?>
							<h3 align="left" class="rand-quote">
								<i>"<?php echo($quote[$q_idx]) ?>"</i>
							</h3>
							<p align="right" style="padding-right:20px; padding-bottom:40px; color: #fff">
								~ <?php echo($author[$q_idx]) ?>
							</p>

					</div>

				</div>
			</div>
		</div>
		<!--End Header section  -->
		<!--Services Section-->
		<section id="services">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<h2>What We Do</h2>
					</div>
				</div>

				<div class="row text-center space-pad">
					<a href="/blog">
						<div class="col-md-4 col-sm-4">
							<div>												
								<i class="fa fa-bullhorn" style="font-size: 400%; color:#c97200"></i>
																		
								<h3>Blogging</h3>
								<p>
									Gaming, Tech, and More! Join the discussion.
								</p>							
							</div>
						</div>
					</a>
					<a href="streams.php">
						<div class="col-md-4 col-sm-4">
							<div>
								<i class="fa fa-twitch" style="font-size: 400%; color:#6441a5"></i>
								
								<h3>Streaming</h3>
								<p>
									Singleplayer, Co-op, and multiplayer! OH MY!
								</p>				
							</div>
						</div>
					</a>
					<a href="https://www.youtube.com/channel/UCuhs4HbeDc6XEqaxg3Y_L1Q" target="_blank">
						<div class="col-md-4 col-sm-4">
							<div>						
								<i class="fa fa-youtube-play" style="font-size: 400%; color:#ff0000"></i>
							
								<h3>Youtube</h3>
								<p>
									I ain't a clip show, but I'll su... make you laugh.
								</p>						
							</div>
						</div>
					</a>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="text-center">
							<h2>Instagram</h2>
						</div>
						<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/19e7c6ee9bb451c49b4c412b8d3c5e77.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="text-center">
							<h2>Streaming</h2>
						</div>					
						<div class="panel panel-default">
							<div class="panel-body">
								<ul class="nav nav-pills" style="background-color: #ECECEC;">
									<li class="active"><a href="#online-stream" data-toggle="tab">Online</a>
									</li>
									<li class=""><a href="#offine-stream" data-toggle="tab">Offline</a>
									</li>
									<li class=""><a href="#all-stream" data-toggle="tab">All</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade  active in" id="online-stream">
										<h4>Online Streamers</h4>
										<p>Online Streamers will be here!</p>
									</div>
									<div class="tab-pane fade" id="offline-stream">
										<h4>Offline Streamers</h4>
										<p>Offline Streamers will be here!</p>

									</div>
									<div class="tab-pane fade" id="all-stream">
										<h4>All Streamers</h4>
										<p>All Streamers will be here!</p>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>


		</section>
		<?php include("footer.php");?>
	</body>

</html>

<?php include('includes/head.php'); ?>

	<body id="home">
		<?php include('includes/nav.php'); ?>
		<div class="cover">
		  <div class="row">
		    <div class="small-12 columns">
		    	<h1 class="large-type">Hi, I'm Ray</h1>
		      <h3><span id="typed"></span></h3>
		    </div>
		  </div>
		  <div class="spread">
	  		<img src="img/home/mockspread.png">
	  	</div>
		</div>

		<section class="projects row">
			<div class="small-12 columns">
				<div class="row">
					<a href="http://www.inkling.com">
						<div class="small-12 medium-6 column">
							<img src="img/home/inkling.png">
						</div>
						<div class="image small-12 medium-5 small-offset-1 column">
							<h1>Inkling</h1>
							<p>Currently designing the future of authoring tools and interactive documents.</p>
						</div>
					</a>
				</div>

				<div class="row">
					<a href="datapad">
						<div class="small-12 medium-push-5 medium-6 medium-offset-1 column">
							<img src="img/home/datapad.png">
						</div>
						<div class="small-12 medium-pull-6 medium-5 column">
							<h1>DataPad</h1>
							<p>DataPad was a web app designed for teams to integrate, refine, analyze, explore, and share data. I led design efforts for all key features.</p>
						</div>
					</a>
				</div>

				<div class="row">
					<a href="blippy">
						<div class="small-12 medium-6 column">
							<img src="img/home/blippy-screen.png">
						</div>
						<div class="image small-12 medium-5 small-offset-1 column">
							<h1>Blippy Video</h1>
							<p>Blippy existed as a short-lived web experiment for online video. It allowed people to create their own communities of video and video-watchers. I joined the team in August 2012 to lead all design efforts (UX, visual, research, interaction).</p>
						</div>
					</a>
				</div>

				<div class="row">
					<a href="thinkspace">
						<div class="small-12 medium-push-5 medium-6 medium-offset-1 column">
							<img src="img/home/thinkspace.png">
						</div>
						<div class="small-12 medium-pull-6 medium-5 column">
							<h1>Thinkspace</h1>
							<p>In collaboration with SRI International, our team of four Masters students from Carnegie Mellon University set out to understand the learning dynamics between teachers and students in high school biology classrooms and how SRI's technology could be best applied. In the process, we prototyped an iPad application that helped students solve complex problems.</p>							
						</div>
					</a>
				</div>

				<div class="row">
					<a href="ageofwaste">
						<div class="small-12 medium-6 column">
							<img src="img/home/ageofwaste-cropped.png">
						</div>
						<div class="small-12 medium-5 small-offset-1 column">
							<h1>Age of Waste</h1>
							<p>Over the span of two weeks, I kept track of the items I threw away. I extrapolated from this data to see how much trash would be left on Earth after my death (morbidly estimated age). Seeing that some types of materials take longer to decompose than others, it turned out to be an interesting visualization and a useful reminder about my footprint.</p>
						</div>
					</a>
				</div>

			</div>
		</section>
<?php
  include('includes/scripts.php');
  include('includes/footer.php');
?>

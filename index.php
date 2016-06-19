<?php include('includes/head.php'); 
$cover_style = "dark-cover";?>

	<body id="home" class="dark-cover">
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

		<section id="projects" class="projects row">
			<div class="small-8 small-centered columns">
				<h1 class="large-type text-center row">Projects</h1>

				<div class="row small-centered">
					<a href="inkling">
						<div class="small-12 medium-6 column">
							<img src="img/home/inkling-thumb.png">
						</div>
					</a>
					<div class="small-12 medium-6 column description">
						<h1>Inkling</h1>
						<h4>Analytics</h4>
					</div>
				</div>

				<div class="row small-centered">
					<a href="datapad-charting">
						<div class="small-12 medium-6 column">
							<img src="img/home/dp-charting-thumb.png">
						</div>
					</a>
					<div class="small-12 medium-6 column description">
						<h1>DataPad</h1>
						<h4>Data Visualization Tool</h4>
					</div>
				</div>

				<div class="row small-centered">
					<a href="datapad-dashboarding">
						<div class="small-12 medium-6 column">
							<img src="img/home/dp-dashboard-thumb.png">
						</div>
					</a>
					<div class="small-12 medium-6 column description">
						<h1>DataPad</h1>
						<h4>Business Dashboard Tool</h4>
					</div>
				</div>

				<div class="row small-centered">
					<a href="blippy">
						<div class="small-12 medium-6 column">
							<img src="img/home/blippy-thumb.png">
						</div>
					</a>
					<div class="small-12 medium-6 column description">
						<h1>Blippy</h1>
						<h4>Video Social Network</h4>
					</div>
				</div>

				<div class="row small-centered">
					<a href="thinkspace">
						<div class="small-12 medium-6 column">
							<img src="img/home/thinkspace-thumb.png">
						</div>
					</a>
					<div class="small-12 medium-6 column description">
						<h1>Thinkspace</h1>
						<h4>iPad App for HS Biology</h4>
					</div>
				</div>

			</div>
		</section>
<?php
  include('includes/scripts.php');
  include('includes/footer.php');
?>

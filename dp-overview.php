<?php
  $project_id = "dp-overview";
  $company = "";
  $title = "DataPad";
  $next_project = "Blippy (2012)";
  $next_project_address = "blippy.php";
  $columns = "12";
  include 'project-template.php' ?>

<?php startblock('main') ?>

    
    <div class="row small-12">
      <div class="small-12 medium-6 columns">
        <h3>The Problem</h3>
        <p>Researchers, business analysts, data scientists are still struggling to access and integrate data from data silos. Beyond this, people continue to share data and analyses via email where key information gets lost and data becomes obsolete within hours.</p>
        <p><a href="http://pandas.pydata.org/">Some solutions</a> existed to help with data cleansing and integration, but were not accessible to users without technical savvy. DataPad was born out of this gap.</p>
        </div>
      <div class="small-12 medium-5 medium-offset-1 columns">
        <h6>DataPad's Mission</h6>
        <p>Provide easy data access and integration across multiple sources, enhance collaboration in teams, and enable fast interactive exploration and analysis of data sets.</p>
        <h6>Role</h6>
        <p>As the core of design efforts, I worked closely with the Director of Product to form the foundation for DataPad's design principles, interaction details, and key features.</p>
        <h6>Timeline</h6>
        <p>October 2013 - October 2014</p>
      </div>
    </div>
    
    <div class="row">
      <div class="small-12 small-centered column">
        <hr class="buffer" />
        <h2 class="text-center">Selected Work</h2>
        <div class="small-12 medium-8 small-centered columns">
          <a href="dp-charting.php">
            <div class="image overlay" data-content="Charting">
              <h6>Charting</h6>
              <img src="img/charting-solution/charting.gif">
            </div>
          </a>
        </div>
        
        <div class="small-12 medium-8 small-centered columns">
          <a href="dp-dashboarding.php">
            <div class="image overlay" data-content="Dashboarding">
              <h6>Dashboarding</h6>
              <img src="img/dashboarding-solution/dashboarding-edges.gif">
            </div>
          </a>
        </div>

        <div class="small-12 medium-8 small-centered columns">
          <a href="dp-onboarding.php">
            <div class="image overlay" data-content="Onboarding">
              <h6>Onboarding</h6>
              <img src="img/onboarding-solution/onboarding-responsive.gif">
            </div>
          </a>
        </div>

      </div>
    </div>
    
    
<?php endblock() ?>
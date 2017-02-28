<?php
  $project_id = "transitflow";
  $title = "Transit Flow";
  $company = "Personal Project";
  $next_project = "DataPad Charting";
  $next_project_address = "datapad-charting";
  $columns = "8";
  include 'project-template.php' ?>

<?php startblock('main') ?>
    <section class="overview">
      <div class="brief">

        <h6>Overview</h6>
        <p>Transit Flow is an experiment using D3 and BART data to explore how Bay Area transit ridership changes throughout the day.</p>
        <h6>Tools</h6>
        <p>HTML/CSS, JS, d3.js, <a href="http://www.bart.gov/about/reports/ridership">BART ridership data</a>, Sketch</p>
        <h6>Project Home</h6>
        <p><a href="https://rayyayyar.github.io/bart-flow/">rayyayyar.github.io/bart-flow/</a></p>

      </div>

    </section><hr/>

  <!--    Solution-->
    <section class="solution">
      <div class="row">
        <div class="image column flex-video">
          <iframe width="1280" height="720" src="https://www.youtube.com/embed/owGgbAS7Wq8?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <h3 class="text-center">Visualizing BART Ridership Data</h3>
      <p>This project began as a desire to tell a narrative about the city around me. So much of our surroundings, relationships, and interactions go unnoticed even though we experience them everyday. I think the way people interact with urban infrastructure can be at the heart of these stories.</p>
      <p>As cities continue to grow and think about what smart, sustainable development means, it seems especially important to look at issues from both a quantitative data lens as well as a human narrative.</p>
      <p><a href="https://rayyayyar.github.io/bart-flow/">View the project in browser</a></p>

    </section>
    <section>
      <div class="row">
        <div class="image column">
          <a href="img/transitflow/transitflow00.png" data-fluidbox><img src="img/transitflow/transitflow00.png" alt="" title="" /></a>
          <div class="caption large-3"><strong>Exploring BART data using good ol' Numbers and conditional formatting,</strong> I could already see some patterns where ridership was high.</div>
        </div>
      </div>
      <div class="row">
        <div class="image column">
          <a href="img/transitflow/transitflow01.png" data-fluidbox><img src="img/transitflow/transitflow01.png" alt="" title="" /></a>
          <div class="caption large-3"><strong>Sketch app</strong>, was a great design tool to use for exploring early visual concepts.</div>
        </div>
      </div>
      <div class="row">
        <div class="image column">
          <a href="img/transitflow/transitflow02.png" data-fluidbox><img src="img/transitflow/transitflow02.png" alt="" title="" /></a>
          <div class="caption large-3"><strong>Finding ways to highlight</strong> certain parts of the data narrative was the fun part.</div>
        </div>
      </div>
      <div class="row">
        <div class="image column">
          <a href="img/transitflow/transitflow03.png" data-fluidbox><img src="img/transitflow/transitflow03.png" alt="" title="" /></a>
          <div class="caption large-3"><strong>I used Sketch to trace over the BART map, </strong>which then allowed me to pull coordinate data from each vector and draw using D3.</div>
        </div>
      </div>
      <div class="row">
        <div class="image column">
          <a href="img/transitflow/transitflow04.gif" data-fluidbox><img src="img/transitflow/transitflow04.gif" alt="" title="" /></a>
          <div class="caption large-3"><strong>Seeing the concept first come to life </strong>was better than any snake game ever.</div>
        </div>
      </div>
    </section>
<?php endblock() ?>

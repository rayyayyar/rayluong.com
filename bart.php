<?php
  $project_id = "bart";
  $title = "BART Flow";
  $next_project = "DataPad Charting";
  $next_project_address = "datapad-charting";
  $columns = "8";
  include 'project-template.php' ?>

<?php startblock('main') ?>
    <section class="overview">
      <div class="brief">

        <h6>Overview</h6>
        <p>Just an experiment with D3 and BART ridership data from 2016.</p>
      </div>

    </section><hr/>

  <!--    Solution-->

    <section class="solution">
      
      <div class="row">
        <div class="image column flex-video">
          <iframe src="https://www.youtube.com/embed/SSG5sxB2DKg" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <h3 class="text-center">Visualizing BART data</h3>
      <p>I visualized BART ridership data from 2016 using D3.</p>

    </section>


<?php endblock() ?>

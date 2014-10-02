<?php include('head.php'); ?>

  <?php <body id=$project-id class="project"> ?>
    <?php include('nav.php'); ?>

    <?php
    <div class="cover">
      <div class="row">
        <div class="small-8 small-centered columns">
          <h4 class="light-text">$company;</h4>
          <h1>$title</h1>
        </div>
      </div>
    </div>
    ?>

    <?php
    <div class="row main-content">
      <div class="small-8 small-centered columns">
<!--    Task and Problem-->
            include($main-content);
        <hr />
      </div>
    </div>
    ?>
    
    <?php
    <footer>
      <div class="row">
        <a href="#">
          <div class="small-8 small-centered columns text-right">
            <h4>Next Project &#8594;</h4>
            <p class="light-text">$next-project</p>
          </div>
        </a>
      </div>
    </footer>
    ?>
    <?php include('scripts.php'); ?>
    <?php include('footer.php'); ?>

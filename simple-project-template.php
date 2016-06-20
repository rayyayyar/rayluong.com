<?php require_once 'includes/ti.php' ?>
<?php include('includes/head.php'); ?>
  <body id="<?php echo $project_id ?>" class="<?php echo $cover_style ?> project simple-template">
    <?php include('includes/nav.php'); ?>

    <div class="cover">
      <div class="row">
        <div class="small-8 small-centered columns">
          <a href="<?php echo $company_link ?>">
            <h4 class="light-text"><?php echo $company ?></h4>
          </a>
          <h1><?php echo $title ?></h1>
        </div>
      </div>
    </div>

    <div class="main-content small-centered">
        <?php startblock('main') ?>
        <?php endblock() ?>
    </div>
    <?php include('includes/projects-list.php'); ?>

    <footer>
      <!-- <div class="row">
        <a href="<?php echo $next_project_address ?>">
          <div class="small-8 small-centered columns text-right">
            <h4>Next Project &#8594;</h4>
            <p class="light-text"><?php echo $next_project; ?></p>
          </div>
        </a>
      </div> -->
    </footer>
<?php
  include('includes/scripts.php');
  include('includes/footer.php');
?>
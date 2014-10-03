<?php
  $project_id = "kickserv";
  $company = "Crankapps";
  $title = "Kickserv";
  $next_project = "Thinkspace";
  $next_project_address = "thinkspace.php";
  $columns = "8";
  include 'project-template.php' ?>

<?php startblock('main') ?>
    <section class="overview">
      <div class="brief">

        <h6>Overview</h6>
        <p><a href="http://www.kickserv.com">Kickserv</a> is a web application that helps businesses track sales, manage customer relations, and manage work opportunities. The company began a full redesign based on user feedback.</p>

        <h6>Role</h6>
        <p>As a full-time contract designer, I was in charge of recreating old flows, interactions, and visual elements as well as creating new ones. I worked closely with the development team to build the best experience possible for Kickserv. Much of our direction was guided by feedback given by users on the forums and in my interviews.</p>

        <h6>Goals</h6>
        <p>The app (formerly called Service Sidekick) already existed, but had major issues in UX, design, and implementation. Our 8 month redesign aimed to simplify the entire process from tracking a sales lead to managing work to invoicing each job.</p>
      </div>

    </section><hr/>

  <!--    Solution-->

    <section class="solution">
      <h3 class="text-center">Creating a New Job</h3>
      <div class="row">
        <div class="image column">
          <img src="img/kickserv/wire-createnew.png">
          <div class="caption large-3"><strong>New concept for a Job Page</strong>. I chose to allow live editing (via AJAX) on the job page as users needed the ability to quickly make changes (e.g. while on the job or on the phone) without having to save and refresh.</div>
        </div>
      </div>

      <div class="row">
        <div class="image column">
          <img src="img/kickserv/mock-createnew1.png">
          <div class="caption large-3"><strong>Creating a new job</strong>. I placed an emphasis on title and scheduled date as this carried the weight of critical information for the users we spoke to.</div>
        </div>
      </div>

      <div class="row">
        <div class="image column">
          <img src="img/kickserv/mock-createnew2.png">
          <div class="caption large-3"><strong>The Job Page</strong> contains more details about the job once the user creates it.</div>
        </div>
      </div>

      <div class="row">
        <div class="image column">
          <a href="img/kickserv/kickserv-prototype/kickserv-editingjob.htm"><img src="img/kickserv/jobpage.png"></a>
          <div class="caption large-3"><strong>Interactive Mock Up of Job Page</strong> created with Adobe Fireworks (RIP).</div>
        </div>
      </div>

      <h3 class="text-center">Designing for Seamless Task Adding</h3>
      <div class="row">
        <div class="image column">
          <img src="img/kickserv/ix-addtask.png">
          <div class="caption large-3">I detailed my design specs to include state for every user action.</div>
        </div>
      </div>
      <h3 class="text-center">Event Scheduling Crucial for Users</h3>
      <p>Scheduling events (jobs, opportunities, tasks) remained an important flow in Kickserv. The redesign simplified the process that so many companies were having trouble with: quickly scheduling a job while looking at the weekly calendar. Users often were on the phone with a customer and needed to quickly make note of a job or opportunity. This redesign allows them to create an event in just a few clicks.</p>

      <div class="row">
        <div class="image column">
          <img src="img/kickserv/kickserv-anim.gif">
        </div>
      </div>
    </section>

<?php endblock() ?>

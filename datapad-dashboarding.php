<?php
  $project_id = "dp-dashboarding";
  $cover_style = "dark-cover";
  $company = "DataPad";
  $company_link = "datapad";
  $title = "Dashboarding";
  $next_project = "Onboarding";
  $next_project_address = "datapad-onboarding";
  $columns = "8";
  include 'project-template.php' ?>
<?php startblock('main') ?>

        <section class="overview">
          <div class="brief">
            <h6>Overview</h6>
              <p>Building dashboarding tools remains a challenging design problem in data visualization and BI products. DataPad aimed to build a dashboarding tool to allow users to create a self-updating, shareable collection of charts. In less than three weeks, I had researched, designed, and created prototypes to serve as the foundation for DataPad's flexible dashboarding tool.
              </p>
            <h6>Role</h6>
            <p>As the design team, I conducted initial research on existing tools, explored divergent ideas through sketches, and prototyped key concepts via InVision. I was also responsible for collecting feedback both internally and externally for design concepts before and during implementation.</p>
            <h6>Goals</h6>
            <p>Our most basic goal involved helping users put together a collection of analyses. More specifically, <strong>how do we build a responsive (i.e. stretching elements with window size) web tool that allowed multiple visual elements to be assembled in various layouts within the same view?</strong> My vision for DataPad's dashboarding tool sought to balance intuitiveness with the flexibility of creating custom layouts.
            </p>
          </div>
        </section>

<!--    Solution-->
        <section>

          <div class="row">
            <div class="image column">
              <a href="img/dashboarding-solution/Dashboard%20medium.png" data-fluidbox><img src="img/dashboarding-solution/Dashboard%20medium.png" alt="" title="" /></a>
              <div class="caption large-3"><strong>Viewing a SaaS Dashboard</strong>. A completed dashboard in view mode allows for filtering and device-type preview.</div>
            </div>
          </div>
        </section>

        <hr />
        <!--Process-->
        <section>
          <h3>The Initial Prototype Used Preset Layout Templates</h3>
          <div class="row">
            <div class="image column">
              <a href="img/dashboarding-iterations/dashboarding-old.gif" data-fluidbox><img src="img/dashboarding-iterations/dashboarding-old.gif" alt="" title="" /></a>
              <div class="caption large-3"><strong>Initial Prototype (sans design) Using Preset Layout Templates</strong>. While somewhat usable, it was unpredictable how charts would be rearranged when the layout type changed.</div>
            </div>
          </div>
          <p>The very first builds of DataPad's dashboard tool used preset layout templates. Entering an empty dashboard would always default to a single analysis pane. To change layouts, we provided a list of layout previews in the top right. Selecting a layout template would lay out empty panes in the desired configuration. The user could then select the analyses (i.e. charts) they wished to display in the dashboard.</p>
          <p>Several key issues came up in this interaction:</p>
          <ul>
            <li>Adding an analysis wasn't easy. It involves first selecting the dataset to which an analysis belongs to, then looking at small thumbnails and cut off chart titles to select the desired one.</li>
            <li>Choosing a different template when panes are already populated would result in unpredictable configurations. For instance, there wasn't a good way to go from a 2x2 grid to a 3 column layout without having to (1) prompt the user to remove one pane and (2) rearranging the panes in a meaningful order.</li>
            <li>Templates only allowed for a finite number of layout configurations.</li>
          </ul>

          <h3>The "Canvas Grid" Concept Affords Better Resizing</h3>
          <div class="row">
            <div class="image column">
              <a href="img/dashboarding-solution/dashboarding-canvas.gif" data-fluidbox><img src="img/dashboarding-solution/dashboarding-canvas.gif" alt="" title=""></a>
              <div class="caption large-3"><strong>The "Canvas Grid" Dashboard</strong>. While extremely flexible and easy to understand, this would place much more burden on the user to move and resize panes to create useful dashboard layouts.</div>
            </div>
          </div>
          <p>This purely drag, drop, and adjust concept seems the most straightforward. Panes, when dropped, default to a 6x6 pane on the canvas. Users can move and resize panes within the constraints of the grid. For visual designers, this is very similar to turning on "Snap to grid" in your design tools.</p>
          <p>While flexible and easy to use, it gets to be cumbersome to create complex layouts. Users would likely have overlapping charts or gaps between charts that they would have to painstakingly fix. We strayed away from this concept and opted for a more calculated concept.</p>
          
          <h3>The "Edges" Concept Uses a Docking Model</h3>
          <div class="row">
            <div class="image column">
              <a href="img/dashboarding-solution/dashboarding-edges.gif" data-fluidbox><img src="img/dashboarding-solution/dashboarding-edges.gif" alt="" title="" /></a>
              <div class="caption large-3"><strong>The "Edges" Docking Model Dashboard</strong>. A docking model would help users quickly create layouts without having to manually move and resize.</div>
            </div>
          </div>
          <p>In the "Edges" concept, each pane is framed by + buttons on each edge. The user can start creating different layouts one of two ways: (1) clicking a button or (2) dragging an analysis onto a button. Doing one of these will split the pane either vertically or horizontally. This allows the user to quickly scale to a fairly complex dashboard all while maintaining a good state throughout the process.</p>
          <p>A few drawbacks are inherent in this model. Since each edge button will simply split a pane in half, it becomes difficult, but not impossible to create layouts with odd ratios. A three row layout would require an additional interaction not shown in the above animation. Resizing is another difficulty here — since the edges of each pane are already used as "split me" buttons, the usual method of resizing (i.e. dragging pane edges) is not available. There are ways around these drawbacks, but they do add some additional design cruft. In the end, this concept fares the best for what we were trying to achieve.</p>

          <div class="row">
            <div class="image column">
              <a href="img/dashboarding-solution/dashboarding-sidebyside.png" data-fluidbox><img src="img/dashboarding-solution/dashboarding-sidebyside.png" alt="" title="" /></a>
              <div class="caption large-3"><strong>Side by Side Comparison</strong>.</div>
            </div>
          </div>

        </section>

        <hr/>
<!--        Sketches-->
        <section>
          <h3>Early Sketches</h3>
          <div class="row">
            <div class="image column">
              <a href="img/dashboarding-sketches/dashboard-creation.jpg" data-fluidbox><img src="img/dashboarding-sketches/dashboard-creation.jpg" alt="" title=""></a>
              <div class="caption large-3"><strong>Sidebar tray of analyses</strong>. Early sketches exploring drag and drop to create dashboards versus using dropdowns.</div>
            </div>
          </div>
          <div class="row">
            <div class="image column">
              <a href="img/dashboarding-sketches/dashboard-publishing.jpg" data-fluidbox><img src="img/dashboarding-sketches/dashboard-publishing.jpg" alt="" title=""></a>
              <div class="caption large-3"><strong>Managing dashboards in a project</strong></div>
            </div>
          </div>
        </section>

<!--    Conclusion-->
        <hr />
        <section>
          <h3>A Dash of Concluding Comments</h3>
          <p>In our brief research, I had looked at several existing products that tackled this problem in different ways. How did other teams build a responsive (i.e. stretching elements with window size) web tool that allowed multiple visual elements to be assembled in various layouts within the same view?</p>
          <p>Some teams, like <strong>Chartio</strong>, used a fairly flexible system that allowed users to lay elements out on an open canvas before manually adjusting position and size. While this was flexible and easy to understand since it's nearly a direct physical metaphor, we thought it would be more cumbersome than necessary.</p>
          <p>We also looked outside of the world of data visualization products and into tools that made it easy to lay visual panes out in the same view and in a variety of layouts. <strong>Antetype</strong>, a layout-aware interaction design tool that I used heavily at DataPad, allows designers to follow <a href="http://blog.teamtreehouse.com/flexbox-next-generation-css-layout-arrived">flexbox</a> style layout rules where elements are placed into containers that shrink, stretch, and split relative to browser window size. It was this type of layout, in combination with <a href="https://www.google.com/search?q=docking+model&es_sm=91&source=lnms&tbm=isch&sa=X&ei=_U4iVLKMN8r3iwLG6ICwCQ&ved=0CAgQ_AUoAQ&biw=985&bih=1102&dpr=2#tbm=isch&q=window+docking&facrc=_&imgdii=_&imgrc=1BWiUe3QGUSD0M%253A%3Bb4yQdNaIY6tL2M%3Bhttp%253A%252F%252Fwww.devexpress.com%252FProducts%252FNET%252FControls%252FWinForms%252FBars%252Fi%252Ffeatures%252Fmain%252Fdockwindows.png%3Bhttp%253A%252F%252Fforums.blumentals.net%252Fviewtopic.php%253Ff%253D1%2526t%253D2757%3B515%3B361">window docking</a> ideas that led me to the new concept for dashboarding.</p>
          <p>Development had begun on the "Edges" design concept that used the docking model just as DataPad Inc. began winding down. Despite how quickly the product team had pushed on this problem, time constraints stopped us from fully implementing these concepts. The prototypes faded, but the idea lives on.</p>
          <h3>Further Exploration</h3>
          <p>Additional exploration would have considered integrating valuable pieces from all of the concepts. Templates may have been possible to include in either model. At the conclusion of DataPad, a DataPad project in the app separated analyses from dashboards. This often involved tabbing back and forth between the two. Many of us on the team were curious to see if it was possible to integrate the two views somehow to eliminate tabbing.</p>
        </section>

<?php endblock() ?>
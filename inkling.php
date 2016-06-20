<?php
  $project_id = "inkling";
  $cover_style = "dark-cover";
  $company = "Inkling";
  $company_link = "inkling";
  $title = "Inkling Analytics";
  $next_project = "DataPad Charting";
  $next_project_address = "datapad-charting";
  $columns = "12";
  include 'simple-project-template.php' ?>

<?php startblock('main') ?>
	<section class="overview row">
    	<div class="small-12 medium-4 column">
        <h6>Overview</h6>
        <p>At Inkling, we were consistently hearing from customers that they needed to compare usage across titles.</p>
      </div>

      <div class="small-12 medium-4 column">
        <h6>Role</h6>
        <p>As the product designer on this project, I worked closely with a product manager, product researcher, and engineer on the project from beginning to end. I was responsible design principles, early concepts, interaction details, and visual design.</p>
      </div>

      <div class="small-12 medium-4 column">
        <h6>Process</h6>
        <p>Our team started with rounds of discovery research to clarify the business problems before diving into design work.</p>
      </div>
  </section>

  <!--    CONCEPT-->
  <section class="design-highlight">
  		<div class="row column small-centered">
	      <h1 class="text-center large-type">Design Discovery</h1>
	      <p class="text-center">Based on what we knew about the problem, I conducted a short design sprint to explore ways to visualize metrics. This concept served as an early discussion point for design and research sessions.</p>
      </div>
      <div class="row">
        <div class="image column">
          <a href="img/inkling/design-discovery.png" data-fluidbox><img src="img/inkling/design-discovery.png" alt="Inkling Design Discovery" title="Design Discovery" /></a>
        </div>
      </div>
  </section>

  <section>
  		<div class="row column small-centered">
	      <h1 class="text-center large-type">Generative Research</h1>
	      <p class="text-center">To fully understand the problems our users were dealing with and how data could help, we spoke with <strong>12 customers</strong>. <br/>In these sessions, we looked at their current tools and shared our own hypotheseses and design concepts for validation.</p>
      </div>
      <div class="row">
        <blockquote>"What is the <strong>reach</strong> and <strong>effectiveness</strong> of my learning program?"<cite>Director of Learning</cite></blockquote>
      </div>
      <div class="row">
      	<div class="small-6 column">
      		<h4>Reach</h4>
      		<p>Are people reading content at all? If not, what do I need to do to market the program? Who do I need to talk to?</p>
      		<p>Metrics: active readers, inactive readers, metrics over time.</p>
      	</div>
      	<div class="small-6 column">
      		<h4>Effectiveness</h4>
      		<p>If people are using the content, how engaged are they and which pieces of content are most effective?</p>
      		<p>Metrics: performance, time spent, raw data</p>
      	</div>
      </div>
  </section>
  <section>
  	<div class="row column small-centered">
  		<h1 class="text-center large-type">Competitive Analysis</h1>
  		<p class="text-center">I explored a dozen different data visualization products with the goals of exploring layout possibilities, methods of filtering, metrics, and types of aggregation.</p>
  	</div>
  	<div class="row">
        <div class="image small-6 column">
          <a href="img/inkling/ca-ga.png" data-fluidbox><img src="img/inkling/ca-ga.png" alt="Inkling Design Discovery" title="Design Discovery" /></a>
          <p><strong>Google Analytics</strong> handles the most number of metrics and has a way to segment users, but has a confusing IA.</p>
        </div>
        <div class="image small-6 column">
          <a href="img/inkling/ca-fitbit.png" data-fluidbox><img src="img/inkling/ca-fitbit.png" alt="Inkling Design Discovery" title="Design Discovery" /></a>
          <p><strong>Fitbit</strong> is an interesting consumer analogy that has a goal to motivate users.</p>
        </div>
    </div>
    <div class="row">
    	<div class="image small-12 column">
    		<a href="img/inkling/ca-square.png" data-fluidbox><img src="img/inkling/ca-square.png" alt="Inkling Design Discovery" title="Design Discovery" /></a>
    		<p><strong>Square Insights</strong> excels in visual design, focus on real business problems, but also struggles with the perfect IA.</p>
    	</div>
    </div>
  </section>
  <section>
  	<div class="row column small-centered">
  		<h1 class="text-center large-type">Sketch Discovery</h1>
  		<p class="text-center">Based on generative research findings, competitive analysis, and team discussions, I explored a dozen ideas focused on solving the business problems we encountered.</p>
  	</div>
  	<div class="row">
  		<ul data-orbit>
  			<li>
  				<img src="img/inkling/1.jpg" />
  				<div class="orbit-caption">
  					How might users access Inkling Analytics?
  				</div>
  			</li>
  			<li>
  				<img src="img/inkling/8.jpg" />
  				<div class="orbit-caption">
  					Mint inspired a goal-based approach and alerts when thresholds are met.
  				</div>
  			</li>
  			<li>
  				<img src="img/inkling/2.jpg" />
  				<div class="orbit-caption">
  					How might we summarize data so users can make decisions at a glance?
  				</div>
  			</li>
  			<li>
  				<img src="img/inkling/4.jpg" />
  				<div class="orbit-caption">
  					What's the right model for navigating data granularity?
  				</div>
  			</li>
  			<li>
  				<img src="img/inkling/5.jpg" />
  				<div class="orbit-caption">
  					How will the user filter dimensions and metrics?
  				</div>
  			</li>
  			<li>
  				<img src="img/inkling/6.jpg" />
  				<div class="orbit-caption">
  					Explorations in layout and level of data.
  				</div>
  			</li>
  			<li>
  				<img src="img/inkling/7.jpg" />
  				<div class="orbit-caption">
  					Concepts exploring how users might navigate between metrics.
  				</div>
  			</li>
  			<li>
  				<img src="img/inkling/9.jpg" />
  				<div class="orbit-caption">
  					Traditional dashboard concepts including a BI dashboard and funnel metrics.
  				</div>
  			</li>
  		</ul>
  	</div>
  </section>
  <section>
  	<div class="row column small-centered">
  		<h1 class="text-center large-type">IA</h1>
  		<p class="text-center">Knowing that useful data could be overwhelming, I encountered an IA 
that would help users grasp a high level overview before diving into details.</p>
  	</div>
  	<div class="row small-12 medium-6 small-centered column">
  		<a href="img/inkling/ia.png" data-fluidbox><img src="img/inkling/ia.png" alt="Information Architecture" title="IA" /></a>
  	</div>
  </section>

  <section class="design-highlight">
  		<div class="row column small-centered">
	      <h1 class="text-center large-type">Design Validation</h1>
	      <p class="text-center">After reviewing design discovery output internally and testing externally, I created another round of designs that started to address the layout, navigation of data, and visualization of data.</p>
      </div>
      <div class="row">
        <div class="image column">
          <a href="img/inkling/design-validation.png" data-fluidbox><img src="img/inkling/design-validation.png" alt="Inkling Design Validation" title="Design Validation" /></a>
        </div>
      </div>
      <div class="row">
      	<div class="small-4 column">
      		<h4>Summarize data</h4>
      		<p>Design reviews and user feedback from this mid-fidelity round suggested a need to see more summarized views of the metrics rather than seeing raw percentages in the sidebar.</p>
      	</div>
      	<div class="small-4 column">
      		<h4>The right metrics</h4>
      		<p>These were indeed the metrics users needed to see and the correct dimensions (roles, location, titles) to group by for training managers to get their job done.</p>
      	</div>
      	<div class="small-4 column">
      		<h4>Information Architecture</h4>
      		<p>In general, this type of IA and layout tested well against other concepts: an overview to start, page summary, and actionable lines of data that dive into more granularity.</p>
      	</div>
      </div>
  </section>

  <section class="design-highlight dark-bg">
  	<div class="row column small-centered text-center">
  		<h1 class="large-type">Design Output</h1>
  		<p>The final output of the design focuses on one key metric of active readership and allows users to filter to various metadata about users that they’ve provided to Inkling.</p>
  	</div>
  	<div class="row">
  		<div class="image column">
          <a href="img/inkling/design-output.png" data-fluidbox><img src="img/inkling/design-output.png" alt="Inkling Design Output" title="Design Output" /></a>
      </div>
  	</div>
  	<div class="row">
  		<div class="small-4 column">
  			<h4>Focus on active readers</h4>
  			<p>We narrowed scope to focus on the fundamental metric of active readers. Every customer has this data and would benefit from it either as a new customer or a long standing one.</p>
  		</div>
  		<div class="small-4 column">
  			<h4>Group by custom dimensions</h4>
  			<p>Across almost all customers, we heard a consistent need to compare activity across different groups of people. Many wanted to group by: geography, role, and department. </p>
  		</div>
  		<div class="small-4 column">
  			<h4>Download raw data</h4>
  			<p>While our users valued seeing analytics within Inkling, they also needed the ability to integrate Inkling data with other business data that Inkling didn’t have access to. So, we included a link to download a raw CSV.</p>
  		</div>
  	</div>
  </section>

  <section class="grey-bg">
  	<div class="row column small-centered text-center">
  		<h1 class="large-type">Filtering titles</h1>
  		<p>Users needed a quick way to select Inkling titles they wanted to see data for. After a dozen other concepts, I landed on this auto-complete list and created a detailed spec for each state.</p>
  	</div>
  	<div class="column small-centered">
  		<img style="box-shadow: none;" src="img/inkling/spec-sheet.png" alt="Spec sheet" title="Spec sheet" />
  	</div>
  </section>

  <section>
  	<div class="row small-centered text-center">
  		<h1 class="large-type">Date selection</h1>
  		<p>Users also needed a quick and easy way to choose dates or a date range. This concept includes a fast way to select common ranges like the “last 7 days.”</p>
  	</div>
  	<div class="row small-centered text-center">
  		<a href="img/inkling/date-filter.png" data-fluidbox><img src="img/inkling/date-filter.png" alt="Date filter" title="Date filter" /></a>
  	</div>
  </section>
  <section class="design-highlight">
  	<div class="row small-centered">
  		<h1 class="large-type text-left">Continued Work</h1>
  	</div>
  	<div class="row small-centered">
  		<div class="medium-4 column">
  			<h4>Future Opportunities</h4>
  			<p>We’re still learning about the user’s evolving data needs and how Inkling fits into their business intelligence strategy. Our sales teams and customers success teams are working with prospects and customers to evaluate their data needs.</p>
  		</div>
  		<div class="medium-4 column">
  			<h4>Evolving Metrics</h4>
  			<p>As customers gain more users and more data, different metrics become more valuable. Search metrics, for example, will let content creators know what unwritten topics are most desired. </p>
  		</div>
  		<div class="medium-4 column">
  			<h4>Improving the Process</h4>
  			<p>This unique and challenging project gave us insight into how to design data products for our customers. While not perfect, we now understand the importance of data prototyping early with sample data.</p>
  		</div>
  	</div>
  </section>


<?php endblock() ?>
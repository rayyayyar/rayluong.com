<!doctype html>
<html class="no-js" lang="en">
  <?php include('head.php'); ?>

  <body id="dp-charting" class="project">
    <?php include('nav.php'); ?>

    <div class="cover">
      <div class="row">
        <div class="small-8 small-centered columns">
          <h4 class="light-text">DataPad</h4>
          <h1>Charting</h1>
        </div>
      </div>
    </div>

    <div class="row main-content">
      <div class="small-8 small-centered columns">
<!--    Task and Problem-->
        <section class="overview">
          <div class="brief">
            <h6>Overview</h6>
            <p>In roughly two months, we designed and built a feasible solution that would seed the growth of one of the most powerful web-based data visualization tools out there.</p>
            <h6>Role</h6>
            <p>As the core of design at DataPad, I was responsible for initial research, design principles, early concepts, interaction details, and visual design.</p>

            <h6>Goals</h6>
            <p>I aimed to maintain a balance between flexibility in expressing data (i.e. "expressiveness") and ease of use for both beginners and experts. Our longer vision sought to empower anyone to explore data at the speed of thought.</p>
          </div>
        </section>

<!--    Solution-->
        <section class="solution">
          <h3 class="text-center">Charting</h3>
          <div class="row">
            <div class="image column">
              <img src="img/charting-solution/charting.gif" >
              <div class="caption large-3"><strong>The basic interactions for creating a simple chart</strong>. I designed the chart to include both drag and drop as well as type-ahead interactions.</div>
            </div>
          </div>
          <div class="row">
            <div class="image column">
              <img src="img/charting-solution/charting-anim.gif">
              <div class="caption large-3"><strong>One of our final cuts (deployed) of DataPad's charting UI.</strong> Our front-end ninja, <a href="https://twitter.com/arnebech">Arne Bech</a>, and I worked closely together to iterate on interaction details. The end result came very close to the original designs.</div>
            </div>
          </div>
        </section>

        <hr />

        <section>
          <h3 class="text-center">Before my time</h3>
          <p>Before I put my hands into the product, the team had a rough prototype built — a "pipeline to the backend" as I recall our CEO, <a href="https://twitter.com/wesmckinn">Wes</a>, humbly describing it.</p>
          <div class="row">
            <div class="image column">
              <img src="img/charting-old/charting-it-01.png">
              <div class="caption large-3"><strong>Very early charting UI concept (sans design)</strong>.</div>
            </div>
          </div>
          
          <div class="row">
            <div class="image column">
              <img src="img/charting-old/charting-it-03.png">
              <div class="caption large-3"><strong>Another early prototype</strong>. This was a step forward, but still not explicit enough. It was hard to predict how data would be mapped onto a chart.</div>
            </div>
          </div>
        </section>  

        <hr />
        <section>
          <h3 class="text-center">Light Research Into Existing Charting Tools</h3>
          <p>I started the process with some academic reading, exploration of existing charting tools, and discussions about what's best for DataPad. The most important overarching finding was this:</p> <blockquote>Many existing visualization tools focus too much on helping users decide <strong>what</strong> the data should look like versus helping them explore answers to their business or research questions.</blockquote> <p>As business and research questions become more complex, it becomes more important for tools to automatically make the basic decisions (e.g.  what colors should I use to represent different countries? or should I use a line chart or a bar chart?). Of the existing visualization tools I looked at, only a handful came close to addressing this kind of problem: Tableau, Lumira, Platfora, and Microstrategy. In the end, we borrowed from Tableau's visualization principles, but remained consistent with both DataPad's visual design language and existing charting engine.</p>
          
        </section>

        <section>
          <h3 class="text-center">Initial Concepts</h3>
          <p>After initial review of existing tools in the market, I began exploring rough concepts through sketching and visual mocks.</p>
<!--
          <div class="image column">
            <img src="img/charting-iterations/charting-wip-00-blank.png">
            <p class="caption large-3">In terms of interaction design and visualization model, these initial wireframes did not deviate drastically from the original prototype.</p>
          </div>
          <div class="image column">
            <img src="img/charting-iterations/charting-wip-01-vis.png">
          </div>
-->
          <div class="row">
            <div class="image column">
              <img src="img/charting-iterations/charting-wip-02-more.png">
              <div class="caption large-3"><strong>Early mock</strong>. I'd removed some elements and simplified others to see how it would compare to the early prototype. Here, chart types are represented by icons, the chart canvas background is white for greater contrast, and the dropdown to select a dataset is removed. I moved on from this to explore more drastic interaction design differences from our initial prototype.</div>
            </div>
          </div>

          <div class="row">
            <div class="image column">
              <img src="img/charting-iterations/charting-pivot.gif">
              <div class="caption large-3"><strong>The Pivot Table Concept</strong> borrowed visualization principles from Tableau. This was a strong candidate for design since it's explicit, predictable, and flexible, but proved too ambitious for our development timeline. </div>
            </div>
          </div>

          <div class="row">
            <div class="image column">
              <img src="img/charting-iterations/charting-wip-pivot-heatmap.png">
              <div class="caption large-3"><strong>Pivot Table Heatmap</strong>. This variation on the pivot table shows a different layout and a heatmap showing amount of contribution across cities.</div>
            </div>
          </div>
          
          <div class="row">
            <div class="image column">
            <img src="img/charting-sketches/charting-sketch-00.jpg">
            <div class="caption large-3"><strong>Tooltips for Chart Types</strong>. Early sketches exploring the concept of chart type tooltips to explain when to use each type and what's needed (e.g. one dimension and one measure) to generate each type. While the team felt this was useful, it unfortunately did not find a place in our development timeline.</div>
            </div>
          </div>

          <div class="row">
            <div class="image column">
            <img src="img/charting-iterations/charting-wip-03-fieldssidebar.png">
            <div class="caption large-3"><strong>A close mock-up to the final</strong>. Aside from visual details — mainly the floating X and Y inputs — this was a close iteration to the final design. I decided to move filters to the sidebar to place more emphasis on the chart and to allow better alignment filters when they are added.</div>
            </div>
          </div>

          <hr/>
          <h3 class="text-center">Sketching Microinteractions</h3>
          <p>As the product progressed, we discovered new needs like letting users specify whether a token was a dimension (independent variable) or a measure (dependent variable).</p>
          
          <div class="row">
            <div class="image column">
            <img src="img/charting-sketches/charting-menu-sketch-00.jpg">
            <div class="caption large-3"><strong>Microinteraction sketches of the token menu</strong>. These sketches of the "token menu" explore ways to allow the user to set a token to either a dimension or a measure.</div>
            </div>
          </div>

          <div class="row">
            <div class="image column">
            <img src="img/charting-sketches/charting-menu-sketch-02.jpg">
            </div>
          </div>

          <div class="row">
            <div class="image column">
              <img src="img/charting-solution/charting-tokenmenu00.png">
              <div class="caption large-3"><strong>About to Drop a "Token"</strong>.</div>
            </div>
          </div>

          <div class="row">
            <div class="image column">
              <img src="img/charting-solution/charting-tokenmenu01.png">
              <div class="caption large-3"><strong>Tabbed Token Menu</strong>. This type of menu was chosen over alternatives to emphasize the two very different options of dimension versus measure.</div>
            </div>
          </div>

          <div class="row">
            <div class="image column">
              <img src="img/charting-solution/charting-tokenmenu02.png">
              <div class="caption large-3"><strong>Setting Limit in Submenu</strong></div>
            </div>
          </div>

          <div class="row">
            <div class="image column">
              <img src="img/charting-solution/charting-tokenmenu03.png">
              <div class="caption large-3"><strong>Changed from a Dimension to Measure</strong></div>
            </div>
          </div>

        </section>
        <hr />
        <section>
          <h3 class="text-center">Charting a Path to Success</h3>
          <p>Design had set out to build the foundation for a web-based charting tool expressive enough to visualize data in different ways and explicit enough that results were predictable for both beginner and expert users. While we did not have the opportunity to conduct extensive testing on the tool, the informal sessions we did have with users gave us some insight to how we should have progressed. Some users tried to create certain visualizations that were not yet feasible. To design around these limitations, tooltips for existing and "coming soon" chart types might have helped. Online support or a feature request would help keep track of what types users might need (we used <a href="http://www.intercom.io">Intercom</a> for this).</p>
          <p>The main issues with DataPad's charting tool were associated with its unpredictability. Our charting engine was making some assumptions about how to best represent plotted data. While we were well on our way to making better assumptions and forming a more consistent framework for how data gets plotted, we did not manage to get there in the final cut. If design had continued, one key improvement would have included a tooltip wizard for each chart type (not unlike Tableau's) to guide users in making better visualization decisions.</p>
        </section>
        <hr />
      </div>
    </div>

    <?php include('scripts.php'); ?>
    
    <footer>
      <div class="row">
        <a href="#">
          <div class="small-8 small-centered columns text-right">
            <h4>Next Project &#8594;</h4>
            <p class="light-text">Dashboarding</p>
          </div>
        </a>
      </div>
    </footer>

    <?php include('tm.php'); ?>
    
  </body>
  
  
</html>

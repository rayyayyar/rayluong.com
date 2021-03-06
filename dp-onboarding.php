<?php
  $project_id = "dp-onboarding";
  $cover_style = "dark-cover";
  $company = "DataPad";
  $title = "Onboarding";
  $next_project = "Blippy (2012)";
  $next_project_address = "blippy";
  $columns = "8";
  include 'project-template.php' ?>

<?php startblock('main') ?>
  <section class="overview">
    <div class="brief">
      <h6>Overview</h6>
      <p>Create a basic onboarding flow for new users.</p>
      <h6>Role</h6>
      <p>I completed an end-to-end design process starting with research of existing patterns, flow diagramming, sketches, prototyping via InVision, user testing.</p>
      <h6>Goals</h6>
      <ul>
        <li>Help users get to the most valuable parts of the app in less than 4 minutes. For this round of design, I chose the charting tool as the most valuable part of the app.</li>
        <li>Allow users to quickly connect and share data.</li>
        <li>Teach users how to use DataPad to achieve their business goals.</li>
        <li>Allow users to watch a brief video at some point to learn more about how to use DataPad.</li>
    </ul>
    </div>
  </section>
<!--    Solution-->
  <section class="solution">
    <div class="row">
      <div class="image column">
        <img src="img/onboarding-solution/onboarding-00signup.png">
        <div class="caption large-3"><strong>DataPad Landing Page</strong>. This version of DataPad's landing page (copy + layout) was designed by our  Director of Product <a href="https://twitter.com/luckymethod">Luca Candela</a>.</div>
      </div>
    </div>
    <div class="row">
      <div class="image column">
        <img src="img/onboarding-solution/onboarding-01signup.png">
        <div class="caption large-3"><strong>Sign Up Modal</strong>. I designed our first sign-up modal for DataPad beta to balance a quick and simple registration form for users with DataPad's need for information about our prospective users.</div>
      </div>
    </div>
    <div class="row">
      <div class="image column">
        <img src="img/onboarding-solution/onboarding-02signup.png">
      </div>
    </div>
    <div class="row">
      <div class="image column">
        <img src="img/onboarding-solution/onboarding-03signup.png">
        <div class="caption large-3"><strong>Confirmation Required</strong>. Our initial process for beta involved picking the most appropriate users — people who would get high value from DataPad and were willing to provide meaningful feedback throughout our beta. We initially used this screen to let the user know we'd send them an invite soon.</div>
      </div>
    </div>
    <div class="row">
      <div class="image column">
        <img src="img/onboarding-solution/onboarding-01-setup.png">
        <div class="caption large-3"><strong>Onboarding After Sign-Up</strong>. After receiving a link to join, users would walk through a series of screens.</div>
      </div>
    </div>
    <div class="row">
      <div class="image column">
        <img src="img/onboarding-solution/onboarding-responsive.gif">
        <div class="caption large-3"><strong>Oooh, stretchy</strong>. From our Google Analytics data, we noticed that our prospective users would have a variety of screen sizes. It was important to design onboarding with all sizes in mind — I used <a href="http://www.antetype.com/">Antetype</a> to convey resizing behavior.</div>
      </div>
    </div>
    <div class="row">
      <div class="image column">
        <video width="100%" controls>
          <source src="img/onboarding-solution/onboarding.mp4" type="video/mp4">
        </video>
        <div class="caption large-3"><strong>My Narrated "Video Spec"</strong>. For this particular story (onboarding), I created a screen recording of myself walking through an InVision prototype, narrating interaction design details and intent. This was meant to serve as a spec that developers or future designers could reference anytime. </div>
      </div>
    </div>

    <div class="row">
      <div class="image column">
        <img src="img/onboarding-solution/onboarding-02-video.png">
        <div class="caption large-3"><strong>Updated "Choose an Option Screen"</strong>. I added a few elements to this view: an optional brief video to help users quickly understand the product, the home feed subdued in the background, and a clearer division between the options.</div>
      </div>
    </div>
  </section>
  <hr />
  <!--Process-->
  <section>
    <h2>My Process Began With Research</h2>
    <p>To begin my work on onboarding, I compared onboarding designs from a variety of web products. Since there were nearly an infinite number of ways to onboard users into a web product, it was important to be mindful of what these products were optimizing for and how their pieces might integrate with DataPad's onboarding. The following were recurring themes I picked up throughout all the products I evaluated:</p>
    <ol>
      <li>
        <p><strong>How might we teach users how to use the product using the product itself (i.e. without a manual)?</strong> This is challenging for a product (enterprise or social) that has no users and no content. Almost all web products show placeholder elements (dotted line boxes) for empty content. Almost all web products use sample content. An old version of Basecamp, for instance, uses a sample project to show users what projects are used for. For DataPad, it was providing sample datasets to analyze.</p>
        <div class="row">
          <div class="image column">
            <img src="img/onboarding-solution/onboarding-process-samples.png">
            <div class="caption large-3"><strong>Starting users off with sample datasets</strong>. This proved to be immensely useful for users, who generally didn't want to dig around for a small dataset to play with.</div>
          </div>
        </div>
        </li>
      <li>
        <p><strong>How might we show value as soon as possible?</strong> Many products were able to onboard users and show the most useful bits in less than a minute. I'd venture to say it's easier to do this for simpler products. Trello takes you right away to the basic interactions of creating boards using its own product. It's much more effective to show value at the same time you're teaching users how to use the product. For DataPad, it was important to gather minimum information and show them our strongest feature: <a href="datapad-charting.html">charting</a>.</p>
        <div class="row">
          <div class="image column">
            <img src="img/onboarding-solution/onboarding-process-empty-dataset.png">
            <div class="caption large-3"><strong>Hand holding to the most valuable part (charting)</strong>. We nudged users to start creating charts right away since this was the most powerful part of DataPad's product. </div>
          </div>
        </div>
      </li>
      <li>
        <p><strong>How might we do the above without getting in the way?</strong> Good onboarding designs ask for the minimum amount of information from the user in order to provide the best tailored experience for the rest of their journey. They allow scaffolds to fall away at the right places. They let the users who know what exactly what they want to do to have their freedom. For others, they provide the right balance of options in the beginning and user test as the product evolves.</p>
        <div class="row">
          <div class="image column">
            <img src="img/onboarding-solution/onboarding-process-video-modal.png">
            <div class="caption large-3"><strong>Providing minimal options</strong>. We made some initial assumptions about what users wanted to do, then tested.</div>
          </div>
        </div>
      </li>
    </ol>

<!-- Research Notes
    <div>
      <div class="collapse-toggle">Here are the rough notes I took of various web products evaluated by useronboard.com.</div>
      <div class="collapsed">
        <h6>Tumblr</h6>
        <ul>
          <li>Uses dotted placeholder containers to indicate future content</li>
          <li>Focuses first on getting you to follow five blogs</li>
          <li>Allows you to skip the suggested "follow five"</li>
          <li>Uses spotlighting to focus on the next thing</li>
          <li>Immediately lets you sign in after signup (email confirmation is still sent)</li>
          <li>Pushes mobile app (with option to opt out) before letting user explore</li>
          <li>Puts user into app to start onboarding</li>
          <li>Prompts for avatar</li>
        </ul>

        <h6>Trello</h6>
        <ul>
          <li>Immediately lets you sign in after signup (email confirmation is still sent)</li>
          <li>The content is the tutorial</li>
          <li>Uses Trello as a member so the activity stream is repopulated.</li>
          <li>Uses the product as a to-do list for the user</li>
          <li>Puts user into app to start onboarding</li>
          <li>Uses gravatar</li>
        </ul>

        <h6>Quora</h6>
        <ul>
          <li>"Emerald City in the distance" shows the landing UI behind the onboarding modal</li>
          <li>Uses unambiguous commands + associated benefits</li>
          <li>Once on boarded after signing up, choosing topics, adding friends, shows to-do list on the right with already-completed items</li>
          <li>Fails to fist bump user for finishing to-do items </li>
          <li>Uses a separate modal for first onboarding steps, then uses the app to teach user</li>
        </ul>

        <h6>InVision</h6>
        <ul>
            <li>Uses a modal on top of app UI to onboard users</li>
            <li>Gives sample screens in case user has no screens handy</li>
            <li>Includes sample projects</li>
            <li>Preloads activity screen so there's no "There's nothing here"</li>
            <li>Uses one-time tooltip helpers to point out options in project view</li>
            <li>Drops you right into a project (demo or your own) right after onboarding</li>
            <li>Uses default avatars (gravatar)</li>
            <li>After sign-up, presents two options to user: create a project or explore the app</li>
        </ul>

        <h6>BASECAMP</h6>
        <ul>
          <li>Uses a full screen as the first view before dropping into the app</li>
          <li>Provides a sample project</li>
          <li>Shows placeholder objects for where projects will show up</li>
          <li>Uses default avatars</li>
        </ul>

        <h6>MURALLY</h6>
        <ul>
          <li>On entrance, very focused action to get started with a new mural</li>
          <li>Sample murals are provided in the sidebar</li>
          <li>A video modal shows up on the first mural creation, with option to close</li>
          <li>Progress indicator is shown for a to-do list http://d.pr/i/cPlu</li>
          <li>Each item in the to-do list when clicked, spotlights the action http://d.pr/i/fOa7.</li>
        </ul>
      </div>
    </div>
-->
<!--          end research notes-->
  </section>

<!--    Sketches-->
  <section>
    <h2>Rapid Sketches for Rough Flows</h2>
    <p>With an idea of what options we had for onboarding, I continued by diverging into a few different visual flows for what the user would see from initial invitation to entering the web application.</p>
    <div class="row">
      <div class="image column">
        <img src="img/onboarding-sketches/onboarding-sketch-02.jpg">
        <div class="caption large-3"><strong>Options Everywhere</strong>. This sketched flow presents a pair of options on several screens. We partly assumed that the user may want to add their own data as soon as possible.</div>
      </div>
    </div>

    <div class="row">
      <div class="image column">
        <img src="img/onboarding-sketches/onboarding-sketch-00.jpg">
        <div class="caption large-3"><strong>Sketch showing 3 options</strong>. This flow skips the initial onboarding steps that gather information from users and goes presenting three options. I decided to remove the option to "explore" as it would only take the user to a sparse home feed (we would consider it later once entire teams were onboarded).</div>
      </div>
    </div>

    <div class="row">
      <div class="image column">
        <img src="img/onboarding-sketches/onboarding-sketch-03.jpg">
        <div class="caption large-3"><strong>Sketched Flow for Invites and Permissions</strong>. This was the first flow I sketched to convey a need for users to request invites from their company admin.</div>
      </div>
    </div>
  </section>

<!--    Flows-->
  <section>
    <h2>Flow Diagrams Were Key in Specs</h2>
    <p>The following flow diagrams were crucial in making sure every edge case was accounted for. Uninvited users for existing organizations, for example, needed additional design and development work that we did not uncover until illustrating this flow.</p>
    <div class="row">
      <div class="image column">
        <img src="img/onboarding-flows/General%20Onboarding%20flow.png">
        <div class="caption large-3"><strong>Overview of the Onboarding Flow</strong>. One important design element involved handling users who signed up for an existing organization.</div>
      </div>
    </div>
    <div class="row">
      <div class="image column">
        <img src="img/onboarding-flows/Create%20an%20organization.png">
      </div>
    </div>
  </section>

  <hr />
<!--        User Research-->
  <section>
    <h2>Prototype Testing With Users</h2>
    <p>As soon as I built a clickable prototype via <a href="http://www.invisionapp.com">InVision</a>, I rounded up a handful of prospective users who had subscribed to our beta program. My basic selection criteria were: (1) based in San Francisco, (2) works in a small team of less than 15 people, (3) not a competitor, (4) actually exists. After drilling down via MailChimp and Google Refine, I was able to put together a list of representative candidates for user testing.</p>
    <p>I'd discovered several key insights just from brief conversation and through <a href="http://www.nngroup.com/articles/thinking-aloud-the-1-usability-tool/">think-aloud testing</a>.</p>
    <ol>
      <li>
        <p>A majority of users who hadn't seen the product were going to benefit from what we had already built.</p>
        <blockquote>"What I need to do is make data accessible to our data scientists and some business users in charge of marketing and overall user experience of the app. That transition has been overall clunky for us — nothing robust enough for data scientists and easy enough for the business people." — <strong>Chief Product Officer</strong></blockquote>
      </li>
      <li><p>People wanted to quickly test DataPad using demo datasets before they committed to any pricing plan or invitations.</p>
        <blockquote>"I want to get familiar with the tool, what does it look like. So, maybe that would be better with a familiar dataset but oftentimes it’s not that often that we just have a small dataset that’s ready to be loaded into something like this. It would take me like 10-15 minutes to think of a sample dataset to throw in here." - <strong>Data Engineer</strong></blockquote>
    <blockquote>"I think that having 2 options on this screen might be a little confusing. I think that having someone get started with their own data as early as possible within the process is smart because you’re getting them more looped into the product and they see their own data and everything but my first inclination would be to see how it works. That’s what I would want to do first. I wouldn’t necessarily have the right dataset to start out with or want to start out with."<strong> - Marketing Analytics Manager</strong></blockquote>
      </li>
      <li>Permissions settings were important for users who had sensitive business data.</li>
    </ol>
  </section>
  <hr />
  <section>
    <h1>Users and Team Were On Board In the End</h1>
    <p>Although the final designs presented here were approved for development, our team did not have the opportunity to implement them in time. We concluded our design process with prototype testing, which confirmed some of our assumptions and debunked others. The most important finding that dramatically changed design direction indicated that many users were already testing other products similar to DataPad and thus wanted a quick onboarding process that allowed them to quickly check to see if there was a fit for their company's needs.</p>
    <p>If time allowed for additional design, I would (beyond testing) include passive tooltips that briefly highlighted the possibilities of the app, not unlike what <a href="http://www.useronboard.com/how-slack-onboards-new-users/">Slack</a> does in their onboarding. One drastically different idea left unexplored was an idea to immediately bring users into the app (without asking for any information) and showing a minimal amount of tooltips to guide the user. Although this would have been at the cost of more dollars spent without any sort of commitment, it could have revealed much more about key features within product itself.</p>

  </section>
<?php endblock() ?>
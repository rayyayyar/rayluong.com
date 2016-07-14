<?php
  $project_id = "petlove";
  $cover_style = "dark-cover";
  $company = "Google Design Exercise";
  $title = "Pet Love";
  $columns = "12";
  include 'simple-project-template.php' ?>

<?php startblock('main') ?>
	<section class="overview row">
    	<div class="small-12 medium-5 column">
        <h6>Prompt</h6>
        <p>Pet Adoption: Millions of animals are currently in shelters and foster homes awaiting adoption. Design an experience that will help connect people looking for a new pet with the right companion for them. Help an adopter find a pet which matches their lifestyle, considering factors including breed, gender, age, temperament, and health status.</p>
      </div>

      <div class="small-12 medium-5 column">
        <h6>Process</h6>
        <p>I split my process into phases: <strong>research</strong>, <strong>synthesis</strong> and <strong>design</strong>. The early phases included user research, competitive analysis, and theme synthesis. In design, I drafted several user stories, explored different solutions, and created higher fidelity mocks once I was confident in the direction.
      </div>

      <div class="small-12 medium-2 column">
        <h6>Time</h6>
        <p>9 hours</p>
      </div>
  </section>

  <section>
  		<div class="row column small-centered">
	      <h1 class="text-left large-type">Research</h1>
	      <p class="text-left">My goal before designing a solution was to understand the problem space of pet adoption through user research, empathy, and acting out early stages of the process.</p>
      </div>
      <div class="row">
      	<div class="medium-4 column">
      		<h4>First, I asked friends about their adoption experiences</h4>
      		<p>Jenn, Anna, and Jinny are all young individuals. Each of them looked for pets together with their significant others. Asking about their adoption experiences helped uncover: the typical timeline of events involved in pet adoption, struggles during this process, and pet attributes people look for.</p>
      	</div>
      	<div class="medium-4 column">
      		<h4>I looked at Reddit questions about pet adoption</h4>
      		<p>Redditors adopting dogs or cats cared about common factors like which breeds are social and time commitment. One user wanted to gather advice on how to care for a dog while in college living with roommates. I came upon a questionnaire on Reddit that helped people determine what breed was right for them.</p>
      	</div>
        <div class="medium-4 column">
          <h4>I Googled potential search terms for pet adoption</h4>
          <p>Based on the research stories, I searched the web for: how to adopt a pet/dog, local pet shelters, tips for adopting a pet/dog. In the process, I discovered how-to web articles, online advice from shelters, and pet finding sites that all touched on topics from the user research.</p>
        </div>
      </div>
      <div class="row"></div>
      <div class="row">
        <div class="medium-9 column">
            <a href="img/petlove/research/spreadsheet.png" data-fluidbox><img src="img/petlove/research/spreadsheet.png" title="Jenn's spreadsheet" /></a>
        </div>
        <div class="medium-3 column">
          <p><em>After much frustration with her search, Jenn created this spreadsheet to keep track of shelters and all the animals in each.</em></p>
        </div>
      </div>

      <div class="row">
        <div class="medium-9 column">
            <a href="img/petlove/research/reddit1.png" data-fluidbox><img src="img/petlove/research/reddit1.png" title="Reddit" /></a>
        </div>
        <div class="medium-3 column">
          <p><em>A lot of questions like these crop up from first-time pet owners.</em></p>
        </div>
      </div>

      <div class="row">
        <div class="medium-9 column">
            <a href="img/petlove/research/reddit2.png" data-fluidbox><img src="img/petlove/research/reddit2.png" title="Reddit" /></a>
        </div>
        <div class="medium-3 column">
          <p><em>This Redditor is unsure about her ability to commit to care for a dog in college.</em></p>
        </div>
      </div>

  </section>
  <section>
      <div class="row column small-centered">
        <h1 class="text-left large-type">Synthesis</h1>
        <p class="text-left">Using the above user and online research, I then synthesized the data into personae, a typical timeline, themes, and competitive analysis of existing products.</p>
      </div>

      <div class="row">
        
        <div class="medium-8 column">
          <h2>Types of Adopters</h2>
          <h4>Primary: Young individual in a relationship</h4>
          <strong>Context</strong>
          <ul>
            <li>First time adopting any pet</li>
            <li>No other pets</li>
            <li>Not a lot of time, but can share pet responsibilities.</li>
            <li>Lives in a large apartment or house.</li>
          </ul>
          <strong>Life goals</strong>
          <ul>
            <li>Looking for companionship</li>
            <li>Wants to care for something together with significant other.</li>
            <li>Want to share a loving experience together, sometimes as a way to prepare them for caring for a child.</li>
          </ul>

          <strong>Experience goals</strong>
          <ul>
            <li>Wants an experience that guides helps them through their first pet adoption process.</li>
            <li>Wants a seamless experience that remembers their preferences so they don’t have to tell the system every time what they’re looking for.</li>
            <li>Wants an experience to help keep track of all the information they’ve found.</li>
          </ul>


          <h4>Secondary: Young, single urbanite individual</h4>
          <ul>
            <li>Generally like the above, but doesn’t have to make decisions with a significant other.</li>
            <li>Doesn’t have a lot of time on the weekends, but is home on weeknights.</li>
            <li>Typically lives in an apartment in a large city.</li>
            <li>Other</li>
          </ul>


      
          <h4>Older individuals</h4>
          <ul>
            <li>Looking for companionship after children recently moved out</li>
            <li>A lot of time</li>
            <li>Not super physical</li>
            <li>Individuals looking for emotional support (service animals)</li>
            <li>Work animals (conservation work, law enforcement, guard)</li>
          </ul>
        </div>
      </div>
        

      <div class="row">
        <div class="medium-8 column">
          <h2>Factors considered during pet search</h2>
          <h4>The owner’s attributes</h4>
          <ul>
            <li>Location: Urban, suburban, or rural, hot, cold?</li>
            <li>Available time</li>
            <li>Other animals / children</li>
            <li>Pet experience</li>
            <li>Age</li>
            <li>Budget</li>
            <li>Amount of travel</li>
            <li>Allergies</li>
            <li>Open to training</li>
          </ul>
          <h4>Pet attributes</h4>
          <ul>
            <li>Breed</li>
            <li>Gender</li>
            <li>Age (older dogs are more predictable)</li>
            <li>Temperament</li>
            <li>Energy</li>
            <li>Health status</li>
            <li>Cost</li>
            <li>Training involved (potty, aggression, comfort)</li>
            <li>Any malicious history</li>
            <li>Location of pickup</li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="medium-8 column">
          <h2>Typical timeline and problems</h2>
          <ol>
            <li>Intent to adopt a pet</li>
            <li>Decide on pet attributes (individually or with others). <em>Disagreements about pet preferences and responsibilities.</em></li>
            <li>Gather information about pet preferences and limitations. <em>Don’t know where to best look. There’s a lot of information and don't know what to expect.</em></li>
            <li>Gather info about how and where to adopt. <em>In more populated cities, shelters are abundant.</em></li>
            <li>Pet hunting, primarily online. <em>Photos of the pets are not always representative or useful. No way to get a sense of behavior until meeting.</em></li>
            <li>Pet speed dating at shelters. <em>Pets are not always there as expected.</em></li>
            <li>Finding The One! <em>Difficult to know how a pet will really behave 3 weeks from adoption.</em></li>
            <li>Closing logistics: purchasing, signing, getting materials, and taking home.</li>
            <li>Acclimating</li>
            <li>Pure Love!</li>
          </ol>
        </div>
      </div>

      <!-- RESEARCH THEMES -->
      <div class="row">
      <h2>Themes and Opportunities</h2>
        <div class="medium-6 column callout primary">
          <h4>The search is time consuming</h4>
          <ul>
            <li>A lot of initial decisions need to be made about pet type and commitment</li>
            <li>Can take anywhere from days to months.</li>
            <li>Online searches (e.g. petfinder) is not always reliable.</li>
            <li>Photos are not representative.</li>
            <li>The animal may be gone when you get there.</li>
            <li>Physically going to shelters to see the animal is time consuming.</li>
          </ul>
          <p><strong>Searching:</strong> There is an opportunity to save adopters time by providing the right information at the right time.</p>
        </div>

        <div class="medium-6 column callout primary">
          <h4>Time and care commitment are difficult to predict</h4>
          <ul>
            <li>How much time do I have to feed, walk, play with my pet?</li>
            <li>How much training will be involved? Do I need a professional?</li>
            <li>How much initial healthcare is involved? Spaying/neutering, shots.</li>
            <li>How active do I need to be with my pet?</li>
          </ul>
          <p><strong>Commitment:</strong> There is an opportunity to gather lifestyle and budget preferences from adopters and animal attributes to make sure adopters are ready to commit to long-term care.
        </div>
      </div>
      <div class="row">

        <div class="medium-6 column callout primary">
          <h4>It’s hard to predict how an animal will interact with a pet or child</h4>
          <ul>
            <li>"My rabbit needs a friend"</li>
            <li>Will this new pet interact well with the pet I already have?</li>
            <li>Will this new pet interact well with my kid(s) in the house?</li>
          </ul>
          <p><strong>Interaction:</strong> There is an opportunity to provide clearer information to adopters about animal temperament and ability to interact with others.</p>
        </div>

        <div class="medium-6 column callout primary">
          <h4>First time owners don’t know what to expect about adoption</h4>
          <ul>
            <li>About the adoption process</li>
            <li>About the post-adoption process</li>
            <li>About pet ownership</li>
            <li>Healthcare, breeds, food, grooming, toys</li>
          </ul>
          <p><strong>Education:</strong> There is an opportunity to provide upfront information about adopting and pet ownership for adopters so that they are not surprised by any of it.</p>
        </div>
      </div>
      <!-- END THEMES -->

      
      <div class="row">
        <h2>Current Methods</h2>
      </div>
      <div class="row">
        <h4>Craigslist</h4>
        <div class="medium-6 column">
          <a href="img/petlove/research/craigslist.png" data-fluidbox><img src="img/petlove/research/craigslist.png" title="Craigslist" /></a>
        </div>
        <div class="medium-6 column">
          <ul>
            <li>A fairly rich pool of animals to be adopted.</li>
            <li>Local.</li>
            <li>You get to meet the owner.</li>
            <li>The experience is not very organized.</li>
            <li>You don’t know the full backstory of the animal.</li>
            <li>Both parties need to trust each other enough to transact.</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <h4>Petfinder</h4>
        <div class="medium-6 column">
          <a href="img/petlove/research/petfinder.png" data-fluidbox><img src="img/petlove/research/petfinder.png" title="Petfinder" /></a>
        </div>
        <div class="medium-6 column">
          <ul>
            <li>Lets you filter by location.</li>
            <li>Adopt any animal.</li>
            <li>Pulls important data from shelters and other sources.</li>
            <li>Includes important filters like location and size.</li>
            <li>Great place to educate yourself about pets and the adoption process.</li>
            <li>You can save and share the search.</li>
            <li>Advertisements detract from the user experience.</li>
            <li>A search for dogs in the area results in an overwhelming 1,577 results.</li>
            <li>Some photos don’t show what the dog looks like.</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <h4>Adoptapet</h4>
        <div class="medium-6 column">
          <a href="img/petlove/research/adoptapet.png" data-fluidbox><img src="img/petlove/research/adoptapet.png" title="Adopt a Pet" /></a>
        </div>
        <div class="medium-6 column">
          <ul>
            <li>Has links to learn about adoption and pet care.</li>
            <li>Users can send rescue groups a message to ask a question.</li>
            <li>On pet pages, some rescue groups include an “About Us” and adoption process steps.</li>
            <li>Rescue groups have their own profile pages that show other pets at the rescue.</li>
            <li>The first search gives me a pop up modal asking me to sign up.</li>
            <li>UI is a bit overwhelming as there’s a lot of information to parse.</li>
            <li>There isn’t a great way to refine my search when I get to the results page.</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <h4>All Paws</h4>
        <div class="medium-6 column">
          <a href="img/petlove/research/allpaws.png" data-fluidbox><img src="img/petlove/research/allpaws.png" title="Craigslist" /></a>
        </div>
        <div class="medium-6 column">
          <ul>
            <li>A fairly rich pool of animals to be adopted.</li>
            <li>UI is very simple and easy to understand.</li>
            <li>First few steps is easy; there’s focus on just a few fields.</li>
            <li>You can save searches and have AllPaws alert you when new pet matches open up.</li>
            <li>Search filtering is easy and always visible.</li>
            <li>Shelters have profiles listing contact info and other pets.</li>
            <li>Photos aren’t always representative or present.</li>
            <li>Shelter profile links aren’t obvious.</li>
            <li>While there is a lot of data to filter on, I don’t necessarily know which to pick.</li>
          </ul>
        </div>
      </div>
      <!-- END CURRENT METHODS -->

  <section>
    <div class="row column small-centered">
      <h1 class="text-left large-type">Design Discovery</h1>
      <p class="text-left">Synthesizing the raw research into personae, themes and typical timeline led me to start initial design discovery through key questions, sketches, and flows.</p>
    </div>

    <div class="row">
      <h2>Product Questions</h2>
      <ul>
        <li><strong>Which persona should this focus on?</strong></li>
        Young individual co-owning a pet as this is what the research focused on. I’m also assuming there is more work upfront to gather consensus on what type of pet to adopt, making a tool like this more valuable.<br /><br />
        <li><strong>Should this project focus on all animals or just cats and dogs?</strong></li>
        The initial assumption is that the design can accommodate for all animals without taking away from the experience.<br /><br />
        <li><strong>One pet or multiple pets?</strong></li>
        All users in research were looking for a single pet, but the design should be able to accommodate for multiple.<br /><br />
        <li><strong>Shelters only or shelters + people?</strong></li>
        There was concern from multiple users about adopting from non-shelters as many people elsewhere (e.g. Craigslist) are breeders or hoarders who don’t always take care of the animals.<br /><br />
        <li><strong>Should matching be completely automated or involve a human matchmaker?</strong></li>
        While it can be a stressful experience, none of the users I spoke to used anything other than the Internet and their own efforts to find a pet. Using a human matchmaker adds another dependency that might not be as reliable as an automated digital system.<br /><br />
        <li><strong>Mobile or desktop?</strong></li>
        From my conversations, most of the search experience takes place on desktop before seeing the animal. Focusing on desktop will allow for a better search experience. Mobile can be used to enhance the experience using just-in-time notifications or when adopters spend the day driving from shelter to shelter.<br /><br />
        <li><strong>(How) Will this manage adoption policies that each shelter has like a selection process or legal requirements?</strong></li>
        It may be important to add a step-by-step adoption process for each shelter, but this issue didn’t come up in research.

      </ul>
    </div>
    <div class="row">
    <h2>Matchmaking and Search Analogies</h2>
    <ul>
    <ul>
        <strong>Dating: finding romantic partners for your emotional needs</strong>
        <li>Tinder (swipe left/right)</li>
        <li>Coffee Meets Bagel (1 match a day)</li>
        <li>OkCupid</li>
    </ul>

    <ul>
      <strong>Professional matchmaking: finding professional talent or jobs</strong>
      <li>LinkedIn</li>
      <li>Recruiter tools </li>  
    </ul>

    <ul>
      <strong>E-commerce: finding the right commodities for hobbies, fashion, or living</strong>
    </ul>

    <ul>
      <strong>Real estate: finding the right home for your living needs</strong>
      <li>Airbnb</li>
      <li>Trulia</li>
      <li>LiveLovely</li>
    </ul>

    <ul><strong>Adopt a child: finding a child who needs loving support</strong></ul>
    <ul><strong>Conversational UI</strong></ul>

    </ul>
    </div>
    <!-- START COMPETITIVE ANALYSIS -->

    
      <div class="row">
        <h4>Airbnb</h4>
        <div class="medium-6 column">
          <a href="img/petlove/design/airbnb.png" data-fluidbox><img src="img/petlove/design/airbnb.png" title="airbnb" /></a>
        </div>
        <div class="medium-6 column">
          <ul>
            <li>Real estate: location based search results.</li>
            <li>You enter in a few key points of data and the system returns a bunch of results.</li>
            <li>Then you wade through the data with filters, photos, and location pins.</li>
            <li>Location based results.</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <h4>OkCupid</h4>
        <div class="medium-6 column">
          <a href="img/petlove/design/okcupid.png" data-fluidbox><img src="img/petlove/design/okcupid.png" title="Ok Cupid" /></a>
        </div>
        <div class="medium-6 column">
          <ul>
            <li>Dating: photos and match percentage</li>
            <li>You enter in a few key points of data and the system returns a bunch of results.</li>
            <li>Then you wade through the data with filters, photos.</li>
            <li>Results are photo heavy.</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <h4>Coffee Meets Bagel</h4>
        <div class="medium-6 column">
          <a href="img/petlove/design/coffee.jpg" data-fluidbox><img src="img/petlove/design/coffee.jpg" title="Coffee Meets Bagel" /></a>
        </div>
        <div class="medium-6 column">
          <ul>
            <li>You enter in a few key points of data and wait.</li>
            <li>You get one match (“deal”) per day, which expires.</li>
            <li>Yes or no decision based on photos and other attributes.</li>
            <li>Not great when you want to compare between results.</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <h4>Tinder</h4>
        <div class="medium-6 column">
          <a href="img/petlove/design/tinder.png" data-fluidbox><img src="img/petlove/design/tinder.png" title="Tinder" /></a>
        </div>
        <div class="medium-6 column">
          <ul>
            <li>Dating app: binary decision making</li>
            <li>Swipe left or swipe right to decide on a match.</li>
            <li>Two-way matching requires the other person to say yes too.</li>
            <li>Not great when you want to compare between results.</li>
          </ul>
        </div>
      </div>
      <!-- END COMPETITIVE ANALYSIS -->

      <!-- START THE STORY -->
      <div class="row">
        <h2>User Story (first draft)</h2>
        <strong>Info gathering</strong>
        <ol>
          <li>Liz has always wanted a dog, but never had the right living situation. Now that she and her boyfriend are in a larger apartment that allows dogs, she’s looking for one to adopt.</li>
          <li>She signs up on PetLove to start her first step in the adoption process.</li>
          <li>PetLove greets her conversationally, asking a few upfront questions about what kind of animal she’s looking to adopt.</li>
          <li>When Petlove has a good sense of Liz’s lifestyle and preferences, Liz is given suggestions of who and where to adopt.</li>
        </ol>

        <strong>The Search</strong>
        <ol>
          <li>Based on her responses, PetLove shows Liz a list of relevant pets that are up for adoption. She browses through the list to ‘favorite’ ones she likes (based on breed and looks preferences).</li>
          <li>After about 20 minutes of this, she shares the favorites list with her boyfriend Jon, who can also add to the list.</li>
          <li>She plans to go pet shopping over the weekend, but until then, she sets up search alerts that will let her know when new animals become available for adoption during the week.</li>
          <li>Liz adds Jon to the search alerts so that both of them can get updates on new animal matches.</li>
          <li>Liz and Jon are notified about several new dogs up for adoption. </li>
          <li>Liz sends the shelter a message to confirm and ask some questions that weren’t on the profile. This message is sent via contact info listed.</li>
        </ol>

        <strong>Adoption Day(s)</strong>
        <ol>
          <li>Before she visits, she’s able to call ahead to confirm that dogs are still there and up for adoption.</li>
          <li>When she gets there, she uses PetLove to get a list of the dogs — including names and breeds — she favorited for that shelter.</li>
          <li>Using PetLove, she finds a dog who’s the right size, friendly, and just what she wanted!</li>
          <li>After signing and paying for adoption fees, she lets PetLove know that she just adopted. This lets the app know that she’s ready to move on to the next step of caring for and acclimating her new pet.</li>
        </ol>
      </div>
      <!-- END STORY -->
  </section>

  <!-- SKETCHES -->
  <section>
    <div class="row column small-centered">
      <h1 class="text-left large-type">Sketches</h1>
      <p class="text-left">After defining the problem space and exploring the possible design directions through questions, analogies, and story outlining, I spent some time sketching to explore both concepts for info gathering and a rough flow.</p>
    </div>
    <div class="row">
      <a data-orbit-link="output-1">
        <div class="small-2 column">
          <img src="img/petlove/design/sketch00.jpg" alt="Pet Love Design Sketch" title="Design Output" />
        </div>
      </a>
      <a data-orbit-link="output-2">
        <div class="small-2 column">
          <img src="img/petlove/design/sketch01.jpg" alt="Pet Love Design Sketch" title="Design Output" />
        </div>
      </a>
      <a data-orbit-link="output-3">
        <div class="small-2 column">
          <img src="img/petlove/design/sketch02.jpg" alt="Pet Love Design Sketch" title="Design Output" />
        </div>
      </a>
      <a data-orbit-link="output-4">
        <div class="small-2 column">
          <img src="img/petlove/design/sketch03.jpg" alt="Pet Love Design Sketch" title="Design Output" />
        </div>
      </a>
      <a data-orbit-link="output-5">
        <div class="small-2 column">
          <img src="img/petlove/design/sketch04.jpg" alt="Pet Love Design Sketch" title="Design Output" />
        </div>
      </a>
      <a data-orbit-link="output-6">
        <div class="small-2 column">
          <img src="img/petlove/design/sketch05.jpg" alt="Pet Love Design Sketch" title="Design Output" />
        </div>
      </a>
    </div>
    <div class="row">
      <ul data-orbit data-options="animation:fade; autoplay:false; animation_speed:200;timer:false;">
        <li data-orbit-slide="output-1">
          <img src="img/petlove/design/sketch00.jpg" alt="Pet Love Design Sketch" title="Design Output" />
          <div class="orbit-caption">
            Concepts for how to gather info from adopters.
          </div>
        </li>
        <li data-orbit-slide="output-2">
          <img src="img/petlove/design/sketch01.jpg" alt="Pet Love Design Sketch" title="Design Output" />
          <div class="orbit-caption">
            Concepts for how to gather info from adopters.
          </div>
        </li>
        <li data-orbit-slide="output-3">
          <img src="img/petlove/design/sketch02.jpg" alt="Pet Love Design Sketch" title="Design Output" />
          <div class="orbit-caption">
            Concepts for how to gather info from adopters.
          </div>
        </li>
        <li data-orbit-slide="output-4">
          <img src="img/petlove/design/sketch03.jpg" alt="Pet Love Design Sketch" title="Design Output" />
          <div class="orbit-caption">
            Rough user flow from step 1 of answering key questions to adoption day.
          </div>
        </li>
        <li data-orbit-slide="output-5">
          <img src="img/petlove/design/sketch04.jpg" alt="Pet Love Design Sketch" title="Design Output" />
          <div class="orbit-caption">
            Rough user flow from step 1 of answering key questions to adoption day.
          </div>
        </li>
        <li data-orbit-slide="output-6">
          <img src="img/petlove/design/sketch05.jpg" alt="Pet Love Design Sketch" title="Design Output" />
          <div class="orbit-caption">
            Rough user flow from step 1 of answering key questions to adoption day.
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- <section>
    <div class="row column small-centered">
      <h1 class="text-left large-type">Principles and Vision</h1>
      <p class="text-left">With a more defined problem statement and design ideas, I set out with a goal: to provide a happy, loving relationship for both the adopter and animal by matching the preferences and lifestyle of the potential owner with attributes of animals awaiting adoption.</p>
    </div>
    <div class="row">
      <div class="medium-8 column">
      <ul>
        <li>Save time for adopters by providing them the right information at the right time, considering where in the adoption process they’re at.</li>

        <li>Gather lifestyle and budget preferences from adopters and info about animal attributes to make sure adopters are ready to commit to long-term care.</li>

        <li>Provide clearer information to adopters about animal temperament and ability to interact with others.</li>

        <li>Provide upfront information about adopting and pet ownership for adopters so that they are not surprised by any of it.</li>
      </ul>
      </div>
    </div>
  </section> -->

  <section>
  <div class="row column small-centered">
      <h1 class="text-left large-type">Higher Fidelity Designs</h1>
      <p class="text-left">Once I was confident about the right problems to solve, guiding principles, and a story to illustrate, I spent time focusing on making the experience usable and desirable.</p>
  </div>
  <!-- WIREFRAME INFO GATHER -->
  <div class="row">
    <p><strong>Our story starts here.</strong> Liz has always wanted a dog, but never had the right living situation. Now that she and her boyfriend are in a larger apartment that allows dogs, she’s looking for one to adopt. She starts on PetLove to take her first step in the adoption process.</p>
    <h3>Info gathering</h3>
    <ul data-orbit data-options="animation:fade; autoplay:false;animation_speed:200;timer:false;">
      <li data-orbit-slide="output-1">
        <img src="img/petlove/design/A00.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            PetLove greets her conversationally, asking a few upfront questions about what kind of animal she’s looking to adopt.
        </div>
      </li>
      <li data-orbit-slide="output-2">
        <img src="img/petlove/design/A01.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            Liz sees the app respond dynamically to her answers, making it fun and conversational.
        </div>
      </li>
      <li data-orbit-slide="output-3">
        <img src="img/petlove/design/A02.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            PetLove gathers as much information as possible first to make better suggestions later.
        </div>
      </li>
      <li data-orbit-slide="output-4">
        <img src="img/petlove/design/A03.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            Liz can freely skip a question if she's unsure about an answer.
        </div>
      </li>
      <li data-orbit-slide="output-5">
        <img src="img/petlove/design/A04.png" alt="Pet Love Design A" title="Design Output" />
      </li>
      <li data-orbit-slide="output-6">
        <img src="img/petlove/design/A05.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            Asking these types of questions not only helps make better suggestions, but helps Liz set up expectations for care commitment.
        </div>
      </li>
      <li data-orbit-slide="output-7">
        <img src="img/petlove/design/A06.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            A last question asks about general lifestyle on the weekend to gauge how active she is.
        </div>
      </li>
    </ul>
  </div>
  <!-- WIREFRAME RESULTS -->
  <div class="row">
    <h3>The Search (results)</h3>
    <ul data-orbit data-options="animation:fade;autoplay:false;animation_speed:200;timer:false;">
      <li data-orbit-slide="output-1">
        <img src="img/petlove/design/B00.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            After the brief questionnaire, Liz is taken to results matched specifically for her.
        </div>
      </li>
      <li data-orbit-slide="output-2">
        <img src="img/petlove/design/B01.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            She can change the natural language filters to tweak PetLove's suggestions.
        </div>
      </li>
      <li data-orbit-slide="output-3">
        <img src="img/petlove/design/B02.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            Clicking "Add filter" expands more options, including breed, behavior, health, and compatibility, to narrow down the search.
        </div>
      </li>
      <li data-orbit-slide="output-4">
        <img src="img/petlove/design/B03.png" alt="Pet Love Design A" title="Design Output" />
      </li>
      <li data-orbit-slide="output-5">
        <img src="img/petlove/design/B04.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            Liz plans to go pet shopping over the weekend, but until then, she sets up search alerts that will let her know when new animals become available for adoption during the week.
        </div>
      </li>
      <li data-orbit-slide="output-6">
        <img src="img/petlove/design/B05.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            Once she creates the alert after signing, she can come back to access saved alerts at the top.
        </div>
      </li>
    </ul>
  </div>

  <!-- WIREFRAME PET PROFILE -->
  <div class="row">
    <h3>The Search (pet profile)</h3>
    <ul data-orbit data-options="animation:fade;autoplay:false;animation_speed:200;timer:false;slide_number:false;">
      <li data-orbit-slide="output-1">
        <img src="img/petlove/design/C00.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            When Liz clicks a photo to open a pet profile, she immediately sees its attributes in a left sidebar. PetLove also shows details about why Jasmine is a good match for her.
        </div>
      </li>
      <li data-orbit-slide="output-2">
        <img src="img/petlove/design/C01.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            Before she can favorite a pet, Liz is asked to sign up with an email address and password so she can access it when she returns.
        </div>
      </li>
      <li data-orbit-slide="output-3">
        <img src="img/petlove/design/C02.png" alt="Pet Love Design A" title="Design Output" />
      </li>
      <li data-orbit-slide="output-4">
        <img src="img/petlove/design/C03.png" alt="Pet Love Design A" title="Design Output" />
        <div class="orbit-caption">
            As she returns to the results page, she now knows which pets have been added to her favorites list.
        </div>
      </li>

    </ul>
  </div>


  <div class="row">
    <h3>Adoption Day (mobile)</h3>
    <div class="medium-4 column">
        <a href="img/petlove/design/E00.png" data-fluidbox><img src="img/petlove/design/E00.png" title="" /></a>
        <p><em>Come adoption day, Liz can access her favorites list on mobile web.</em></p>
    </div>

    <div class="medium-4 column">
        <a href="img/petlove/design/E01.png" data-fluidbox><img src="img/petlove/design/E01.png" title="" /></a>
        <p><em>When Liz falls in love with Jasmine at the shelter, she can see tips for post adoption at the bottom of his profile.</em></p>
    </div>

    <div class="medium-4 column">
        <a href="img/petlove/design/E02.png" data-fluidbox><img src="img/petlove/design/E02.png" title="" /></a>
        <p><em>Tips are catered to Jasmine's breed and shows things Liz should watch out for given her preferences and lifestyle.</em></p>
    </div>
  </div>

  <div class="row">
    <h2>Design changes and scoping</h2>
    <ul>
      <strong>Initial questionnaire should ask only key questions.</strong> Questions borrowed from Reddit’s <a href="https://www.reddit.com/r/dogs/comments/4qc6lb/meta_breed_questionnaire_updated_june_2016/">breed questionnaire</a>, but slimmed it down to key questions. Doing so prevents frustrating the user from going through a long survey-like experience. Asking key questions, however, helps the system gather enough data to make better suggestions (like OkCupid).<br/><br/>
      <strong>Only request signup when necessary.</strong> As I sketched out the flow, I later realized signup isn’t necessary right off the bat. Allpaws does a successful job with this by letting users go through a search and only ask for login/signup when users actually need a login for features like favoriting.<br/><br/>
      <strong>Show why a pet result is a good match.</strong> Borrowing from OkCupid, I noticed how helpful it would be in the flow to show why a pet was a good match. I emphasized this later in the designs by using iconography and labels to indicate attributes that matched an adopter’s preferences.<br/><br/>
      <strong>Less emphasis on sharing a favorites list or search alerts.</strong> With time as constraint, I decided to scope out collaborative features. From the research, it seemed like most of the process was led by one person and any collaboration was simply a conversation.<br/><br/>
      <strong>Less focus on communication between adopter and shelters. </strong>While I’m still curious about this, I assumed it was safe to deprioritize since communication with shelters can be done over phone. I also did not want to add another burden to shelter volunteers.<br/><br/>
    </ul>
  </div>


  <div class="row">
  <h2>Visual Design</h2>
    <div class="medium-12 column">
        <a href="img/petlove/design/hifi/01.png" data-fluidbox><img src="img/petlove/design/hifi/01.png" title="" /></a>
        <p><em>Established clearer hierarchy and included "good match" attributes in each pet card. Also using iconography to more cleanly represent filters and alerts.</em></p>
    </div>
  </div>
  <div class="row">
    <div class="medium-12 column">
        <a href="img/petlove/design/hifi/02.png" data-fluidbox><img src="img/petlove/design/hifi/02.png" title="" /></a>
        <p><em>Clearer hierarchy on pet profile and added iconography for simpler representation of things like match attributes.</em></p>
    </div>
  </div>
  <div class="row">
    <div class="medium-12 column">
        <a href="img/petlove/design/hifi/04.png" data-fluidbox><img src="img/petlove/design/hifi/04.png" title="" /></a>
        <p><em>Liz accesses her favorites list at any point in the experience so she can easily call shelters to check if animals are still active.</em></p>
    </div>
  </div>
  <div class="row">
    <div class="medium-12 column">
        <a href="img/petlove/design/hifi/03.png" data-fluidbox><img src="img/petlove/design/hifi/03.png" title="" /></a>
        <p><em>Liz can group potential pets by location so she knows on adoption day which bunch she'll be visiting at each shelter.</em></p>
    </div>
  </div>

  <div class="row">
    <div class="medium-4 column">
        <a href="img/petlove/design/hifi/05.png" data-fluidbox><img src="img/petlove/design/hifi/05.png" title="" /></a>
        <p><em>Once at each shelter, Liz accesses the mobile version of PetLove to see which of her favorite pets are there.</em></p>
    </div>

    <div class="medium-4 column">
        <a href="img/petlove/design/hifi/06.png" data-fluidbox><img src="img/petlove/design/hifi/06.png" title="" /></a>
        <p><em>Scrolling down will "fix" the location name at the top.</em></p>
    </div>
    <div class="medium-4 column">
    </div>
  </div>

  </section>

  <section>
    <div class="row column small-centered">
        <h1 class="text-left large-type">Retrospective</h1>
    </div>
    <div class="row">
      <strong>As a potential user, this tool would make my adoption process easier.</strong>
      <p>If I were adopting for the first time, I think I would love to use a tool pe this. PetLove walks me through the entire process from what my preferences are, to search, and post-adoption tips. </p>
      
      <strong>The final output isn’t perfect.</strong>
      <p>There are some assumptions I’m making about how useful the initial questionnaire is. We’re optimizing for the persona of a young individual who’s adopting for the first time. If it were someone who knew exactly what they wanted, they would pely prefer to jump straight to a database of pets and start filtering. What’s missing from the design is some way to visually distinguish pets I’ve seen versus pets I haven’t. This is especially important when I return after a search alert emails me. I’m also very curious about what other data we could use to better match a pet with an owner. </p>
      
      <strong>There’s potential opportunity for research and better design.</strong>
      <p>This design focused more on the info gathering steps of the adoption process. Another problem area discovered in research was physical travel to many shelters. The main goal for Jenn was to see pet behavior and interaction before adopting. There’s opportunity here to provide that information earlier on so that people like Jenn don’t have to spend valuable time traveling when they don’t need to. Another thing I’d like to explore is how important a shelter profile is. In some of the competitive analysis, I noticed shelter profiles help adopters understand more about specific adoption policies and show other pets available at the shelter. My initial guess is that this would only be important if adoption policies vary widely between shelters. It would also be important to have for people who care deeply about the mission of a shelter (e.g. Pit Bull focused shelters).Thirdly, there is still a huge opportunity in educating the user about pets, care, and the adoption process. This was sprinkled throughout the design, both at the beginning when we show more about the breeds during the questionnaire or at the end when we teach users how to care for their pet from day 1. However, much more can be done to teach users about the differences between pet types and what those differences mean for care and commitment</p>
      
      <strong>I learned a few things in the process of going through this exercise.</strong>
      <p>Because this was a fairly new domain for me — I’ve never adopted — I felt it was especially important to conduct real user research by calling some friends. It was also a great opportunity to catch up with some old pals! In any case, I learned that there’s a deep community in the world of animals and pets. The biggest opportunity I see is leveraging the community to help more animals get adopted and adopters to be better owners. Curating data about breeds, individual behavior and history, photos, shelter information and matching with owner lifestyle/needs will greatly improve the adoption process.</p>
    </div>
  </section>


  
<?php endblock() ?>
<?php
  $project_id = "thinkspace";
  $company = "SRI International";
  $title = "Thinkspace";
  $next_project = "Inkling Analytics";
  $next_project_address = "inkling";
  $columns = "8";
  include 'project-template.php' ?>

<?php startblock('main') ?>
    <section class="overview">
      <div class="brief">

        <h6>Overview</h6>
        <p>SRI International built technology that allows high school students to pose Advanced-Placement style questions and get user appropriate explanations. We spent four months researching the dynamics of biology education and in two months, our team of four built an innovative iPad application that uses advanced AI to help students answer complex biology questions.</p>

        <h6>Role</h6>
        <p>While the team contributed to overall UX decisions and research, I was responsible for leading research protocol and process for prototyping.</p>

        <h6>Goal</h6>
        <p>Research the dynamics of biology education in high schools and, based on findings, utilize AI technology from SRI International to help students prepare for their AP Biology exam.</p>
      </div>

    </section><hr/>

  <!--    Solution-->

    <section class="solution">
      <div class="row">
        <div class="image column flex-video">
          <iframe src="//player.vimeo.com/video/107903783" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/107903783">Thinkspace</a> from <a href="http://vimeo.com/user10050658">Ray Luong</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
        </div>
      </div>
      <h3 class="text-center">Thinkspace, an iPad App That Helps Students Work Through Difficult Biology Questions</h3>
      <p>Our solution, generated from months of research and design, encompasses the spirit of Socratic Questioning in the form of an iPad application. Thinkspace takes care of the busy work of having to locate and rewrite relevant information, which allows the student to focus on forming relationships between the bits of information and extract a solution. To do this, Thinkspace provides the student with several tools such as Ask a Question, Define a Term, Add a Picture, a slide-in textbook. While using these tools, snippets of information are added to the workspace in the form of note cards. These cards can be manipulated and organized in any manner the student sees fit.</p>

      <h3 class="text-center">Key Features Optimized to Suggest Contextual Information and Make Relationships</h3>
      <p>To help students build on their current understanding of biology concepts, we included three additional features in Thinkspace. The features were created to provide extra suggestions and jumping off points that are closely tied to the content on specific cards.</p>
      <h6>Relationships</h6>
      <p>The hard part in solving biology questions is tying all of the individual concepts together to form an answer. That's why we built in a feature that reveals the relationship between two cards to help students visualize connections and reach a higher level of synthesis. To reveal relationships, a student taps and holds on a single card, then on a second card to create a text layover detailing the relationship. To permanently add this relationship to the canvas, the student taps a third finger onto the canvas. When the student lets go, all the arrows are removed except for the set relationships.</p>
      <div class="row">
        <div class="image column">
          <img src="img/thinkspace/thinkspace-relationship.png">
        </div>
      </div>

      <h6>Proximity Touch</h6>
      <p>This feature provides an exploratory mode that reveals a menu of suggested content based on nearby cards. To bring up the menu, the student can press and hold anywhere on the screen to bring up a popover menu filled with recommended questions. These questions are generated based on the content of the cards near the student's touch point. As the student moves their finger around the canvas, the popover updates itself to reflect the cards nearby. If a student sees a question they would like to explore further, they can tap on the question in the popover, which creates a new card on the canvas with the answer.</p>
      <div class="row">
        <div class="image column">
          <img src="img/thinkspace/thinkspace-proximity.png">
        </div>
      </div>

      <h6>Card Specific Suggestions</h6>
      <p>This feature prompts students with recommended questions for a particular card to provide further relevant avenues of exploration. When a card is created or selected, the card rises and a few questions on collapsed cards peek from under the selected card. These recommended questions act as jumping off points from this specific card to help develop a line of inquiry to follow to solve the question. A student can drag one of these peeking cards out from under the selected card to form a regular card with its expanded content.</p>
      <div class="row">
        <div class="image column">
          <img src="img/thinkspace/thinkspace-cardspecific.png">
        </div>
      </div>


      <h3 class="text-center">Tools Optimized to Help Consolidate Information</h3>
      <div class="row">
        <div class="image small-8 small-centered column">
          <img src="img/thinkspace/tools/question.png" class="small-centered">
          <div class="caption large-4"><strong>The Question Asking tool</strong>.
Allows students to utilize Inquire's question asking capability. Much like the QA functionality in Inquire, the student can either input a question to ask or use the suggested questions based on content in the focus question.</div>
        </div>
      </div>

      <div class="row">
        <div class="image small-8 small-centered column">
          <img src="img/thinkspace/tools/definition.png" class="small-centered">
          <div class="caption large-4"><strong>The Definition tool</strong>.
Allows students to define specific terms. These may be manually inputted by the student or selected from a list of suggested terms based on content in the focus question.</div>
        </div>
      </div>

      <div class="row">
        <div class="image small-8 small-centered column">
          <img src="img/thinkspace/tools/images.png" class="small-centered">
          <div class="caption large-4"><strong>The Images tool</strong>.
Biology is a very visual subject, which is why we thought it was essential to have this tool, which pulls relevant images from the textbook to help students visualize the concepts on the canvas.</div>
        </div>
      </div>

      <div class="row">
        <div class="image small-8 small-centered column">
          <img src="img/thinkspace/tools/notes.png" class="small-centered">
          <div class="caption large-4"><strong>The Notes tool</strong>
is a simple way for students to add their own text to a blank notecard. This becomes useful when the student wants to add ideas not present in the knowledge base.</div>
        </div>
      </div>

      <div class="row">
        <div class="image small-8 small-centered column">
          <img src="img/thinkspace/tools/textbook.png" class="small-centered">
          <div class="caption large-4"><strong>The Textbook tool</strong>
can be pulled out to reveal textbook content. When a more comprehensive explanation is needed, students can easily peek back and forth between the textbook and the Thinkspace.</div>
        </div>
      </div>
    </section>
    

    <section>
      <h3 class="text-center">Design Process</h3>
      <div class="row">
        <div class="image column">
          <img src="img/thinkspace/speeddating.JPG">
          <div class="caption large-3"><strong>Product Validation. </strong>After generating low-fidelity sketches of our initial ideas, we presented them to teachers and students to receive general feedback on pedagogical value as well as perceived engagement level.
          </div>
        </div>
      </div>

      <div class="row">
        <div class="image column">
          <img src="img/thinkspace/paperprototype.png">
          <div class="caption large-3"><strong>Paper Prototypes. </strong>To test high level interactions and navigational flow between screens, we used low-fidelity prototyping. Testing our concept using paper allowed us to cheaply and rapidly test our ideas.
          </div>
        </div>
      </div>

      <div class="row">
        <div class="image column">
          <img src="img/thinkspace/thinkaloud.JPG">
          <div class="caption large-3"><strong>Think Aloud Testing. </strong>We used a technique called think aloud to better understand the thoughts, intentions, and emotional responses to our prototypes. Having students think out loud helped us pinpoint specific issues with the prototype.
          </div>
        </div>
      </div>

      <div class="row">
        <div class="image column">
          <img src="img/thinkspace/participatory.JPG">
          <div class="caption large-3"><strong>Participatory Design. </strong>A method that involves users in the design process, we used this to brainstorm ideas in the context of a student's work and to make sure we were grounding these ideas in the needs of the students.
          </div>
        </div>
      </div>

    </section>


<?php endblock() ?>

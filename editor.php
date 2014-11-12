<?php
  $project_id = "editor";
  $cover_style = "light-cover";
  $company = "Design Exercise";
  $company_link = "";
  $title = "Editor";
  $next_project = "DataPad";
  $next_project_address = "datapad";
  $columns = "8";
  include 'project-template.php' ?>

<?php startblock('main') ?>
    <section class="overview">
      <div class="brief">
        <h6>Overview</h6>
        <p>In a personalized learning environment, a teacher individually programs what each student will be working on that day. They use the Activity Editor to discover and create activities to add to a student-facing tool called a Playlist. These activities are appropriate for the student’s level and learning style, and often relate directly to the student’s interests. Activities may be tied back to a student’s personal learning objectives. Design the Playlist Activity Editor, a tool that teachers use to build Activities for student Playlists.  Teachers will primarily use this tool in a web browser on a laptop.</p>
      </div>
    </section>

  
    <section>
      <h3>Process</h3>
      <p><strong>My process begins with an attempt to understand the core problem, ask key questions, and (in the case of a hypothetical exercise) come up with assumptions about what the teacher will want to optimize for.</strong></p>
      <p>Teachers begins with a curriculum set by her. Her goal is to provide personalized learning so that by the end of her teaching, each student will have reached their fullest learning potential. She may already have tools that allow her to create activities for students (e.g. word processing).</p
      <p><em>What's a typical timeline?</em></p>
      <ol>
        <li>Review curriculum and long term goals.</li>
        <li>Review an individual student's progress, learning objectives, interests, learning style, level.</li>
        <li>Question: What sort of activity do I need to create for this student for him/her to maximize his/her learning?</li>
        <li>Create activity for a student.</li>
        <li>Student begins activity.</li>
        <li>Student-teacher interaction throughout activity.</li>
        <li>Student finishes activity.</li>
        <li>Teacher reviews activity.</li>
      </ol>
      <br />
      <p><em>Considerations for Creating an Activity</em></p>
      <ul>
        <li>To maintain a focus on personalized learning, always show a view of (or have easy access to) the student and their information. </li>
        <li>Suggest activities for a student with this particular profile.</li>
        <li>Allow teachers to choose from suggestions or from any other activity.</li>
        <li>Allow tagging for future reference.</li>
        <li>Will a teacher want to iterate on an activity based on how students perform?</li>
      </ul>
      <br />
      
      <!-- <div class="row">
        <div class="image column">
          <a href="" data-fluidbox><img src="" alt="" title="" /></a>
          <div class="caption large-3"><strong>Some image.</div>
        </div>
      </div> -->
    </section>
    <section>
      <h3>Low fidelity</h3>
      <div class="row">
        <div class="image column">
          <a href="img/editor/lofi-1-4.jpg" data-fluidbox><img src="img/editor/lofi-1-4.jpg" alt="" title="" /></a>
          <div class="caption large-3"><strong>I sketched based on the proposed sequence and considerations, then critiqued aspects of the flow and rough concepts.</div>
        </div>
      </div>
      <div class="row">
        <div class="image column">
          <a href="img/editor/lofi-5.jpg" data-fluidbox><img src="img/editor/lofi-5.jpg" alt="" title="" /></a>
          <div class="caption large-3"><strong>Through sketching, I encountered some points that may be ambiguous. For example, there could be multiple places where the teacher can assign the exercise to multiple students.</div>
        </div>
      </div>

    </section>
    <br />
    <!--    Solution-->
    <section class="solution">
      <h3>Solution</h3>

      <p>The solution, simply called "Editor", considers past choices made by the teacher, how the student has progressed, and student learning objectives to suggest the most useful activities. The teacher can also create new activities from scratch using a set of tools. Note that the student profile is always in view for personalized teaching.</p>

      <div class="row">
        <div class="image column">
          <a href="img/editor/editor-hifi-0.png" data-fluidbox><img src="img/editor/editor-hifi-0.png" alt="" title="" /></a>
          <div class="caption large-3"><strong>I started out with an 8 column grid to optimize for both flexibility and visual rhythm.</div>
        </div>
      </div>

      <div class="row">
        <div class="image column">
          <a href="img/editor/editor-hifi-1.png" data-fluidbox><img src="img/editor/editor-hifi-1.png" alt="" title="" /></a>
          <div class="caption large-3"><strong>Teachers can select from suggested activities or create a new one.</div>
        </div>
      </div>

      <div class="row">
        <div class="image column">
          <a href="img/editor/editor-hifi-2.png" data-fluidbox><img src="img/editor/editor-hifi-2.png" alt="" title="" /></a>
          <div class="caption large-3"><strong>The editor allows inline editing for text. For more advanced tools, they can reach in the sidebar to drag and drop things like multimedia.</div>
        </div>
      </div>

      <div class="row">
        <div class="image column">
          <a href="img/editor/editor-hifi-3.png" data-fluidbox><img src="img/editor/editor-hifi-3.png" alt="" title="" /></a>
          <div class="caption large-3"><strong>Once they are done creating the exercise, teachers can preview and assign to a single student or many.</div>
        </div>
      </div>

    </section>
    
    
<?php endblock() ?>

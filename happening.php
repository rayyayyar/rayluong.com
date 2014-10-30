<?php
  $project_id = "happening";
  $cover_style = "light-cover";
  $company = "Design Exercise";
  $company_link = "";
  $title = "Happening";
  $next_project = "DataPad";
  $next_project_address = "datapad";
  $columns = "8";
  include 'project-template.php' ?>

<?php startblock('main') ?>
    <section class="overview">
      <div class="brief">
        <h6>Overview</h6>
        <p>How do you make ad hoc event coordination as convenient and comfortable as your daily routine? Detail a digital service that provides individual assistance for attendees of a group social event such as a night out for dinner and a movie.</p>
      </div>
    </section>

  
    <section>
      <h3>Process</h3>
      <p><em>What's a typical timeline of events for a social outing?</em></p>
      <ol>
        <li>Planning</li>
        <li>Purchasing Goods or Services</li>
        <li>Transportation to same spot</li>
        <li>Happening</li>
        <li>Transportation to different spots</li>
        <li>Finalize debts</li>
        <li>Revisit Moments</li>
      </ol>
      <br />
      <p><em>What happens on a typical night between a small group of friends? What questions come up before and during an event?</em></p>
      <ul>
        <li>What should we do tonight?</li>
        <li>How many people are going?</li>
        <li>Who's going?</li>
        <li>What time should we meet?</li>
        <li>Where should we meet?</li>
        <li>How do I get there?</li>
        <li>Where is everyone now?</li>
        <li>What time are the actual events?</li>
        <li>Is everyone going to all events?</li>
      </ul>
      <br />
      <p><em>Changes happen.</em></p>
      <ul>
        <li>Changes in event location or time.</li>
        <li>Looping in multiple people later.</li>
      </ul>
      <br />
      <p><em>Build for a seamless, stress free outing.</em></p>
      <ul>
        <li>Provide contextual information based on time and location.</li>
        <li>Notify relevant people when changes happen.</li>
        <li>Give new members the most relevant updates.</li>
        <li>Use standard messaging as a fallback for details that can't be automated.</li>
        <li>Integrate with existing methods of ad hoc event coordination.</li>
      </ul>
      <br />
      <p><em>Foreseen Difficulties</em></p>
      <ul>
        <li>Willingness to adopt another piece of technology.</li>
        <li>Compatibility of a service across different technologies.</li>
        <li>Missed communications (e.g. silenced phones).</li>
        <li>Awkwardness in some situations (e.g. inviting uninvited individuals).</li>
        <li>Balancing the right amount of automated information versus the burden of user input.</li>
      </ul>
      <!-- <div class="row">
        <div class="image column">
          <a href="" data-fluidbox><img src="" alt="" title="" /></a>
          <div class="caption large-3"><strong>Some image.</div>
        </div>
      </div> -->
    </section>
    <section>
      <h3>Current Methods of Ad Hoc Event Coordination</h3>
        
      <h4>Email</h4>
      <p><strong>What works:</strong> compatible across nearly all devices, familiar with users, non-interrupting, easy to opt in/out.</p>
      <p><strong>What doesn't work:</strong> speed of communication, important messages get buried, difficult to update time and location information and broadcast to group quickly.</p>
      <div class="row">
        <div class="image column">
          <a href="img/happening/email.png" data-fluidbox><img src="img/happening/email.png" alt="" title="" /></a>
          <div class="caption large-3"><strong></strong></div>
        </div>
      </div>
        
      <h4>SMS</h4>
      <p><strong>What works:</strong> compatible across nearly all devices, familiar with users, fast.</p>
      <p><strong>What doesn't work:</strong> important messages get buried, requires constant communication, interrupting, not all messages are relevant to you.</p>
      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/happening-sms.png" data-fluidbox><img src="img/happening/happening-sms.png" alt="" title="" /></a>
          <div class="caption large-3"><strong></strong></div>
        </div>
      </div>

      <h4>Find My Friends</h4>
      <p><strong>What works:</strong> removes burden of having to manually broadcast location, allows notification for when someone leaves or arrives, easy to coordinate with multiple people.</p>
      <p><strong>What doesn't work:</strong> not cross-platform, awkward and creepy for some, no internal ability to broadcast messages to a group.</p>
      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/findmyfriends.jpeg" data-fluidbox><img src="img/happening/findmyfriends.jpeg" alt="" title="" /></a>
          <div class="caption large-3"><strong></strong></div>
        </div>
      </div>

      <h4>Facebook Messenger</h4>
      <p><strong>What works:</strong> compatible across nearly all devices, familiar with users, easy to opt in/out.</p>
      <p><strong>What doesn't work:</strong> important messages get buried, requires constant communication, not all messages are relevant to you, difficult to update time and location information and broadcast to group quickly.</p>
      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/happening-fbmess.png" data-fluidbox><img src="img/happening/happening-fbmess.png" alt="" title="" /></a>
          <div class="caption large-3"><strong></strong></div>
        </div>
      </div>

      <h4>Facebook Event</h4>
      <p><strong>What works:</strong> important messages can be pinned, time and location information (of event) is easily changed and broadcasted.</p>
      <p><strong>What doesn't work:</strong> specific user location and ETA must be manually posted, compatibility, messages are sometimes missed if you opt out, not all information is relevant to you, fairly asynchronous and slow.</p>
      <div class="row">
        <div class="image column">
          <a href="img/happening/happening-facebook.png" data-fluidbox><img src="img/happening/happening-facebook.png" alt="" title="" /></a>
          <div class="caption large-3"><strong></strong></div>
        </div>
      </div>
        
    </section>
    <br />
    <!--    Solution-->
    <section class="solution">
      <h3>Solution: Happening, a service for hanging out.</h3>
      <p>These wireframes and mocks depict a digital mobile service that enhances messaging with the ability to quickly create events. The solution mainly addresses issues in current apps used for coordinating social outings: buried important information, irrelevant information, burden of broadcasting information to the right people.</p>
      <div class="row">
        <div class="image column">
          <a href="img/happening/lofi/flow.png" data-fluidbox><img src="img/happening/lofi/flow.png" alt="" title="" /></a>
          <div class="caption large-3"><strong></strong></div>
        </div>
      </div>
      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/lofi/lofi-01-alert.png" data-fluidbox><img src="img/happening/lofi/lofi-01-alert.png" alt="" title="" /></a>
          <div class="caption large-5"><strong>Amy receives a notification via her mobile OS.</strong></div>
        </div>
      </div>

      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/lofi/lofi-03-signin.png" data-fluidbox><img src="img/happening/lofi/lofi-03-signin.png" alt="" title="" /></a>
          <div class="caption large-5"><strong>She can sign in via Facebook or G+.</strong></div>
        </div>
      </div>

      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/lofi/lofi-04-mainagenda.png" data-fluidbox><img src="img/happening/lofi/lofi-04-mainagenda.png" alt="" title="" /></a>
          <div class="caption large-5"><strong>Her Agenda</strong> is specific to her. Once she opts into an event, it takes her to the event page.</div>
        </div>
      </div>

      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/lofi/lofi-05-eventpage.png" data-fluidbox><img src="img/happening/lofi/lofi-05-eventpage.png" alt="" title="" /></a>
          <div class="caption large-5"><strong>Contextual information</strong> is tailored to her location.</div>
        </div>
      </div>

      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/lofi/lofi-06-eventpage-map.png" data-fluidbox><img src="img/happening/lofi/lofi-06-eventpage-map.png" alt="" title="" /></a>
          <div class="caption large-5"><strong>Tapping on the map</strong> gives information about where the event is taking place as well as where everyone else is.</div>
        </div>
      </div>

      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/lofi/lofi-07-eventpage-post.png" data-fluidbox><img src="img/happening/lofi/lofi-07-eventpage-post.png" alt="" title="" /></a>
          <div class="caption large-5"><strong>Scrolled down,</strong> she sees an option to post to the event-specific board and posts created by others who are attending the event.</div>
        </div>
      </div>

      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/lofi/lofi-08-eventpage-posting.png" data-fluidbox><img src="img/happening/lofi/lofi-08-eventpage-posting.png" alt="" title="" /></a>
          <div class="caption large-5"><strong></strong></div>
        </div>
      </div>

      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/lofi/lofi-09-eventpage-posting-predicted.png" data-fluidbox><img src="img/happening/lofi/lofi-09-eventpage-posting-predicted.png" alt="" title="" /></a>
          <div class="caption large-5"><strong>Posting in Happening</strong> is always predictive. The service infers the location and time.</div>
        </div>
      </div>

      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/lofi/lofi-10-eventpage-posted-prediction.png" data-fluidbox><img src="img/happening/lofi/lofi-10-eventpage-posted-prediction.png" alt="" title="" /></a>
          <div class="caption large-5"><strong>Once she posts the event,</strong> this is shown in the event board as well as the agenda page of others in the group.</div>
        </div>
      </div>

      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/lofi/lofi-11-agenda-updated.png" data-fluidbox><img src="img/happening/lofi/lofi-11-agenda-updated.png" alt="" title="" /></a>
          <div class="caption large-5"><strong>Amy's final agenda</strong> at the end of the night looks like this.</div>
        </div>
      </div>

      <h3>High Fidelity Mocks</h3>
      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/hifi/hifi-00.png" data-fluidbox><img src="img/happening/hifi/hifi-00.png" alt="" title="" /></a>
          <div class="caption large-5"><strong>Amy has scrolled down</strong> past the event details.</div>
        </div>
      </div>
      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/hifi/hifi-01.png" data-fluidbox><img src="img/happening/hifi/hifi-01.png" alt="" title="" /></a>
          <div class="caption large-5"><strong>She taps on the input box</strong> to enter a suggestion for after the movie.</div>
        </div>
      </div>

      <div class="row">
        <div class="image small-6 column">
          <a href="img/happening/hifi/hifi-02.png" data-fluidbox><img src="img/happening/hifi/hifi-02.png" alt="" title="" /></a>
          <div class="caption large-5"><strong>Based on her input, Happening suggests</strong> an event to post to the group.</div>
        </div>
      </div>

    </section>
    <section>
      <h3>Conclusion</h3>
      <p>I spent some time exploring the existing options for coordinating ad hoc events and found that each one had its flaws. Some placed too much burden on users to constantly broadcast their location and next steps (SMS and FB Messenger). Others were too specific in their offering and failed to allow expressive communication (Find My Friends). Facebook Events work well for planned-in-advance events, but becomes burdensome for simple ad hoc outings when a small group wants to get together, possibly inviting others or changing details later on in the night.</p>

      <p><strong>Happening</strong> shows what a messaging service might look like if it were enhanced with (1) contextual information that is tailored to each user and (2) predictive technology that allows users to quickly create events to broadcast. For a service that helps groups coordinate outings, it's <strong>important</strong> to maintain the ability to create messages or posts. This type of expressiveness lets users communicate a wide variety of messages. When paired with predictive technology, it relieves burden on the event creator and helps to communicate more relevant information.
      </p>

      <p>Some questions remain. Namely, how are groups created and how are people added to groups? The solution also fails to show who an event broadcasts to if it is created within another event. Most likely, users will want to form groups for each ad hoc event first, then choose to broadcast to an entire group or individuals.</p>

    </section>
    
<?php endblock() ?>

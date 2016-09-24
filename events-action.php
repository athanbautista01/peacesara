<?php
	//Connect to MySQL
	//require_once("database/connect.php");
	//include the header
	$title="Peacesara | Take Action";
	include("include/header.php");
  ?>
  <hr>
  <div class="col-lg-6">
   <h2>Activities Form</h2>
   <h3>Many thanks for raising awareness!</h3>
   <br>
   <h4>We would be very grateful if you could take a few moments to tell us about your plans for this year. </h4>
   <h4>Thank you in advance for your time, you are now part of the global movement!</h4>
   <h4>If you know of anyone else organising activities about peace, then please share this link.</h4>
 </div>
 <div class="col-lg-6">
  <br>
  <form id='register' action='register.php' method='post'
  accept-charset='UTF-8' align="left">
  <fieldset >
    <input type='hidden' name='submitted' id='submitted' value='1'/>

    <label for='name' >First Name: </label>
    <input type='text' name='fname' id='fname' maxlength="50" />
    <br>

    <label for='name' >Last Name: </label>
    <input type='text' name='lname' id='lname' maxlength="50" />
    <br>

    <label for='name' >Organization Name: </label>
    <input type='text' name='orgname' id='orgname' maxlength="50" />
    <br>

    <label for='email' >Email Address:</label>
    <input type='text' name='email' id='email' maxlength="50" />
    <br>

    <label for='email'> Country:</label>
    <input type='text' name='country' id='country' maxlength="50" />
    <br>

    <label for='atv' >Area/ Town/ Village:</label>
    <input type='text' name='atv' id='atv' maxlength="50" />
    <br>

    <label for='phonenumber' >Phone Number:</label>
    <input type='text' name='phonenumber' id='phonenumber' maxlength="50" />
    <br>

    <br>
    <label for='activityoption'> Select your Activity Category:</label>
    <div class="checkbox">
      <label><input type="checkbox" value="">Conference / Workshop </label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Peace Walk / Gathering </label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Engage in Humanitarian Activity </label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Other: <input type='text' name='other' id='other' maxlength="50" /> </label>
    </div>
    <label for='attendees' >Number of Attendees:</label>
    <input type='text' name='atendees' id='attendees' maxlength="50" />
    <br>
    <input type='submit' name='Submit' value='Submit' />
    <br>
  </fieldset>
</form>
</div>
</div>
<hr>
<?php
    //include the footer
$title="Pet Lane";
include("include/footer.php");
?>
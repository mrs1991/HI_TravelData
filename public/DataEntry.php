<?php
session_start();
if(isset($_SESSION['login_user'])){

}
else {
header("location: login.php"); 
exit();
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">


<script src="components/jquery/dist/jquery.js" type="text/javascript"></script>

<html>
<head>

<link rel="stylesheet" type="text/css" href="TravelSite.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Informatics GMTS Accomodation</title>
</head>

<body>

<form action="UpdateData.php" method="POST" class="form-style-5">
    <br />
<h1>Informatics Accomodation Booking for Academic Year 15-16</h1>
    <br />
<h2>You are completing this booking as: <?php print_r($_SESSION["login_user"]); ?></h2>
<fieldset class="subsection">

<legend><span class="number">1</span>Your Requests</legend>
<p>Please select the accomodation you require for each of the below. If do not require accomodation for a module, please select "N/A".</p>
<table class="requirementstable"> 
<tr>
<td><strong>Shared Care & EHRS</strong>
<br /> 
Nights: 12th, 13th, 14th Jan 2016
</td>
<td><strong>Healthcare Quality & EBP</strong>
<br /> 
Nights: 19th, 20th, 21st Jan 2016
</td>
<td><strong>Research Methods in Healthcare</strong>
<br /> 
Nights: 26th, 27th, 28th Jan 2016
</td>
<td><strong>Healthcare Quality & EBP </strong>
<br>
EXAM Night prior: 3rd Feb 2016</td>
<td><strong>Pat Safety & Clin Risk</strong>
<br /> 
Nights: 15th, 16th, 17th Mar 2016
</td>
<td><strong>Using Information in Healthcare</strong>
<br /> 
Nights: 5th, 6th, 7th Apr 2016
</td>
<td><strong>Clinical Knowledge & DM</strong>
<br /> 
Nights: 24th, 25th, 26th May 2016
</td>
<td><strong>Information Law & Governance</strong>
<br /> 
Nights: 31st(May), 1st, 2nd June 2016
</td>
<td><strong>Information Systems in Healthcare</strong>
<br /> 
Nights: 9th, 10th, 11th June 2016
</td>

</tr>
<tr>

<td><input type="radio" id="RadioOption1AccomOption1" name="RadioAccom1" value="3"/>3 nights: 12/01, 13/01, 14/01 
<br />
<input type="radio" id="RadioOption2AccomOption1"  name="RadioAccom1" value="2"/>2 nights: 13/01, 14/01
<br />
<input type="radio" id="RadioOption3AccomOption1" name="RadioAccom1" value="0"/>N/A
</td>

                
<td><input type="radio" id="RadioOption1AccomOption2" name="RadioAccom2" value="3"/>3 nights: 18/01, 19/01, 20/01
<br />
<input type="radio" id="RadioOption2AccomOption2"  name="RadioAccom2" value="2"/>2 nights: 19/01, 20/01
<br />
<input type="radio" id="RadioOption3AccomOption2" name="RadioAccom2" value="0"/>N/A
</td>
<td><input type="radio" id="RadioOption1AccomOption3" name="RadioAccom3" value="3"/>3 nights: 26/01, 27/01, 28/01
<br />
<input type="radio" id="RadioOption2AccomOption3"  name="RadioAccom3" value="2"/>2 nights:  27/01, 28/01
<br />
<input type="radio" id="RadioOption3AccomOption3" name="RadioAccom3" value="0"/>N/A
</td>
<td><input type="radio" id="RadioOption1AccomOption4" name="RadioAccom4" value="1"/>1 night: 03/02
<br />
<input type="radio" id="RadioOption2AccomOption4"  name="RadioAccom4" value="0"/>N/A
</td>
<td><input type="radio" id="RadioOption1AccomOption5" name="RadioAccom5" value="3"/>3 nights: 15/03, 16/03, 17/03
<br />
<input type="radio" id="RadioOption2AccomOption5"  name="RadioAccom5" value="2"/>2 nights: 16/03, 17/03
<br />
<input type="radio" id="RadioOption3AccomOption5" name="RadioAccom5" value="0"/>N/A
</td>
<td><input type="radio" id="RadioOption1AccomOption6" name="RadioAccom6" value="3"/>3 nights: 05/04, 06/04, 07/04
<br />
<input type="radio" id="RadioOption2AccomOption6"  name="RadioAccom6" value="2"/>2 nights: 06/04, 07/04
<br />
<input type="radio" id="RadioOption3AccomOption6" name="RadioAccom6" value="0"/>N/A
</td>
<td><input type="radio" id="RadioOption1AccomOption7" name="RadioAccom7" value="3"/>3 nights: 24/05, 25/05, 26/05
<br />
<input type="radio" id="RadioOption2AccomOption7"  name="RadioAccom7" value="2"/>2 nights: 25/05, 26/05
<br />
<input type="radio" id="RadioOption3AccomOption7" name="RadioAccom7" value="0"/>N/A
</td>
<td><input type="radio" id="RadioOption1AccomOption8" name="RadioAccom8" value="3"/>3 nights: 31/05, 01/06, 02/06
<br />
<input type="radio" id="RadioOption2AccomOption8"  name="RadioAccom8" value="2"/>2 nights: 01/06, 02/06
<br />
<input type="radio" id="RadioOption3AccomOption8" name="RadioAccom8" value="0"/>N/A
</td>
<td><input type="radio" id="RadioOption1AccomOption9" name="RadioAccom9" value="3"/>3 nights: 07/06, 08/06, 09/06
<br />
<input type="radio" id="RadioOption2AccomOption9"  name="RadioAccom9" value="2"/>2 nights:  08/06, 09/06
<br />
<input type="radio" id="RadioOption3AccomOption9" name="RadioAccom9" value="0"/>N/A
</td>

</tr>

</table>
</fieldset>

<fieldset class="subsection">

<legend><span class="number">2</span>Supporting Information</legend>

<p><strong>If you have selected to stay for the night before any Nights (i.e. you have asked for 3 nights accomodation), please explain breifly why you would have to leave before 06:30 am for a 9am start at UCL.</strong>
 You do not need to do this if you have only requested accomodation for the two "in between" nights. 
 <br /><br />In most cases, a statement such as "I live in Newcastle which is a 3.5hr journey from London" is sufficient. If, however, there is a reason for this which you would rather discuss with the Leadership Academy (e.g. medical condition) then please enter "sensitive reason" in this box, and contact Terri directly (theresa.lang@nhs.net). </p> 
<input name="SixThirtyRuleReasons" type="text"/>

</fieldset>

<fieldset class="subsection">
<legend><span class="number">3</span>Your Requirements</legend>

<p>For the following questions, while we don't want you to put down anything you're not happy with, please do remember both of these options could potentially save a substantial amount of money - just selecting <strong>either</strong> to walk up to 2 miles <strong>or</strong> sharing with another trainee is likely to reduce the cost of your stay considerably. </p>

<p>I would be happy to walk up to <select name="DistanceToTravel">
  <option value="1">1 mile</option>
  <option value="1.5">1.5 miles</option>
  <option value="2">2 miles</option> 
  <option value="2.5">2.5 miles</option>
  </select> from the hotel to the UCL Bloomsbury Campus (where Nights are based).</p> 

<p>I would be happy to share a twin room with the following trainee: 
<select id="TraineeToShare1" name="TraineeToShare1">
 <?php
 $servername = getenv("TRAVELDATA_HOST");
    $username =  getenv("TRAVELDATA_UNAME");
    $password = getenv("TRAVELDATA_PASSW");
        $pdo = new PDO("mysql:host=$servername;dbname=HI_TravelData", $username, $password);
        #Set Error Mode to ERRMODE_EXCEPTION.
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

    $stmt = $pdo->prepare("Select CONCAT(FirstNames, ' ' , LastName) as TraineeName  from HI_TraineeIndex where Specialism='HI'");
    $stmt->execute();
       while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<option>'.$row['TraineeName'].'</option>';
       }
     ?>
 </select> 
    </p> 
    
    </fieldset>
    <br />
   <fieldset class="subsection">
<legend><span class="number">4</span>Additional Information</legend>

<p>Please give any additional information you would like to add to this request (max 3000 characters). You should specify any special adjustments here - if you require a ground floor room etc.</p>
<input type="text" name="Comments"/>
    </fieldset>
    <br />
        <br />
<input type="submit"/>

</form>




<?php
	/*
   $servername = getenv("TRAVELDATA_HOST");
    $username =  getenv("TRAVELDATA_UNAME");
    $password = getenv("TRAVELDATA_PASSW");

try {
    $conn = new PDO("mysql:host=$servername;dbname=HI_TravelData", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO TravelRequestDetails (`Name`,`UniqueTraineeID`,`UniqueRequestID`,`DateTimeRequestMade`,`AcademicYearRequestFor`,`Request1NightsNo`,`Request2NightsNo`,`Request3NightsNo`,`Request4NightsNo`,`Request5NightsNo`,`Request6NightsNo`,`Request7NightsNo`,`Request8NightsNo`,`Request9NightsNo`,`SixThirtyRuleReasons`,`DistanceToTravel`,`TraineeToShare1`,`TraineeToShare2`,`TraineeToShare3`,`Comments`,`RequestStatus`,`RequestStatusUpdatedLast`,`RequestStatusUpdatedLastBy`)) VALUES (?, ?, ?)");
    $stmt->bind_param("siisiiiiiiiiiisisssssss", $Name, $UniqueTraineeID, $UniqueRequestID, $DateTimeRequestMade, $AcademicYearRequestFor, $Request1NightsNo, $Request2NightsNo, $Request3NightsNo, $Request4NightsNo, $Request5NightsNo, $Request6NightsNo, $Request7NightsNo, $Request8NightsNo, $Request9NightsNo, $SixThirtyRuleReasons, $DistanceToTravel, $TraineeToShare1, $TraineeToShare2, $TraineeToShare3, $Comments, $RequestStatus, $RequestStatusUpdatedLast, $RequestStatusUpdatedLastBy);
    
    // set parameters and execute
    $firstname = ;
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();
    
   
    
    
    echo "New records created successfully";
    
    $stmt->close();
    $conn->close();
    
    */

?>


</body>

    

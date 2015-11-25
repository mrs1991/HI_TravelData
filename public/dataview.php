<?php
session_start();
if(isset($_SESSION['login_user_admin'])){

}
else {
header("location: login.php"); 
exit();
}

?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link rel="stylesheet" type="text/css" href="TravelSite.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bookings Data View</title>
</head>

    <body>
<form class='form-style-5'>
<h1>Submitted Bookings</h1>
<p>

<br /> N.B. If a trainee has requested two nights, the requests relate to the latter two nights in the block. For example, a request for "2" in block one would mean that the trainee needed accomodation for the 13th and 14th of Jan.</p>
    <?php
 
    echo "<table class='style1'  style='width: 100%;'>";
    echo "<tr><th>Name</th><th>Request ID</th><th style='min-width: 65px'>12th, 13th, 14th Jan</th><th  style='min-width: 65px'>19th, 20th, 21st Jan</th><th  style='min-width: 65px'> 26th, 27th, 28th Jan</th><th  style='min-width: 65px'>3rd Feb</th><th  style='min-width: 65px'>15th,16th,  17th Mar</th><th  style='min-width: 65px'> 5th, 6th, 7th Apr </th><th  style='min-width: 65px'>24th, 25th, 26th May</th><th  style='min-width: 65px'>31st (May), 1st, 2nd Jun</th><th  style='min-width: 65px'>7th, 8th, 9th Jun</th><th >Six Thirty Reasons</th><th>Will walk (miles)...</th><th>Will share with...</th><th>Comments</th></tr>";
    class TableRows extends RecursiveIteratorIterator {
    	function __construct($it) {
    		parent::__construct($it, self::LEAVES_ONLY);
    	}
    
    	function current() {
    		return "<td>" . parent::current(). "</td>";
    	}
    
    	function beginChildren() {
    		echo "<tr>";
    	}
    
    	function endChildren() {
    		echo "</tr>" . "\n";
    	}
    }

    $servername = getenv("TRAVELDATA_HOST");
    $username =  getenv("TRAVELDATA_UNAME");
    $password = getenv("TRAVELDATA_PASSW");
    
    try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$stmt = $conn->prepare("SELECT 	`Name`, `UniqueRequestID`, `Request1NightsNo`, `Request2NightsNo`,    `Request3NightsNo`,    `Request4NightsNo`,    `Request5NightsNo`,  `Request6NightsNo`,    `Request7NightsNo`,   `Request8NightsNo`,   `Request9NightsNo`, `SixThirtyRuleReasons`,    `DistanceToTravel`,    `TraineeToShare1`,  `Comments` FROM TravelRequestsDetails  ORDER BY `RequestStatusUpdatedLast` DESC");
    	$stmt->execute();
    
    	// set the resulting array to associative
    	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    	foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    		echo $v;
    	}
    }
    catch(PDOException $e) {
    	echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
    ?>


<br />
    <a class="button" style="content-align: center" href='logout.php'>Log out</a>


</form>
    </body>
    
    
</html>

<?php 
// REMOVE before deployment!
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//var_dump($_POST);
function getPost($key, $default) {
	if (isset($_POST[$key]))
		return $_POST[$key];
		return $default;
}
	$servername = getenv("TRAVELDATA_HOST");
    $username =  getenv("TRAVELDATA_UNAME");
    $password = getenv("TRAVELDATA_PASSW");
    

try {
    $conn = new PDO("mysql:host=$servername;dbname=HI_TravelData", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    //echo "Connection failed: " . $e->getMessage();
    }
    
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO TravelRequestsDetails (`Name`, `DateTimeRequestMade`, `AcademicYearRequestFor`, `Request1NightsNo`, `Request2NightsNo`, `Request3NightsNo`, `Request4NightsNo`, `Request5NightsNo`, `Request6NightsNo`, `Request7NightsNo`, `Request8NightsNo`, `Request9NightsNo`, `SixThirtyRuleReasons`, `DistanceToTravel`, `TraineeToShare1`, `TraineeToShare2`, `TraineeToShare3`, `Comments`, `RequestStatus`, `RequestStatusUpdatedLast`, `RequestStatusUpdatedLastBy`) VALUES (?, ?, ?, ?, ? ,?, ?, ?, ?, ? ,?, ?, ?, ?, ? ,?, ?, ?, ?, ? ,?);");
    
    // set parameters and execute
    
    $Name= $_SESSION["login_user"];
    $DateTimeRequestMade= date("Y-m-d H:i:s");
    $AcademicYearRequestFor= 1516;
    $Request1NightsNo= getPost("RadioAccom1", "");
    $Request2NightsNo= getPost("RadioAccom2", "");
    $Request3NightsNo= getPost("RadioAccom3", "");
    $Request4NightsNo= getPost("RadioAccom4", "");
    $Request5NightsNo= getPost("RadioAccom5", "");
    $Request6NightsNo= getPost("RadioAccom6", "");
    $Request7NightsNo= getPost("RadioAccom7", "");
    $Request8NightsNo= getPost("RadioAccom8", "");
    $Request9NightsNo= getPost("RadioAccom9", "");
    $SixThirtyRuleReasons=  getPost("SixThirtyRuleReasons", "");
    $DistanceToTravel= getPost("DistanceToTravel", "");
    $TraineeToShare1= getPost("TraineeToShare1", "");
    $TraineeToShare2= getPost("TraineeToShare2", "");
    $TraineeToShare3= getPost("TraineeToShare3", "");
    $Comments= getPost("Comments", "");
    $RequestStatus= "R";
    $RequestStatusUpdatedLast= date("Y-m-d H:i:s");
    $RequestStatusUpdatedLastBy= getPost("TraineeName", "");
   
    $stmt->bindParam(1, $Name, PDO::PARAM_STR);
    $stmt->bindParam(2, $DateTimeRequestMade, PDO::PARAM_STR);
    $stmt->bindParam(3, $AcademicYearRequestFor, PDO::PARAM_STR);
    $stmt->bindParam(4, $Request1NightsNo, PDO::PARAM_STR);
    $stmt->bindParam(5, $Request2NightsNo, PDO::PARAM_STR);
    $stmt->bindParam(6, $Request3NightsNo, PDO::PARAM_STR);
    $stmt->bindParam(7, $Request4NightsNo, PDO::PARAM_STR);
    $stmt->bindParam(8, $Request5NightsNo, PDO::PARAM_STR);
    $stmt->bindParam(9, $Request6NightsNo, PDO::PARAM_STR);
    $stmt->bindParam(10, $Request7NightsNo, PDO::PARAM_STR);
    $stmt->bindParam(11, $Request8NightsNo, PDO::PARAM_STR);
    $stmt->bindParam(12, $Request9NightsNo, PDO::PARAM_STR);
    $stmt->bindParam(13, $SixThirtyRuleReasons, PDO::PARAM_STR);
    $stmt->bindParam(14, $DistanceToTravel, PDO::PARAM_STR);
    $stmt->bindParam(15, $TraineeToShare1, PDO::PARAM_STR);
    $stmt->bindParam(16, $TraineeToShare2, PDO::PARAM_STR);
    $stmt->bindParam(17, $TraineeToShare3, PDO::PARAM_STR);
    $stmt->bindParam(18, $Comments, PDO::PARAM_STR);
    $stmt->bindParam(19, $RequestStatus, PDO::PARAM_STR);
    $stmt->bindParam(20, $RequestStatusUpdatedLast, PDO::PARAM_STR);
    $stmt->bindParam(21, $RequestStatusUpdatedLastBy, PDO::PARAM_STR);
    $stmt->execute();
    //unset login
    	session_unset(); 

	// destroy the session 
	session_destroy(); 
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Request Submitted! You will recieve your booking details by email within a fortnight. Log-in to this site to view a read-only version of your booking.')
    window.location.href='login.php';
    </SCRIPT>");
     //replace above with message "request submitted" on OK destroy session and return user to log-in page

    $conn->db = null;
  
?>

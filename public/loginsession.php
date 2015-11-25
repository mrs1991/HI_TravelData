<?php



session_start(); // Starting Session


if (isset($_POST['username'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		echo "Username or Password is invalid";
	}
	
	else
	{
		
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$sqlservername = getenv("TRAVELDATA_HOST");
    	$sqlusername =  getenv("TRAVELDATA_UNAME");
    	$sqlpassword = getenv("TRAVELDATA_PASSW");
	try {
    $conn = new PDO("mysql:host=$sqlservername;dbname=HI_TravelData", $sqlusername, $sqlpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }// set the PDO error mode to exception
		// SQL query to fetch information of registerd users and finds user match.
		$query = $conn->prepare("select  CONCAT(FirstNames, ' ' , LastName) as TraineeName from HI_TraineeIndex where Username=? and Password=?;");
		$username= $_POST["username"];
		$password= $_POST["password"];
		
		$query->bindParam(1, $username, PDO::PARAM_STR);
		$query->bindParam(2, $password, PDO::PARAM_STR);
		
		$query->execute(); //Tom thought fetchAll called this for us, but it didn't, and Mattie was right, and Tom was wrong!
		
		$results = $query->fetchAll();
	
	/*foreach($query as $row) {
		if (strlen(end($row))> 0) { 
			$_SESSION["login_user"]= end($row); // Initializing Session
			header("location: DataEntry.php"); // Redirecting To Other Page
		}
	}*/
	
	//var_dump($results);
	//exit;
		
	if(count($results) == 1 && count($results[0]) >= 1) {
		$firstCell = $results[0]["TraineeName"];
		$_SESSION["login_user"]= $firstCell; // Initializing Session
		header("location: DataEntry.php"); // Redirecting To Other Page
	} else { //Either no rows found, or no cells in rows- err on side of caution!
		$query2 = $conn->prepare("select Name as AdminName from admin_logins where Username=? and Password=?;");
		$username2= $_POST["username"];
		$password2= $_POST["password"];
		
		$query2->bindParam(1, $username2, PDO::PARAM_STR);
		$query2->bindParam(2, $password2, PDO::PARAM_STR);
		
		$query2->execute(); //Tom thought fetchAll called this for us, but it didn't, and Mattie was right, and Tom was wrong!
		
		$results2 = $query2->fetchAll();
		if(count($results2) == 1 && count($results2[0]) >= 1) {
			$firstCell2 = $results2[0]["AdminName"];
			$_SESSION["login_user_admin"]= $firstCell2; // Initializing Session
			header("location: dataview.php"); // Redirecting To Other Page
		} else {
		echo "<script>alert('Username or password invalid. Please try again.');  window.location.href='login.php';</script>";
		}
	}
	
	
	
	
	
	
	 $conn->db = null;
	}
}
?>

	<?php
	error_reporting(0);
	$Username = "root";
	$Password = "";
	$LocalHost = "localhost";
	$dbName = "dbsegs";

	/*Set your localhost username and password at above*/

	$Table = array("CREATE TABLE IF NOT EXISTS userlist(Id int(11) PRIMARY KEY AUTO_INCREMENT,
														  Username VARCHAR(20),
														  Email VARCHAR(40),
														  Password CHAR(64),
														  UserRole VARCHAR(30),
														  session_id VARCHAR(64),
														  time int(11),
														  Status VARCHAR(20))");

	//create datebase connection
	$Con = new mysqli($LocalHost, $Username, $Password);
	
	if($Con->errno)
	{
		echo "Connect Fail".$Con->connect_error; //Check Error
		exit();
	}
	else
	{
		//Create database
		$Query = "CREATE DATABASE IF NOT EXISTS ".$dbName;
		$Con->query($Query); //Find this query and connect, if doesnt have create;
		
        
		//Choose Database
		$Con->select_db($dbName);
		
		for($i = 0; $i<count($Table); $i++)
		{
			 $Table[$i]."<br>";
			 $Con->query($Table[$i]); //if still error cannot create table check variable
		}
			// Check if admin exists
    	$admin_check = "SELECT Email FROM userlist WHERE Email = 'admin@123'";
    	$admin_result = $Con->query($admin_check);

		$admin_exists = false;
    	if ($admin_result && $admin_result->num_rows > 0) {
        $admin_exists = true;
    	}

    		// Free the result from the admin check query
    		$admin_result->free();

    	if (!$admin_exists) { // If admin doesn't exist, insert the admin user
		
			$hashed_password = hash('sha256', '123');
        	$query = "INSERT INTO userlist(Username, Email, Password, UserRole, Status) 
                  VALUES('1', 'admin@123', '" . $hashed_password . "', 'ADMINISTRATOR', 'ACTIVE')";
        	$Con->query($query);

    	} 
		
		// Check if admin exists
    	$guide_check = "SELECT Email FROM userlist WHERE Email = 'guide@123'";
    	$guide_result = $Con->query($guide_check);

		$guide_exists = false;
    	if ($guide_result && $guide_result->num_rows > 0) {
        $guide_exists = true;
    	}

    		// Free the result from the admin check query
    		$guide_result->free();

    	if (!$guide_exists) { // If admin doesn't exist, insert the admin user
		
			$hashed_password = hash('sha256', '123');
        	$query = "INSERT INTO userlist(Username, Email, Password, UserRole, Status) 
                  VALUES('2', 'guide@123', '" . $hashed_password . "', 'GUIDE', 'ACTIVE')";
        	$Con->query($query);

    	} 
		$Con->close();

	}
?>
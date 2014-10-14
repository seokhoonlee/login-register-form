<?php
	$con = mysqli_connect("localhost", "root", "", "login_register");

	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

  	if($_SESSION['email'] == "") {
	    header("Location: index.html");
		exit();
	}

  	if ($_POST['action'] == "register") { //isset - determin if a variable is set and is not NULL

	  	$first_name = mysqli_real_escape_string($con, $_POST["first_name"]);
		$last_name = mysqli_real_escape_string($con, $_POST["last_name"]);
		if(mysqli_real_escape_string($con, $_POST["gender"]) == "Male") {
			$gender = "Male";
		} else if(mysqli_real_escape_string($con, $_POST["gender"]) == "Female") {
			$gender = "Female";
		}
		$age = mysqli_real_escape_string($con, $_POST["age"]);
		$email = mysqli_real_escape_string($con, $_POST["email"]);
		$hash = md5($_POST["password"]);
		$password = mysqli_real_escape_string($con, $hash);

		$result = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");

		$num_row = mysqli_num_rows($result);

		if($num_row > 0) {
			echo "email_taken";
		    // header("Location: index.html");
		    exit();
		} 

	  	$sql = "INSERT INTO users (first_name, last_name, gender, age, email, password) 
	  		VALUES ('$first_name', '$last_name', '$gender', '$age', '$email', '$password')";

	  	if (!mysqli_query($con,$sql)) {
			die('Error: ' . mysqli_error($con));
		}

		session_start();

		$_SESSION['first_name'] = $first_name;
		$_SESSION['last_name'] = $last_name;
		$_SESSION['gender'] = $gender;
		$_SESSION['age'] = $age;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;

		echo "success";

	} else if ($_POST['action'] == "login") {

		$email = mysqli_real_escape_string($con, $_POST["email"]);
		$hash = md5($_POST["password"]);
		$password = mysqli_real_escape_string($con, $hash);

		$result = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");

		$num_row = mysqli_num_rows($result);

		if($num_row == 0) {
			echo "no_user";
		    // header("Location: index.html?message=no_user");
		    exit();
		}

		$row = mysqli_fetch_array($result);
		$db_password = mysqli_real_escape_string($con, $row['password']);

		if($db_password != $password) {
			echo "mismatch_password";
			// header("Location: index.html?message=login_failed");
		    exit();
		}

		session_start();

		$_SESSION['first_name'] = $row['first_name'];
		$_SESSION['last_name'] = $row['last_name'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['age'] = $row['age'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['password'] = $row['password'];

		echo "success";
	}
 ?>
<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) ) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else{
			//Check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?signup=invalid_email");
				exit();
			} else{
				$sql = "SELECT * FROM users WHERE user_uid = '$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=usertaken");
					exit();
				} else{
					//Hashing the password
			$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
			//$hashedPwd = md5($pwd);
					//Insert the user into the database (Prepared Statement)
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, user_rank, RegT) VALUES (?, ?, ?, ?, ?, ?, Now());";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)) {
                    	echo "SQL error";
                    } else{
                    	$diak = "diak";
                    	mysqli_stmt_bind_param($stmt, "ssssss", $first, $last, $email, $uid, $hashedPwd, $diak);
                    	mysqli_stmt_execute($stmt);
                    }
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}

} else{
	header("Location: ../signup.php");
	exit();
}
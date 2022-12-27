<?php

	$databasename = "localhost";
	$username = "root";
	$password = "";
	$dbname = "phplogindata";

	$conn = mysqli_connect($databasename, $username, $password, $dbname);

	// if(!$conn){
	// 	die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	// }

    $databasename = $_POST['username'];
    $password = $_POST['password'];
    
    // echo $username;
    // echo $password;
    
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    // if($username == "",  $password== ""){
    //     header('location:signup.html');
    // }
    if($row['username']== $username && $row['password'] == $password){
        echo "Welcome".$username."you are succesfully Logged in[]";
    }

    else{ echo "<script>alert('check.your_credentials')</script>";
        echo "<script>location.replace('signup.html')</script>";
    }


?>
<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="tutorial";
$conn=mysqli_connect($hostname,$username,$password,$dbname);

	if(!empty($_POST['fname']) && !empty($_POST['lname'])&& !empty($_POST['email'])&& !empty($_POST['number']) && !empty($_POST['message']) ){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$number=$_POST['number'];
		$message=$_POST['message'];
		$query="insert into contact(fname,lname,email,number,message) values('$fname','$lname','$email','$number','$message')";
		//$run=mysqli_query($conn,$query);
		if(mysqli_query($conn,$query)){
			echo "submitted successfully !! <a href='index.html'>back</a>";
		}
		else{
			echo "Please Enter some valid information";
		}
	}
	
	?>
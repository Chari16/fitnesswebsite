<?php

	//Variables
           
	$host="localhost";
          
	$user="root";
          
	$password = "";
           
	$database = "gym";
           
	$table= "GymMembers";
   
        
          
	//Form Variables

    $con = mysqli_connect($host, $user, $password, $database);
 	
	$firstname = $_POST['firstname'];
           
	$lastname = $_POST['lastname'];
           
	$email= $_POST['email'];
           
	$pass = $_POST['password'];
           
           
           
	//Check Connection
           
	if(!$con){
               
               
		Echo "Connection Failed " . mysqli_connect_error();
           
		}
           
           
	//Creating Table & Check Old Table Exist or Not!!
           
           
	$sql = "create table gymmembers(id int unsigned auto_increment primary key, firstname varchar(20) not null, lastname varchar(20) not null, email varchar(20), password varchar(20) not null)";
 
	
	$check = "Select * from gymmembers";
           
           

	$val = mysqli_query($con,$check);
           
           

	if($val ==TRUE){
               
	
	//TABLE ALREADY EXISTS DONT CREATE TABLE..!!
 
        			}
           
	else{
               
               
		if(mysqli_query($con, $sql)){
                   
                   
					echo "Table SportsMembers created successfully". "<br>";
                   
               
					}
               
	else{
                   
		echo "Error : " . mysqli_error($con);
               
		}
                  
           
	}
           
           
//Adding Data
       
           
	$Gymsql = "insert into GymMembers(FirstName, LastName, Email, Password) VALUES ('$firstname','$lastname','$email', '$pass')";
          
           

	mysqli_query($con, $Gymsql) or  die(mysqli_error($host));
          
           

	echo "Member Information Inserted... ";
           
	echo "Contact Support For Further Details";
           
	echo "<br><a href='contacts.php'>Log In</a>";
           
	mysqli_close($con);
        
?>
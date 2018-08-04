
        <?php
        
           //Variables
           $host="localhost";
           $user="root";
           $password = "";
           $database = "gym";
           $table= "SportsMembers";
           
           //GET FORM DATA
           $email = $_POST['email'];
           $pw = $_POST['password'];
          
           //Connection
           $con = mysqli_connect($host, $user, $password, $database);
          // mysqli_select_db($con, $database);
           
           
           //Check Connection
           if(!$con){
               
               Echo "Connection Failed " . mysqli_connect_error();
           }
           
           //Comparing Data
           $query = "Select email from gymmembers where (email='$email' AND password='$pw')";
           
           $result= mysqli_query($con, $query);
           
           if(mysqli_num_rows($result) == 1){
               
              echo "Success";
               
           }
           else 
               echo "No Account Found Please <a href='jquery.html'>Sign Up </a>here.<br>";
               
           
           echo "<br>";
           Echo "LoginCheck";
           
       
		mysqli_close($con);
		 ?>
    </body>
</html>

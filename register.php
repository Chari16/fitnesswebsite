<?php
require_once('connect.php');
if(isset($_POST)& !empty($_POST)){
  $FirstName = mysqli_real_escape_string($connection,$_POST['FirstName']);
   $LastName = mysqli_real_escape_string($connection,$_POST['LasttName']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
     $pasword = mysqli_real_escape_string($connection,$_POST['pasword']);
     
     $sql ="INSERT INTO 'connect' (FirstName,LasttName,email,pasword) VALUES ('$FirstName','$LasttName','$email','$pasword')";
     $result = mysql_query($connection, $sql);
     if($result){
      echo "user Registration successful";
     }else{
      echo "user registration failed";
     }
}
?>
<html>
<head>
<style>
* {
  margin: 0;
  padding: 0;
}
h1{
 color:white;
}
body {
 background-image: url("back0.jpg");
  font-family: "Adobe Gothic Std";
  font-size: 14px;
}

.container {
  width: 500px;
  margin: 25px auto;
}

form {
  padding: 10px;
  background: #0066ff;
  color: #fff;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
form label,
form input,
form button {
  border: 0;
  margin-bottom: 3px;
  display: block;
  width: 100%;
}
form input {
  height: 25px;
  line-height: 25px;
  background: #fff;
  color: #000;
  padding: 0 6px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
form button {
  height: 30px;
  line-height: 30px;
  background: #0000ff;
  color: #fff;
  margin-top: 10px;
  cursor: pointer;
}
form .error {
  color: #ff0000;
}
</style>
<script language="javascript" 
        type="text/javascript" 
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>
<script language="javascript" 
        type="text/javascript" 
        src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js">
</script>
<script>
// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script></head>
<body>
<center><h1><font>StayFit Sports Club</h1></center>
<div class="container">
  <h2 style="color:white">Sign Up</h2>
  <form action="register.php" name="registration">

    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" placeholder="Walter"/>

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" placeholder="White"/>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="heisenberg@breakingbad.com"/>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;"/>

    <button type="submit">Register</button>

  </form>
</div>
</body>
</html>

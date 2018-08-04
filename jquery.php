<html>
<head>
<title>
FORM
</title>
<style>
* {
  margin: 2;
  padding: 3;
}

body {
background-image: url("1.jpg");
  font-family: "bold";
  font-size: 18px;
background-repeat: no-repeat;
background-position: center; 
}

.container {
  width: 500px;
  margin: 25px auto;
}

form {
  padding: 20px;
  background:lightblue;
  color: black;
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
  background: white;
  color: #000;
  padding: 0 6px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
form button {
  height: 30px;
  line-height: 30px;
  background: grey;
  color: black;
  margin-top: 10px;
  cursor: pointer;
}
form .error {
  color: #ff0000;
}
</style>
<script language="javascript" type="text/javascript"
src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script language="javascript" type="text/javascript"
src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script>
// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
  
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script></head>

<body>
<div class="container">
  <h2 style="color:white">Contact us : Sign Up</h2>
  <form action="SignUp.php" method="POST" name="registration">

    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" />

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname">

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="password">Password</label>
    <input type="password" name="password" id="password" >

    <button type="submit">Register</button>

  </form>
</div>
</body>
</html>
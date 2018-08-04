<!DOCTYPE html>

<head>
<title>GetFit Club | Contact</title>

<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/Asap_400.font.js"></script>
<script src="js/Coolvetica_400.font.js"></script>
<script src="js/Kozuka_M_500.font.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/FF-cash.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <div class="bg-img"></div>
  <!--==============================header=================================-->
  <header>
    <h1><a href="index.html">GetFit <strong>Club.</strong></a></h1>
    <nav>
           <ul class="menu">
       
        <li><a href="trainings.html">Trainings</a></li>
        <li><a href="timetable.html">Timetable</a></li>
        
        <li class="current"><a href="contacts.html">Contact</a></li>
      </ul>
    </nav>
  </header>
  <!--==============================content================================-->
  <html>
<head>
<style>
* {
  margin: 0;
  padding: 0;
}
body {background-image: url("back.jpg");background-position: center; 
margin:0;
  font-family: "Adobe Gothic Std";
  font-size: 14px;
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
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
<div class="container">
  <h2><div align="center">Sign In</div></h2>
  <form action="Login.php" method="POST" name="login">

    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="xyz@gmail.com"/>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;"/>

    <button type="submit">Login</button>

  </form>

</div>
<h2><div align="center">
<a href="jquery.html"><input type="button" class="button" value="Sign Up"></a>
</div>
</h2>

</body>
</html>

  <!--==============================footer=================================-->
  <footer>
    <p>2017 GetFit Club</p>
    <p>Website Created & Design by GetFit TEAM</p>
  </footer>
</div>
<script>Cufon.now();</script>
</body>
</html>

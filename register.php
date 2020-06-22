<?php include('server.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="registerstyles.css">
<title>Register page</title>
</head>
<body>
<div class="center">
<form method="post" action="register.php">
        <h1 id="heading1">Register Now</h1>
        &nbsp;&nbsp;Username<br>&nbsp;&nbsp;<input type="text" placeholder="Enter your name" name="username" ><br>
        &nbsp;&nbsp;Email<br>&nbsp;&nbsp;<input type="text" placeholder="Enter your email" name="email"><br>
        &nbsp;&nbsp;Password<br>&nbsp;&nbsp;<input type="password" placeholder="Enter your password" name="password"><br>
        &nbsp;&nbsp;<button type="register" class="register1">Register</button><br>
        <p>&nbsp;&nbsp;Already a member?<a href="Login1.php">Sign in</a></p>
</form>
</div>
</body>
</html>
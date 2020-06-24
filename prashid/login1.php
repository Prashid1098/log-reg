<?php include('server.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
<title>Login Page</title>
</head>
<body>
<div class="center">
<form method="post" action="login1.php">
<?php include('error.php');?>
<h1 id="h">Login Now</h1>
&nbsp;&nbsp;Username<br>&nbsp;&nbsp;<input type="text" name="Username"><br><br>
&nbsp;&nbsp;Password<br>&nbsp;&nbsp;<input type="password" name="Password"><br><br>
&nbsp;&nbsp;<button type="submit" name="login" class="log1">Log In</button><br><br>
<p>&nbsp;&nbsp;Don't have an account? <a href="registernow.php">Register</a></p>
</form>
</div>
</body>
</html>
<?php include('server.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="registerstyle.css">
<title>Register page</title>
</head>
<body>
<div class="center">
<form method="post" action="registernow.php">
<h1 id="h">Register Now</h1>
&nbsp;&nbsp;Username<br>&nbsp;&nbsp;<input type="text" name="Username"><br>
&nbsp;&nbsp;Email<br>&nbsp;&nbsp;<input type="text" name="Email"><br>
&nbsp;&nbsp;Password<br>&nbsp;&nbsp;<input type="Password" name="Password"><br><br>
&nbsp;&nbsp;<button type="submit" name="register" class="register1">Register</button><br><br>
<p>&nbsp;&nbsp;Already a member? <a href="login1.php">Log In</a></p>
</form>
</div>
</body>
</html>
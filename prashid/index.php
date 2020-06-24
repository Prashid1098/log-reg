<?php include('server.php');?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
<title>Home Page</title>
</head>
<body>
<h2 id="h">Home Page</h2>
<p><b><font size=5>You are successfully logged in</font></b></p>
<div class="center">
<?php if(isset($_SESSION['success'])):?>
<?php 
    echo $_SESSION['success'];
    unset($_SESSION['success']);
    ?>
    <?php endif ?>
    <?php if(isset($_SESSION['Username'])): ?>
    <p>Welcome <strong><?php echo $_SESSION['Username']; ?></strong></p>
    <p><a href="index.php?logout='1' " style="color:red;">Logout</a></p>
    <?php endif ?>
    </div>
    </body>
    </html>


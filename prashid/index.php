<?php include('server.php');?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
<title>Home Page</title>
</head>
<body>
<h2 id="h">Home Page</h2>
<div class="center">
<?php if(isset($_SESSION['success'])):?>
<div class=>
<?php 
    echo $_SESSION['success'];
    unset($_SESSION['success']);
    ?>
    </div>
    <?php endif ?>
    <?php if(isset($_SESSION['Username'])): ?>
    <p>Welcome <strong><?php echo $_SESSION['Username']; ?></strong></p>
    <p><a href="index.php?logout='1' " style="color:Red;">Logout</a></p>
    <?php endif ?>
    </div>
    </body>
    </html>


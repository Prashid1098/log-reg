<?php include('server.php');?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css"> 
<title>Home Page</title>
</head>
<body>
<div class="header">
<h1>Home Page</h1>
</div>
<div class="content">
<?php if(isset($_SESSION['success'])):?>
<div class="error success">
<?php 
    echo $_SESSION['success'];
    unset($_SESSION['success']);
    ?>
</div>
    <?php endif ?>
    <?php if(isset($_SESSION['Username'])): ?>
    <p>Welcome <strong><?php echo $_SESSION['Username']; ?></strong></p>
    <p><a href="index.php?logout='1' " style="color:red;">Logout</a></p>
    <p><a class="next" href="diarypage.php">Start Diary</a></p>
    <?php endif ?>
    </div>
    </body>
    </html>


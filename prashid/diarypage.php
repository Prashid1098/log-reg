<?php include('diaryserver.php') 
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="pagestyle.css">
<title>Diary Page</title>
</head>
<body>
<header>
<div class="topnav">
<a class="active" href="diary.php">HOME</a>
<a href="about.html">ABOUT</a>
<a href="contact.php">CONTACT</a>
<a href="record.php">VIEW</a>
</div>
<br><br><br>
<h1 id="heading1"><u>TODAY'S ENTRY</u></h1><br>
<form method="POST" action="diarypage.php">
<details>
<summary><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    MY ENTRIES:</b><summary>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
$s1=time();
$date=Date("m-d-Y",$s1);
echo"&nbsp;&nbsp;&nbsp;<b>Today's date :$date</font></b><br>";
?>
</p>
</details>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;<textarea id="textarea" name="textarea" placeholder="Start typing..." cols="175"></textarea><br>
</p>
&nbsp;&nbsp;&nbsp;&nbsp;<input id="submit" type="submit" value="Submit" name="submit">
<input type="submit" id="upda" value="Edit" name="edi"> 
<input type="submit" id="sub" value="Logout" name="logout">
</form>
</header>
</body>
</html>

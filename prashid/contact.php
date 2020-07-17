<?php include('contactserver.php');
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url("diary2.jpeg");
    background-repeat: no repeat;
    background-size: cover;
}
* {box-sizing: border-box;}
h3{
  margin-left:45%;
  font-style:italic;
  text-decoration:underline;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 10px;
  margin-bottom: 10px;
  resize: vertical;
}

input[type=submit] {
  background-color: rgb(29, 45, 134);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:47%;
}
.container {
  border-radius: 5px;
  background-color:white;
  padding: 20px;
  margin-top: 20px;
  background-image: url("contact.png");
  background-repeat: no repeat;
    background-size: cover;
}
#et{
  background-color:green;
  color:white;
  margin-left:47.5%;
}
#log{
  margin-left:47.5%;
  margin-bottom:10px;
  background-color:red;
  color:white;
}
a{
    float: right;
    color: black;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    overflow:hidden;
    background-color:white; 
    margin-top:-13px;
}
a:hover{
  background-color:black;
  color:yellow;
}
#subject{
  padding-bottom:125px;
}
</style>
</head>
<title>Contact</title>
<body>
<a href="diarypage.php">RETURN TO HOME</a>
  <h3>CONTACT</h3>
  <form method="post" action="contact.php">
<div class="container">
  <form action="/action_page.php">
    <br><label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label><br>
    <input type="text" id="country" name="country" placeholder="Your Country..">
  </input><br>

    <label for="subject">Your Contact Number and other Details</label>
    <input type="text" id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>

    <input type="submit" name="submit" value="submit">
  </form>
</div>
<form action="contactview.php" method="post">
 <input type="submit" id="et" value="edit">
</form>
<form action="diary.php" method="post">
 <input type="submit" id="log" name="logt" value="logout">
</form>
</form>
</body>
</html>

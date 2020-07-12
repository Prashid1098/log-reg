<html>
<head>
<style>
body{
    background-image: url("diary2.jpeg");
    background-repeat: no repeat;
    background-size: cover;
    text-align:center;
}
h1{
    font-style:italic;
    text-decoration:underline;
    text-align:center;
}
a{
    float:left;
    display: block;
    color: black;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    overflow:hidden;
    background-color: #e9e9e9;
    margin-top:1%;
}
a:hover{
    background-color:black;
    color:yellow;
}
#update{
    display:block;
    width:150px;
    height:40px;
}
#update:hover{
    background-color:blue;
    color:white;
    cursor:pointer;
    border-radius:8px;
}
#textarea{
height:400px;
}
#show{
    width:100px;
    height:30px;
    cursor:pointer;
    border-radius:4px;
}
#show:hover{
	background-color:#0099cc;
    color:white;
}
#date{
    width:150px;
    height:30px;
    color:blue;
}
<?php include('record.css') 
?>
</style>
</head>
<title>Records</title>
<body>
<h1>SEARCH YOUR ENTRY DATEWISE</h1>
<br><br>
<form action="record.php" method="POST">
<input type="date" name="date" id="date">
<input type="submit" name="submit" id="show" value="Show Entry">
</form>
<br>
<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'diary1');

if(isset($_POST['submit']))
{
$date = $_POST['date'];

$query = " SELECT * FROM diary WHERE date='$_POST[date]' "; 
$query_run = mysqli_query($conn,$query);
?>
<div class="update">
<form method="POST" action="edited.php">
<?php
while($row = mysqli_fetch_array($query_run))
{
    echo "<input type = date id=d name=date value='".$row['date']."'>&nbsp;&nbsp;";
    echo "<input type = textarea id=t name=textarea value='".$row['textarea']."'>";
    echo "<input type=hidden name=id value='".$row['id']."'><br><br>";
    echo "<b>To update the entry after editing,Click Here"."&nbsp;&nbsp;</b>";
    echo "<input type=submit name=submit value='Edit & Submit' id=edit>";
    echo "</form>";
}
}
?>
</div>
</body>
</html>

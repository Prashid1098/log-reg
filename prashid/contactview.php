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
    text-align:center;
    font-style:italic;
    text-decoration:underline;
}
#co{
    width:130px;
    height:30px;
}
#show{
    width:100px;
    height:30px;
    border-radius:4px;
    cursor:pointer;
}
#show:hover{
    background-color:blue;
    color:white;
}
table{
    margin-left:20%;
}
th{
    background-color:lightblue;
}
tr,td{
    height:60px;
}
#edit{
    width:190px;
    height:30px;
    border-radius:4px;
}
#edit:hover{
    background-color: green;
    color:white;
    cursor:pointer;
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
</style>
<title>View Contacts</title>
</head>
<body>
<h1>View Your Saved Contacts</h1>
<br><br>
<form action="contactview.php" method="POST">
<input type="text" name="firstname" id="co" placeholder="FirstName">
<input type="text" name="lastname" id="co" placeholder="LastName">
<input type="submit" name="subt" id="show" value="Check Entry"></p>
</form>
<br>
<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'diary1');

if(isset($_POST['subt']))
{
$firstname=($_POST['firstname']);  
$lastname=($_POST['lastname']); 
$query2 = " SELECT * FROM contacts WHERE firstname='$firstname' OR lastname='$lastname' "; 
$query_run = mysqli_query($conn,$query2);
?>
<form action="contactview.php" method="POST">
<table border="1">
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Country</th>
<th>Details</th>
</tr>
<?php
    while($rows = mysqli_fetch_array($query_run))
    {
        echo "<tr>";
        echo "<input type=hidden id=idty name=ID value='".$rows['ID']."'>";
        echo "<td><input type=text name=firstname id=fname value='".$rows['firstname']."'></td>";
        echo "<td><input type=text name=lastname id=lname  value='".$rows['lastname']."'></td>";
        echo "<td><input type=text name=country id=country value='".$rows['country']."'></td>";
        echo "<td><input type=text name=subject id=subject value='".$rows['subject']."'></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<input type=submit name=edited value=Update id=edit>";
    echo "</form>";
}
?>

<?php 
if(isset($_POST['edited'])){
    $sql1="UPDATE contacts SET firstname ='$_POST[firstname]',lastname='$_POST[lastname]'  WHERE ID ='$_POST[ID]' ";
$query_run1=mysqli_query($conn,$sql1);
if($query_run1)
{
    echo "<script type='text/javascript'>alert('Data Updated ')</script>";
}
else
{
    echo "<script type='text/javascript'>alert('Data Not Updated ')</script>";
}
}
?>
</div>
<a href="contact.php" class="return">RETURN</a>
</body>
</html>

</body>
</html>

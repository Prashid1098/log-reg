<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'diary1');

$sql="UPDATE diary SET textarea ='$_POST[textarea]',date='$_POST[date]' WHERE id ='$_POST[id]' ";
$query_run1=mysqli_query($conn,$sql);
if($query_run1)
{
    echo "<script type='text/javascript'>alert('Data Updated ')</script>";
}
else
{
    echo "<script type='text/javascript'>alert('Data Not Updated ')</script>";
}
?>
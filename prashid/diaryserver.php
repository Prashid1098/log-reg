<?php
$date="";
$textarea="";


$db1 = mysqli_connect('localhost','root','','diary1');
if(isset($_POST['submit'])){
    $date=($_POST['date']);
    $textarea=($_POST['textarea']);
    

$sql1 = "INSERT INTO diary (date,textarea)
                    VALUES (NOW(),'$textarea')";
                    mysqli_query($db1,$sql1);
                    header('location:diarypage.php');
}
if(isset($_POST['logout'])){
    header('location:diary.php');
}
if(isset($_POST['edi'])){
    header('location:record.php');
}
function newnow($a)
{
     $a=date(m/d/Y);
     echo $a;
}
?>
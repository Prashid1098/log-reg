<?php
$date="";
$textarea="";


$db1 = mysqli_connect('localhost','root','','diary1');
if(isset($_POST['submit'])){
    $date=($_POST['date']);
    $textarea=($_POST['textarea']);
    

$sql1 = "INSERT INTO diary (mdY,textarea)
                    VALUES ('$date','$textarea')";
                    mysqli_query($db1,$sql1);
                    header('location:diarypage.php');
}
if(isset($_POST['logout'])){
    header('location:diary.php');
}
?>
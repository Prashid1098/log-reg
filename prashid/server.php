<?php
session_start();
$Username="";
$email="";
$password="";
$errors=array();


$db = mysqli_connect('localhost','root','','diary1');
  if(isset($_POST['register']))
  {
    $Username=mysqli_real_escape_string($db,$_POST['Username']);
    $Email=mysqli_real_escape_string($db,$_POST['Email']);
    $Password=mysqli_real_escape_string($db,$_POST['Password']);

    if(empty($Username)){
      array_push($errors,"Username is required");
    }
    if(empty($Email)){
      array_push($errors,"Email is required");
    }
    if(empty($Password)){
      array_push($errors,"Password is required");
    }
    if (count($errors)==0){
      $Password = md5($Password);
          $sql = "INSERT INTO user (Username,Email,Password)
                    VALUES ('$Username', '$Email', '$Password')";

    mysqli_query($db,$sql);
    $_SESSION['Username']=$Username;
    $_SESSION['success']="You are now logged in";
    header('location:index.php');
    }
  }


  if(isset($_POST['login']))
    {
      $Username=mysqli_real_escape_string($db,$_POST['Username']);
      $Password=mysqli_real_escape_string($db,$_POST['Password']);

      if(empty($Username)){
        array_push($errors,"Username is required");
      }
      if(empty($Password)){
        array_push($errors,"Password is required");
    } 
      if (count($errors)==0)
      {
        $Password = md5($Password);
          $sql = "SELECT * from user WHERE Username='$Username' AND Password='$Password' ";
          $result= mysqli_query($db,$query);
          if(mysqli_num_rows($result)==1)
          {
          $_SESSION['Username']=$Username;
          $_SESSION['success']="You are now logged in";
          header('location:index.php');
      }else
      {
        array_push($errors,"is invalid");
        header('location:login1.php');
      }
    }
  }
      if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['Username']);
        header('location:login1.php');
      }
      ?>
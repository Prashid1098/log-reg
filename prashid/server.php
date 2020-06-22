<?php
  $db = mysqli_connect('localhost','root','','diary1');
  if(isset($_POST['register']))
  {
      $Username=($_POST['Username']);
      $Email=($_POST['Email']);
      $Password=($_POST['Password']);
  
          $Password = md5($Password);
          $sql = "INSERT INTO user (Username,Email,Password)
                    VALUES ('$Username', '$Email', '$Password')";
                     
                    mysqli_query($db, $sql);
  }
  ?>
<?php include('server.php');?>
<html>
<head>
<style>
    body{
    font-size: 120%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("diary2.jpeg");
    height:100%;
    margin-top:10%;
}
.header{
    width: 30%;
    margin: 50px auto 0px;
    color: white ;
    background:#0099cc;
    text-align: center;
    font-family: Calibri;
    border: 1px solid #73AD21;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;

}
.content{
    width: 30%;
    height:30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #595c51;
    background: white;
    border-radius: 0px 0px 10px 10px;

}
.input{
    margin:10px 0px 10px 0px;
}
.error{
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94444;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
}
.success {
    color: #3c763d;
    background: #dff0db;
    border: 1px solid #3c763d;
    margin-bottom: 20px;
}
a.next{
    background-color: #0099CC;
    color:white;
    padding:5px;
	border-radius:10px;
}
#prev{
    background-color: #0099CC;
    color:white;
    padding:5px;
	border-radius:10px;
}
</style>
<title>Home Page</title>
</head>
<body>
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
    <p>Welcome&nbsp;<strong><?php echo $_SESSION['Username']; ?></strong></p><br>
    <p>Continue To Login Page &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id="prev" href="login1.php">Login Page</a></p>
    <p>Return to home page &nbsp;&nbsp;<a class="next" href="diary.php">Home Page</a></p> 
    <?php endif 
    ?>
    </div>
    </body>
    </html>


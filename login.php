<? ob_start(); ?>
<?php 
//ob_start();
session_start();?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title></title> 
<link  rel="stylesheet" href="menubar.css"/>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
<link  rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link rel="stylesheet" href="customized2.css"> 
<style>
.h2{
font-family: serif;
background-color:white;
font-size: 80px;
}
.link_button{
    background: none;
    border: none;
    color: skyblue;
    text-decoration: underline;
    cursor: pointer;
    font-family: sans-serif;
}
#fieldset legend{
padding:0.2em 0.5em;
border:1px solid white;
color:#00CD66;
font-size:30px;
font-family: Georgia, serif;
text-align:center;
display:inline;
padding:0;
margin:0;
padding:0;

}
</style>
</head>
<body style="background-color:white">
    
    
    <?php
/*if(isset($_SESSION["email"])){
session_destroy();
}*/
require 'dbConnection.php';
//$ref=@$_GET['q'];
if(isset($_POST['submit'])){
$name = $_POST['name'];
$password = $_POST['password'];

$name = stripslashes($name);

$password = stripslashes($password); 
$password = addslashes($password);
$admpassword="admin2021";

$sql ="SELECT * FROM Admin WHERE Username = '$name' and Password = '$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$num=mysqli_num_rows($result);

if($num>0){
  $name = $row['FirstName'];
  $_SESSION["FirstName"] = $name;
  //echo   $_SESSION["FirstName"];
  header("location:home.php");   

}




else{
$msg="<div class='form-group'><div class='alert alert-danger'>Wrong user name or password.</div>";

}
}


?>
<? ob_flush(); ?>
<div class="bg" style="" >
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
    <fieldset id="fieldset">
    <legend>Online Sacco</legend>
    <legend style="color:black">Login</legend>
<table id="maintable" >      
<tr style="height:50%;">
<td align="center" id="tdUliza"><!--body-->

   <form class="form-horizontal" name="form" action=""    method="POST" >


<!-- Text input-->
<div class="form-group">
<div class="col-md-12">
    <input id="email" name="name" placeholder="Enter your name" class="form-control input-md" type="text" value="<?php if(isset($_SESSION['email'])){
   $email=$_SESSION['email']; 
   echo $email;
  }?>"   required>

</div>
</div>


<!-- Password input-->
<div class="form-group">
<div class="col-md-12">
<input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password" value="<?php if(isset($_SESSION['password'])){
   $password=$_SESSION['password']; 
   echo $password;
  }?>" required>

</div>
</div>

<?php if(isset($msg)){
echo $msg;
}?>
<div class='form-group' align='center'><input type="submit" name="submit" value="Login" class="link_button" /> &nbsp&nbsp&nbsp&nbsp<a href="#"  onclick="location.href='index.php'" style="color:black;"/>Back<a/> </div>
<!--<a href="forgotPassword.php"><u>Forgot Password?</u></a>-->

</form>
</td> 
</tr>
</table>
     </fieldset>   
</div></div></div>

</fieldset>
</div>
</body>
</html>

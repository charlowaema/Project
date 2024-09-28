<? ob_start(); ?>
<?php 
//ob_start();
session_start();?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title></title>
<link  rel="stylesheet" href="css.css"/> 
<link  rel="stylesheet" href="menubar.css"/>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
<link  rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="customized2.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<script>
function validateForm(){var q = document.forms["form"]["name"].value;if(q == null || q == ""){alert("User name is required");return false;}var p = document.forms["form"]["phonenumber"].value;if(p == null || p == ""){alert("Phone number is required");return false;}var t = document.forms["form"]["terms"].checked;if(!t){alert("Read and accept our terms and conditions");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>
<style>
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
include_once 'dbConnection.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];

$password = $_POST['password'];

$gender = $_POST['gender'];

$sql="select *  from users where password='$password'";
$result=mysqli_query($con,$sql);
$num= mysqli_num_rows($result);
if($num==1){
$msg="<div class='form-group'><div class='alert alert-danger'>Use another Password</div>";
}
else{
$_SESSION["name"] = $name;
  

$sql2="INSERT INTO users(name,password,gender) VALUES  ('$name','$password','$gender')";
$result2=mysqli_query($con,$sql2);
//$msg="<div class='form-group'><div class='alert alert-success'>You have successfully registered.</div>";
header("location:home.php?q=1"); 
}
}
?>
<? ob_flush(); ?>
<div class="bg" style="" >
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
    <fieldset id="fieldset">
    <legend>Promise Cards</legend>
    <legend>Sign Up</legend>
<table id="maintable" >      
<tr style="height:50%;">
<td align="center" id="tdUliza"><!--body-->

<form class="form-horizontal" name="form" action=""    method="POST" onSubmit="" >
<?php if(isset($msg)){
echo $msg;
}?>
<!-- Text input-->
<div class="form-group">
<div class="col-md-12">
<input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"  required>

</div>
</div>


<!-- Password input-->
<div class="form-group">
<div class="col-md-12">
<input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password"  required>

</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password"  required >

</div>
</div>
<!--oninvalid="this.setCustomValidity('Read and accept our terms and conditions')" 
onchange="this.setCustomValidity('')"--->


<div class="form-group">
<div class="col-md-12">  
    <label><i>Gender&nbsp</i></label>
      <span style="white-space:nowrap">
          <input type="radio" id="gender" name="gender" value='Male' required>
        <label for="gender">Male</label>
      </span>
    
    <span style="white-space:nowrap">
        <input type="radio" id="gender" name="gender" value='Female' required>
        <label for="gender">Female</label>
      </span>
    
    
</div>
</div>




<div class='form-group' align='center'><div class="col-md-12"><input type="submit" name="submit" value="Sign up" class="link_button" />&nbsp&nbsp<a href="#"  onclick="location.href='login.php'" style="color:black;"/>Login<a/>&nbsp&nbsp</div> </div>



</form>
</td> 
</tr>
</table>
</fieldset>    
</div></div></div>


</div>
</body>
</html>

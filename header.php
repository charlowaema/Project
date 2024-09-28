
<div class="header-d-block" id='header'>
<div class="row" style="background-color:#5F8575">
<div class="col-lg-6" style="">
    <span class="logo1"><h2 class="h22"><b><a style="color:white">J</a><a style="color:white">O</a><a style="color:white">S</a><a style="color:white">A</a><a style="color:white">J</a><a style="color:white">O</a>&nbsp;<a style="color:white">S</a><a style="color:white">A</a><a style="color:white">C</a><a style="color:white">C</a><a style="color:white">O</a></b></h2></span></div>
<div class="col-md-4 col-md-offset-2">
 <?php
 include_once 'dbConnection.php';

if(!(isset($_SESSION['FirstName']))){
header("location:login.php");

}
else
{
$name = $_SESSION['FirstName'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"> <a href="home.php?q=13" class="log log1">'.$name.'</a>|&nbsp<a href="logout.php?q=index.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true">&nbsp;Signout</button></a></span>';
}?>

</div>
</div></div>
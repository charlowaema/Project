<? ob_start(); ?>
<?php session_start();
if(!(isset($_SESSION['FirstName']))){
header("location:login.php");

}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Sacco </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>   
<link rel="stylesheet" href="customized.css">  
<link rel="stylesheet" href="css/main.css">
<link  rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>

<!--auto search--->
<link rel="stylesheet" type="text/css" href="css2/jquery.ajaxcomplete.css" />
<script type="text/javascript" src="js2/jquery.js"></script>
<script type="text/javascript" src="js2/jquery.ajaxcomplete.js"></script>
<!--end of auto search--->

<!---Calender---->
<link href="assets/css/bootstrap-datepicker.css" rel="stylesheet" />
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!---End of Calender---->
<script src="js/bootstrap.min.js"  type="text/javascript"></script>

<script src="sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert.css">







<script type="text/javascript">
$(document).ready(function(){
$("#searchname").autocomplete("ajaxcomplete.php", {
selectFirst: true
});
});
function confirmDelete(){

return confirm("Are you sure you want to delete this item");
}



//form validation
function validateForm() {var a = document.forms["form14"]["oldpassword"].value;if(a == null || a == ""){alert("old password must be provided");return false;}var b = document.forms["form14"]["newpassword"].value;if(b == null || b == ""){alert("New password must be provided");return false;}var c = document.forms["form14"]["confirmpassword"].value;if(c == null || c == ""){alert("confirm your new password");return false;}if(b.length<5 || b.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
if (b!=c){alert("Passwords must match.");return false;}}

</script>
<style>
#fieldset1{

width:30%;    
border:1px solid black;  
}

#fieldset1 legend{   
border:1px solid green;  
background-color:orange;
color:black;
}
.Clicablebutton{
background-color:#00CD66;
border:none;
color:black;
padding:2px 3px;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:15px;
margin:4px 2px;
cursor:pointer;
width:90%;
height:10%;
border-radius:5px;
}
.Clicablebutton:hover{
color:red;
}

#UserDiv{
width:40%;
border:1px solid green;
left: 0; 
right: 0; 
margin-left: auto; 
margin-right: auto;
padding:1%;
}
.AdmintableDetails, .AdmintableDetails th, .AdmintableDetails td{
min-width:auto;
margin: auto;
border:1px solid white;
border-collapse: collapse;
text-align:left;
font-size:12px;
table-layout:fixed;
background:#128C7E;
opacity:1;
color:white;
}
.AdmintableDetails th{
text-align:right;
}

.AdmintableDetails a{
color:white;
}


.AdmintableDetails th, td{
padding:2px;
opacity:0.9;
}


.tableDetailsSmall, .tableDetailsSmall th, .tableDetailsSmall td{
width:100%;
margin: auto;
border:1px solid white;
border-collapse: collapse;
text-align:center;
font-size:12px;
table-layout:fixed;
background:#128C7E;
opacity:1;
color:white;
}

.tableDetailsSmall2, .tableDetailsSmall2 th, .tableDetailsSmall2 td{
width:50%;
margin: auto;
border:1px solid white;
border-collapse: collapse;
text-align:center;
font-size:12px;
table-layout:fixed;
background:#004080;
opacity:1;
color:white;
}
#adminfieldset{
border-radius:3%;
}
input[type=submit] {

background:red; 

}
input[type=submit]:hover {
background:red;
}
.col-md-12{


}

.col-md-6{
width:100%;
}
.Postbutton,.Recoverbutton{
background-color: #004080;
border:none;
color:white;
padding:5px 7px;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:15px;
margin:4px 0px;
cursor:pointer;
width:100%;
border-radius:5px;
text-align:left;
font-family:typo;
}
.Postbutton:hover,.Recoverbutton:hover{
color:red;
text-decoration:none;
}

#fieldsetChooseItems{
border:1px solid #004080;
margin:0 auto;
width:auto;
padding:1em;
margin-bottom:1em;
border-radius:2%;
}

#fieldsetChooseItems legend{
padding:0.2em 0.5em;
border:1px solid #004080;
color:green;
font-size:90%;
text-align:center;
display:inline;
padding:0;
margin:0;
padding:0;
}
#fieldsetDocuments{
width:100%;
border-radius:2px;
white-space: normal; 
}
#fieldsetPostItems,#fieldsetPostItems{
border-radius:3%;
}
#itembutton{
color:black;
display:inline-block;
padding:5px 10px;
margin:1%;
border-radius:3px;
border:1px solid green;
width:92px;
height:40px;
}
#itembutton span{
font-family:sans serif; 
font-size: 10px;
word-wrap: normal;
}

.btn-file{
position:relative;
overflow:hidden;   
}
.btn-file input[type=file]{
position:absolute;
top:0;
right:0;
min-width:100%;
min-height:100%;
font-size:100px;
text-align:right;
filter:alpha(opacity=0);
opacity:0;
outline:0;
background:white;
cursor:inherit;
display:block;
}


.tableDetails, .tableDetails th, .tableDetails td{
width:100%;
margin: auto;
border:1px solid white;
border-collapse: collapse;
text-align:center;
font-size:12px;
table-layout:fixed;
background:#004080;
opacity:1;
color:white;
}
.tableDetails th{
text-align:right;
}
.tableDetails th, td{
word-wrap: break-word;
padding:2px;
opacity:1;
}


.UserDetails, .UserDetails th, .UserDetails td{
width:40%;
margin: auto;
border:1px solid white;
border-collapse: collapse;
text-align:left;
font-size:20px;
table-layout:fixed;
background:white;
opacity:1;
color:black

}

#smallButton.btn{
padding:1%;  

}
label{
font-family:sans serif;
font-size:15px;
/*border-spacing:0 1px; */
}


.link_button{
background: none;
border: none;
color: skyblue;
text-decoration: underline;
cursor: pointer;
font-family: sans-serif;
}
.nonDocsLink{
display: flex;
align-items: center;
justify-content: center;}  

[type="radio"]
{
vertical-align:middle;
}
.col-md-12{
/*white-space:nowrap;*/

}

table{
border:none;  


}
table td{
border:none;  


}
.form-control,.formcontrol{display:block;
             width:100%;
             height:34px;
             padding:6px 12px;
             font-size:14px;
             line-height:1.42857143;color:#555;
             background-color:#fff;
             background-image:none;
             border:1px solid #ccc;
             border-radius:4px;
             -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075); 
}
/*input[type=text] {
border:none;
background:rgba(0,0,0,0);
}*/
</style>

</head>
<?php
include_once 'dbConnection.php';
?>
<body>
<!--alert message-->

<!--alert message end-->
<?php include 'header.php'; ?>
<div class="bg" >

<!--start navigation menu-->
<nav class="navbar navbar-default title1" >
<div class="container-fluid" >
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header"  >
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#"><b><!---Netcamp--><!--Main Main&rArr;--></b></a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav" >




<li class='dropdown'>
<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' style='color:#004080'>Admin Console<span class='caret'></span></a>
<ul class='dropdown-menu' >
<li><a href='home.php?q=1' style='color:#004080'>Manage Members</a></li>
<li><a href='home.php?q=2' style='color:#004080'>Interest Settings</a></li>
<li><a href='home.php?q=3' style='color:#004080'>Manage Transactions</a></li>

</ul>
</li>


<li class='dropdown'>
<a href="#"  class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' style='color:#004080'><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Transactions<span class='caret'></span></a>
<ul class='dropdown-menu' >
<li><a href='home.php?q=4' style='color:#004080'>Receipts/Loans</a></li>
<li><a href='home.php?q=5' style='color:#004080'>Expenses</a></li>        
</ul>
</li>


<li class='dropdown'>
<a href="#"  class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' style='color:#004080'><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Statements<span class='caret'></span></a>
<ul class='dropdown-menu' >
<li><a href='home.php?q=6' style='color:#004080'>Individuals Transactions</a></li>
<li><a href='home.php?q=7' style='color:#004080'>All Memeber Transactions</a></li>        
</ul>
</li>


<li class='dropdown'>
<a href="#"  class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' style='color:#004080'><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Reports<span class='caret'></span></a>
<ul class='dropdown-menu' >
<li><a href='home.php?q=12' style='color:#004080'>Income Reports</a></li>        
</ul>
</li>

</ul>

<form class="navbar-form navbar-left" role="search" method="get" >
<div class="form-group">
<input type="text" class="form-control" placeholder="Type to search" id="searchname" name="searchname" style="border:none;">
</div>
<button type="submit" name="searchbutton" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Search</button>
</form>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->



<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">

<!--home start-->

<?php if(@$_GET['q7'])
{ 

echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];
}?>


<?php


/*********************************User Management**********************************************************/
///.....This table header is reusable.......................//
function TableHeader(){
echo '<table class="AdmintableDetails">
<tr><td style="background-color:#00CD66" colspan="12">
<form class="navbar-form navbar-left" role="search" method="get" >
<div class="form-group">
<input type="text" class="form-control" placeholder="Type to search" id="searchvalue" name="searchvalue" style="border:none;">
</div>
<button type="submit" name="searchbutton" class="btn btn-primary" style="background:red"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span>&nbsp;Search Member</button>

<a href="adminDash.php?q=4" style="background:red" class="btn btn-primary">Add Member</a>
</form>
</td>
</tr>
<tr><td>Membership No.</td><td>FirstName</td><td>SecondName</td><td>ID</td><td>KRA</td><td>Date Of Registration</td><td>Mobile No</td><td>User Name</td><td>User Type</td><td>Edit</td><td>Delete</td><td>Contact</td></tr>';
} 


function TableHeader2(){
echo '<table class="AdmintableDetails">
<tr><td style="background-color:#00CD66" colspan="12">
<form class="navbar-form navbar-left" role="search" method="get" >
<div class="form-group">
<input type="text" class="form-control" placeholder="Type to search" id="searchvalue" name="searchvalue" style="border:none;">
</div>
<button type="submit" name="searchbutton" class="btn btn-primary" style="background:red"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span>&nbsp;Search Member</button>

<a href="adminDash.php?q=4" style="background:red" class="btn btn-primary">Add Member</a>
</form>
</td>
</tr>
<tr><td>Membership No.</td><td>FirstName</td><td>SecondName</td><td>ID</td><td>KRA</td><td>Date Of Registration</td><td>Mobile No</td><td>User Name</td><td>User Type</td><td>SERVICE LOAN</td><td>ISSUE LOAN</td><td>Contact</td></tr>';
} 



if(@$_GET['q']==1) {

$sql="select @row:=@row+1 as row,Pattern,No,FirstName,SecondName,ID,KRA, password,DateOfRegistration,MobileNo,Username,MemberType from  users, (select @row:=0)users";
$result=mysqli_query($con,$sql);

TableHeader();
//echo "<tr><td>{$row['row']}</td><td>{$row['Pattern']}{$row['No']}</td><td><a href='? showUserAccount='>{$row['FirstName']}</a></td><td>{$row['SecondName']}</td><td>{$row['ID']}</td><td>{$row['KRA']}</td><td>{$row['DateOfRegistration']}</td><td>{$row['MobileNo']}</td><td>{$row['Username']}</td><td><a href='? user_id2=".$row['No']."' class='Clicablebutton'>Edit</a></td><td><a href='?  user_id20=".$row['No']."'' class='Clicablebutton' onClick='return confirmDelete()'>Delete</a></td><td><a href='?  smsId=".$row['No']."'' class='Clicablebutton'>Contact</a></td></tr>";
displayRows($result);


}

if(isset($_GET['searchbutton'])){
$searchvalue=$_GET['searchvalue'];
$sql="select @row:=@row+1 as row,Pattern,No,FirstName,SecondName,ID,KRA, password,DateOfRegistration,MobileNo,Username,MemberType from  users, (select @row:=0)users where No ='$searchvalue' || FirstName='$searchvalue'";
$result=mysqli_query($con,$sql);
TableHeader();
displayRows($result);

}

function displayRows($result){

while($row=mysqli_fetch_array($result)){
echo "<tr><td>{$row['Pattern']}{$row['No']}</td><td><a href='? showUserAccount='>{$row['FirstName']}</a></td><td>{$row['SecondName']}</td><td>{$row['ID']}</td><td>{$row['KRA']}</td><td>{$row['DateOfRegistration']}</td><td>{$row['MobileNo']}</td><td>{$row['Username']}</td><td>{$row['MemberType']}</td><td><a href='? user_id1=".$row['No']."' class='Clicablebutton'>Edit</a></td><td><a href='?  user_id2=".$row['No']."'' class='Clicablebutton' onClick='return confirmDelete()'>Delete</a></td><td><a href='?  smsId=".$row['No']."'' class='Clicablebutton'>Contact</a></td></tr>";
}
echo "</table>";
}



//.............................add member...................................................//
if(@$_GET['q']==2) {
echo '<fieldset id="fieldsetx">
<legend>Add  Member</legend>
<form class="" method="GET" >
<div class="row">
<div class="col-md-3">First Name:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input type="hidden" name="No" ><input id="firstname" name=" firstname"  class="form-control input-md" type="text" required>       
</div>
</div>
</div><!--End of row-->


<div class="row ">
<div class="col-md-3">Second Name:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<input id="secondname"   class="form-control input-md" type="text"   name="secondname" required>    
</div>
</div>
</div><!--End of row-->


<div class="row ">
<div class="col-md-3">ID NO.</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<input id="idno"   class="form-control input-md" type="text"   name="idno" required>    
</div>
</div>
</div><!--End of row-->


<div class="row ">
<div class="col-md-3">KRA</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<input id="kra"   class="form-control input-md" type="text"   name="kra" required >    
</div>
</div>
</div><!--End of row-->

<div class="row ">
<div class="col-md-3">Registration Date</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<input id="date"   class="form-control input-md" type="text"   name="date" required >    
</div>
</div>
</div><!--End of row-->


<div class="row">
<div class="col-md-3">Phone No:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input id="phoneno" class="form-control input-md" type="text"  name="phoneno" required>    
</div>
</div>
</div><!--End of row-->


<div class="row">
<div class="col-md-3">User Name:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input id="username"   class="form-control input-md" type="text"  name="username" required>    
</div>
</div>
</div><!--End of row-->


<div class="row ">
<div class="col-md-3">Member Type</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<select name="membertype" required>
<option value=""></option>
<option value="Member">Member</option>
<option value="Non Member">Non Member</option>
</select>

</div>
</div>
</div><!--End of row-->



<div class="form-group" align="center">
<input type="submit"  class="btn btn-primary" name="AddMember" value="Add Member"/>
</div>
</form>
</fieldset>';
}

if(isset($_GET['AddMember'])){
///echo "<tr><td>{$row['row']}</td><td>{$row['Pattern']}{$row['No']}</td><td><a href='? showUserAccount='>{$row['FirstName']}</a></td><td>{$row['SecondName']}</td><td>{$row['ID']}</td><td>{$row['KRA']}</td><td>{$row['DateOfRegistration']}</td><td>{$row['MobileNo']}</td><td>{$row['Username']}</td><td><a href='? user_id1=".$row['No']."' class='Clicablebutton'>Edit</a></td><td><a href='?  user_id2=".$row['No']."'' class='Clicablebutton' onClick='return confirmDelete()'>Delete</a></td><td><a href='?  smsId=".$row['No']."'' class='Clicablebutton'>Contact</a></td></tr>";
$firtname=$_GET['firstname'];
$secondname=$_GET['secondname'];
$idno=$_GET['idno'];
$kra=$_GET['kra'];
$registrationdate=$_GET['date'];
$phoneno=$_GET['phoneno'];
$username=$_GET['username'];
$membertype=$_GET['membertype'];


if($membertype=='Non Member'){
$sql="insert into users (Pattern,FirstName,SecondName,ID,KRA,DateOfRegistration,MobileNo,Username,RegistrationFee,MemberType) values('','$firtname','$secondname','$idno','$kra','$registrationdate','$phoneno','$username','500','$membertype')";   

}
else{
$sql="insert into users (FirstName,SecondName,ID,KRA,DateOfRegistration,MobileNo,Username,RegistrationFee,MemberType) values('$firtname','$secondname','$idno','$kra','$registrationdate','$phoneno','$username','500','$membertype')";
}
$result=mysqli_query($con,$sql);

if($result){
echo 'member added successfully';

}
else{

echo mysqli_error($con);
}

}




//................................ Edit member information................//
if(isset($_GET['user_id1'])){
$id=$_GET['user_id1'];
$sql="select * from users where No='$id'";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);

echo '<fieldset id="fieldsetx">
<legend>Edit User</legend>
<form class="" method="post" >
<div class="row">
<div class="col-md-3">First Name:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input type="hidden" name="No" value='.$row['No'].'><input id="firstname" name=" firstname"  class="form-control input-md" type="text"  value='.$row['FirstName'].'>       
</div>
</div>
</div><!--End of row-->


<div class="row ">
<div class="col-md-3">Second Name:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<input id="secondname"   class="form-control input-md" type="text"   name="secondname" value='.$row['SecondName'].'>    
</div>
</div>
</div><!--End of row-->


<div class="row ">
<div class="col-md-3">ID NO.</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<input id="idno"   class="form-control input-md" type="text"   name="idno" value='.$row['ID'].'>    
</div>
</div>
</div><!--End of row-->


<div class="row ">
<div class="col-md-3">KRA</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<input id="kra"   class="form-control input-md" type="text"   name="kra" value='.$row['KRA'].'>    
</div>
</div>
</div><!--End of row-->

<div class="row ">
<div class="col-md-3">Registration Date</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<input id="date"   class="form-control input-md" type="text"   name="date" value='.$row['DateOfRegistration'].'>    
</div>
</div>
</div><!--End of row-->


<div class="row">
<div class="col-md-3">Phone No:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input id="phoneno" class="form-control input-md" type="text"  name="phoneno" value='.$row['MobileNo'].' >    
</div>
</div>
</div><!--End of row-->


<div class="row">
<div class="col-md-3">User Name:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input id="username"   class="form-control input-md" type="text"  name="username" value='.$row['Username'].'>    
</div>
</div>
</div><!--End of row-->


<div class="row ">
<div class="col-md-3">Member Type</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<select name="membertype" >
<option value="'.$row['MemberType'].'">'.$row['MemberType'].'</option>
<option value="Member">Member</option>
<option value="Non Member">Non Member</option>
</select>

</div>
</div>
</div><!--End of row-->



<div class="form-group" align="center">
<input type="submit"  class="btn btn-primary" name="save" value="save"/>
</div>
</form>
</fieldset>';
}



//...................when save button is clicked.............//
if(isset($_POST['save'])){
$No=$_POST['No'];

$firstname=$_POST['firstname'];
$secondname=$_POST['secondname'];
$idno=$_POST['idno'];
$kra=$_POST['kra'];
$date=$_POST['date'];
//$email=$_POST['email'];
//$phoneno=$_POST['phoneno'];
$phoneno=$_POST['phoneno'];
$username=$_POST['username'];
$membertype=$_POST['membertype'];

$sql="update users set FirstName='$firstname',SecondName='$secondname', ID='$idno', KRA='$kra', DateOfRegistration='$date', MobileNo='$phoneno', MemberType='$membertype', UserName='$username' where No='$No'";
$result=mysqli_query($con,$sql)or die(mysqli_error);
if($result){

header("location:adminDash.php?q7=You have successfully updated the record");

}
else{

header("location:adminDash.php?q7=The record cannot be updated");
}
}


//...............................delete user .................................//
if(isset($_GET['user_id2'])){
$id=$_GET['user_id2'];

$sql="Delete from users where No='$id'";
$sql2="ALTER TABLE  users AUTO_INCREMENT=$id";


$result=mysqli_query($con,$sql);
$result2=mysqli_query($con,$sql2);
if($result){
//header("location:home.php? q=6");
echo '<script type="text/javascript">swal("Success!", "User Deleted successfully", "success"); </script>';    

}
else{
echo "<script type='text/javascript'>swal('The member could not be deleted'); </script>";    

}
}
/***************************************************** end of user Management*****************************************/





if(@$_GET['q']==4) {

$sql="select @row:=@row+1 as row,Pattern,No,FirstName,SecondName,ID,KRA, password,DateOfRegistration,MobileNo,Username,MemberType from  users, (select @row:=0)users";
$result=mysqli_query($con,$sql);

TableHeader2();
//echo "<tr><td>{$row['row']}</td><td>{$row['Pattern']}{$row['No']}</td><td><a href='? showUserAccount='>{$row['FirstName']}</a></td><td>{$row['SecondName']}</td><td>{$row['ID']}</td><td>{$row['KRA']}</td><td>{$row['DateOfRegistration']}</td><td>{$row['MobileNo']}</td><td>{$row['Username']}</td><td><a href='? user_id2=".$row['No']."' class='Clicablebutton'>Edit</a></td><td><a href='?  user_id20=".$row['No']."'' class='Clicablebutton' onClick='return confirmDelete()'>Delete</a></td><td><a href='?  smsId=".$row['No']."'' class='Clicablebutton'>Contact</a></td></tr>";
displayRows2($result);


}

function displayRows2($result){

while($row=mysqli_fetch_array($result)){
echo "<tr><td>{$row['Pattern']}{$row['No']}</td><td><a href='? showUserAccount='>{$row['FirstName']}</a></td><td>{$row['SecondName']}</td><td>{$row['ID']}</td><td>{$row['KRA']}</td><td>{$row['DateOfRegistration']}</td><td>{$row['MobileNo']}</td><td>{$row['Username']}</td><td>{$row['MemberType']}</td><td><a href='? user_id222=".$row['No']."' class='Clicablebutton'>SERVICE LOAN</a></td><td><a href='?  user_id3=".$row['No']."'' class='Clicablebutton'>ISSUE LOAN</a></td><td><a href='?  smsId=".$row['No']."'' class='Clicablebutton'>Contact</a></td></tr>";
}
echo "</table>";
}







if(isset($_GET['user_id3'])){
$id=$_GET['user_id3'];
$sql="select * from users where No='$id'";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
$name=$row['FirstName'].' '.$row['SecondName'];


echo "<fieldset id='fieldsetx' style='width:auto;'>
<legend>LOAN ISSUANCE</legend>

<form method='post'  action='' enctype='multipart/form-data' id='fieldsForm' name='fieldsForm' class='form-horizontal' >
<table border='1' >
<tr>
<td><label>Member Name:-</label></td> <td><input type='hidden' name='membername' value='$name'>$name</td> 
</tr>

<tr>
<td><label>Member No:-</label></td> <td><input type='hidden' name='memberno' value='{$row['Pattern']}{$row['No']}'>{$row['Pattern']}{$row['No']}</td> 
</tr>   


<tr>
<td><label>LOAN:-</label></td> <td>
<div class='form-check'>
<input class='form-check-input' type='radio' name='loans' id='Normal_Loan'  value='Normal_Loan'>
<label class='form-check-label' for=''>
Normal Loan
</label>

<div class='form-check'>
<input class='form-check-input' type='radio' name='loans' id='Soft_Loan'  value='Soft_Loan' >
<label class='form-check-label' for=''>
Soft Loan
</label></td> 
</tr>


<tr>
<td><label>LOAN AMOUNT:-</label></td> <td><input type='text' name='loanamount' id='loanamount' class='formcontrol' onkeyup='computePrinciple();' required></td> 
</tr> 


<tr>
<td><label>LOAN TYPE:-</label></td> 

<td><select name='loantype'>
<option value='School'>School</option>
<option valule='Business'>Business</option>
<option value='Development'>Development</option>
</select></td> 
</tr>


<tr>
<td><label>Montly Interest Rate(%):-</label></td> <td><input type='text' name='monthlyinterestrate' id='monthlyinterestrate' class='formcontrol' required></td> 
</tr> 


<tr>
<td><label>Duration:-</label></td> <td><input type='text' name='loanduration' id='loanduration' class='formcontrol' required onkeyup='computePrinciple();'></td><td><label><i style='color:red;'>*Duration in Months</i></label></td> 
</tr>


<tr>
<td><label>Montly Interest:-</label></td> <td><input type='text'  name='monthlyinterest' id ='monthlyinterest' class='formcontrol' required></td> 
</tr>


<tr>
<td><label>Principle:-</label></td> <td><input type='text'  name='principle' id='principle' class='form-control' required></td> 
</tr>

<tr>
<td><label>Issuance Date:-</label></td> <td><input type='date' name='issuancedate' class='form-control' required></td> 
</tr>



<tr>
<td><label>Processing Fee:-</label></td> <td><input type='text' name='processingfee' class='form-control' required></td> 
</tr>


<tr>
<td colspan='3' align='center'><input type='submit' name='issueLoan' value='SUBMIT' class='btn btn-primary'></td> 
</tr>

</table>

</form>

</fieldset>";

}

if(isset($_POST['issueLoan'])){

$membername=$_POST['membername'] ;
$memberno=$_POST['memberno'] ;
$loan=$_POST['loan'] ;
$loanamount=$_POST['loanamount'] ;
$loantype=$_POST['loantype'] ;
$monthlyinterestrate=$_POST['monthlyinterestrate'] ;
$loanduration=$_POST['loanduration'] ;
$monthlyinterest=$_POST['monthlyinterest'] ;
$principle=$_POST['principle'] ;
$issuancedate=$_POST['issuancedate'] ;
$processingfee=$_POST['processingfee'] ;

//initialized varibles
$monthlyinterest=0.0;
$principle=($loanamount/$loanduration);



}


?>


<script type="text/javascript">
$('.datepicker').datepicker({
weekStart:1,
color: 'red'
});
if(document.getElementById("loanamount").value===''){
    
    /*document.getElementById("loanduration").innerHtml='';
    document.getElementById("monthlyinterestrate").innerHtml='';
    document.getElementById("principle").innerHtml='';
    document.getElementById("monthlyinterest").innerHtml='';*/
        
}

var loanAmount_Input=document.getElementById("loanamount").value;//get loan_amount value


function computePrinciple(){
var loanAmount_Input=document.getElementById("loanamount").value;//get loan_amount value
var loanDuration_Input=document.getElementById("loanduration").value; 
var The_Principle=parseFloat(loanAmount_Input)/parseFloat(loanDuration_Input); 

if(!isNaN(The_Principle)){ 
document.getElementById('principle').value= The_Principle.toFixed(0);  
}

}


/********what happens when loan type radio button is checked****************/
let selectedValue;
document.fieldsForm.onclick=function(){ 
//selectedValue=document.fieldsForm.loans.value;
computeLoanMonthlyInterest();
}



function computeLoanMonthlyInterest(){
selectedValue=document.fieldsForm.loans.value;// get the value of the checked radio button
var loanAmount_Input=document.getElementById("loanamount").value;//get loan_amount value
var monthlyInterest_Input=document.getElementById("monthlyinterestrate").value;
if(selectedValue=='Normal_Loan'){
ThemonthlyInterest=((parseFloat(loanAmount_Input)*parseFloat(monthlyInterest_Input))/100)/2;
}

if(selectedValue=='Soft_Loan') {
var ThemonthlyInterest=(parseFloat(loanAmount_Input)*parseFloat(monthlyInterest_Input))/100;
}

document.getElementById('monthlyinterest').value=ThemonthlyInterest;

}




var inputs=document.querySelectorAll(".formcontrol"); // select the textfields in which data maybe entered

for (var i=0; i<inputs.length; i++){//iterate thro the textfields 

inputs[i].addEventListener("keyup",function(){ //function called when keyup event is fired on the textfields
computeLoanMontlyInterest();
}); 
}




/* very important code to alert a checked radio button
document.fieldsForm.onclick=function(){
var radVal=document.fieldsForm.loans.value;
 alert(radVal);
}


*/


/* very important code to alert a checked radio button2
/*const rbs=document.querySelectorAll('input[name="loans"]');
let selectedValue;

for(const rb of rbs){

if(rb.checked){
selectedValue=rb.value;
break;    
}
}*/

</script>

</div></div>  </div></div>

<!--Footer start-->
<?php include 'footer.php';?>
<? ob_flush(); ?>
</body>
</html>


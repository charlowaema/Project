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
border:1px solid red;
padding:2px 10px;
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
white-space: nowrap;

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
<button type="submit" name="searchbutton2" class="btn btn-primary" style="background:red"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span>&nbsp;Search Member</button>

<a href="adminDash.php?q=4" style="background:red" class="btn btn-primary">Add Member</a>
</form>
</td>
</tr>
<tr><td>Membership No.</td><td>FirstName</td><td>SecondName</td><td>ID</td><td>KRA</td><td>Date Of Registration</td><td>Mobile No</td><td>User Name</td><td>User Type</td><td>RECEIPTS</td><td>ISSUE LOAN</td><td>Contact</td></tr>';
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
$sql="select @row:=@row+1 as row,Pattern,No,FirstName,SecondName,ID,KRA, password,DateOfRegistration,MobileNo,Username,MemberType from  users, (select @row:=0)users where No like '%$searchvalue%' || FirstName like '%$searchvalue%' || SecondName like '%$searchvalue%'";
$result=mysqli_query($con,$sql);
TableHeader();
displayRows($result);

}

//----search member on loans and receipts section
if(isset($_GET['searchbutton2'])){
$searchvalue=$_GET['searchvalue'];
$sql="select @row:=@row+1 as row,Pattern,No,FirstName,SecondName,ID,KRA, password,DateOfRegistration,MobileNo,Username,MemberType from  users, (select @row:=0)users where No like '%$searchvalue%' || FirstName like '%$searchvalue%' || SecondName like'%$searchvalue%'";
$result=mysqli_query($con,$sql);
TableHeader2();
displayRows2($result);

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
echo "<tr><td>{$row['Pattern']}{$row['No']}</td><td><a href='? showUserAccount='>{$row['FirstName']}</a></td><td>{$row['SecondName']}</td><td>{$row['ID']}</td><td>{$row['KRA']}</td><td>{$row['DateOfRegistration']}</td><td>{$row['MobileNo']}</td><td>{$row['Username']}</td><td>{$row['MemberType']}</td><td><a href='? user_id222=".$row['No']."' class='Clicablebutton'>RECEIPTS</a></td><td><a href='?  user_id3=".$row['No']."'' class='Clicablebutton'>ISSUE LOAN</a></td><td><a href='?  smsId=".$row['No']."'' class='Clicablebutton'>Contact</a></td></tr>";
}
echo "</table>";
}







if(isset($_GET['user_id3'])){
$id=$_GET['user_id3'];
$sql="select * from users where No='$id'";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
$name=$row['FirstName'].' '.$row['SecondName'];


//get loan informaton
$sql2="select * from LoanInformation";
$result2=mysqli_query($con, $sql2);
$row2=mysqli_fetch_array($result2);
$interestrate=$row2['Interest'];

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
<td>

<select name='loantype'>";
while($row2=mysqli_fetch_array($result2)){
echo '<option value='.$row2['LoanTypes'].'>'.$row2['LoanTypes'].'</option>';

} ;
echo "
</select></td> 
</tr>


<tr>
<td><label>Montly Interest Rate(%):-</label></td> <td><input type='text' name='monthlyinterestrate' id='monthlyinterestrate' class='formcontrol' value='$interestrate' required></td> 
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
<td><label>Total Interest:-</label></td> <td><input type='text'  name='totalinterest' id ='totalinterest' class='formcontrol' required></td> 
</tr>


<tr>
<td><label>Loan To Repay:-</label></td> <td><input type='text'  name='loanToRepay' id ='loanToRepay' class='formcontrol' required></td> 
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


//------register laon issued to a customer----------/
if(isset($_POST['issueLoan'])){

$membername=$_POST['membername'] ;
$memberno=$_POST['memberno'] ;
$loan=$_POST['loans'] ;
$loanamount=$_POST['loanamount'] ;
$loantype=$_POST['loantype'] ;
$monthlyinterestrate=$_POST['monthlyinterestrate'] ;
$loanduration=$_POST['loanduration'] ;
$monthlyinterest=$_POST['monthlyinterest'] ;
$totalinterest=$_POST['totalinterest'] ;
$processingfee=$_POST['processingfee'] ;
$principle=$_POST['principle'] ;
$issuancedate=$_POST['issuancedate'] ;
$loanToRepay=$_POST['loanToRepay'] ;

$loan_id=mt_rand(100,1000);
        
$sql="select * from loans where No='$memberno' AND LoanType='$loantype' AND Status='Not Fully Paid'";
$result=mysqli_query($con,$sql);

$num= mysqli_num_rows($result);
$todaysDate=date("y-m-d");
if($num>=1){
    
   //echo "Member has been issued with a similar loan which they have not repayed";
    //DO NOTHING
 //echo "<script type='text/javascript'>swal('Member has been issued with a similar loan which they have not repayed'); </script>";
 echo "<script type='text/javascript'>swal('', 'Member has been issued with a similar loan which they have not repayed!', 'error'); </script>"; //error message box
}
else {
$sql="insert into loans(No,LoanAmount,InterestRate,Principal,LoanType,IssuanceDate,Duration,MonthlyInterest,TotalInterest,LoanToBePaid,LoanId)values('$memberno','$loanamount','$monthlyinterestrate','$principle','$loantype','$issuancedate','$loanduration','$monthlyinterest','$totalinterest','$loanToRepay','$loan_id')";

$sql2="insert into incomes(Income,ReceiptDate,IncomeType)values('$processingfee','$todaysDate','Processing Fee')";

$result=mysqli_query($con,$sql);

$result2=mysqli_query($con,$sql2);


if(($result)&&($result2)){
  //echo 'load successfully registered';  
 echo '<script type="text/javascript">swal("Success!", "Loan has been successfully registered", "success"); </script>';
    
}
else
{
    echo mysqli_error($con);
}
}
}
//--------------End of loan registration-------------------//




//---------receipts section---------------//
if(isset($_GET['user_id222'])){
$id=$_GET['user_id222'];
$sql="select * from users where No='$id'";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
$name=$row['FirstName'].' '.$row['SecondName'];
$memberNo=$row['Pattern'].''.$row['No'];



//..query member details from the loans table
$sql2="select * from loans where No='$memberNo'";
$result2=mysqli_query($con, $sql2);
//$row=mysqli_fetch_array($result);


echo "<fieldset id='fieldsetx' style='width:auto;'>
<legend>RECEIPTS</legend>

<form method='post'  action='' enctype='multipart/form-data' id='receiptsForm' name='receiptsForm' class='form-horizontal' onsubmit='return ValidateForm()'>
<table border='1' >
<tr>
<td><label>Member Name:-</label></td> <td><input type='hidden' name='membername' value='$name'>$name</td> 
</tr>






<tr>
<td><label>Member No:-</label></td> <td><input type='hidden' name='memberno' value='{$row['Pattern']}{$row['No']}'>{$row['Pattern']}{$row['No']}</td> 
</tr>   


<tr>
<td><label>SELECT LOAN:-</label></td> 
<td>";

echo "<select name='loantype' id='loantype' >
 <option>---Select---</option>";
while($row2=mysqli_fetch_array($result2)){
echo '<option value='.$row2['LoanType'].'>'.$row2['LoanType'].'</option>';

} ;    
echo "</select>
    
<input type='submit' name='loanInformation' id='loanInformation' value='Get Loan Information' class='btn btn-primary' ></td> 
</tr>";





//$loantype=filter_input(INPUT_POST, 'loantype', FILTER_SANITIZE_STRING);


//...Loan information...........//
if(isset($_POST["loanInformation"])){
$LoanType=$_POST['loantype'];
$memberNo=$row['Pattern'].$row['No'];

$sql_1="select * from Loans where No='$memberNo' and LoanType='$LoanType'";

$sql_2="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount, Receipts.LoanType, Loans.LoanAmount, Loans.IssuanceDate from  Receipts INNER JOIN Loans on Loans.LoanType=Receipts.LoanType  where Receipts.No='$memberNo' AND Loans.No='$memberNo' AND  Receipts.LoanType='$LoanType' group by Loans.LoanType";

$result1=mysqli_query($con,$sql_1);
$result2=mysqli_query($con,$sql_2);

$row1= mysqli_fetch_array($result1);
$row2= mysqli_fetch_array($result2);

$LoanId=$row1['LoanId'];

$LoanAmount=$row1["LoanAmount"];

$LoanToBePaid=$row1["LoanToBePaid"];

$MonthlyInterest=$row1["MonthlyInterest"];
$ServiceAmount=$row1["Principal"];
$LoanRepaymentAmount=$row2['LoanRepaymentAmount'];

$LoanBalance=$LoanToBePaid-$LoanRepaymentAmount;
if($LoanBalance<$ServiceAmount){
$ServiceAmount=$LoanBalance;
}
else{
  $ServiceAmount=$row1["Principal"];  
    
}





echo
"<tr><td><label>Loan Type:-</label></td> <td><input type='text' name='LoanType' id='' class='formcontrol' value='$LoanType'></tr>
<tr><td><label>Loan Issued:-</label></td> <td><input type='text' name='LoanAmount' id='LoanAmount' class='formcontrol' value='$LoanAmount'></tr>
<tr><td><label>Loan To Be Paid:-</label></td> <td><input type='hidden' name='LoanId' id='' class='formcontrol' value='$LoanId'><input type='text' name='loanAmount' id='' class='formcontrol' value='$LoanToBePaid'></td></tr>
<tr><td><label>Loan Balance:-</label></td> <td><input type='text' name='LoanBalance' id='' class='formcontrol'  value='$LoanBalance'></td></tr>
<tr><td><label>Monthly Interest:-</label></td> <td><input type='text' name='Interest' id='' class='formcontrol' value='$MonthlyInterest'></td></tr>
<tr><td><label>Service Amount(Principle):-</label></td> <td><input type='text' name='ServiceAmount' id='' class='formcontrol' value='$ServiceAmount'></td></tr> ";


}

echo "<tr>
<td><label>Deposit(Savings):-</label></td> <td><input type='text' name='Deposits' id='Deposits' class='formcontrol' ></td> 
</tr> 


<tr>
<td><label>Shares:-</label></td> <td><input type='text' name='Shares' id='Shares' class='formcontrol' ></td> 
</tr>


<tr>
<td><label>Payment Method:-</label></td> 

<td><select name='paymentmethod'>
<option value='Cooperative Bank'>Cooperative Bank</option>
<option value='Mpesa'>Mpesa</option>
<option value='Cash'>Cash</option>
</select></td> 
</tr>



<tr>
<td><label>Receipt Date:-</label></td> <td><input type='date' name='Receiptdate' id='Receiptdate' class='form-control' ></td> <td><label><i style='color:red;' >*Required</i></label></td>
</tr>



<tr>
<td><label>Loan Penalty:-</label></td> <td><input type='text' name='loanpenalty' id='loanpenalty' class='form-control' ></td> 
</tr>


<tr>
<td colspan='3' align='center'><input type='submit' name='Receipts' value='SUBMIT' class='btn btn-primary'></td> 
</tr>

</table>

</form>

</fieldset>";



//........submit receipts into the database............//
if(isset($_POST["Receipts"])){
error_reporting(0);
$Membername=$_POST['membername'] ;
$Memberno=$_POST['memberno'] ;
$Deposits=$_POST['Deposits']; 
$RepaymentAmount=$_POST['ServiceAmount'] ;
$LoanType=$_POST['LoanType'] ;
$Shares=$_POST['Shares'];
$LoanId=$_POST['LoanId'] ;
$Receiptdate=$_POST['Receiptdate'] ;
$paymentmethod=$_POST['paymentmethod'];
$Loanpenalty=$_POST['loanpenalty'] ;
$Interest=$_POST['Interest'] ;

$todaysDate=date("y-m-d");

if($Receiptdate==''){
   //echo "<script type='text/javascript'>swal('Opps', 'You have not entered receipt date!', 'error'); </script>"; //error message box
   // echo "<script type='text/javascript'>swal('You have not entered receipt date', 'error'); </script>";  //normal message box
   echo "<script type='text/javascript'>swal('', 'You have not entered receipt date!', 'error'); </script>"; //error message box
}
else{
$sql="insert into receipts(No,Deposits,LoanRepaymentAmount,LoanType,Shares,ReceiptDate,PaymentMethod,LoanPenalty,Interest,PaymentState,LoanId)values('$Memberno','$Deposits','$RepaymentAmount','$LoanType','$Shares','$Receiptdate','$paymentmethod','$Loanpenalty','$Interest','unpaid','$LoanId')";
$result=mysqli_query($con,$sql);

if($Loanpenalty!=""){
$sql2="insert into incomes(Income,ReceiptDate,IncomeType)values('$Loanpenalty','$todaysDate','loan Penalty')";
$result2=mysqli_query($con,$sql2);
}

if($result){
    
echo '<script type="text/javascript">swal("Success!", "Receipts have  been successfully submitted", "success"); </script>';    
}

else{
    
    echo mysqli_error($con);
    
}
}

}



}//end of receipts section
?>


<script type="text/javascript">
$('.datepicker').datepicker({
weekStart:1,
color: 'red'
});

function ValidateForm() {
   /*let x=document.getElementById('LoanAmount').value;
     let y=document.getElementById('Receiptdate').value;
    if((x != "")&& (y==""))
    {
        alert("Receipt Date must be provided");
    
    return false;
    }*/
     }

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
var selectedValue,monthlyInterest_Input,loanAmount_Input,monthlyInterest_Input,loanDuration_Input;
selectedValue=document.fieldsForm.loans.value;// get the value of the checked radio button
loanAmount_Input=document.getElementById("loanamount").value;//get loan_amount value
monthlyInterest_Input=document.getElementById("monthlyinterestrate").value;
loanDuration_Input=document.getElementById("loanduration").value; 
if(selectedValue=='Normal_Loan'){
ThemonthlyInterest=((parseFloat(loanAmount_Input)*parseFloat(monthlyInterest_Input))/100)/2;
}

if(selectedValue=='Soft_Loan') {
var ThemonthlyInterest=(parseFloat(loanAmount_Input)*parseFloat(monthlyInterest_Input))/100;
}

document.getElementById('monthlyinterest').value=ThemonthlyInterest;
document.getElementById('totalinterest').value=ThemonthlyInterest*loanDuration_Input;
document.getElementById('loanToRepay').value=(ThemonthlyInterest*loanDuration_Input)+parseInt(loanAmount_Input);
}




var inputs=document.querySelectorAll(".formcontrol"); // select the textfields in which data maybe entered

for (var i=0; i<inputs.length; i++){//iterate thro the textfields 

inputs[i].addEventListener("keyup",function(){ //function called when keyup event is fired on the textfields
//computeLoanMontlyInterest();
var selectedValue,monthlyInterest_Input,loanAmount_Input,monthlyInterest_Input,loanDuration_Input;
selectedValue=document.fieldsForm.loans.value;// get the value of the checked radio button
loanAmount_Input=document.getElementById("loanamount").value;//get loan_amount value
monthlyInterest_Input=document.getElementById("monthlyinterestrate").value;
loanDuration_Input=document.getElementById("loanduration").value; 
if(selectedValue=='Normal_Loan'){
ThemonthlyInterest=((parseFloat(loanAmount_Input)*parseFloat(monthlyInterest_Input))/100)/2;
}

if(selectedValue=='Soft_Loan') {
var ThemonthlyInterest=(parseFloat(loanAmount_Input)*parseFloat(monthlyInterest_Input))/100;
}

document.getElementById('monthlyinterest').value=ThemonthlyInterest;
document.getElementById('totalinterest').value=ThemonthlyInterest*loanDuration_Input;
document.getElementById('loanToRepay').value=(ThemonthlyInterest*loanDuration_Input)+parseInt(loanAmount_Input);

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

     


if(window.history.replaceState){
  window.history.replaceState(null,null, window.location.href)  ;
    
}

$('#fieldsForm').submit(function(e){
    
    //e.preventDefault();
});
</script>

</div></div>  </div></div>

<!--Footer start-->
<?php include 'footer.php';?>
<? ob_flush(); ?>
</body>
</html>


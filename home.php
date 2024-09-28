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

<script src="js/mainJS.js"  type="text/javascript"></script>


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
white-space: normal;}
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
.bg{
    background-image: url('images/saccoimage1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
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
input[type=text] {
min-width: 60%;
} 

#classModal {}

.modal-body {
  overflow-x: auto;
}

</style>

</head>
<?php
include_once 'dbConnection.php';
?>
<body onload="disableTextFields();">
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
<?php include 'navigationbar.php'; ?>



</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->



<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12" >

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

<a href="home.php?q=2" style="background:red" class="btn btn-primary">Add Member</a>
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

<!--<a href="adminDash.php?q=4" style="background:red" class="btn btn-primary">Add Members</a>-->
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


//search expense
if(isset($_GET['searchbutton3'])){
$searchvalue=$_GET['searchvalue'];
$sql="select @row:=@row+1 as row,Id,Name,Amount,Date from  expenses, (select @row:=0)expenses where Name like '%$searchvalue%'";
$result=mysqli_query($con,$sql);
TableHeader3();
displayRows3($result);
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
<form class="" method="GET" id="myform" >
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
<input id="date"   class="form-control input-md" type="date"   name="date" required >    
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
<input id="username"   class="form-control input-md" type="text"  name="username" >    
</div>
</div>
</div><!--End of row-->



<div class="row">
<div class="col-md-3">Password:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input id="password"   class="form-control input-md" type="text"  name="password" >    
</div>
</div>
</div><!--End of row-->


<div class="row ">
<div class="col-md-3">Member Type</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<select name="membertype" required>
<option value=" ">-select-</option>
<option value="Member">Member</option>
<option value="Non Member">Non Member</option>
<option value="Admin">Admin</option>
</select>

</div>
</div>
</div><!--End of row-->

<br>
<div class="row">
<div class="col-md-3">Registration Fee:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input id="registrationfee"   class="form-control input-md" type="text"  name="registrationfee" >    
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
$password=$_GET['password'];
$membertype=$_GET['membertype'];
$registrationfee=$_GET['registrationfee'];
$transaction_id=mt_rand(1,10000000); 
$todaysDate=date("Y-m-d");
//kasee

if($membertype=='Admin'){
    $table='admin';
}
 if($membertype!='Admin'){
    $table='users';
}



//CHECK WHETHER THE USER EXITS IN THE DATABASE
$sql5="select * from $table where ID='$idno'";
$result5=mysqli_query($con,$sql5);
$num= mysqli_num_rows($result5);

if($num>0){
 echo "<script type='text/javascript'>swal('', 'The member with that ID no exists in our database!', 'error'); </script>"; //error message box
}
else{
if(($membertype=='Member')){
$sql1="insert into users (FirstName,SecondName,ID,KRA,DateOfRegistration,MobileNo,Username,Password,MemberType) values('$firtname','$secondname','$idno','$kra','$registrationdate','$phoneno','$username','$password','$membertype')";   
$sql2="insert into incomes(Income,ReceiptDate,Transaction_Id,IncomeType)values('$registrationfee','$todaysDate','$transaction_id','Registration Fee')";

$result1=mysqli_query($con,$sql1);
$result2=mysqli_query($con,$sql2);
if(($result1)&&($result2)){
 echo '<script type="text/javascript">swal("Success!", "member registered successfully", "success"); </script>';  
}
}
else if(($membertype=='Non Member')){
$sql111="insert into users (Pattern,FirstName,SecondName,ID,KRA,DateOfRegistration,MobileNo,Username,Password,MemberType) values('','$firtname','$secondname','$idno','$kra','$registrationdate','$phoneno','$username','$password','$membertype')";   
$sql222="insert into incomes(Income,ReceiptDate,Transaction_Id,IncomeType)values('$registrationfee','$todaysDate','$transaction_id','Registration Fee')";

$result1111=mysqli_query($con,$sql111);
$result2222=mysqli_query($con,$sql222);
if(($result1111)&&($result2222)){
 echo '<script type="text/javascript">swal("Success!", "member registered successfully", "success"); </script>';  
}
}


else if($membertype=='Admin'){
$sql44="insert into Admin (FirstName,SecondName,ID,KRA,DateOfRegistration,MobileNo,Username,Password,MemberType) values('$firtname','$secondname','$idno','$kra','$registrationdate','$phoneno','$username','$password','$membertype')";
//$sql3="insert into incomes(Income,ReceiptDate,Transaction_Id,IncomeType)values('$registrationfee','$todaysDate','$transaction_id','Registration Fee')";
$result44=mysqli_query($con,$sql44);
//$result33=mysqli_query($con,$sql3);

if($result44){
 echo '<script type="text/javascript">swal("Success!", "member registered successfully", "success"); </script>';  
}

}
else{
    
    
}
}

}




//................................ Edit member information................//
if(isset($_GET['user_id1'])){
$id=$_GET['user_id1'];
$sql="select * from users where No='$id'";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);

$Pattern=$row['Pattern'];
 

echo '<fieldset id="fieldsetx">
<legend>Edit User</legend>
<form class="" method="post" >

<div class="row">
<div class="col-md-3">Member Prefix:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input type="hidden" name="No" value='.$row['No'].'><input type="text" name="Pattern"  class="form-control input-md" value='.$Pattern.'>      
</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3">Member No:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input type="text" name="MemberNumber" value='.$row['No'].' class="form-control input-md" >      
</div>
</div>
</div><!--End of row-->


<div class="row">
<div class="col-md-3">First Name:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input id="firstname" name=" firstname"  class="form-control input-md" type="text"  value='.$row['FirstName'].'>       
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

$pattern=$_POST['Pattern'];
$MemberNumber=$_POST['MemberNumber'];


$sql="update users set Pattern='$pattern',No='$MemberNumber',FirstName='$firstname',SecondName='$secondname', ID='$idno', KRA='$kra', DateOfRegistration='$date', MobileNo='$phoneno', MemberType='$membertype', UserName='$username' where No='$No'";
$result=mysqli_query($con,$sql)or die(mysqli_error);
if($result){

//header("location:adminDash.php?q7=You have successfully updated the record");
echo '<script type="text/javascript">swal("Success!", "You have successfully updated the record", "success"); </script>';

}
else{

//header("location:adminDash.php?q7=The record cannot be updated");
 echo "<script type='text/javascript'>swal('',The record cannot be updated', 'error'); </script>"; 
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
echo '<script type="text/javascript">swal("Success!", "member deleted successfully", "success"); </script>';    

}
else{
echo "<script type='text/javascript'>swal('The member could not be deleted'); </script>";    

}
}
/***************************************************** end of user Management*****************************************/





if(@$_GET['q']==4) {

$sql='select @row:=@row+1 as row,Pattern,No,FirstName,SecondName,ID,KRA, password,DateOfRegistration,MobileNo,Username,MemberType from  users  , (select @row:=0)users where MemberType !="Admin"';
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




//--Loan Issuance section-------------//

if(isset($_GET['user_id3'])){
$id=$_GET['user_id3'];
$sql="select * from users where No='$id'";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
$name=$row['FirstName'].' '.$row['SecondName'];


//get loan informaton
$sql2="select * from loaninformation";
$result2=mysqli_query($con, $sql2);
$data=$result2->fetch_all(MYSQLI_ASSOC);


//$data=mysqli_fetch_array($result2);

foreach($data as $row2){
$Interest=$row2['Interest'];
}




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
<input class='form-check-input' type='radio' name='loans' id='Normal Loan'  value='Normal Loan' checked>
<label class='form-check-label' for=''>
Normal Loan
</label>

<div class='form-check'>
<input class='form-check-input' type='radio' name='loans' id='Soft_Loan'  value='Soft Loan' >
<label class='form-check-label' for=''>
Soft Loan
</label></td> 
</tr>


<tr>
<td><label>LOAN AMOUNT:-</label></td> <td><input type='text' name='loanamount' id='loanamount' class='formcontrol' onkeyup='computePrinciple();'  required></td> 
</tr> 


<tr>
<td><label>LOAN TYPE:-</label></td> 
<td>

<select name='loantype'>";
foreach($data as $row2){
echo '<option value='.$row2['LoanTypes'].'>'.$row2['LoanTypes'].'</option>';

} ;
//$interestrate=$rows2['Interest'];
 
echo "
</select></td> 
</tr>


<tr>
<td><label>Montly Interest Rate(%):-</label></td> <td><input type='text' name='monthlyinterestrate' id='monthlyinterestrate' class='formcontrol' value='$Interest' required></td> 
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
<td><label>Issuance Date:-</label></td> <td><input type='date' name='issuancedate' id='issuancedate' class='form-control' required></td> 
</tr>



<tr>
<td><label>Processing Fee:-</label></td> <td><input type='text' name='processingfee' id='processingfee' class='form-control' required></td> 
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

$loan_id=mt_rand(1,10000000);
$transaction_id=mt_rand(1,10000000); 

$sql="select * from loans where No='$memberno' AND LoanType='$loantype' AND Status='Not Fully Paid'";
$result=mysqli_query($con,$sql);

$num= mysqli_num_rows($result);
$todaysDate=date("Y-m-d");


$firstLoanServiceDate=strftime("%y-%m-%d",  strtotime("$issuancedate+1 month"));



$timestamp = strtotime($issuancedate);//loan issuance date
$LoanIssuanceDay = date('d', $timestamp);



$timestamp = strtotime($firstLoanServiceDate);//first loan service date
$LoanServiceDay = date('d', $timestamp);


//get the next service date
$year_month = Date("Y-m", strtotime($issuancedate));
$year_month_incremented = Date("Y-m", strtotime($year_month . " +1 Month "));
$month_end_dt =strtotime('last day of this month', strtotime($year_month_incremented));
$date = date('Y-m-d', $month_end_dt );
$lastDayOFserviceMonth = date('d', $month_end_dt );
$TheServiceMonth = date('m', $month_end_dt );


//get the day, month and year of first service date
$timestamp10 = strtotime($firstLoanServiceDate);
$year = date('y', $timestamp);
$month = $TheServiceMonth;
$day = date('d', $timestamp);




if($LoanIssuanceDay<=$lastDayOFserviceMonth)
    {
    $day=$LoanIssuanceDay;
     //$yeara=$day.'-'.$month.'-'.$year;
     $LoanServiceDate=strftime("%F", strtotime($year."-".$month."-".$day));
    }

else if($LoanIssuanceDay>$lastDayOFserviceMonth)
    {
    $day=$lastDayOFserviceMonth;
    $LoanServiceDate=strftime("%F", strtotime($year."-".$month."-".$day));
    //$yeara=$day.'-'.$month.'-'.$year;
    }

       
    
//previousLoan Service Date
    
$firstLoanServiceDate=strftime("%y-%m-%d",  strtotime("$issuancedate -1 month"));
$timestamp = strtotime($issuancedate);
$LoanIssuanceDay = date('d', $timestamp);
//echo $LoanIssuanceDay;


$timestamp = strtotime($firstLoanServiceDate);
$LoanServiceDay = date('d', $timestamp);

$year_month = Date("Y-m", strtotime($issuancedate));
$year_month_incremented = Date("Y-m", strtotime($year_month . " -1 Month "));
$month_end_dt =strtotime('last day of this month', strtotime($year_month_incremented));
$date = date('Y-m-d', $month_end_dt );
$lastDayOFserviceMonth = date('d', $month_end_dt );
$TheServiceMonth = date('m', $month_end_dt );


//get day, month and year of  firstLoanServiceDate
$timestamp_2 = strtotime($firstLoanServiceDate);
$year = date('y', $timestamp_2);
$month = $TheServiceMonth;
$day = date('d', $timestamp_2);




if($LoanIssuanceDay<=$lastDayOFserviceMonth)
    {
    $day=$LoanIssuanceDay;
     //$yeara=$day.'-'.$month.'-'.$year;
     $previousLoanServiceDate=strftime("%F", strtotime($year."-".$month."-".$day));
    }

else if($LoanIssuanceDay>$lastDayOFserviceMonth)
    {
    $day=$lastDayOFserviceMonth;
    $previousLoanServiceDate=strftime("%F", strtotime($year."-".$month."-".$day));
    //$yeara=$day.'-'.$month.'-'.$year;
    } 
    
 //end of previous loan Service Date

if($num>=1){
    
   //echo "Member has been issued with a similar loan which they have not repayed";
    //DO NOTHING
 //echo "<script type='text/javascript'>swal('Member has been issued with a similar loan which they have not repayed'); </script>";
 echo "<script type='text/javascript'>swal('', 'Member has been issued with a similar loan which they have not repayed!', 'error'); </script>"; //error message box
}
else {
$sql="insert into loans(No,LoanAmount,InterestRate,Principal,LoanType,IssuanceDate,Duration,MonthlyInterest,TotalInterest,LoanToBePaid,LoanId,Transaction_Id,Loan)values('$memberno','$loanamount','$monthlyinterestrate','$principle','$loantype','$issuancedate','$loanduration','$monthlyinterest','$totalinterest','$loanToRepay','$loan_id','$transaction_id','$loan')";

$sql2="insert into incomes(Income,ReceiptDate,Transaction_Id,IncomeType)values('$processingfee','$todaysDate','$transaction_id','Processing Fee')";

$sql3="insert into loan_receipts(No,LoanRepaymentAmount,LoanType,ReceiptDate,PaymentMethod,LoanPenalty,Interest,AccruedInterest,LoanBalance,LoanId,Transaction_Id,NextLoanServiceDate,PreviousLoanServiceDate)values('$memberno','0.00','$loantype','$issuancedate','','','','','$loanamount','$loan_id','$transaction_id','$LoanServiceDate','$previousLoanServiceDate')";

$result=mysqli_query($con,$sql);

$result2=mysqli_query($con,$sql2);
$result3=mysqli_query($con,$sql3);

if(!$result3){
    echo mysqli_error($con);
}

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




//---------receipts section---------------// RECEIPTS FORM
if(isset($_GET['user_id222'])){
$id=$_GET['user_id222'];
$sql="select * from users where No='$id'";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
$name=$row['FirstName'].' '.$row['SecondName'];
$memberNo=$row['Pattern'].''.$row['No'];

$_SESSION['membername']=$name;
$_SESSION['memberno']=$memberNo;



//..query member details from the loans table
$sql2="select * from loans where No='$memberNo' and Status='Not Fully Paid'";
$result2=mysqli_query($con, $sql2);
//$row=mysqli_fetch_array($result);


echo "<fieldset id='fieldsetx' style='min-width:auto;'>
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
 <option value=''>---Select---</option>";
while($row2=mysqli_fetch_array($result2)){
echo '<option value='.$row2['LoanType'].'>'.$row2['LoanType'].'</option>';

} ;    
echo "</select>
    
<input type='submit' name='loanInformation' id='loanInformation' value='Get Loan Information' class='btn btn-primary' ></td> 
</tr>";





//$loantype=filter_input(INPUT_POST, 'loantype', FILTER_SANITIZE_STRING);


//...Loan information...........//
if(isset($_POST["loanInformation"])){
   error_reporting( 0 ); 
    
    
$LoanType=$_POST['loantype'];


/*if($LoanType==''){
   echo '<script>alert("Member has not been issued with loan")</script>'; 
}
*/

$memberNo=$row['Pattern'].$row['No'];



$sql_1="select * from loans where No='$memberNo' and LoanType='$LoanType' AND Status='Not Fully Paid'";

$sql_2="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount from loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId where loans.No='$memberNo' AND loans.Status='Not Fully Paid' AND  loans.LoanType='$LoanType'  group by loans.LoanId";
//$sql_2="Select sum(LoanRepaymentAmount) as LoanRepaymentAmountTotal,LoanRepaymentAmount, receipts.LoanType,receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId    where loans.No='$memberNo'  AND loans.Status='Not Fully Paid'  group by loans.LoanId";
//$sql_2="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount, receipts.LoanType,loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId    where loans.No='$memberNo' AND loans.Status='Not Fully Paid'   group by loans.LoanId";


$sql_20="Select  AccruedInterest as AccruedInterestAmount,loan_receipts.Id,loan_receipts.NextLoanServiceDate,loan_receipts.PreviousLoanServiceDate,loans.IssuanceDate from loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId where loans.No='$memberNo' AND loans.Status='Not Fully Paid' AND  loans.LoanType='$LoanType' ORDER BY  Id DESC Limit 1 ";
$result20=mysqli_query($con,$sql_20);
$row20= mysqli_fetch_array($result20);


$sql_30="Select  loans.IssuanceDate from loans  where loans.No='$memberNo' AND loans.Status='Not Fully Paid' AND  loans.LoanType='$LoanType' ";
$result30=mysqli_query($con,$sql_30);
$row30= mysqli_fetch_array($result30);



$sql_21="Select sum(AccruedInterestPayment) as AccruedInterestPayment from loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId where loans.No='$memberNo' AND loans.Status='Not Fully Paid' AND  loans.LoanType='$LoanType'    group by loans.LoanId ";
$result21=mysqli_query($con,$sql_21);
$row21= mysqli_fetch_array($result21);

//kasee3

//next service date for the loan 
$LoanServiceDate=$row20['NextLoanServiceDate'];

//echo 'serviceday'.$LoanServiceDate;

//next service date for the loan 
$PreviousLoanServiceDate=$row20['PreviousLoanServiceDate'];


//loanIssuanceDate
$issuancedate=$row20['IssuanceDate'];
//echo $issuancedate;


$result1=mysqli_query($con,$sql_1);
$result2=mysqli_query($con,$sql_2);

$row1= mysqli_fetch_array($result1);
$row2= mysqli_fetch_array($result2);

$LoanId=$row1['LoanId'];

$LoanAmount=$row1["LoanAmount"];
$LoanToBePaid=$row1["LoanToBePaid"];

$MonthlyInterest=$row1["MonthlyInterest"];

$_SESSION['MonthlyInterest']=$MonthlyInterest;

$AccruedInterestAmount=$row20['AccruedInterestAmount'];//Accruied interest amaount
$AccruedInterestPaymentAmount=$row21['AccruedInterestPayment'];//Accruied interest Balance after paying

$_SESSION['AccruedInterestAmount']=$AccruedInterestAmount;
$_SESSION['AccruedInterestPaymentAmount']=$AccruedInterestPaymentAmount;

//echo $_SESSION['AccruedInterestAmount2'];
$ServiceAmount=$row1["Principal"];

$_SESSION['principle']=$ServiceAmount;

$AmountAfterPayingAccruedInterest=$ServiceAmount;

$Loan_Duration=$row1["Duration"];
$LoanRepaymentAmount=$row2['LoanRepaymentAmount'];



$LoanBalance=$LoanAmount-$LoanRepaymentAmount;

if($LoanBalance<$ServiceAmount){
$ServiceAmount=$LoanBalance;

}
else{
  $ServiceAmount=$row1["Principal"];  
    
}


if($LoanBalance==0){  
 $sql5="update loans set Status='FullyPaid' where No='$memberNo' and LoanType='$LoanType'";
 $result5=mysqli_query($con,$sql5);
 $LoanAmount='';
 $LoanToBePaid='';
 $MonthlyInterest='';
 $LoanType='';
 $LoanBalance='';
 
}

$monthlyInstallment=$ServiceAmount+$MonthlyInterest;

$_SESSION['monthlyInstallment']=$monthlyInstallment;

$_SESSION['LoanBalance']=$LoanBalance;




echo
"<tr><td><label>Loan Type:-</label></td> <td><input type='hidden' name='LoanissuanceDate' id='LoanissuanceDate' class='formcontrol' value='$issuancedate'  '><input type='text' name='LoanType' id='' class='formcontrol' value='$LoanType' readonly '></tr>
<tr><td><label>Loan Issued:-</label></td> <td><input type='text' name='LoanAmount' id='LoanAmount' class='formcontrol' value='$LoanAmount' readonly></tr>
<tr><td><label>Loan Duration:-</label></td> <td><input type='text' name='LoanAmount' id='LoanAmount' class='formcontrol' value='$Loan_Duration' readonly></tr>
<!--<tr><td><label>Loan To Be Paid:-</label></td> <td><input type='text' name='loanAmount' id='' class='formcontrol' value='$LoanToBePaid'></td>--><input type='hidden' name='LoanId' id='' class='formcontrol' value='$LoanId'></tr>
<tr><td><label>Loan Balance:-</label></td> <td><input type='text' name='LoanBalance' id='' class='formcontrol'  value='$LoanBalance.00' readonly></td></tr>
<tr><td><label>Monthly Interest:-</label></td> <td><input type='text' name='Interest' id='Mo_Interest' class='formcontrol' value='$MonthlyInterest' readonly></td></tr>

<tr><td><label>Accrued Interest:-</label></td> <td><input type='text'  name='AccruedInterest' id ='AccruedInterest' class='formcontrol' value='$AccruedInterestAmount'  onkeyup='clearInterestField();' readonly></td></tr>



<tr><td><label>Principle:-</label></td> <td><input type='text' name='ServiceAmount' id='' class='formcontrol' value='$ServiceAmount' readonly></td></tr> 
<tr><td><label>Monthly Installment:-</label></td> <td><input type='text' name='ServiceAmount' id='' class='formcontrol' value='$monthlyInstallment' readonly></td></tr> 
<tr><td><label>Amount Deposited:-</label></td> <td><input type='text' name='AmountDeposited' id='' class='formcontrol' ></td></tr>

<tr>
<td><label>Payment Method:-</label></td> 

<td><select name='paymentmethod'>
<option value='Cooperative Bank'>Cooperative Bank</option>
<option value='Mpesa'>Mpesa</option>
<option value='Cash'>Cash</option>
</select></td> 
</tr>



<tr>
<td><label>Receipt Date<label style='color:red;'>(mm/dd/yyy)</label>:-</label></td> <td><input type='date' name='Receiptdate' id='Receiptdate' value='$LoanServiceDate' class='form-control' ><input type='hidden' name='ExpectedLoanServiceDate' id='ExpectedLoanServiceDate' value='$LoanServiceDate' class='form-control' ><input type='hidden' name='PreviousLoanServiceDate' id='PreviousLoanServiceDate' value='$PreviousLoanServiceDate' class='form-control' ></td> <td><label><i style='color:red;' >*Required</i></label></td>
</tr>


<tr>
<td><label>Loan Penalty:-</label></td> <td><input type='text' name='loanpenalty' id='loanpenalty' class='form-control' ></td> 
</tr>


<tr>
<td colspan='3' align='center'><input type='submit' name='loans' value='SUBMIT' class='btn btn-primary'></td> 
</tr>";

}



echo "</table>
</form>"; 

//End of first form for loan servicing

echo "<hr style='border:1px solid red;'>";
echo "<table>
<tr>
<td colspan='3' align='center'><input type='button' name='' value='Savings/Shares' class='btn btn-primary' onclick='Savings_Shares_form()'></td> 
</tr>
</table>";
    
//second form for savings and shares
echo "<form method='post'  action='' enctype='multipart/form-data' id='receiptsForm' name='receiptsForm' class='form-horizontal' onsubmit='return ValidateForm()'>

<table style='display:none;' id='savings_shares'>
<tr>
<td><label>Savings:-</label></td> <td><input type='text' name='Deposits' id='Deposits' class='formcontrol' ></td> 
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
<td colspan='3' align='center'><input type='submit' name='savings-shares' value='SUBMIT' class='btn btn-primary'></td> 
</tr>
</table>
</form>


</fieldset>";



//........submit receipts into the database............//
if(isset($_POST["loans"])){
error_reporting(0);

$Membername=$_POST['membername'] ;
$Memberno=$_POST['memberno'] ;
//$Deposits=$_POST['Deposits'];
//$Shares=$_POST['Shares'];
$AccruedInterest=$_POST['AccruedInterest'];

$MonthlyInterest=$_POST['Interest'];

$AmountDeposited=$_POST['AmountDeposited'];  //this is want the lonee brings in monthly;(its not uniform)    

$LoanType=$_POST['LoanType'] ;

$LoanId=$_POST['LoanId'] ;
$transaction_id=mt_rand(1,1000000);
$Receiptdate=$_POST['Receiptdate'];
$issuancedate=$_POST['LoanissuanceDate'] ;

$ExpectedLoanServiceDate=$_POST['ExpectedLoanServiceDate'] ;//expected loan service date



$previousLoanServiceDate=$_POST['PreviousLoanServiceDate'] ;//next next expected Loan Date

$paymentmethod=$_POST['paymentmethod'];
$Loanpenalty=$_POST['loanpenalty'] ;



$firstLoanServiceDate=strftime("%y-%m-%d",  strtotime("$issuancedate+1 month"));//first loan service Date

$timestamp = strtotime($issuancedate); //loan issunance Date
$LoanIssuanceDay = date('d', $timestamp); //loan issunance Day


$timestamp = strtotime($firstLoanServiceDate);  
$LoanServiceDay = date('d', $timestamp); //first loan service Day

 //last day of  service month
$year_month = Date("Y-m", strtotime($Receiptdate));
$year_month_incremented = Date("Y-m", strtotime($year_month . " +1 Month "));
$month_end_dt =strtotime('last day of this month', strtotime($year_month_incremented));
$date = date('Y-m-d', $month_end_dt );

$lastDayOFserviceMonth = date('d', $month_end_dt );
$TheServiceMonth = date('m', $month_end_dt );


// get the day, Month and year of  Service Date
$timestamp_2 = strtotime($date);
$year = date('y', $timestamp_2);
$month = $TheServiceMonth;
$day = date('d', $timestamp_2);




if($LoanIssuanceDay<=$lastDayOFserviceMonth)
    {
    $day=$LoanIssuanceDay;
     //$yeara=$day.'-'.$month.'-'.$year;
     $LoanServiceDate2=strftime("%F", strtotime($year."-".$month."-".$day));
    }

else if($LoanIssuanceDay>$lastDayOFserviceMonth)
    {
    $day=$lastDayOFserviceMonth;
    $LoanServiceDate2=strftime("%F", strtotime($year."-".$month."-".$day));
    //$yeara=$day.'-'.$month.'-'.$year;
    }
    //echo $LoanServiceDate2;

  
    //previousLoan Service Date
 $year_month = Date("Y-m", strtotime($Receiptdate));
$year_month_incremented = Date("Y-m", strtotime($year_month . " -1 Month "));
$month_end_dt =strtotime('last day of this month', strtotime($year_month_incremented));
$date = date('Y-m-d', $month_end_dt );
$lastDayOFserviceMonth = date('d', $month_end_dt );
$TheServiceMonth = date('m', $month_end_dt );


//echo $lastDayOFserviceMonth;
$timestamp_2 = strtotime($date);
$year = date('y', $timestamp_2);
$month = $TheServiceMonth;
$day = date('d', $timestamp_2);




if($LoanIssuanceDay<=$lastDayOFserviceMonth)
    {
    $day=$LoanIssuanceDay;
     //$yeara=$day.'-'.$month.'-'.$year;
     $previousLoanServiceDate=strftime("%F", strtotime($year."-".$month."-".$day));
    }

else if($LoanIssuanceDay>$lastDayOFserviceMonth)
    {
    $day=$lastDayOFserviceMonth;
    $previousLoanServiceDate=strftime("%F", strtotime($year."-".$month."-".$day));
    //$yeara=$day.'-'.$month.'-'.$year;
    }
    

    
 if($Receiptdate!=$ExpectedLoanServiceDate){
    //echo $ExpectedLoanServiceDate;
    $LoanServiceDate2=$ExpectedLoanServiceDate;
    
}
   
    
//values needed from the database
$precalculatedMonthlyInterest=$_SESSION['MonthlyInterest'];  
$principle=$_SESSION['principle'];
$AccruedInterestAmount=$_SESSION['AccruedInterestAmount'];
$AccruedInterestPayment=$_SESSION['AccruedInterestPaymentAmount'];
$monthlyInstallment=$_SESSION['monthlyInstallment'];

//next Loan service Date
//$LoanServiceDate=$_POST['nextLoanServiceDate'];
//kasee2
//nextLoanServiceDate=strftime("%y-%m-%d",  strtotime("$LoanServiceDate+1 month"));
//echo $Receiptdate;
  // echo $ExpectedLoanServiceDate;
   //echo $NextNextLoanServiceDate;


if($AmountDeposited==$monthlyInstallment && ($AccruedInterestAmount==0.00)&&($Receiptdate==$ExpectedLoanServiceDate)){ //original added ($LoanBalance>$principle)
    
   
    
    echo ('1');
    $Interest=$precalculatedMonthlyInterest;
    $MonthlyInterest=$precalculatedMonthlyInterest;
    $AccruedInterest==$MonthlyInterest-$Interest;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=$principle;
  
   }
   else if($AmountDeposited==$precalculatedMonthlyInterest && ($AccruedInterestAmount==0.00) &&($Receiptdate==$ExpectedLoanServiceDate)){
      echo ('2');
 
    
    $Interest=$precalculatedMonthlyInterest;
    $MonthlyInterest=$precalculatedMonthlyInterest;
    $AccruedInterest==$MonthlyInterest-$Interest;
    $AccruedInterestPayment=0.00;
   $LoanServiceAmount=0.00;
   
   }
   
 else if(($AmountDeposited==0.00) || ($AmountDeposited=="") || ($AmountDeposited==0) &&($Receiptdate==$ExpectedLoanServiceDate)){
      echo ('3');
    $Interest=0.00;
     $MonthlyInterest=$precalculatedMonthlyInterest;
    $AccruedInterest=$precalculatedMonthlyInterest;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=0.00;
   
}
else if($AmountDeposited==$principle && $AccruedInterestAmount==0.00 && ($principle>$precalculatedMonthlyInterest) && ($Receiptdate==$ExpectedLoanServiceDate)){
      echo ('4');
    $Interest=$precalculatedMonthlyInterest;
     $MonthlyInterest=$precalculatedMonthlyInterest;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=$AmountDeposited-$precalculatedMonthlyInterest;
    
}

//added if. it was not there

else if($AmountDeposited==$principle && $AccruedInterestAmount==0.00 && ($principle<$precalculatedMonthlyInterest) && ($Receiptdate==$ExpectedLoanServiceDate)){
      echo ('4.1.1');
    $Interest=$principle;
     $MonthlyInterest=$precalculatedMonthlyInterest;
    $AccruedInterest=$MonthlyInterest-$principle;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=0.00;
    
}

else if(($AmountDeposited<$precalculatedMonthlyInterest)&& ($AccruedInterestAmount==0.00) &&($Receiptdate==$ExpectedLoanServiceDate)){ // to be revisited
      echo ('5');
    $Interest=$AmountDeposited;
     $MonthlyInterest=$precalculatedMonthlyInterest;
    $AccruedInterest=$precalculatedMonthlyInterest-$AmountDeposited;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=0.00;
    
}
else{
    echo $AmountDeposited,$principle,$AccruedInterestAmount,$precalculatedMonthlyInterest;
    echo 'if not covered';
}
 /*
   if($AmountDeposited==$monthlyInstallment && ($AccruedInterestAmount==0.00)&& ($LoanBalance>$principle) &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){ //original added ($LoanBalance>$principle)
    
    echo ('1.1');
    $Interest=0.00;
    $AccruedInterest==0.00;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=$AmountDeposited;
  
   }
   

else if($AmountDeposited==$precalculatedMonthlyInterest && ($AccruedInterestAmount==0.00) &&($Receiptdate==$ExpectedLoanServiceDate)){
      echo ('2');
    $Interest=$precalculatedMonthlyInterest;
    $AccruedInterest==0.00;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=0.00;
    
    
}
else if($AmountDeposited==$precalculatedMonthlyInterest && ($AccruedInterestAmount==0.00) &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){
      echo ('2.1');
    $Interest=0.00;
    $AccruedInterest==0.00;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=$AmountDeposited;
    
    
}

else if(($AmountDeposited==0.00) || ($AmountDeposited=="") || ($AmountDeposited==0) &&($Receiptdate==$ExpectedLoanServiceDate)){
      echo ('3');
    $Interest=0.00;
    $AccruedInterest=$precalculatedMonthlyInterest+$AccruedInterestAmount;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=0.00;
   
}
else if(($AmountDeposited==0.00) || ($AmountDeposited=="") || ($AmountDeposited==0) &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){
      echo ('3.1');
    $Interest=0.00;
    $AccruedInterest=$precalculatedMonthlyInterest+$AccruedInterestAmount;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=0.00;
   
}

else if($AmountDeposited==$principle && $AccruedInterestAmount==0.00 && ($Receiptdate==$ExpectedLoanServiceDate)){
      echo ('4');
    $Interest=$precalculatedMonthlyInterest;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=$AmountDeposited-$precalculatedMonthlyInterest;
    
}
else if($AmountDeposited==$principle && $AccruedInterestAmount==0.00 &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){
      echo ('4.1');
    $Interest=0.00;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=$AmountDeposited;
    
}


else if(($AmountDeposited<$precalculatedMonthlyInterest)&& ($AccruedInterestAmount==0.00) &&($Receiptdate==$ExpectedLoanServiceDate)){ // to be revisited
      echo ('5');
    $Interest=$AmountDeposited;
    $AccruedInterest=$precalculatedMonthlyInterest-$AmountDeposited;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=0.00;
    
}
else if(($AmountDeposited<$precalculatedMonthlyInterest) && ($AccruedInterestAmount==0.00) &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){ // to be revisited
      echo ('5.1');
    $Interest=0.00;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=0.00;
    $LoanServiceAmount=$AmountDeposited;
    
}

else if($AmountDeposited<$precalculatedMonthlyInterest && ($AccruedInterestAmount >0.00) &&  ($AccruedInterestAmount < $AmountDeposited) &&($Receiptdate==$ExpectedLoanServiceDate)){ // to be revisited
      echo ('6');
    $Interest=$AmountDeposited-$AccruedInterestAmount;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $AccruedInterest=$precalculatedMonthlyInterest-$Interest;
    $LoanServiceAmount=0.00;
    
   
}

else if($AmountDeposited<$precalculatedMonthlyInterest && ($AccruedInterestAmount >0.00) &&  ($AccruedInterestAmount < $AmountDeposited) &&(($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate))){ // to be revisited
      echo ('6.1');
//echo $AccruedInterestAmount;
    $Interest=0.0;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=$AmountDeposited-$AccruedInterestAmount;
    
   //pre-2022-02-28
  // re-2022-03-15
  // ex-2022-03-31
    //next-2022-05-31
}




//added conditions
else if($AmountDeposited>$precalculatedMonthlyInterest && ($AccruedInterestAmount >0.00) &&  ($AccruedInterestAmount > $AmountDeposited)&&($AccruedInterestAmount < $AmountDeposited) &&($Receiptdate==$ExpectedLoanServiceDate)){ 
      echo ('7');
    $Interest=0.00;
    $AccruedInterestPayment=$AmountDeposited;
    $AccruedInterest=($AccruedInterestAmount-$AccruedInterestPayment)+$precalculatedMonthlyInterest;  //corrected
    $LoanServiceAmount=0.00;
    
}
else if($AmountDeposited>$precalculatedMonthlyInterest && ($AccruedInterestAmount >0.00) &&  ($AccruedInterestAmount > $AmountDeposited)&&(($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate))){ 
      echo ('7.1');
    $Interest=0.00;
    $AccruedInterestPayment=$AmountDeposited;
    $AccruedInterest=($AccruedInterestAmount-$AccruedInterestPayment);  //corrected
    $LoanServiceAmount=0.00;
    
}

else if($AmountDeposited<($precalculatedMonthlyInterest+$AccruedInterestAmount) && ($AccruedInterestAmount >0.00) &&  ($AccruedInterestAmount < $AmountDeposited)&&($Receiptdate==$ExpectedLoanServiceDate)){ 
      echo ('8');
    $Interest=$AmountDeposited-$AccruedInterestAmount;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $AccruedInterest=($precalculatedMonthlyInterest-$Interest);
    $LoanServiceAmount=0.00;              //corrected
    
}


else if($AmountDeposited<($precalculatedMonthlyInterest+$AccruedInterestAmount) && ($AccruedInterestAmount >0.00) &&  ($AccruedInterestAmount < $AmountDeposited)&&(($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate))){ 
      echo ('8.1');
    $Interest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $AccruedInterest=0.00;
    $LoanServiceAmount=$AmountDeposited-$AccruedInterestAmount;              //corrected
    
}



else if($AmountDeposited>($precalculatedMonthlyInterest+$AccruedInterestAmount) && ($AccruedInterestAmount >0.00) && $AmountDeposited<$monthlyInstallment+$AccruedInterestAmount &&($Receiptdate==$ExpectedLoanServiceDate)){ 
      echo ('9');
    $Interest=$precalculatedMonthlyInterest;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $AccruedInterest=0.00;
    $LoanServiceAmount=$AmountDeposited-($Interest+$AccruedInterestPayment);
    
}
   
else if($AmountDeposited>($precalculatedMonthlyInterest+$AccruedInterestAmount) && ($AccruedInterestAmount >0.00) && $AmountDeposited<$monthlyInstallment+$AccruedInterestAmount &&(($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate))){ 
      echo ('9.1');
    $Interest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $AccruedInterest=0.00;
    $LoanServiceAmount=$AmountDeposited-$AccruedInterestAmount;
    
}
       



 else if(($AmountDeposited<$AccruedInterestAmount)  &&($Receiptdate==$ExpectedLoanServiceDate)){ 
      echo ('10');
    $Interest=0.00;
    $AccruedInterestPayment=$AmountDeposited;
    $AccruedInterest=($AccruedInterestAmount-$AmountDeposited)+$precalculatedMonthlyInterest;
    $LoanServiceAmount=0.00;
    
} 

 else if($AmountDeposited<$AccruedInterestAmount &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){ 
      echo ('10.1');
    $Interest=0.00;
    $AccruedInterestPayment=$AmountDeposited;
    $AccruedInterest=($AccruedInterestAmount-$AmountDeposited);
    $LoanServiceAmount=0.00;
    
} 
//end of added conditions


else if($AccruedInterestAmount==$AmountDeposited &&($Receiptdate==$ExpectedLoanServiceDate)){ // to be revisited
      echo ('11');
    $Interest=0.00;
    $AccruedInterest=$precalculatedMonthlyInterest;
    $AccruedInterestPayment=$AmountDeposited;
    $LoanServiceAmount=0.00;
    
}

else if($AccruedInterestAmount==$AmountDeposited &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){ // to be revisited
      echo ('11.1');
    $Interest=0.00;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AmountDeposited;
    $LoanServiceAmount=0.00;
    
}




else if(($AmountDeposited<$precalculatedMonthlyInterest) && ($AccruedInterestAmount>$AmountDeposited)&&($Receiptdate==$ExpectedLoanServiceDate)){ // to be revisited //already done
      echo ('12');
    $Interest=0.00;
    $AccruedInterest=($AccruedInterestAmount-$AmountDeposited)+$precalculatedMonthlyInterest;
    $AccruedInterestPayment=$AmountDeposited;
    $LoanServiceAmount=0.00;
    
}
else if(($AmountDeposited<$precalculatedMonthlyInterest) && ($AccruedInterestAmount>$AmountDeposited)&&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){ // to be revisited //already done
      echo ('12.1');
    $Interest=0.00;
    $AccruedInterest=($AccruedInterestAmount-$AmountDeposited);
    $AccruedInterestPayment=$AmountDeposited;
    $LoanServiceAmount=0.00;
    
}



else if($AmountDeposited==($precalculatedMonthlyInterest+$AccruedInterestAmount)&&($Receiptdate==$ExpectedLoanServiceDate)){ // to be revisited
      echo ('13');
    $Interest=$precalculatedMonthlyInterest;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=0.00;
    }
    else if($AmountDeposited==($precalculatedMonthlyInterest+$AccruedInterestAmount) &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){ // to be revisited
      echo ('13.1');
    $Interest=0.00;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=$AmountDeposited-$AccruedInterestAmount;
    }
    
    

 else if($AmountDeposited<($precalculatedMonthlyInterest+$AccruedInterestAmount) && $AmountDeposited>$AccruedInterestAmount &&($Receiptdate==$ExpectedLoanServiceDate)){ // to be revisited  already done
      echo ('14');
    $Interest=$AmountDeposited-$AccruedInterestAmount;
    $AccruedInterest=$precalculatedMonthlyInterest-$Interest;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=0.00;
    }
    
     else if($AmountDeposited<($precalculatedMonthlyInterest+$AccruedInterestAmount) && $AmountDeposited>$AccruedInterestAmount &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){ // to be revisited  already done
      echo ('14.1');
    $Interest=0.00;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=$AmountDeposited-$AccruedInterestAmount;
    }
    
    
    
     else if($AmountDeposited>($precalculatedMonthlyInterest+$AccruedInterestAmount) && $AmountDeposited<($precalculatedMonthlyInterest+$AccruedInterestAmount+$principle) &&($Receiptdate==$ExpectedLoanServiceDate)){ // to be revisited already done by 9
      echo ('15');
    $Interest=$precalculatedMonthlyInterest;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=($AmountDeposited)-($Interest+$AccruedInterestPayment);
    }
     else if($AmountDeposited>($precalculatedMonthlyInterest+$AccruedInterestAmount) && $AmountDeposited<($precalculatedMonthlyInterest+$AccruedInterestAmount+$principle) &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){ // to be revisited already done by 9
      echo ('15.1');
    $Interest=0.00;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=($AmountDeposited)-$AccruedInterestAmount;
    }
    
    
    
   
    else if($AmountDeposited==($precalculatedMonthlyInterest+$AccruedInterestAmount)+$principle &&($Receiptdate==$ExpectedLoanServiceDate)){ // to be revisited
      echo ('16');
    $Interest=$precalculatedMonthlyInterest;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=$principle;
    }
    else if($AmountDeposited==($precalculatedMonthlyInterest+$AccruedInterestAmount)+$principle &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){ // to be revisited
      echo ('16.1');
    $Interest=0.00;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=$AmountDeposited-$AccruedInterestAmount;
    }
    
    
    
    else if($AmountDeposited==$AccruedInterestAmount &&($Receiptdate==$ExpectedLoanServiceDate)){ // to be revisited already done by 11
      echo ('17');
    $Interest=0.00;
    $AccruedInterest=$precalculatedMonthlyInterest;
    $AccruedInterestPayment=$AmountDeposited;
    $LoanServiceAmount=0.00;
    }
     else if($AmountDeposited==$AccruedInterestAmount &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){ // to be revisited already done by 11
      echo ('17.1');
    $Interest=0.00;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=0.00;
    }
    
    // added extra ifs for rare cases
      else if($AmountDeposited>($principle+$precalculatedMonthlyInterest+$AccruedInterestAmount) && $LoanBalance>$principle &&($Receiptdate==$ExpectedLoanServiceDate)){ // to be revisited already done by 11
      echo ('18');
    $Interest=$precalculatedMonthlyInterest;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=$AmountDeposited-($Interest+$AccruedInterestAmount);
    }
    
    
     else if($AmountDeposited>($principle+$precalculatedMonthlyInterest+$AccruedInterestAmount) && ($LoanBalance>$principle) &&($Receiptdate>$previousLoanServiceDate) && ($Receiptdate<$ExpectedLoanServiceDate)){ // to be revisited already done by 11
      echo ('18.1');
    $Interest=0.00;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=$AmountDeposited-$AccruedInterestAmount;
    }
    
     /*else if($AmountDeposited>($principle+$precalculatedMonthlyInterest+$AccruedInterestAmount) && $LoanBalance<=$principle){ // to be revisited already done by 11
      echo ('19');
      
    $Interest=$precalculatedMonthlyInterest;
    $AccruedInterest=0.00;
    $AccruedInterestPayment=$AccruedInterestAmount;
    $LoanServiceAmount=$LoanBalance;
    $LoanBalance=0.00;
    $savings=$AmountDeposited-($Interest+$AccruedInterestAmount+$LoanServiceAmount);
    echo $savings;
    }
    
    
else{
    
    exit("check your Entries");
    
}
*/

$LoanBalance=$_SESSION['LoanBalance']-$LoanServiceAmount;
$Total=$AmountDeposited;


$incomeFromInterest=$Interest+$AccruedInterestPayment;
//member receipts information
$todaysDate=date("Y-m-d");

if($Receiptdate==''){
   //echo "<script type='text/javascript'>swal('Opps', 'You have not entered receipt date!', 'error'); </script>"; //error message box
   // echo "<script type='text/javascript'>swal('You have not entered receipt date', 'error'); </script>";  //normal message box
   echo "<script type='text/javascript'>swal('', 'You have not entered receipt date!', 'error'); </script>"; //error message box
}

else{

$sql="insert into loan_receipts(No,LoanType,ReceiptDate,Total,LoanRepaymentAmount,MonthlyInterest,Interest,AccruedInterest,AccruedInterestPayment,PaymentMethod,LoanPenalty,LoanBalance,LoanId,Transaction_Id,NextLoanServiceDate,PreviousLoanServiceDate)values('$Memberno','$LoanType','$Receiptdate','$Total','$LoanServiceAmount','$MonthlyInterest','$Interest','$AccruedInterest','$AccruedInterestPayment','$paymentmethod','$Loanpenalty','$LoanBalance','$LoanId','$transaction_id','$LoanServiceDate2','$previousLoanServiceDate')";
$result=mysqli_query($con,$sql);


//income 1(interest)
$sql22="insert into incomes(Income,ReceiptDate,Transaction_Id,IncomeType)values('$incomeFromInterest','$todaysDate','$transaction_id','Interest')";
$result22=mysqli_query($con,$sql22);

//income 2(loan penalty)
if($Loanpenalty!=""){
$sql2="insert into incomes(Income,ReceiptDate,Transaction_Id,IncomeType)values('$Loanpenalty','$todaysDate','$transaction_id','loan Penalty')";
$result2=mysqli_query($con,$sql2);
}

if($result){
 //echo mysqli_error($con);   
echo '<script type="text/javascript">swal("Success!", "Receipts have  been successfully submitted", "success"); </script>';    
}

else{
    
    echo mysqli_error($con);
    
}
}

}





//submit savings and shares
else if(isset($_POST["savings-shares"])){

    //error_reporting(0);
$name=$_SESSION['membername'];
$memberNo=$_SESSION['memberno'];    
    
//$Membername=$_POST['membername'] ;
//$Memberno=$_POST['memberno'] ;
$Deposits=$_POST['Deposits'];
$Shares=$_POST['Shares'];
 
$Receiptdate=$_POST['Receiptdate'] ;
 
$paymentmethod=$_POST['paymentmethod'];

$transaction_id=mt_rand(1,1000000);
//member receipts information
$todaysDate=date("Y-m-d");

if($Receiptdate==''){
   //echo "<script type='text/javascript'>swal('Opps', 'You have not entered receipt date!', 'error'); </script>"; //error message box
   // echo "<script type='text/javascript'>swal('You have not entered receipt date', 'error'); </script>";  //normal message box
   echo "<script type='text/javascript'>swal('', 'You have not entered receipt date!', 'error'); </script>"; //error message box
}

else{

$sql="insert into savings_shares_receipts(No,Deposits,Shares,ReceiptDate,PaymentMethod,Transaction_Id)values('$memberNo','$Deposits','$Shares','$Receiptdate','$paymentmethod','$transaction_id')";
$result=mysqli_query($con,$sql);

if($result){
    
echo '<script type="text/javascript">swal("Success!", "Receipts have  been successfully submitted", "success"); </script>';    
}

else{
    
    echo mysqli_error($con);
    
}
}
    
}

}//end of receipts section


//----------------------Expenses Section----------------------------//
function TableHeader3(){
echo '<table class="AdmintableDetails">
<tr><td style="background-color:#00CD66" colspan="12">
<form class="navbar-form navbar-left" role="search" method="get" >
<div class="form-group">
<input type="text" class="form-control" placeholder="Type to search" id="searchvalue" name="searchvalue" style="border:none;">
</div>
<button type="submit" name="searchbutton3" class="btn btn-primary" style="background:red"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span>&nbsp;Search Expense</button>

<a href="home.php?q=6" style="background:red" class="btn btn-primary">Add Expense</a>
<a href="home.php?q=7" style="background:red" class="btn btn-primary">Create Expense</a>
</form>
</td>
</tr>
<tr><td>No</td><td>Name</td><td>Amount</td><td>Date Of Entry</td><td>EDIT</td><td>DELETE</td></tr>';
} 

	
if(@$_GET['q']==5) {
    //$sql="select @row:=@row+1 as row,Pattern,No,FirstName,SecondName,ID,KRA, password,DateOfRegistration,MobileNo,Username,MemberType from  users, (select @row:=0)users";

$sql="select @row:=@row+1 as row,Id,Name,Amount,Date from  expenses, (select @row:=0)expenses";
$result=mysqli_query($con,$sql);

TableHeader3();
//echo "<tr><td>{$row['row']}</td><td>{$row['Pattern']}{$row['No']}</td><td><a href='? showUserAccount='>{$row['FirstName']}</a></td><td>{$row['SecondName']}</td><td>{$row['ID']}</td><td>{$row['KRA']}</td><td>{$row['DateOfRegistration']}</td><td>{$row['MobileNo']}</td><td>{$row['Username']}</td><td><a href='? user_id2=".$row['No']."' class='Clicablebutton'>Edit</a></td><td><a href='?  user_id20=".$row['No']."'' class='Clicablebutton' onClick='return confirmDelete()'>Delete</a></td><td><a href='?  smsId=".$row['No']."'' class='Clicablebutton'>Contact</a></td></tr>";
displayRows3($result);


}
function displayRows3($result){

while($row=mysqli_fetch_array($result)){
echo "<tr><td>{$row['row']}</td><td>{$row['Name']}</td><td>{$row['Amount']}</td><td>{$row['Date']}</td><td><a href='? expenseId1=".$row['Id']."' class='Clicablebutton'>EDIT</a></td><td><a href='?  expenseId2=".$row['Id']."'' class='Clicablebutton' onClick='return confirmDelete();'>DELETE</a></td></tr>";
}
echo "</table>";
}


//------------Add Expense-------------------//

if(@$_GET['q']==6) {
$sql="select * from expensecategories";
$result=mysqli_query($con, $sql);


echo '<fieldset id="fieldsetx">
<legend>Add  Expense</legend>
<form class="" method="POST" >
<div class="row">
<div class="col-md-3" >Expense Category:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<select id="" name="expenseCategory" required>"';

while($row= mysqli_fetch_array($result)){
 echo "<option value='{$row['Name']}'>{$row['Name']}</option>";  
    
}
echo '</select>
</div>
</div>
</div><!--End of row-->
<br>

<div class="row ">
<div class="col-md-3">Amount:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<input id="secondname"   class="form-control input-md" type="text"   name="amount" required>    
</div>
</div>
</div><!--End of row-->

<br>
<div class="row ">
<div class="col-md-3">Date</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<input id="idno"   class="form-control input-md" type="date"   name="date" required>    
</div>
</div>
</div><!--End of row-->


<div class="form-group" align="center">
<input type="submit"  class="btn btn-primary" name="AddExpense" value="Submit"/>
</div>
</form>
</fieldset>';
}

//---------------submit expense---------------//
if(isset($_POST['AddExpense'])){
$expenseCategory=$_POST['expenseCategory'];
$amount=$_POST['amount'];
$date=$_POST['date'];

$sql="insert into expenses(Name,Amount,Date)values('$expenseCategory','$amount','$date')";
$result=mysqli_query($con,$sql);

if($result){
    
 echo '<script type="text/javascript">swal("Success!", "The expense has been saved successfully ", "success"); </script>';    
}
else{
    echo mysqli_error($con);
}
}


//-------delete an expense-----------------//
if(isset($_GET['expenseId2'])){
  
    $expenseId2=$_GET['expenseId2'];

    $sql="delete  from expenses where Id='$expenseId2'";
    $result= mysqli_query($con, $sql);
    if($result){
        echo '<script type="text/javascript">swal("Success!", "The expense has been deleted successfully ", "success"); </script>'; 
    }
    
    else{
        echo mysqli_error($con);
    }
}


//-----Create expense/delete Expense------------//
if(@$_GET['q']==7) {
 $sql="select * from expensecategories";
$result=mysqli_query($con, $sql);
echo '<fieldset id="fieldsetx">
<legend>------------Create  Expense----------</legend>
<form class="" method="POST" >
<div class="row">
<div class="col-md-3" >Expense Category:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input id="Expense"   class="form-control input-md" type="text"   name="expensename" placeholder="Type an expense name"  required> 
</div>
</div>
</div><!--End of row-->
<br>


<div class="form-group" align="center">
<input type="submit"  class="btn btn-primary" name="CreateExpense" value="Save"/>
</div>
</form>
<hr style="border:1px solid red">

<fieldset>
<legend>------------Delete Expense------------</legend>
<br>
<form class="" method="POST" name="form2" id="form2">
<div class="row">
<div class="col-md-3" >Choose Expense:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<select id="" name="expenseCategory" required>"';

while($row= mysqli_fetch_array($result)){
 echo "<option value='{$row['Name']}'>{$row['Name']}</option>";  
    
}
echo '</select>
</div>
</div><!--End of row-->

<div class="form-group" align="center">
<input type="submit"  class="btn btn-primary" name="DeleteExpense" value="Delete Expense"/>
</div>
</form>
</fieldset>
</fieldset>';




}

//Delete a created Expense
if(isset($_POST['DeleteExpense'])){
    $expenseCategory=$_POST['expenseCategory'];
    $sql="delete  from expensecategories where Name='$expenseCategory'";
    $result= mysqli_query($con, $sql);
    
    if($result){ 
        echo '<script type="text/javascript">swal("Success!", "The expense has been deleted successfully ", "success"); </script>'; 
    }
    
    else{
        echo mysqli_error($con);
    }
}

//--------submit created expense----------//
if(isset($_POST['CreateExpense'])){
$expenseCategory=$_POST['expensename'];

$sql="insert into expensecategories(Name)values('$expenseCategory')";
$result=mysqli_query($con,$sql);

if($result){
    
 echo '<script type="text/javascript">swal("Success!", "The expense has been created successfully ", "success"); </script>';    
}
else{
     //echo "<script type='text/javascript'>swal('', 'That expense Already Exists!', 'error'); </script>";
}
}



//-----------------Edit expense--------------------//
if(isset($_GET['expenseId1'])){
$id=$_GET['expenseId1']; 
$sql="select * from expenses where Id='$id'";
$result=mysqli_query($con, $sql);
$data=$result->fetch_all(MYSQLI_ASSOC);


//$data=mysqli_fetch_array($result2);

$sql1="select * from expensecategories";
$result1=mysqli_query($con, $sql1);

$data1=$result1->fetch_all(MYSQLI_ASSOC); 
foreach($data as $row){
//$name=$row['Name'];  
 
}
$name=$row['Name']; 

echo '<fieldset id="fieldsetx">
<legend>Edit  Expense</legend>
<form class="" method="POST" >
<div class="row">
<div class="col-md-3" >Expense Category:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
<input id=""  class="form-control input-md" type="hidden"   name="Id" value='.$row['Id'].'  >
<input id=""  class="form-control input-md" type="text"   name="amount" value="'.$name.'" >  

<select id="" name="expenseCategory" required>"';

foreach($data1 as $row1){
 echo "<option value='{$row1['Name']}'>{$row1['Name']}</option>";  
 
}

echo '</select>
</div>
</div>
</div><!--End of row-->
<br>

<div class="row ">
<div class="col-md-3">Amount:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<input id="secondname"  class="form-control input-md" type="text"   name="amount" value="'.$row['Amount'].'">   
</div>
</div>
</div><!--End of row-->

<br>
<div class="row ">
<div class="col-md-3">Date</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">   
<input id="idno"   class="form-control input-md" type="date"   name="date"  value="'.$row['Date'].'" required>    
</div>
</div>
</div><!--End of row-->


<div class="form-group" align="center">
<input type="submit"  class="btn btn-primary" name="SaveEditedExpense" value="Save"/>
</div>
</form>
</fieldset>';   
    
}
//-----------------submit Edited expense--------------------//
if(isset($_POST['SaveEditedExpense'])){
$Id=$_POST['Id'];
$expenseCategory=$_POST['expenseCategory'];
$amount=$_POST['amount'];
$date=$_POST['date'];

$sql="update expenses set Name='$expenseCategory',Amount='$amount', Date='$date' where Id='$Id'";
$result=mysqli_query($con,$sql);

if($result){
    
 echo '<script type="text/javascript">swal("Success!", "The expense has been updated successfully ", "success"); </script>';    
}
else{
    echo mysqli_error($con);
}
}


?>




<script type="text/javascript">
/*$('.datepicker').datepicker({
weekStart:1,
color: 'red'
});

*/

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
if(document.getElementById("loanamount").value!=''){
computeLoanMonthlyInterest()};
}



function computeLoanMonthlyInterest(){
var selectedValue,monthlyInterest_Input,loanAmount_Input,monthlyInterest_Input,loanDuration_Input;
selectedValue=document.fieldsForm.loans.value;// get the value of the checked radio button
loanAmount_Input=document.getElementById("loanamount").value;//get loan_amount value
monthlyInterest_Input=document.getElementById("monthlyinterestrate").value;
loanDuration_Input=document.getElementById("loanduration").value; 
if(selectedValue=='Normal Loan'){
ThemonthlyInterest=((parseFloat(loanAmount_Input)*parseFloat(monthlyInterest_Input))/100)/2;
}

if(selectedValue=='Soft Loan') {
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
if(selectedValue=='Normal Loan'){
ThemonthlyInterest=((parseFloat(loanAmount_Input)*parseFloat(monthlyInterest_Input))/100)/2;
}

if(selectedValue=='Soft Loan') {
var ThemonthlyInterest=(parseFloat(loanAmount_Input)*parseFloat(monthlyInterest_Input))/100;
}

document.getElementById('monthlyinterest').value=ThemonthlyInterest;
document.getElementById('totalinterest').value=ThemonthlyInterest*loanDuration_Input;
document.getElementById('loanToRepay').value=(ThemonthlyInterest*loanDuration_Input)+parseInt(loanAmount_Input);



}); 
}

function disableTextFields(){
if(document.getElementById("loanamount").value==''){
document.getElementById("monthlyinterestrate").disabled=true;
document.getElementById("loanduration").disabled=true; 
document.getElementById('monthlyinterest').disabled=true
document.getElementById('totalinterest').disabled=true;
document.getElementById('loanToRepay').disabled=true;
document.getElementById('principle').disabled=true;
document.getElementById('processingfee').disabled=true;
document.getElementById('issuancedate').disabled=true;

}

}

function EnableTextFields(){
if(document.getElementById("loanamount").value !=''){
document.getElementById("monthlyinterestrate").disabled=false;
document.getElementById("loanduration").disabled=false; 
document.getElementById('monthlyinterest').disabled=false
document.getElementById('totalinterest').disabled=false;
document.getElementById('loanToRepay').disabled=false;
document.getElementById('principle').disabled=false;
document.getElementById('processingfee').disabled=false;
document.getElementById('issuancedate').disabled=false;

}

}


document.getElementById("loanamount").addEventListener("keyup",function(){
  EnableTextFields();  
}
);
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

function clearInterestField(){
 document.getElementById("Mo_Interest").value="";    
}

 
if(window.history.replaceState){
  window.history.replaceState(null,null, window.location.href)  ;
    
}

$('#fieldsForm').submit(function(e){
    
    //e.preventDefault();
});


        
  function Savings_Shares_form() {
  var x = document.getElementById("savings_shares");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 



$('.datepicker').datepicker({
weekStart:1,
color: 'red'
});

</script>

</div></div>  </div></div>

<!--Footer start-->
<?php include 'footer.php';?>
<? ob_flush(); ?>
</body>
</html>


<?php session_start();
ob_start();

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sacco Online </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>   
<link rel="stylesheet" href="customized.css">  
<link rel="stylesheet" href="css/main.css">
<link  rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>


<script src="sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert.css">

<!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

<script type="text/javascript">
$(document).ready(function(){
$("#searchname").autocomplete("ajaxcomplete.php", {
selectFirst: true
});
});
function confirmDelete(){

return confirm("Are you sure you want to delete this Transaction");
}


</script>

<style>

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
width:100%;

;
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

</style>



</head>
<?php
include_once 'dbConnection.php';
?>
<body >
<?php include 'header.php'; ?>
<div class="bg" style="" >

<!--navigation menu-->
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
<div class="col-md-12">
<!--home start-->

<?php if(@$_GET['q7'])
{ 
     
    echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];
}?>

<?php

 //-----Interest Rate settings------------//
 if(@$_GET['q']==2) {
$sql="select * from loaninformation";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$currentInterestRate=$row['Interest'];


echo "<fieldset id='fieldsetx' style='width:auto;'>
<legend>INTEREST RATE SETTINGS</legend>

<form method='post'  action='' enctype='multipart/form-data' id='fieldsForm' name='fieldsForm' class='form-horizontal' >
<table border='1' >
<tr>
<td><label>Current Interest Rate:-</label></td> <td><input type='text' name='currentInterestRate' class='' value='$currentInterestRate'/></td> 
</tr>

<tr>
<td><label>Enter New Interest Rate:-</label></td> <td><input type='text' name='newInterestRate' class='' required/></td> 
</tr>  

<tr>
<td colspan='3' align='center'><input type='submit' name='Interest' value='Save Changes' class='btn btn-primary' class='form-control'></td> 
</tr>
</table></fieldset>";



 if(isset($_POST['Interest'])){
   
   $currentInterestRate=$_POST['currentInterestRate'];
   $newInterestRate=$_POST['newInterestRate'];
   $sql="update loaninformation set Interest='$newInterestRate'";
   $result=mysqli_query($con,$sql);
    if($result){
    echo '<script type="text/javascript">swal("Success!", "Interest Rate has been updated successfully ", "success"); </script>';    
    }
    else{
       echo mysqli_error($con);
    }
     }
 
 }
//End of interest Rate settings------------//
 
 
 //Sacco Name customization
 //-----Interest Rate settings------------//
 if(@$_GET['q']==4) {
$sql="select * from saccoinformation";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$currentSaccoName=$row['Name'];


echo "<fieldset id='fieldsetx' style='width:auto;'>
<legend>Sacco Name</legend>

<form method='post'  action='' enctype='multipart/form-data' id='fieldsForm' name='fieldsForm' class='form-horizontal' >
<table border='1' >
<tr>
<td><label>Current Sacco Name:-</label></td> <td><input type='text' name='currentsacconame' class='' value='$currentSaccoName' size='30'/></td> 
</tr>

<tr>
<td><label>Enter New Sacco Name:-</label></td> <td><input type='text' name='newSaccoName' class='' required size='30'/></td> 
</tr>  

<tr>
<td colspan='3' align='center'><input type='submit' name='saccoName' value='Save Changes' class='btn btn-primary' class='form-control'></td> 
</tr>
</table></fieldset>";



 if(isset($_POST['saccoName'])){
   
   $currentSaccoName=$_POST['currentsacconame'];
   $newSaccoName=$_POST['newSaccoName'];
   $sql="update saccoinformation set Name='$newSaccoName'";
   $result=mysqli_query($con,$sql);
    if($result){
    echo '<script type="text/javascript">swal("Success!", "Sacco Name has been updated successfully ", "success"); </script>';    
    }
    else{
       echo mysqli_error($con);
    }
     }
 
 }
 
 
 
 
 
 //Transaction Management
 if(@$_GET['q']==3) {
echo '<table class="AdmintableDetails">
<tr><td style="background-color:#00CD66" colspan="12">
<form class="navbar-form navbar-left" role="search" method="post" >

<span style="white-space:nowrap">
<input type="radio" id="transactionType" name="transactionType" value="savings" required >
<label for="Receipts">Savings</label>
</span>

||

<span style="white-space:nowrap">
<input type="radio" id="transactionType" name="transactionType" value="shares" required >
<label for="Receipts">Shares</label>
</span>

||

<span style="white-space:nowrap">
<input type="radio" id="transactionType" name="transactionType" value="loan_receipts" required >
<label for="Receipts">loan-Receipts</label>
</span>


||
<span style="white-space:nowrap">
<input type="radio" id="transactionType" name="transactionType" value="loans" required>
<label for="Loans">Loan Issued</label>
</span>


&nbsp;
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter Member No." id="searchvalue" name="searchvalue" style="border:none;" required>
</div>
<button type="submit" name="searchbutton" class="btn btn-primary" style="background:red"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span>&nbsp;Search Transaction</button>
</form>
</td>
</tr>';

$transactionType=filter_input(INPUT_POST, 'transactionType', FILTER_SANITIZE_STRING);//get the transaction type
 
if (($transactionType=='savings')&&(isset($_POST['searchbutton'])))
{
   
$transactionType=$_POST['transactionType'];
$searchvalue=$_POST['searchvalue'];

$sql="select * from savings_shares_receipts where No='$searchvalue' order by Id desc";
$result=mysqli_query($con,$sql);
echo "<tr ><td>MEMBER NO.</td><td>SAVINGS</td><td>RECEIPT DATE</td><td>PAYMENT METHOD</td><td>DELETE TRANSACTION</td></tr>";
while($row=mysqli_fetch_array($result)){

echo "<tr><td>{$row['No']}</td><td>{$row['Deposits']}</td><td>{$row['ReceiptDate']}</td><td>{$row['PaymentMethod']}</td><td><a href='? transactionId1=".$row['Transaction_Id']."' class='Clicablebutton' onClick='return confirmDelete()'>Delete</a></td></tr>";  

}

}
 
else if (($transactionType=='shares')&&(isset($_POST['searchbutton'])))

{

$transactionType=$_POST['transactionType'];
$searchvalue=$_POST['searchvalue'];

$sql="select * from savings_shares_receipts where No='$searchvalue' order by Id desc";
$result=mysqli_query($con,$sql);
echo "<tr ><td>MEMBER NO.</td><td>SHARES</td><td>RECEIPT DATE</td><td>PAYMENT METHOD</td><td>DELETE TRANSACTION</td></tr>";
while($row=mysqli_fetch_array($result)){

echo "<tr><td>{$row['No']}</td><td>{$row['Shares']}</td><td>{$row['ReceiptDate']}</td><td>{$row['PaymentMethod']}</td><td><a href='? transactionId2=".$row['Transaction_Id']."' class='Clicablebutton' onClick='return confirmDelete()'>Delete</a></td></tr>";  
}

}


else if (($transactionType=='loan_receipts')&&(isset($_POST['searchbutton'])))

{

$transactionType=$_POST['transactionType'];
$searchvalue=$_POST['searchvalue'];

$sql="select * from loan_receipts where No='$searchvalue' order by ReceiptDate ASC";
$result=mysqli_query($con,$sql);
echo "<tr ><td >RECEIPT DATE</td><td>MEMBER NO.</td><td>PRINCIPLE</td><td>INTEREST</td><td>TOTAL</td><td>ACCRUED INTEREST</td><td>LOAN BALANCE</td><td>PAYMENT METHOD</td><td>DELETE TRANSACTION</td></tr>";
while($row=mysqli_fetch_array($result)){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['No']}</td><td>{$row['LoanRepaymentAmount']}</td><td>{$row['Interest']}</td><td>{$row['Total']}</td><td>{$row['AccruedInterest']}</td><td>{$row['LoanBalance']}</td><td>{$row['PaymentMethod']}</td><td><a href='? transactionId3=".$row['Transaction_Id']."' class='Clicablebutton' onClick='return confirmDelete()'>Delete</a></td></tr>";  

}

}





else if (($transactionType=='loans')&&(isset($_POST['searchbutton'])))

{

$transactionType=$_POST['transactionType'];

$searchvalue=$_POST['searchvalue'];

$sql="select * from loans where No='$searchvalue'";
$result=mysqli_query($con,$sql);
echo "<tr ><td >MEMBER NO.</td><td>LOAN AMOUNT</td><td>INTEREST RATE</td><td>PRINCIPLE</td><td>LOAN TYPE</td><td>LOAN CATEGORY</td><<td>DURATION</td><td>MONTHTLY INTEREST</td><td>TOTAL INTEREST</td><td>LOAN TO BE PAID BACK</td><td>ISSUANCE DATE</td><td>DELETE TRANSACTION</td></tr>";
while($row=mysqli_fetch_array($result)){

echo "<tr><td>{$row['No']}</td><td>{$row['LoanAmount']}</td><td>{$row['InterestRate']}</td><td>{$row['Principal']}</td><td>{$row['LoanType']}</td><td>{$row['Loan']}</td><td>{$row['Duration']}</td><td>{$row['MonthlyInterest']}</td><td>{$row['TotalInterest']}</td><td>{$row['LoanToBePaid']}</td><td>{$row['IssuanceDate']}</td><td><a href='? transactionId4=".$row['Transaction_Id']."' class='Clicablebutton' onClick='return confirmDelete()'>Delete</a></td></tr>"; 

}

}




echo '</table>';
}
 
//delete transaction //Savings
if(isset($_GET['transactionId1'])){
$transactionId= $_GET['transactionId1'];

$sql="delete from savings_shares_receipts where Transaction_Id=$transactionId";
$sql2="delete from incomes where  Transaction_Id=$transactionId";
$result=mysqli_query($con,$sql);

if(!$result){
    echo mysqli_error($con);
}
$result2=mysqli_query($con,$sql2);

if(($result)&&($result2)){
echo '<script type="text/javascript">swal("Success!", "The transaction has been deleted successfully ", "success"); </script>'; 
header("Location:adminDash.php?q=3");  
}
else {
echo mysqli_error($con);
}

}


//delete transaction //Shares
if(isset($_GET['transactionId2'])){
$transactionId= $_GET['transactionId2'];

$sql="delete from savings_shares_receipts where Transaction_Id=$transactionId";
$sql2="delete from incomes where  Transaction_Id=$transactionId";
$result=mysqli_query($con,$sql);

if(!$result){
    echo mysqli_error($con);
}
$result2=mysqli_query($con,$sql2);

if(($result)&&($result2)){
echo '<script type="text/javascript">swal("Success!", "The transaction has been deleted successfully ", "success"); </script>'; 
header("Location:adminDash.php?q=3");  
}
else {
echo mysqli_error($con);
}

}


//delete transaction //loan receipts
if(isset($_GET['transactionId3'])){
$transactionId= $_GET['transactionId3'];

$sql="delete from loan_receipts where Transaction_Id=$transactionId";
$sql2="delete from incomes where  Transaction_Id=$transactionId";
$result=mysqli_query($con,$sql);

if(!$result){
    echo mysqli_error($con);
}
$result2=mysqli_query($con,$sql2);

if(($result)&&($result2)){
echo '<script type="text/javascript">swal("Success!", "The transaction has been deleted successfully ", "success"); </script>';  
header("Location:adminDash.php?q=3");  
}
else {
echo mysqli_error($con);
}

}


//delete transaction //loans
if(isset($_GET['transactionId4'])){
$transactionId= $_GET['transactionId4'];

$sql="delete from loans where Transaction_Id=$transactionId";
$sql2="delete from incomes where  Transaction_Id=$transactionId";
$result=mysqli_query($con,$sql);

if(!$result){
    echo mysqli_error($con);
}
$result2=mysqli_query($con,$sql2);

if(($result)&&($result2)){
echo '<script type="text/javascript">swal("Success!", "The transaction has been deleted successfully ", "success"); </script>'; 
header("Location:adminDash.php?q=3");  
}
else {
echo mysqli_error($con);
}

}

?>



<script src="js/graphLibrary.js"  type="text/javascript"></script>

<!--container closed-->
</div></div>
   
 <!---graph--------------->
 <div id="chartContainer" style="height: 350px; width: 100%;">
    
 </div>
     
</div>

  


<!--Footer start-->
<?php include 'footer.php' ?>
<!--footer end-->

</body>
</html>

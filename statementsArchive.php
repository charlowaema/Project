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
width:10%;
height:10%;
border-radius:5px;
}
.Clicablebutton:hover{
color:red;
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
text-align:right;
}




.AdmintableDetails th, td{
padding:5px;
opacity:1;
width:100%;


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

input[type="radio"]{
  margin-top: -1px;
vertical-align:middle;
}


.AdmintableDetails th{
top:0;
position:sticky;
background-color:#666;
z-index:20;
}
@media print{
    .col-md-12{
display: flex;
flex-direction: row;
width:100%;
}
    
}

@media print{
 
    .AdmintableDetails, .AdmintableDetails tr, .AdmintableDetails td{
      border-top:#000 solid 1px;
      border-bottom:#000 solid 1px;
      border-left:#000 solid 1px;
      border-right:#000 solid 1px;
     
    }
        
   @media print{
 
    .AdmintableDetails, .AdmintableDetails tr, .AdmintableDetails td{
      width:100%;
    }     
    
 
}

#theader{
 margin:0 auto;
margin-top:5%;
width:50%;

  
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
<div class="container" ><!--container start-->
<div class="row">
<div class="col-md-12" id='ty'>
<!--home start-->

<?php if(@$_GET['q7'])
{ 
     
    echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];
}?>

<?php


 //----------------------Statements Section----------------------------//


if(@$_GET['q']==6) {
echo '<table class="AdmintableDetails">
<tr><th style="background-color:#00CD66;" colspan="12" id="tableheader">

<form class="navbar-form navbar-left" role="search" method="post" name="fieldsForm"">
&nbsp&nbsp
<span style="white-space:nowrap">
<input type="radio" id="transactionType" name="statementType" value="loans" required checked>
<label for="Loans">loans</label>
</span>
&nbsp&nbsp
<span style="white-space:nowrap">
<input type="radio" id="transactionType" name="statementType" value="savings" required>
<label for="savings">savings</label>
</span>
&nbsp&nbsp
<span style="white-space:nowrap">
<input type="radio" id="transactionType" name="statementType" value="shares" required>
<label for="shares">shares</label>
</span>
&nbsp&nbsp
<span style="white-space:nowrap">
<input type="radio" id="transactionType" name="statementType" value="comperehensive statement" required>
<label for="comperehensive statement">comperehensive statement</label>
</span>

&nbsp&nbsp;
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter Member No." id="searchvalue" name="searchvalue" style="border:none;" >
</div>
<button type="button" name="searchbutton" class="btn btn-primary" style="background:red" data-toggle="modal" data-target="#transactiontype" onClick="passValues();"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span>&nbsp;Ok</button>
</form>
</th>
</tr>';


echo '<div class="modal fade" id="transactiontype" >
  <div class="modal-dialog" style="width:600px;">
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class=""></div>
<div class="" >
<fieldset  id="fieldsetx">
<legend>------statement------</legend>
<form method="post">
<div class="form-group"><div class="col-md-12"><input type="hidden" name="statementType" id="statementType"><input type="hidden" name="memberNo" id="memberNo"><label style="white-space:nowrap">Comprehensive Statement</label>&nbsp<input type="radio" name="statementLevel" value="comprehensive" checked></div></div>
<div class="form-group" style="margin-top:10%";><div class="col-md-12"><label style="white-space:nowrap">Statement by Range of Date</label>&nbsp<input type="radio" name="statementLevel" value="rangeofdate">&nbsp<input type="date" name="date1" placeholder="" class="form-control"  style="width:auto"><label>To</label><input type="date" name="date2"  class="form-control" style="width:auto"></div></div>

<div class="form-group" align="center"><input type="submit" name="searchbutton" value="View Report" class="btn btn-primary" style="margin-top:5%";></div>
</form>
</fieldset>

</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>';



$transactionType=filter_input(INPUT_POST, 'statementType', FILTER_SANITIZE_STRING);//get the transaction type
$transactionLevel=filter_input(INPUT_POST, 'statementLevel', FILTER_SANITIZE_STRING);
$date1=filter_input(INPUT_POST, 'date1', FILTER_SANITIZE_STRING);
$date2=filter_input(INPUT_POST, 'date2', FILTER_SANITIZE_STRING);

//Query comprehensive statement
if (($transactionType=='loans')&&(isset($_POST['searchbutton']))&&($transactionLevel=='comprehensive'))
{

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name
$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmountTotal,LoanRepaymentAmount, receipts.LoanType,receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId    where loans.No='$memberNo'   group by loans.LoanId";
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);
echo "<tr><td colspan='6' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='6' id='theader' style='text-align:center;'><p>JOSAJO SACCO LIMITED</p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td>LOANS</td><td>ISSUANCE DATE</td><td>LOAN ISSUED</td><td>AMOUNT TO PAY BACK</td><td>AMOUNT PAID</td><td>BALANCE</td></tr>";

foreach($data as $row){
$LoanToBePaid=$row["LoanToBePaid"];
$LoanRepaymentAmount=$row['LoanRepaymentAmountTotal'];    
$LoanBalance=$LoanToBePaid-$LoanRepaymentAmount;
echo "<tr><td>{$row['LoanType']}</td><td>{$row['IssuanceDate']}</td><td>{$row['LoanAmount']}</td><td>{$row['LoanToBePaid']}</td><td>{$row['LoanRepaymentAmountTotal']}</td><td>$LoanBalance.00</td></tr>"; 

}

}
 
else if (($transactionType=='savings')&&(isset($_POST['searchbutton']))&&($transactionLevel=='comprehensive'))

{

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name
$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select * from  receipts where Deposits !=0.00";
$sql2="Select sum(Deposits) as SavingsTotal from  receipts";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SavingsTotal=$row2['SavingsTotal'];
echo "<tr><td colspan='2' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='2' id='theader' style='text-align:center;'><p>JOSAJO SACCO LIMITED</p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td>RECEIPT DATE</td><td>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['Deposits']}</td></tr>"; 



}
echo "<tr><td colspan='2'>Total Savings:-$SavingsTotal</td></tr>"; 
}



else if (($transactionType=='shares')&&(isset($_POST['searchbutton']))&&($transactionLevel=='comprehensive')){

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name
$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select * from  receipts where Shares !=0.00";
$sql2="Select sum(Shares) as SharesTotal from  receipts";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SharesTotal=$row2['SharesTotal'];
echo "<tr><td colspan='2' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='2' id='theader' style='text-align:center;'><p>JOSAJO SACCO LIMITED</p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td>RECEIPT DATE</td><td>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['Shares']}</td></tr>"; 



}
echo "<tr><td colspan='2'>Total Shares:-$SharesTotal</td></tr>"; 
}




//--comprehensive report
else if (($transactionType=='comperehensive statement')&&(isset($_POST['searchbutton']))&&($transactionLevel=='comprehensive')){

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];


//Query savings
$sql11="Select * from  receipts where Deposits !=0.00";
$sql22="Select sum(Deposits) as SavingsTotal from  receipts";
$result11=mysqli_query($con,$sql11);
$result22=mysqli_query($con,$sql22);
$data11=$result11->fetch_all(MYSQLI_ASSOC);
$row22=mysqli_fetch_array($result22);

//--Query shares------
$sql111="Select * from  receipts where Shares !=0.00";
$sql222="Select sum(Shares) as SharesTotal from  receipts";
$result111=mysqli_query($con,$sql111);
$result222=mysqli_query($con,$sql222);
$row222=mysqli_fetch_array($result222);


$data22=$result111->fetch_all(MYSQLI_ASSOC);

$SavingsTotal=$row22['SavingsTotal'];
$SharesTotal=$row222['SharesTotal'];
echo "<tr><td colspan='3' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='3' id='theader' style='text-align:center;'><p>JOSAJO SACCO LIMITED</p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";


//DISPLAY SAVINGS
echo "<tr ><td>SAVINGS</td><td>RECEIPT DATE</td><td>AMOUNT</td></tr>";
foreach($data11 as $savings){

echo "<tr><td>Savings</td><td>{$savings['ReceiptDate']}</td><td>{$savings['Deposits']}</td></tr>"; 



}
echo "<tr><td colspan='3'>Total Savings:-$SavingsTotal</td></tr>"; 




//DISPLAY Shares
echo "<tr ><td>SHARES</td><td>RECEIPT DATE</td><td>AMOUNT</td></tr>";
foreach($data22 as $shares){

echo "<tr><td>Shares</td><td>{$shares['ReceiptDate']}</td><td>{$shares['Shares']}</td></tr>"; 



}
echo "<tr><td colspan='3'>Total Shares:-$SharesTotal</td></tr>"; 



//DISPLAY loans
$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmountTotal,LoanRepaymentAmount, receipts.LoanType,receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId    where loans.No='$memberNo'   group by loans.LoanId";
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

echo "<tr ><td>LOAN TYPE</td><td>DATE OF ISSUANCE</td><td>LOAN INFORMATION</td></tr>";
foreach($data as $row){
$LoanToBePaid=$row["LoanToBePaid"];
$LoanRepaymentAmount=$row['LoanRepaymentAmountTotal'];    
$LoanBalance=$LoanToBePaid-$LoanRepaymentAmount;
echo "<tr><td>{$row['LoanType']}</td><td>{$row['IssuanceDate']}</td><td>Loan Amount:-{$row['LoanAmount']}<br>Loan & Interest:-{$row['LoanToBePaid']}<br>Amount Paid:-{$row['LoanRepaymentAmountTotal']}<br>Balance:-$LoanBalance.00</td></tr>"; 

}
}
//end of statement comprehensive report


//Query statement report by range of date
if (($transactionType=='loans')&&(isset($_POST['searchbutton']))&&($transactionLevel=='rangeofdate'))
{

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name
$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmountTotal,LoanRepaymentAmount, receipts.LoanType,receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId    where loans.No='$memberNo' AND (loans.IssuanceDate BETWEEN '$date1' AND '$date2')  group by loans.LoanId";
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);
echo "<tr><td colspan='6' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='6' id='theader' style='text-align:center;'><p>JOSAJO SACCO LIMITED</p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td>LOANS</td><td>ISSUANCE DATE</td><td>LOAN ISSUED</td><td>AMOUNT TO PAY BACK</td><td>AMOUNT PAID</td><td>BALANCE</td></tr>";

foreach($data as $row){
$LoanToBePaid=$row["LoanToBePaid"];
$LoanRepaymentAmount=$row['LoanRepaymentAmountTotal'];    
$LoanBalance=$LoanToBePaid-$LoanRepaymentAmount;
echo "<tr><td>{$row['LoanType']}</td><td>{$row['IssuanceDate']}</td><td>{$row['LoanAmount']}</td><td>{$row['LoanToBePaid']}</td><td>{$row['LoanRepaymentAmountTotal']}</td><td>$LoanBalance.00</td></tr>"; 

}

}
 
else if (($transactionType=='savings')&&(isset($_POST['searchbutton']))&&($transactionLevel=='rangeofdate'))

{

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name
$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select * from  receipts where Deposits !=0.00 AND (receipts.ReceiptDate BETWEEN '$date1' AND '$date2')";
$sql2="Select sum(Deposits) as SavingsTotal from  receipts WHERE (receipts.ReceiptDate BETWEEN '$date1' AND '$date2')";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SavingsTotal=$row2['SavingsTotal'];
echo "<tr><td colspan='2' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='2' id='theader' style='text-align:center;'><p>JOSAJO SACCO LIMITED</p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td>RECEIPT DATE</td><td>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['Deposits']}</td></tr>"; 



}
echo "<tr><td colspan='2'>Total Savings:-$SavingsTotal</td></tr>"; 
}



else if (($transactionType=='shares')&&($transactionLevel=='rangeofdate')&&(isset($_POST['searchbutton']))){

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name
$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select * from  receipts where Shares !=0.00 AND ReceiptDate BETWEEN '$date1' AND '$date2'";
$sql2="Select sum(Shares) as SharesTotal from  receipts  WHERE ReceiptDate BETWEEN '$date1' AND '$date2'";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SharesTotal=$row2['SharesTotal'];
echo "<tr><td colspan='2' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='2' id='theader' style='text-align:center;'><p>JOSAJO SACCO LIMITED</p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td>RECEIPT DATE</td><td>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['Shares']}</td></tr>"; 



}
echo "<tr><td colspan='2'>Total Shares:-$SharesTotal</td></tr>"; 
}




//--comprehensive report by range of date
else if (($transactionType=='comperehensive statement')&&(isset($_POST['searchbutton']))&&($transactionLevel=='rangeofdate')){

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];


//Query savings
$sql11="Select * from  receipts where Deposits !=0.00 AND (ReceiptDate BETWEEN '$date1' AND '$date2')";
$sql22="Select sum(Deposits) as SavingsTotal from  receipts WHERE (ReceiptDate BETWEEN '$date1' AND '$date2')";
$result11=mysqli_query($con,$sql11);
$result22=mysqli_query($con,$sql22);
$data11=$result11->fetch_all(MYSQLI_ASSOC);
$row22=mysqli_fetch_array($result22);

//--Query shares------
$sql111="Select * from  receipts where Shares !=0.00 AND (ReceiptDate BETWEEN '$date1' AND '$date2')";
$sql222="Select sum(Shares) as SharesTotal from  receipts WHERE (ReceiptDate BETWEEN '$date1' AND '$date2')";
$result111=mysqli_query($con,$sql111);
$result222=mysqli_query($con,$sql222);
$row222=mysqli_fetch_array($result222);


$data22=$result111->fetch_all(MYSQLI_ASSOC);

$SavingsTotal=$row22['SavingsTotal'];
$SharesTotal=$row222['SharesTotal'];
echo "<tr><td colspan='3' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='3' id='theader' style='text-align:center;'><p>JOSAJO SACCO LIMITED</p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";


//DISPLAY SAVINGS
echo "<tr ><td>SAVINGS</td><td>RECEIPT DATE</td><td>AMOUNT</td></tr>";
foreach($data11 as $savings){

echo "<tr><td>Savings</td><td>{$savings['ReceiptDate']}</td><td>{$savings['Deposits']}</td></tr>"; 



}
echo "<tr><td colspan='3'>Total Savings:-$SavingsTotal</td></tr>"; 




//DISPLAY Shares
echo "<tr ><td>SHARES</td><td>RECEIPT DATE</td><td>AMOUNT</td></tr>";
foreach($data22 as $shares){

echo "<tr><td>Shares</td><td>{$shares['ReceiptDate']}</td><td>{$shares['Shares']}</td></tr>"; 



}
echo "<tr><td colspan='3'>Total Shares:-$SharesTotal</td></tr>"; 



//DISPLAY loans
$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmountTotal,LoanRepaymentAmount, receipts.LoanType,receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId    where loans.No='$memberNo'  AND (loans.IssuanceDate BETWEEN '$date1' AND '$date2') group by loans.LoanId";
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

echo "<tr ><td>LOAN TYPE</td><td>DATE OF ISSUANCE</td><td>LOAN INFORMATION</td></tr>";
foreach($data as $row){
$LoanToBePaid=$row["LoanToBePaid"];
$LoanRepaymentAmount=$row['LoanRepaymentAmountTotal'];    
$LoanBalance=$LoanToBePaid-$LoanRepaymentAmount;
echo "<tr><td>{$row['LoanType']}</td><td>{$row['IssuanceDate']}</td><td>Loan Amount:-{$row['LoanAmount']}<br>Loan & Interest:-{$row['LoanToBePaid']}<br>Amount Paid:-{$row['LoanRepaymentAmountTotal']}<br>Balance:-$LoanBalance.00</td></tr>"; 

}
}



//end of statement reports
echo '</tbody></table>';
}

//all member transations-statements
echo '<div class="modal fade" id="allmembertransactionsModal" >
  <div class="modal-dialog" style="width:600px;">
    <div class="modal-content" >
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body title1">
   <form method="post">   
<div class="row">
<div class=""  style="border:1px solid green;border-radius:2%;">

<span style="white-space:nowrap" >
<input type="radio" id="transactionType" name="statementType" value="loans" required checked style="margin-left:10%;">
<label for="Loans">loans</label>
</span>
&nbsp&nbsp
<span style="white-space:nowrap">
<input type="radio" id="transactionType" name="statementType" value="savings" required>
<label for="savings">savings</label>
</span>
&nbsp&nbsp
<span style="white-space:nowrap">
<input type="radio" id="transactionType" name="statementType" value="shares" required>
<label for="shares">shares</label>
</span>
</div>
<div class="" >
<fieldset  id="fieldsetx">
<legend>------statement------</legend>

<div class="form-group"><div class="col-md-12"><label style="white-space:nowrap">Comprehensive Statement</label>&nbsp<input type="radio" name="statementLevel" value="comprehensive" checked></div></div>
<div class="form-group" style="";><div class="col-md-12"><label style="white-space:nowrap">Statement by Range of Date</label>&nbsp<input type="radio" name="statementLevel" value="rangeofdate">&nbsp<input type="date" name="date1" placeholder="" class="form-control"  style="width:auto"><label>To</label><input type="date" name="date2"  class="form-control" style="width:auto"></div></div>

<div class="form-group" align="center"><input type="submit" name="allmemberStatementButton" value="View Report" class="btn btn-primary" style="margin-top:5%";></div>
</form>
</fieldset>

</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>';

$transactionType=filter_input(INPUT_POST, 'statementType', FILTER_SANITIZE_STRING);//get the transaction type
$transactionLevel=filter_input(INPUT_POST, 'statementLevel', FILTER_SANITIZE_STRING);
$date1=filter_input(INPUT_POST, 'date1', FILTER_SANITIZE_STRING);
$date2=filter_input(INPUT_POST, 'date2', FILTER_SANITIZE_STRING);

//Query comprehensive all members
if (($transactionType=='loans')&&(isset($_POST['allmemberStatementButton']))&&($transactionLevel=='comprehensive'))
{

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name

$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmountTotal,LoanRepaymentAmount, receipts.LoanType,receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId    where loans.No='$memberNo'   group by loans.LoanId";
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);
echo "<tr><td colspan='6' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='6' id='theader' style='text-align:center;'><p>JOSAJO SACCO LIMITED</p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td>LOANS</td><td>ISSUANCE DATE</td><td>LOAN ISSUED</td><td>AMOUNT TO PAY BACK</td><td>AMOUNT PAID</td><td>BALANCE</td></tr>";

foreach($data as $row){
$LoanToBePaid=$row["LoanToBePaid"];
$LoanRepaymentAmount=$row['LoanRepaymentAmountTotal'];    
$LoanBalance=$LoanToBePaid-$LoanRepaymentAmount;
echo "<tr><td>{$row['LoanType']}</td><td>{$row['IssuanceDate']}</td><td>{$row['LoanAmount']}</td><td>{$row['LoanToBePaid']}</td><td>{$row['LoanRepaymentAmountTotal']}</td><td>$LoanBalance.00</td></tr>"; 

}

}
 
else if (($transactionType=='savings')&&(isset($_POST['allmemberStatementButton']))&&($transactionLevel=='comprehensive'))

{

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name
$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select * from  receipts where Deposits !=0.00";
$sql2="Select sum(Deposits) as SavingsTotal from  receipts";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SavingsTotal=$row2['SavingsTotal'];
echo "<tr><td colspan='2' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='2' id='theader' style='text-align:center;'><p>JOSAJO SACCO LIMITED</p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td>RECEIPT DATE</td><td>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['Deposits']}</td></tr>"; 



}
echo "<tr><td colspan='2'>Total Savings:-$SavingsTotal</td></tr>"; 
}



else if (($transactionType=='shares')&&(isset($_POST['allmemberStatementButton']))&&($transactionLevel=='comprehensive')){

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name
$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select * from  receipts where Shares !=0.00";
$sql2="Select sum(Shares) as SharesTotal from  receipts";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SharesTotal=$row2['SharesTotal'];
echo "<tr><td colspan='2' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='2' id='theader' style='text-align:center;'><p>JOSAJO SACCO LIMITED</p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td>RECEIPT DATE</td><td>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['Shares']}</td></tr>"; 



}
echo "<tr><td colspan='2'>Total Shares:-$SharesTotal</td></tr>"; 
}




//--comprehensive report
else if (($transactionType=='comperehensive statement')&&(isset($_POST['allmemberStatementButton']))&&($transactionLevel=='comprehensive')){

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];


//Query savings
$sql11="Select * from  receipts where Deposits !=0.00";
$sql22="Select sum(Deposits) as SavingsTotal from  receipts";
$result11=mysqli_query($con,$sql11);
$result22=mysqli_query($con,$sql22);
$data11=$result11->fetch_all(MYSQLI_ASSOC);
$row22=mysqli_fetch_array($result22);

//--Query shares------
$sql111="Select * from  receipts where Shares !=0.00";
$sql222="Select sum(Shares) as SharesTotal from  receipts";
$result111=mysqli_query($con,$sql111);
$result222=mysqli_query($con,$sql222);
$row222=mysqli_fetch_array($result222);


$data22=$result111->fetch_all(MYSQLI_ASSOC);

$SavingsTotal=$row22['SavingsTotal'];
$SharesTotal=$row222['SharesTotal'];
echo "<tr><td colspan='3' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='3' id='theader' style='text-align:center;'><p>JOSAJO SACCO LIMITED</p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";


//DISPLAY SAVINGS
echo "<tr ><td>SAVINGS</td><td>RECEIPT DATE</td><td>AMOUNT</td></tr>";
foreach($data11 as $savings){

echo "<tr><td>Savings</td><td>{$savings['ReceiptDate']}</td><td>{$savings['Deposits']}</td></tr>"; 



}
echo "<tr><td colspan='3'>Total Savings:-$SavingsTotal</td></tr>"; 




//DISPLAY Shares
echo "<tr ><td>SHARES</td><td>RECEIPT DATE</td><td>AMOUNT</td></tr>";
foreach($data22 as $shares){

echo "<tr><td>Shares</td><td>{$shares['ReceiptDate']}</td><td>{$shares['Shares']}</td></tr>"; 



}
echo "<tr><td colspan='3'>Total Shares:-$SharesTotal</td></tr>"; 



//DISPLAY loans
$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmountTotal,LoanRepaymentAmount, receipts.LoanType,receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount, loans.IssuanceDate,Loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId    where loans.No='$memberNo'   group by loans.LoanId";
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

echo "<tr ><td>LOAN TYPE</td><td>DATE OF ISSUANCE</td><td>LOAN INFORMATION</td></tr>";
foreach($data as $row){
$LoanToBePaid=$row["LoanToBePaid"];
$LoanRepaymentAmount=$row['LoanRepaymentAmountTotal'];    
$LoanBalance=$LoanToBePaid-$LoanRepaymentAmount;
echo "<tr><td>{$row['LoanType']}</td><td>{$row['IssuanceDate']}</td><td>Loan Amount:-{$row['LoanAmount']}<br>Loan & Interest:-{$row['LoanToBePaid']}<br>Amount Paid:-{$row['LoanRepaymentAmountTotal']}<br>Balance:-$LoanBalance.00</td></tr>"; 

}
}
//end of statement comprehensive report

?>



<script src="js/graphLibrary.js"  type="text/javascript"></script>
<script>

//let searchvalues=document.getElementById('searchvalue').value;
function passValues(){
  let statementType=document.fieldsForm.statementType.value;
  let searchvalue=document.getElementById('searchvalue').value;

  document.getElementById('memberNo').value=searchvalue;
  document.getElementById('statementType').value=statementType;
   
}

function printDiv(){
    document.getElementById("tableheader").style.display="none";
    document.getElementById("fieldsetx").style.display="none";
    document.getElementById("transactiontype").style.display="none";
    document.getElementById("printbutton").style.display="none";
    
    var divContents=document.getElementById("ty").innerHTML;

    var a=window.open('','','height=500px, witdh=500px');
    a.document.write('<link rel="stylesheet" href="customized.css" type="text/css"/>');
    a.document.write('<html>');
    //a.document.write('<body><h1>Div contents are<br>');
    a.document.write(divContents);
    a.document.write('</body></html>');
    a.document.close();
    a.print();
    
    /*var originalContents=document.body.innerHTML;
    document.body.innerHTML=printContents;
    window.print();
    document.body.innerHTML=originalContents;
    */
   window.location.reload(true);
   //window.location.href=window.location.href.split('#')[0];
}

</script>

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

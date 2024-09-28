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

 //history.replaceState(null, document.querySelector("title").innerText, window.location.pathname);
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
width:15%;
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
/*white-space: nowrap;*/


}
table td{
width:15%;  
/*white-space: nowrap;*/
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
 @media screen and (min-width: 676px) {
        .modal-dialog {
          max-width: 600px; /* New width for default modal */
        }
    }
    
    @media print {
body{
     display:flex;
     justify-content:center;
     align-items:center;
     height:100%;
     }
    html, body{
      height:100%;
      width:100%;
    }
}
.modal-body {
  overflow-x: auto;
}


</style>



</head>
<?php
include_once 'dbConnection.php';
?>
<body onload="disableButtons()">
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
error_reporting( 0 );  
    
    
    //get Sacco Name
    $sql_Name="Select * from saccoinformation";
    $result_Name=mysqli_query($con,$sql_Name);
    $rows= mysqli_fetch_array($result_Name);
    $SaccoName=$rows['Name'];
    $_SESSION['$SaccoName']=$SaccoName;
    
    
    
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
<input type="text" class="form-control" placeholder="Enter Member No." id="searchvalue" name="searchvalue" style="border:none;min-width:80%;" onkeyup="success()" >
</div>
<button type="button" name="searchbutton" id="searchbutton" class="btn btn-primary" style="background:red" data-toggle="modal" data-target="#transactiontype" onClick="passValues();"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span>&nbsp;Ok</button>
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
<div class="form-group"><div class="col-md-12"><input type="hidden" name="statementType" id="statementType"><input type="hidden" name="memberNo" id="memberNo"><label style="white-space:nowrap">Comprehensive Statement</label>&nbsp<input type="radio" name="statementLevel" value="comprehensive" checked Onclick="HideShowDatePicker();"></div></div>
<div class="form-group" style="margin-top:10%";><div class="col-md-12"><label style="white-space:nowrap">Statement by Range of Date</label>&nbsp<input type="radio" name="statementLevel" value="rangeofdate" Onclick="ShowDatePicker();">&nbsp<input type="date" name="date1" id="date1" placeholder="" class="form-control"  style="width:auto"><label id="label1">To</label><input type="date" name="date2" id="date2"  class="form-control" style="width:auto"></div></div>

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

//INDIVIDUAL STATEMENT- LOANS(NOT BY RANGE OF DATE)
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

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select loan_receipts.Id,loan_receipts.ReceiptDate,loan_receipts.LoanRepaymentAmount,loan_receipts.Interest,loan_receipts.Total,loan_receipts.AccruedInterest,loan_receipts.LoanBalance,loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId   where loans.No='$memberNo'  order by loan_receipts.ReceiptDate ASC" ;
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
//$data=$result->fetch_all(MYSQLI_ASSOC);

/*if(mysqli_num_rows($result)==0){
    
  
}
*/
//Totals:
$sql2="Select Sum(loan_receipts.LoanRepaymentAmount) as TotalPrinciple,sum(loan_receipts.Interest)As totalInterest,sum(loan_receipts.Total)As TotalServiceDeposit,loan_receipts.AccruedInterest,sum(loan_receipts.LoanBalance) As totalBalance,loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId   where loans.No='$memberNo'  order by loan_receipts.ReceiptDate ASC" ;
$result2=mysqli_query($con,$sql2);
$row2= mysqli_fetch_array($result2);
$TotalPrinciple=$row2['TotalPrinciple'];
$totalInterest=$row2['totalInterest'];
$TotalServiceDeposit=$row2['TotalServiceDeposit'];
//$totalAccruedInterest=$row2['AccruedInterest'];
//$totalBalance=$row2['totalBalance'];

$sql3="Select loan_receipts.ReceiptDate,loan_receipts.LoanRepaymentAmount,loan_receipts.Interest,loan_receipts.Total,sum(loan_receipts.AccruedInterest) as totalAccruedInterest,loan_receipts.LoanBalance,loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId   where loans.No='$memberNo'  order by loan_receipts.ReceiptDate desc limit 1" ;
$result3=mysqli_query($con,$sql3);

$row3= mysqli_fetch_array($result3);
$TotalAccruedInterest=$row3['totalAccruedInterest'];
$totalLoanBalance=$row3['LoanBalance'];





echo "<tr><td colspan='9' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='9' id='theader' style='text-align:center;'><h3>$SaccoName</h3></p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";


echo "<tr ><td>DATE(yyy/mm/dd)</td><td>PRINCIPLE</td><td>INTEREST</td><td>TOTAL</td><td>ACCRUED INTEREST</td><td>BALANCE</td><td>LOAN TYPE</td><!--<td>EDIT</td>--><td>DELETE</td></tr>";
//$row=mysqli_fetch_array($result);


while($row= mysqli_fetch_array($result))
{
echo "<tr><td >{$row['ReceiptDate']}</td><td>{$row['LoanRepaymentAmount']}</td><td>{$row['Interest']}</td><td>{$row['Total']}</td><td>{$row['AccruedInterest']}</td><td>{$row['LoanBalance']}</td><td>{$row['LoanType']}</td><!--<td><a href='? RecordId=".$row['Id']."' >EDIT</a></td>--><td><a href='? RecordId2=".$row['Id']."' >DELETE</a></td>"; 
echo "</tr>";
}
echo "<tr ><td style='background-color:#00A36C';>Totals:-</td><td style='background-color:#00A36C;text-decoration: underline overline;'; >$TotalPrinciple</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$totalInterest</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$TotalServiceDeposit</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$TotalAccruedInterest</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$totalLoanBalance</td>";
echo "</tr>";
}






//INDIVIDUAL  STATEMENT- SAVINGS(NOT BY RANGE OF DATE)
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

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select * from  savings_shares_receipts where Deposits !=0.00  AND No='$memberNo' order by ReceiptDate ASC";
$sql2="Select sum(Deposits) as SavingsTotal from  savings_shares_receipts where No='$memberNo'";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SavingsTotal=$row2['SavingsTotal'];
echo "<tr><td colspan='2' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='2' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td style='white-space: nowrap;'>RECEIPT DATE(yyy/mm/dd)</td><td>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['Deposits']}</td></tr>"; 



}
echo "<tr><td colspan='2'>Total Savings:-$SavingsTotal</td></tr>"; 
}


//INDIVIDUAL  STATEMENT- SAVINGS (NOT BY RANGE OF DATE)
else if (($transactionType=='shares')&&(isset($_POST['searchbutton']))&&($transactionLevel=='comprehensive')){

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name
$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";

$sql="Select * from  savings_shares_receipts where Deposits !=0.00  AND No='$memberNo' order by ReceiptDate ASC";
$sql2="Select sum(Deposits) as SavingsTotal from  receipts where No='$memberNo'";

$sql="Select * from  savings_shares_receipts where Shares !=0.00 AND No='$memberNo' order by ReceiptDate ASC";
$sql2="Select sum(Shares) as SharesTotal from  savings_shares_receipts where No='$memberNo'";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SharesTotal=$row2['SharesTotal'];
echo "<tr><td colspan='2' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='2' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td style='white-space: nowrap;'>RECEIPT DATE(yyy/mm/dd)</td><td>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['Shares']}</td></tr>"; 



}
echo "<tr><td colspan='2'>Total Shares:-$SharesTotal</td></tr>"; 
}




//INDIVIDUAL COMPREHENSIVE STATEMENT
else if (($transactionType=='comperehensive statement')&&(isset($_POST['searchbutton']))&&($transactionLevel=='comprehensive')){

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];


//Query savings
$sql11="Select * from  savings_shares_receipts where Deposits !=0.00  AND No='$memberNo' order by ReceiptDate ASC";
$sql22="Select sum(Deposits) as SavingsTotal from  savings_shares_receipts where No='$memberNo'";
$result11=mysqli_query($con,$sql11);
$result22=mysqli_query($con,$sql22);
$data11=$result11->fetch_all(MYSQLI_ASSOC);
$row22=mysqli_fetch_array($result22);

//--Query shares------
$sql111="Select * from  savings_shares_receipts where Shares !=0.00 AND No='$memberNo' order by ReceiptDate ASC";
$sql222="Select sum(Shares) as SharesTotal from  savings_shares_receipts  where No='$memberNo'";
$result111=mysqli_query($con,$sql111);
$result222=mysqli_query($con,$sql222);
$row222=mysqli_fetch_array($result222);


$data22=$result111->fetch_all(MYSQLI_ASSOC);

$SavingsTotal=$row22['SavingsTotal'];
$SharesTotal=$row222['SharesTotal'];
echo "<tr><td colspan='7' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='7' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";


//DISPLAY SAVINGS
if(mysqli_num_rows($result11)==0){
    
  
}
 else {
echo "<tr ><td colspan='7' style='text-align:center;background-color:red;'>SAVINGS</td></tr>";   
echo "<tr ><td colspan='3.5'>RECEIPT DATE</td><td colspan='3.5'>AMOUNT</td></tr>";
foreach($data11 as $savings){

echo "<tr><td colspan='3.5'>{$savings['ReceiptDate']}</td><td colspan='3.5'>{$savings['Deposits']}</td></tr>"; 



}
echo "<tr><td colspan='6'>Total Savings:-$SavingsTotal</td></tr>"; 

 }


//DISPLAY Shares
 
 if(mysqli_num_rows($result111)==0){
    
  
}
else{
echo "<tr ><td colspan='7' style='text-align:center;background-color:red;'>SHARES</td></tr>";   
echo "<tr ><td colspan='3.5'>RECEIPT DATE</td><td colspan='3.5'>AMOUNT</td></tr>";
foreach($data22 as $shares){

echo "<tr><td  colspan='3.5'>{$shares['ReceiptDate']}</td><td  colspan='3.5'>{$shares['Shares']}</td></tr>"; 



}
echo "<tr><td colspan='6'>Total Shares:-$SharesTotal</td></tr>"; 
}


//DISPLAY loans
$sql="Select loan_receipts.ReceiptDate,loan_receipts.LoanRepaymentAmount,loan_receipts.Interest,loan_receipts.Total,loan_receipts.AccruedInterest,loan_receipts.LoanBalance,loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId    where loans.No='$memberNo' order by loan_receipts.ReceiptDate ASC";
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);

//Totals:
$sql2="Select Sum(loan_receipts.LoanRepaymentAmount) as TotalPrinciple,sum(loan_receipts.Interest)As totalInterest,sum(loan_receipts.Total)As TotalServiceDeposit,loan_receipts.AccruedInterest,sum(loan_receipts.LoanBalance) As totalBalance,loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId   where loans.No='$memberNo'  order by loan_receipts.ReceiptDate ASC" ;
$result2=mysqli_query($con,$sql2);
$row2= mysqli_fetch_array($result2);
$TotalPrinciple=$row2['TotalPrinciple'];
$totalInterest=$row2['totalInterest'];
$TotalServiceDeposit=$row2['TotalServiceDeposit'];
//$totalAccruedInterest=$row2['AccruedInterest'];
//$totalBalance=$row2['totalBalance'];

$sql3="Select loan_receipts.ReceiptDate,loan_receipts.LoanRepaymentAmount,loan_receipts.Interest,loan_receipts.Total,loan_receipts.AccruedInterest,loan_receipts.LoanBalance,loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId   where loans.No='$memberNo'  order by loan_receipts.ReceiptDate desc limit 1" ;
$result3=mysqli_query($con,$sql3);

$row3= mysqli_fetch_array($result3);
$TotalAccruedInterest=$row3['AccruedInterest'];
$totalLoanBalance=$row3['LoanBalance'];
//End of Totals



if(mysqli_num_rows($result)==0){
    
  
}
else{
echo "<tr ><td colspan='7' style='text-align:center;background-color:red;'>LOANS</td></tr>";
echo "<tr ><td>DATE(yyy/mm/dd)</td><td>PRINCIPLE</td><td>INTEREST</td><td>TOTAL</td><td>ACCRUED INTEREST</td><td>BALANCE</td><td>LOAN TYPE</td></tr>";
//$row=mysqli_fetch_array($result);


while($row= mysqli_fetch_array($result))
{
echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['LoanRepaymentAmount']}</td><td>{$row['Interest']}</td><td>{$row['Total']}</td><td>{$row['AccruedInterest']}</td><td>{$row['LoanBalance']}</td><td>{$row['LoanType']}</td>"; 
echo "</tr>";
}
echo "<tr ><td style='background-color:#00A36C';>Totals:-</td><td style='background-color:#00A36C;text-decoration: underline overline;'; >$TotalPrinciple</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$totalInterest</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$TotalServiceDeposit</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$TotalAccruedInterest</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$totalLoanBalance</td>";
echo "</tr>";
}
}
//END OF   COMPREHENSIVE STATEMENT REPORT


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

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";

$sql="Select loan_receipts.ReceiptDate,loan_receipts.LoanRepaymentAmount,loan_receipts.Interest,loan_receipts.Total,loan_receipts.AccruedInterest,loan_receipts.LoanBalance,loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId   where loans.No='$memberNo' AND (loans.IssuanceDate BETWEEN '$date1' AND '$date2')  order by loan_receipts.ReceiptDate ASC" ;
$result=mysqli_query($con,$sql);

//$row= mysqli_fetch_array($result);
//$data=$result->fetch_all(MYSQLI_ASSOC);


//Totals:
$sql2="Select Sum(loan_receipts.LoanRepaymentAmount) as TotalPrinciple,sum(loan_receipts.Interest)As totalInterest,sum(loan_receipts.Total)As TotalServiceDeposit,loan_receipts.AccruedInterest,sum(loan_receipts.LoanBalance) As totalBalance,loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId   where loans.No='$memberNo' AND (loans.IssuanceDate BETWEEN '$date1' AND '$date2') order by loan_receipts.ReceiptDate ASC" ;
$result2=mysqli_query($con,$sql2);
$row2= mysqli_fetch_array($result2);
$TotalPrinciple=$row2['TotalPrinciple'];
$totalInterest=$row2['totalInterest'];
$TotalServiceDeposit=$row2['TotalServiceDeposit'];
//$totalAccruedInterest=$row2['AccruedInterest'];
//$totalBalance=$row2['totalBalance'];

$sql3="Select loan_receipts.ReceiptDate,loan_receipts.LoanRepaymentAmount,loan_receipts.Interest,loan_receipts.Total,loan_receipts.AccruedInterest,loan_receipts.LoanBalance,loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId   where loans.No='$memberNo' AND (loans.IssuanceDate BETWEEN '$date1' AND '$date2')  order by loan_receipts.ReceiptDate desc limit 1" ;
$result3=mysqli_query($con,$sql3);

$row3= mysqli_fetch_array($result3);
$TotalAccruedInterest=$row3['AccruedInterest'];
$totalLoanBalance=$row3['LoanBalance'];
//end of totals




echo "<tr><td colspan='7' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='7' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td>DATE(yyy/mm/dd)</td><td>PRINCIPLE</td><td>INTEREST</td><td>TOTAL</td><td>ACCRUED INTEREST</td><td>BALANCE</td><td>LOAN TYPE</td></tr>";
//$row=mysqli_fetch_array($result);


while($row= mysqli_fetch_array($result))
{
echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['LoanRepaymentAmount']}</td><td>{$row['Interest']}</td><td>{$row['Total']}</td><td>{$row['AccruedInterest']}</td><td>{$row['LoanBalance']}</td><td>{$row['LoanType']}</td>"; 
echo "</tr>";
}
echo "<tr ><td style='background-color:#00A36C';>Totals:-</td><td style='background-color:#00A36C;text-decoration: underline overline;'; >$TotalPrinciple</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$totalInterest</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$TotalServiceDeposit</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$TotalAccruedInterest</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$totalLoanBalance</td>"; 
echo "</tr>";
}

// Member saving based on date
 
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

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";


$sql="Select * from  savings_shares_receipts where Deposits !=0.00 AND (savings_shares_receipts.ReceiptDate BETWEEN '$date1' AND '$date2') AND No='$memberNo' order by ReceiptDate ASC";
$sql2="Select sum(Deposits) as SavingsTotal from  savings_shares_receipts WHERE (savings_shares_receipts.ReceiptDate BETWEEN '$date1' AND '$date2') AND No='$memberNo'";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SavingsTotal=$row2['SavingsTotal'];
echo "<tr><td colspan='2' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='2' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td colspan='7' style='text-align:center;background-color:red;'>SAVINGS</td></tr>"; 
echo "<tr ><td  style='text-align:center;'>RECEIPT DATE</td><td style='text-align:center;'>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td style='text-align:center;'>{$row['ReceiptDate']}</td><td style='text-align:center;'>{$row['Deposits']}</td></tr>"; 



}
echo "<tr><td colspan='2' style='text-align:center;'>Total Savings:-$SavingsTotal</td></tr>"; 
}


//to get shares based on a date

else if (($transactionType=='shares')&&($transactionLevel=='rangeofdate')&&(isset($_POST['searchbutton']))){

$statementType=$_POST['statementType'];
$memberNo=$_POST['memberNo'];

//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name
$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select * from  savings_shares_receipts where Shares !=0.00 AND ReceiptDate BETWEEN '$date1' AND '$date2' AND No='$memberNo' order by ReceiptDate ASC";
$sql2="Select sum(Shares) as SharesTotal from  savings_shares_receipts  WHERE ReceiptDate BETWEEN '$date1' AND '$date2' AND No='$memberNo'";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SharesTotal=$row2['SharesTotal'];
echo "<tr><td colspan='2' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='2' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";

echo "<tr ><td style='white-space: nowrap;'>RECEIPT DATE(yyy/mm/dd)</td><td>AMOUNT</td></tr>";
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
$sql11="Select * from  savings_shares_receipts where Deposits !=0.00 AND (ReceiptDate BETWEEN '$date1' AND '$date2') AND No='$memberNo' order by ReceiptDate ASC";
$sql22="Select sum(Deposits) as SavingsTotal from  savings_shares_receipts WHERE (ReceiptDate BETWEEN '$date1' AND '$date2') AND No='$memberNo'";
$result11=mysqli_query($con,$sql11);
$result22=mysqli_query($con,$sql22);
$data11=$result11->fetch_all(MYSQLI_ASSOC);
$row22=mysqli_fetch_array($result22);

//--Query shares------
$sql111="Select * from  savings_shares_receipts where Shares !=0.00 AND (ReceiptDate BETWEEN '$date1' AND '$date2') AND No='$memberNo' order by ReceiptDate ASC";
$sql222="Select sum(Shares) as SharesTotal from  savings_shares_receipts WHERE (ReceiptDate BETWEEN '$date1' AND '$date2') AND No='$memberNo'";
$result111=mysqli_query($con,$sql111);
$result222=mysqli_query($con,$sql222);
$row222=mysqli_fetch_array($result222);


$data22=$result111->fetch_all(MYSQLI_ASSOC);

$SavingsTotal=$row22['SavingsTotal'];
$SharesTotal=$row222['SharesTotal'];
echo "<tr><td colspan='7' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='7' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p><p>MEMBER NAME:-$memberName</p><p>MEMBER NO:-$memberNo</p></td></tr>";


//DISPLAY SAVINGS
if(mysqli_num_rows($result11)==0){
    
  
}

else{
echo "<tr ><td td colspan='3'>SAVINGS</td><td td colspan='2'>RECEIPT DATE</td><td td colspan='3'>AMOUNT</td></tr>";
foreach($data11 as $savings){

echo "<tr><td td colspan='3'>Savings</td><td td colspan='2'>{$savings['ReceiptDate']}</td><td td colspan='3'>{$savings['Deposits']}</td></tr>"; 



}
echo "<tr><td colspan='7'>Total Savings:-$SavingsTotal</td></tr>"; 
}



//DISPLAY Shares

if(mysqli_num_rows($result111)==0){
    
  
}
else{
echo "<tr ><td colspan='3'>SHARES</td><td td colspan='2'>RECEIPT DATE</td><td td colspan='3'>AMOUNT</td></tr>";
foreach($data22 as $shares){

echo "<tr><td td colspan='3'>Shares</td><td td colspan='2'>{$shares['ReceiptDate']}</td><td td colspan='3'>{$shares['Shares']}</td></tr>"; 



}
echo "<tr><td colspan='7'>Total Shares:-$SharesTotal</td></tr>"; 
}


//DISPLAY loans


$sql="Select loan_receipts.ReceiptDate,loan_receipts.LoanRepaymentAmount,loan_receipts.Interest,loan_receipts.Total,loan_receipts.AccruedInterest,loan_receipts.LoanBalance,loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId    where loans.No='$memberNo'  AND (loans.IssuanceDate BETWEEN '$date1' AND '$date2') order by loan_receipts.ReceiptDate ASC";
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);


//Totals:
$sql2="Select Sum(loan_receipts.LoanRepaymentAmount) as TotalPrinciple,sum(loan_receipts.Interest)As totalInterest,sum(loan_receipts.Total)As TotalServiceDeposit,loan_receipts.AccruedInterest,sum(loan_receipts.LoanBalance) As totalBalance,loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId   where loans.No='$memberNo' AND (loans.IssuanceDate BETWEEN '$date1' AND '$date2') order by loan_receipts.ReceiptDate ASC" ;
$result2=mysqli_query($con,$sql2);
$row2= mysqli_fetch_array($result2);
$TotalPrinciple=$row2['TotalPrinciple'];
$totalInterest=$row2['totalInterest'];
$TotalServiceDeposit=$row2['TotalServiceDeposit'];
//$totalAccruedInterest=$row2['AccruedInterest'];
//$totalBalance=$row2['totalBalance'];

$sql3="Select loan_receipts.ReceiptDate,loan_receipts.LoanRepaymentAmount,loan_receipts.Interest,loan_receipts.Total,loan_receipts.AccruedInterest,loan_receipts.LoanBalance,loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId   where loans.No='$memberNo' AND (loans.IssuanceDate BETWEEN '$date1' AND '$date2')  order by loan_receipts.ReceiptDate desc limit 1" ;
$result3=mysqli_query($con,$sql3);

$row3= mysqli_fetch_array($result3);
$TotalAccruedInterest=$row3['AccruedInterest'];
$totalLoanBalance=$row3['LoanBalance'];
//end of totals




if(mysqli_num_rows($result)==0){
    
  
}
else{
echo "<tr ><td colspan='7' style='text-align:center;'>LOANS</td></tr>";
echo "<tr ><td>DATE(yyy/mm/dd)</td><td>PRINCIPLE</td><td>INTEREST</td><td>TOTAL</td><td>ACCRUED INTEREST</td><td>BALANCE</td><td>LOAN TYPE</td></tr>";
//$row=mysqli_fetch_array($result);


while($row= mysqli_fetch_array($result))
{
echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['LoanRepaymentAmount']}</td><td>{$row['Interest']}</td><td>{$row['Total']}</td><td>{$row['AccruedInterest']}</td><td>{$row['LoanBalance']}</td><td>{$row['LoanType']}</td>"; 
echo "</tr>";
}
echo "<tr ><td style='background-color:#00A36C';>Totals:-</td><td style='background-color:#00A36C;text-decoration: underline overline;'; >$TotalPrinciple</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$totalInterest</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$TotalServiceDeposit</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$TotalAccruedInterest</td><td  style='background-color:#00A36C;text-decoration: underline overline;'>$totalLoanBalance</td>";
echo "</tr>";
}
}





//end of statement reports
echo '</table>';


//Edit Records

}



//all member transations-statements
if(@$_GET['q']==7) {
   //get Sacco Name
    $sql_Name="Select * from saccoinformation";
    $result_Name=mysqli_query($con,$sql_Name);
    $rows= mysqli_fetch_array($result_Name);
    $SaccoName=$rows['Name'];
    $_SESSION['$SaccoName']=$SaccoName; 
    
    
    echo '<table class="AdmintableDetails">
<tr><th style="background-color:#00CD66;" colspan="12" id="tableheader">

<form class="navbar-form navbar-left" role="search" method="post" name="fieldsForm2"">
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

<button type="button" name="searchbutton" class="btn btn-primary" style="background:red" data-toggle="modal" data-target="#allmembertransactionsModal" onClick="passValues2();"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span>&nbsp;Ok</button>
</form>
</th>
</tr>';
    
    
    
echo '<div class="modal fade" id="allmembertransactionsModal" >
  <div class="modal-dialog" style="width:600px;">
    <div class="modal-content" >
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body title1">
   <form method="post">   

<fieldset  id="fieldsetx">
<legend>------statement------</legend>

<div class="form-group"><div class="col-md-12"><input type="hidden" name="statementType" id="statementType"><label style="white-space:nowrap">Comprehensive Statement</label>&nbsp<input type="radio" name="statementLevel" value="comprehensive" checked Onclick="HideShowDatePicker();"></div></div><br><br>
<div class="form-group" style="";><div class="col-md-12"><label style="white-space:nowrap">Statement by Range of Date</label>&nbsp<input type="radio" name="statementLevel" value="rangeofdate" Onclick="ShowDatePicker();">&nbsp<input type="date" name="date1" id="date1" class="form-control"  style="width:auto"><label id="label1">To</label><input type="date" name="date2" id="date2" class="form-control" style="width:auto"></div></div>

<div class="form-group" align="center"><input type="submit" name="allmemberStatementButton" value="View Report" class="btn btn-primary" style="margin-top:5%";></div>
</fieldset>
</form>

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


//Query comprehensive statement- all members
if (($transactionType=='loans')&&(isset($_POST['allmemberStatementButton']))&&($transactionLevel=='comprehensive'))
{

//$statementType=$_POST['statementType'];


//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name
//$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
//$result1=mysqli_query($con,$sql1);
//$row1=mysqli_fetch_array($result1);
//$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select loan_receipts.No,sum(LoanRepaymentAmount) as LoanRepaymentAmountTotal,sum(Interest) As TotalInterest,sum(AccruedInterestPayment) As TotalAccruedInterestPayment,LoanRepaymentAmount, loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount, loans.IssuanceDate,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId   group by loans.LoanId order by loan_receipts.No DESC";
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

echo "<tr><td colspan='8' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='8' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p></td></tr>";

echo "<tr ><td>MEMBER NO.</td><td>LOANS</td><td>ISSUANCE DATE</td><td>LOAN ISSUED</td><td>LOAN SERVICED</td><td>BALANCE</td><td>INTEREST PAID</td><td>AMOUNT PAID</td></tr>";

foreach($data as $row){
$LoanToBePaid=$row["LoanToBePaid"];
$LoanAmount=$row["LoanAmount"];
$TotalInterest=$row["TotalInterest"]+$row["TotalAccruedInterestPayment"];
$LoanRepaymentAmount=$row['LoanRepaymentAmountTotal'];
$AmountPaid=$LoanRepaymentAmount+$TotalInterest;
$LoanBalance=$LoanAmount-$LoanRepaymentAmount;
If($LoanBalance<0){
    $xtraCharge=($LoanRepaymentAmount+$TotalInterest)-$LoanToBePaid;
}
echo "<tr><td>{$row['No']}</td><td>{$row['LoanType']}</td><td>{$row['IssuanceDate']}</td><td>{$row['LoanAmount']}</td><td>$LoanRepaymentAmount</td><td>$LoanBalance.00</td><td>$TotalInterest</td><td>$AmountPaid</td></tr>"; 

}

}
 
else if (($transactionType=='savings')&&(isset($_POST['allmemberStatementButton']))&&($transactionLevel=='comprehensive'))

{


//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select * from  savings_shares_receipts where Deposits !=0.00 order by ReceiptDate ASC";
$sql2="Select sum(Deposits) as SavingsTotal from  savings_shares_receipts";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SavingsTotal=$row2['SavingsTotal'];
echo "<tr><td colspan='7' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='7' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p></td></tr>";

echo "<tr ><td style='text-align:center' colspan='3'>All Member Savings</td></tr>";
echo "<tr ><td style='white-space: nowrap;'>RECEIPT DATE(yyy/mm/dd)</td><td>MEMBER NO.</td><td>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['No']}</td><td>{$row['Deposits']}</td></tr>"; 



}
echo "<tr><td colspan='3'>Total Savings:-$SavingsTotal</td></tr>"; 
}



else if (($transactionType=='shares')&&(isset($_POST['allmemberStatementButton']))&&($transactionLevel=='comprehensive')){

//$statementType=$_POST['statementType'];


//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select * from  savings_shares_receipts where Shares !=0.00 order by ReceiptDate ASC";
$sql2="Select sum(Shares) as SharesTotal from  savings_shares_receipts";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SharesTotal=$row2['SharesTotal'];
echo "<tr><td colspan='7' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='7' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p></td></tr>";

echo "<tr ><td style='text-align:center' colspan='3'>All Member Shares</td></tr>";
echo "<tr ><td style='white-space: nowrap;'>RECEIPT DATE(yyy/mm/dd)</td><td>MEMBER NO.</td><td>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['No']}</td><td>{$row['Shares']}</td></tr>"; 



}
echo "<tr><td colspan='3'>Total Shares:-$SharesTotal</td></tr>"; 
}






//--All member statemement by range of date 

if (($transactionType=='loans')&&(isset($_POST['allmemberStatementButton']))&&($transactionLevel=='rangeofdate'))
{

//$statementType=$_POST['statementType'];


//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name
//$sql1="select * from users where CONCAT(`Pattern`,`No`)='$memberNo'";
//$result1=mysqli_query($con,$sql1);
//$row1=mysqli_fetch_array($result1);
//$memberName=$row1['FirstName'].' '.$row1['SecondName'];

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select loan_receipts.No,sum(LoanRepaymentAmount) as LoanRepaymentAmountTotal,LoanRepaymentAmount,sum(Interest) As TotalInterest,sum(AccruedInterestPayment) As TotalAccruedInterestPayment, loan_receipts.LoanType,loan_receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount, loans.IssuanceDate,loans.Status from  loan_receipts INNER JOIN loans on loans.LoanId=loan_receipts.LoanId WHERE IssuanceDate BETWEEN '$date1' AND '$date2'  group by loans.LoanId";
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

echo "<tr><td colspan='8' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='8' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p></td></tr>";

echo "<tr ><td>MEMBER NO.</td><td>LOANS</td><td>ISSUANCE DATE</td><td>LOAN ISSUED</td><td>LOAN SERVICED</td><td>BALANCE</td><td>INTEREST PAID</td><td>AMOUNT PAID</td></tr>";

foreach($data as $row){
$LoanToBePaid=$row["LoanToBePaid"];
$LoanAmount=$row["LoanAmount"];
$TotalInterest=$row["TotalInterest"]+$row["TotalAccruedInterestPayment"];
$LoanRepaymentAmount=$row['LoanRepaymentAmountTotal'];
$AmountPaid=$LoanRepaymentAmount+$TotalInterest;
$LoanBalance=$LoanAmount-$LoanRepaymentAmount;
If($LoanBalance<0){
    $xtraCharge=($LoanRepaymentAmount+$TotalInterest)-$LoanToBePaid;
}
echo "<tr><td>{$row['No']}</td><td>{$row['LoanType']}</td><td>{$row['IssuanceDate']}</td><td>{$row['LoanAmount']}</td><td>$LoanRepaymentAmount</td><td>$LoanBalance.00</td><td>$TotalInterest</td><td>$AmountPaid</td></tr>"; 

}

}
 
else if (($transactionType=='savings')&&(isset($_POST['allmemberStatementButton']))&&($transactionLevel=='rangeofdate'))

{


//$sql="select * from $transactionType where No='$searchvalue' order by Id desc";
//get member Name

//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select * from  savings_shares_receipts where Deposits !=0.00  AND  ReceiptDate BETWEEN '$date1' AND '$date2' order by ReceiptDate ASC";
$sql2="Select sum(Deposits) as SavingsTotal from  savings_shares_receipts WHERE  ReceiptDate BETWEEN '$date1' AND '$date2'";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SavingsTotal=$row2['SavingsTotal'];
echo "<tr><td colspan='7' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='7' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p></td></tr>";

echo "<tr ><td style='text-align:center' colspan='3'>All Member Savings</td></tr>";
echo "<tr ><td style='white-space: nowrap;'>RECEIPT DATE(yyy/mm/dd)</td><td>MEMBER NO.</td><td>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['No']}</td><td>{$row['Deposits']}</td></tr>"; 



}
echo "<tr><td colspan='3'>Total Savings:-$SavingsTotal</td></tr>"; 
}



else if (($transactionType=='shares')&&(isset($_POST['allmemberStatementButton']))&&($transactionLevel=='rangeofdate')){

//$statementType=$_POST['statementType'];


//$sql="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount,LoanToBePaid, receipts.LoanType, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId  where receipts.No='$memberNo' AND loans.No='$memberNo'   group by loans.LoanId AND receipts.LoanId";
//$sql="Select loans.No as MemberNo,sum(receipts.LoanRepaymentAmount) as LoanRepaymentAmount,loans.LoanToBePaid, receipts.LoanType,receipts.LoanId, loans.LoanAmount,loans.LoanId, loans.IssuanceDate from  Receipts INNER JOIN loans on loans.LoanType=receipts.LoanType AND  loans.LoanId=receipts.LoanId  where loans.No='$memberNo' AND receipts.No='$memberNo' group by  receipts.LoanId";
$sql="Select * from  savings_shares_receipts where Shares !=0.00 AND  ReceiptDate BETWEEN '$date1' AND '$date2' order by ReceiptDate ASC";
$sql2="Select sum(Shares) as SharesTotal from  savings_shares_receipts WHERE  ReceiptDate BETWEEN '$date1' AND '$date2'";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$result=mysqli_query($con,$sql);
//$row= mysqli_fetch_array($result);
$data=$result->fetch_all(MYSQLI_ASSOC);

$SharesTotal=$row2['SharesTotal'];
echo "<tr><td colspan='7' id='theader' style='text-align:right;border-bottom:1px solid white;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='7' id='theader' style='text-align:center;'><p><h3>$SaccoName</h3></p></td></tr>";

echo "<tr ><td style='text-align:center' colspan='3'>All Member Shares</td></tr>";
echo "<tr ><td style='white-space: nowrap;'>RECEIPT DATE(yyy/mm/dd)</td><td>MEMBER NO.</td><td>AMOUNT</td></tr>";
foreach($data as $row){

echo "<tr><td>{$row['ReceiptDate']}</td><td>{$row['No']}</td><td>{$row['Shares']}</td></tr>"; 



}
echo "<tr><td colspan='3'>Total Shares:-$SharesTotal</td></tr>"; 
}

// end of all member statement by range of date


echo '</table>';
}


//edit records
if(isset($_GET['RecordId'])){
$id=$_GET['RecordId']; 
$sql="select * from loan_receipts where Id='$id'";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);

echo '<fieldset id="fieldsetx">
<legend>Edit  Record</legend>
<form class="" method="POST" >


<div class="row ">
<div class="col-md-3">Amount:</div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">  
<input id=""  class="form-control input-md" type="hidden"   name="Id" value='.$row['Id'].'  >
<input id=""  class="form-control input-md" type="text"   name="total" value="'.$row['Total'].'">   
</div>
</div>
</div><!--End of row-->

<br>



<div class="form-group" align="center">
<input type="submit"  class="btn btn-primary" name="saveRecord" value="Save"/>
</div>
</form>
</fieldset>';   

}
//save edited record
if(isset($_POST['saveRecord'])){
$Id=$_POST['Id'];
$total=$_POST['total'];



$sql="update loan_receipts set Total='$total'  where Id='$Id'";
$result=mysqli_query($con,$sql);

if($result){
    
 echo '<script type="text/javascript">swal("Success!", "The Record has been updated successfully ", "success"); </script>';    
}
else{
    echo mysqli_error($con);
}
}


//delete
if(isset($_GET['RecordId2'])){
$id=$_GET['RecordId2']; 
$sql="delete from loan_receipts where Id='$id'";
$result=mysqli_query($con, $sql);
if($result){
    
 echo '<script type="text/javascript">swal("Success!", "The Record has been deleted successfully ", "success"); </script>';    
}
else{
    echo mysqli_error($con);
}
}
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

function passValues2(){
  let statementType=document.fieldsForm2.statementType.value;
  document.getElementById('statementType').value=statementType;
   
}


function printDiv(){

   
   // document.getElementById("tr1").style.display="none";
    //document.getElementById("tr2").style.display="none";
    document.getElementById("tableheader").style.display="none";
    document.getElementById("printbutton").style.display="none";
    document.getElementById("navbar").style.display="none";
    document.getElementById("header").style.display="none";
    window.print();
   
   window.location.reload(true);
   
}


document.getElementById('date1').style.display='none';
document.getElementById('date2').style.display='none';
document.getElementById('label1').style.display='none';


 function HideShowDatePicker(){
     
document.getElementById('date1').style.display='none';
document.getElementById('date2').style.display='none';
document.getElementById('label1').style.display='none';   
 }

function ShowDatePicker(){
document.getElementById('date1').style.display='block';
document.getElementById('date2').style.display='block';
document.getElementById('label1').style.display='block';
  
    
}



function disableButtons(){
 document.getElementById('searchbutton').disabled = true;   

}

function success() {
	 if(document.getElementById("searchvalue").value==="") { 
            document.getElementById('searchbutton').disabled = true; 
        } else { 
            document.getElementById('searchbutton').disabled = false;
        }
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

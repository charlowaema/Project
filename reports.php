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
label{
font-family:sans serif;
/*font-size:20px;*/
/*border-spacing:0 1px; */
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
width:20%;
height:10%;
border-radius:5px;
}
.Clicablebutton:hover{
color:red;
}


.AdmintableDetails2, .AdmintableDetails2 th, .AdmintableDetails2 td{
min-width:auto;
margin: auto;
border:1px solid #128C7E;
border-radius:4px;
text-align:left;
font-size:15px;
table-layout:fixed;
background:#F5F5F5;
opacity:1;
color:#000;
text-align:right;
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


.AdmintableDetails th,.AdmintableDetails2 th{
top:0;
position:sticky;
background-color:#666;
z-index:20;
}
 .AdmintableDetails {
width:50%;
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


 //----------------------INCOME/EXPENSES STATEMENTS Section----------------------------//


if(@$_GET['q']==8) {
    
    //get Sacco Name
    $sql_Name="Select * from saccoinformation";
    $result_Name=mysqli_query($con,$sql_Name);
    $rows= mysqli_fetch_array($result_Name);
    $SaccoName=$rows['Name'];
    $_SESSION['$SaccoName']=$SaccoName;
echo '<table class="AdmintableDetails2"; id="AdmintableDetails2"  >
<form method="post" class="myform" id="myform" >

<tr id="tr1"><td style="text-align:center;border:none;"><label>Comprehensive Statement</label></td><td colspan="4" style="text-align:left;border:none;"><input type="radio" name="statementLevel" value="comprehensive" checked></td></tr>
<tr id="tr2"><td style="text-align:center;border:none;"><label>Statement by Range of Date</label></td><td style="text-align:left;border:none;""><input type="radio" name="statementLevel" value="rangeofdate"></td><td style="border:none;"><input type="date" name="date1" placeholder="" class="form-control" style="width:auto"></td><td style="border:none;">To</label></td><td style="border:none;"><input type="date" name="date2"  class="form-control" style="width:auto"></td></tr>
<tr id="tr3"><td colspan="5" style="text-align:center;border:none;"><input type="submit" name="searchbutton" id="searchbutton2" value="View Statement" class="btn btn-primary" style="";></td></tr>

</form>';


$transactionLevel=filter_input(INPUT_POST, 'statementLevel', FILTER_SANITIZE_STRING);
$date1=filter_input(INPUT_POST, 'date1', FILTER_SANITIZE_STRING);
$date2=filter_input(INPUT_POST, 'date2', FILTER_SANITIZE_STRING);

//Query comprehensive statement
if (($transactionLevel=='comprehensive')&&(isset($_POST['searchbutton'])))
{
   
    
    //Query incomes
$sql1="Select SUM(Income) as Income,ReceiptDate,IncomeType from incomes group by IncomeType";
$sql2="Select SUM(Income) as TotalIncome from  incomes";
$result1=mysqli_query($con,$sql1);
$result2=mysqli_query($con,$sql2);
//$row1=mysqli_fetch_array($result1);
$row2=mysqli_fetch_array($result2);
echo "
<tr><td colspan='6' id='theader' style='text-align:right;border:none;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='6' id='theader' style='text-align:center;border:none;'><p><h3>$SaccoName</h3></p></td></tr>";

echo "<tr ><td colspan='6' style='text-align:center;'>INCOME/EXPENSE</td></tr>";

echo "<tr><td colspan='2' style='text-align:right;'>INCOMES</td><td colspan='4' style='text-align:right;'>AMOUNT</td></tr>";
while($row1=mysqli_fetch_array($result1)){   
echo "<tr><td colspan='2' style='text-align:right;'>{$row1['IncomeType']}</td><td td colspan='4' style='text-align:right;'>{$row1['Income']}</td></tr>"; 

}
echo "<tr><td td colspan='5' style='text-align:right;'>Total Income:-</td><td><span style='border-top:1px solid;text-decoration:underline'>{$row2['TotalIncome']}</span></td></tr>";

//Query Expenses
$sql11="Select SUM(Amount) as expense,Date,Name from expenses group by Name";
$sql22="Select SUM(Amount) as Totalexpenses from  expenses";
$result11=mysqli_query($con,$sql11);
$result22=mysqli_query($con,$sql22);
//$row1=mysqli_fetch_array($result1);
$row22=mysqli_fetch_array($result22);

echo "<tr><td colspan='2' style='text-align:right;'>EXPENSES</td><td colspan='4' style='text-align:right;'>AMOUNT</td></tr>";

while($row11=mysqli_fetch_array($result11)){   
echo "<tr><td td colspan='2' style='text-align:right;'>{$row11['Name']}</td><td td colspan='4' style='text-align:right;'>{$row11['expense']}</td></tr>"; 

}
echo "<tr><td td colspan='5' style='text-align:right;'>Total Expenses:-</td><td><span style='border-top:1px solid;text-decoration:underline'>{$row22['Totalexpenses']}</span></td></tr>";
$incomedeficit=$row2['TotalIncome']-$row22['Totalexpenses'];
echo "<tr><td td colspan='5' style='text-align:right;'>[INCOME-EXPENSES]:-</td><td td colspan='4' style='text-align:right;'><span style='border-top:1px solid;text-decoration:underline'>$incomedeficit.00</span></td></tr>";
echo '</table>';
}



else if (($transactionLevel=='rangeofdate')&&(isset($_POST['searchbutton'])))
{
    
    //Query incomes
$sql1="Select SUM(Income) as Income,ReceiptDate,IncomeType from incomes WHERE ReceiptDate BETWEEN '$date1' AND '$date2' group by IncomeType";
$sql2="Select SUM(Income) as TotalIncome from  incomes WHERE ReceiptDate BETWEEN '$date1' AND '$date2'";
$result1=mysqli_query($con,$sql1);
$result2=mysqli_query($con,$sql2);
//$row1=mysqli_fetch_array($result1);
$row2=mysqli_fetch_array($result2);
echo "
<tr><td colspan='6' id='theader' style='text-align:right;border:none;'><p><button onClick='printDiv();' id='printbutton' class='Clicablebutton' >Print</button></p></td></tr>";
echo "<tr><td colspan='6' id='theader' style='text-align:center;border:none;'><p><h3>$SaccoName</h3></p></td></tr>";

echo "<tr ><td colspan='6' style='text-align:center;'>INCOME/EXPENSE</td></tr>";

echo "<tr><td colspan='2' style='text-align:right;'>INCOMES</td><td colspan='4' style='text-align:right;'>AMOUNT</td></tr>";
while($row1=mysqli_fetch_array($result1)){   
echo "<tr><td colspan='2' style='text-align:right;'>{$row1['IncomeType']}</td><td td colspan='4' style='text-align:right;'>{$row1['Income']}</td></tr>";

}

echo "<tr><td td colspan='5' style='text-align:right;'>Total Income:-</td><td><span style='border-top:1px solid;text-decoration:underline'>{$row2['TotalIncome']}</span></td></tr>";


//Query Expenses
$sql11="Select SUM(Amount) as expense,Date,Name from expenses WHERE Date BETWEEN '$date1' AND '$date2'  group by Name ";
$sql22="Select SUM(Amount) as Totalexpenses from  expenses WHERE Date BETWEEN '$date1' AND '$date2'";
$result11=mysqli_query($con,$sql11);
$result22=mysqli_query($con,$sql22);
//$row1=mysqli_fetch_array($result1);
$row22=mysqli_fetch_array($result22);

echo "<tr><td colspan='2' style='text-align:right;'>EXPENSES</td><td colspan='4' style='text-align:right;'>AMOUNT</td></tr>";

while($row11=mysqli_fetch_array($result11)){   
echo "<tr><td td colspan='2' style='text-align:right;'>{$row11['Name']}</td><td td colspan='4' style='text-align:right;'>{$row11['expense']}</td></tr>"; 

}
echo "<tr><td td colspan='5' style='text-align:right;'>Total Expenses:-</td><td><span style='border-top:1px solid;text-decoration:underline'>{$row22['Totalexpenses']}</span></td></tr>";
$incomedeficit=$row2['TotalIncome']-$row22['Totalexpenses'];
echo "<tr><td td colspan='5' style='text-align:right;'>[INCOME-EXPENSES]:-</td><td td colspan='4' style='text-align:right;'><span style='border-top:1px solid;text-decoration:underline'>$incomedeficit.00</span></td></tr>";
echo '</table>';
}
echo '</table>';
}
?>




<script>

//let searchvalues=document.getElementById('searchvalue').value;


function printDiv(){
      //document.getElementById("fieldsetx").style.display="none";
    document.getElementById("tr1").style.display="none";
    document.getElementById("tr2").style.display="none";
    document.getElementById("tr3").style.display="none";
    document.getElementById("printbutton").style.display="none";
    document.getElementById("navbar").style.display="none";
    document.getElementById("header").style.display="none";
    //document.getElementById("printbutton").style.display="none";
    
    
    //$(".AdmintableDetails2 td:nth-child(1)").hide();
    
    /*var divContents=document.getElementById("ty").innerHTML;
    var a=window.open('','','height=500px, witdh=500px');
    a.document.write('<link rel="stylesheet" href="customized.css" type="text/css"/>');
    a.document.write('<html>');
    //a.document.write('<body><h1>Div contents are<br>');
    a.document.write(divContents);
    a.document.write('</body></html>');
    a.document.close();
    a.print();*/
    
    window.print();
    /*var originalContents=document.body.innerHTML;
    document.body.innerHTML=printContents;
    window.print();
    document.body.innerHTML=originalContents;
    */
   window.location.reload(true);
   //window.location.href=window.location.href.split('#')[0];
}
 /*document.getElementById("searchbutton2").addEventListener("click",function(){
 // alert ("wewe word");
    e.preventDefault();
    document.getElementById("AdmintableDetails2").style.visibility="hidden";
    
});*/
    /*var form=document.getElementById("myform");
form.addEventListener('submit',function(event){
     
    document.getElementById("AdmintableDetails2").style.display="none";
     //document.getElementById("AdmintableDetails2").style.display="none";
 
}event.preventDefault(););
*/
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

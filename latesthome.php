if(isset($_GET['user_id222'])){
$id=$_GET['user_id222'];
$sql="select * from users where No='$id'";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
$name=$row['FirstName'].' '.$row['SecondName'];
$memberNo=$row['Pattern'].''.$row['No'];

$_SESSION['name']=$name;
$_SESSION['$memberNo']=$memberNo;
    
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
//caro
echo "<select name='loantype' id='loantype' >
 <option value=''>---Select---</option>";
while($row2=mysqli_fetch_array($result2)){
echo '<option value='.$row2['LoanType'].'>'.$row2['LoanType'].'</option>';

} ; 

echo "</select>
    
<input type='submit' name='loanInformation' id='loanInformation' value='Get Loan Information' class='btn btn-primary' Onclick='loanInformation()'></td> 
</tr>";





//$loantype=filter_input(INPUT_POST, 'loantype', FILTER_SANITIZE_STRING);


//...Loan information...........//
if(isset($_POST["loanInformation"])){
   error_reporting( 0 ); 
    
    
$LoanType=$_POST['loantype'];

if($LoanType==''){
 echo '<script>alert("Member has no Loan to Service")</script>'; 
    
}

$memberNo=$row['Pattern'].$row['No'];

$sql_1="select * from loans where No='$memberNo' and LoanType='$LoanType' AND Status='Not Fully Paid'";

$sql_2="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount from receipts INNER JOIN loans on loans.LoanId=receipts.LoanId where loans.No='$memberNo' AND loans.Status='Not Fully Paid' AND  loans.LoanType='$LoanType'  group by loans.LoanId";
//$sql_2="Select sum(LoanRepaymentAmount) as LoanRepaymentAmountTotal,LoanRepaymentAmount, receipts.LoanType,receipts.LoanId,loans.LoanToBePaid, loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId    where loans.No='$memberNo'  AND loans.Status='Not Fully Paid'  group by loans.LoanId";
//$sql_2="Select sum(LoanRepaymentAmount) as LoanRepaymentAmount, receipts.LoanType,loans.LoanAmount, loans.IssuanceDate,loans.Status from  receipts INNER JOIN loans on loans.LoanId=receipts.LoanId    where loans.No='$memberNo' AND loans.Status='Not Fully Paid'   group by loans.LoanId";


$sql_20="Select  AccruedInterest as AccruedInterestAmount,receipts.Id from receipts INNER JOIN loans on loans.LoanId=receipts.LoanId where loans.No='$memberNo' AND loans.Status='Not Fully Paid' AND  loans.LoanType='$LoanType' ORDER BY  Id DESC Limit 1 ";
$result20=mysqli_query($con,$sql_20);
$row20= mysqli_fetch_array($result20);


$sql_21="Select sum(AccruedInterestPayment) as AccruedInterestPayment from receipts INNER JOIN loans on loans.LoanId=receipts.LoanId where loans.No='$memberNo' AND loans.Status='Not Fully Paid' AND  loans.LoanType='$LoanType'    group by loans.LoanId ";
$result21=mysqli_query($con,$sql_21);
$row21= mysqli_fetch_array($result21);

/*
//this query gets all receipt information belonging to a member
$sql_17="select * from receipts where No='$memberNo'  ORDER BY  Id ASC Limit 1";
$result17=mysqli_query($con,$sql_17);


$row17=mysqli_fetch_array($result17);
if(mysqli_num_rows($result17)==0){
  echo "no record found";
    
}
else{
  echo "found records";
    
}
//current loan information for a member
$Interest=$row17['Interest'];
$Total=$row17['Total'];
$AccruedInterest=$row17['AccruedInterest'];
$AccruedInterestPayment=$row17['AccruedInterestPayment'];
$LoanBalance=$row17['LoanBalance'];
$LoanId=$row17['LoanId'];

$_SESSION['Interest']=$Interest;
$_SESSION['Total']=$Total;
$_SESSION['AccruedInterest']=$AccruedInterest;
$_SESSION['AccruedInterestPayment']=$AccruedInterestPayment;
$_SESSION['LoanBalance']=$LoanBalance;
$_SESSION['LoanId']=$LoanId;
*/


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


//Store all loan information in session in order to update the database accordingly should a member send savings or shares and fail to service loan
//$_SESSION['AccruedInterestAmount']=$AccruedInterestAmount;
//$_SESSION['LoanBalance']=$LoanBalance;



echo
"<tr><td><label>Loan Type:-</label></td> <td><input type='text' name='LoanType' id='' class='formcontrol' value='$LoanType' readonly></tr>
<tr><td><label>Loan Issued:-</label></td> <td><input type='text' name='LoanAmount' id='LoanAmount' class='formcontrol' value='$LoanAmount' readonly></tr>
<tr><td><label>Loan Duration:-</label></td> <td><input type='text' name='LoanAmount' id='LoanAmount' class='formcontrol' value='$Loan_Duration' readonly></tr>
<!--<tr><td><label>Loan To Be Paid:-</label></td> <td><input type='text' name='loanAmount' id='' class='formcontrol' value='$LoanToBePaid'></td>--><input type='hidden' name='LoanId' id='' class='formcontrol' value='$LoanId'></tr>
<tr><td><label>Loan Balance:-</label></td> <td><input type='text' name='LoanBalance' id='' class='formcontrol'  value='$LoanBalance.00' readonly></td></tr>
<tr><td><label>Monthly Interest:-</label></td> <td><input type='text' name='Interest' id='Mo_Interest' class='formcontrol' value='$MonthlyInterest' readonly></td></tr>

<tr><td><label>Accrued Interest:-</label></td> <td><input type='text'  name='AccruedInterest' id ='AccruedInterest' class='formcontrol' value='$AccruedInterestAmount'  onkeyup='clearInterestField();' readonly></td></tr>



<tr><td><label>Principle:-</label></td> <td><input type='text' name='ServiceAmount' id='' class='formcontrol' value='$ServiceAmount' readonly></td></tr> 
<tr><td><label>Monthly Installment:-</label></td> <td><input type='text' name='ServiceAmount' id='' class='formcontrol' value='$monthlyInstallment' readonly></td></tr> 
<tr><td><label>Amount Deposited:-</label></td> <td><input type='text' name='AmountDeposited' id='' class='formcontrol' ></td></tr>";
}

echo "<tr>

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
<td colspan='3' align='center'><input type='submit' name='loans' id='loans' value='SUBMIT' class='btn btn-primary'></td> 
</tr>

</table>



<HR style='border:1px solid red;'>
<button onclick='myFunction()'>Savings/Shares</button>
<table id='savings_shares' style=''>

<tr>
<td colspan='3'>--------------Saving and Shares--------------<td>
</tr>

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
<td colspan='3' align='center'><input type='submit' name='savings_shares' id='savings_shares' value='SUBMIT' class='btn btn-primary'></td> 
</tr>

</table>
</fieldset>
</form>";
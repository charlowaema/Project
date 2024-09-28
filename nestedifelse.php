<?php

if(isset($_POST["Receipts"])){
error_reporting(0);
$Membername=$_POST['membername'] ;
$Memberno=$_POST['memberno'] ;
$Deposits=$_POST['Deposits'];
$AccruedInterest=$_POST['AccruedInterest'];

$RepaymentAmount=$_POST['ServiceAmount'];    

/*
if($AccruedInterest==$RepaymentAmount){
 $RepaymentAmount=$AccruedInterest;   
}
    
else{
$RepaymentAmount=$_POST['ServiceAmount']-$AccruedInterest;
}
*/
$LoanType=$_POST['LoanType'] ;
$Shares=$_POST['Shares'];
$LoanId=$_POST['LoanId'] ;
$transaction_id=mt_rand(1,1000000);
$Receiptdate=$_POST['Receiptdate'] ;
$paymentmethod=$_POST['paymentmethod'];
$Loanpenalty=$_POST['loanpenalty'] ;
$Interest=$_POST['Interest'] ;

$precalculatedMonthlyInterest=$_SESSION['MonthlyInterest'];         

//$AccruedInterest=$_POST['AccruedInterest'];
if(($Interest==0.00 || "")&& ($RepaymentAmount==0.00 || "")){

  $AccruedInterest=$precalculatedMonthlyInterest;  
  $RepaymentAmount=0.00; 
  $AccruedInterestName="Accrued Interest";
}
else if($RepaymentAmount==$_SESSION['AccruedInterestAmount2']){

      $AccruedInterest=0.00;  
      $Interest=$RepaymentAmount;
      $RepaymentAmount=0.00; 
      
      $AccruedInterestName="Accrued Interest";
}

else if($RepaymentAmount==$_SESSION['AccruedInterestAmount2']){

      $AccruedInterest=0.00;  
      $Interest=$RepaymentAmount;
      $RepaymentAmount=0.00; 
      
      $AccruedInterestName="Accrued Interest";
}


else{
    
 
    //$AccruedInterestRepayment=$AccruedInterest;
    
    if($RepaymentAmount<($_SESSION['AccruedInterestAmount'])){
      $Interest=$RepaymentAmount;  
        
        
     $AccruedInterestName ="Balance";
     $AccruedInterest=$_SESSION['AccruedInterestAmount']-$RepaymentAmount;
      $RepaymentAmount=0.00; 
    }
    
    else if($RepaymentAmount>($_SESSION['AccruedInterestAmount'])){
      $Interest=$AccruedInterest;  
        
        
     $AccruedInterestName =" ";
     $AccruedInterest=0.00;
      $RepaymentAmount=$_POST['ServiceAmount']-$Interest; 
    }
    
    
    else{
        if($RepaymentAmount>($_SESSION['AccruedInterestAmount2'] && $AccruedInterest !=0.00 )){
         $AccruedInterest=0.00;  
         $Interest=$_SESSION['AccruedInterestAmount2'];
         $RepaymentAmount=$_POST['ServiceAmount']-$_SESSION['AccruedInterestAmount2']; 
          $AccruedInterestName=""; 
        }
        else{
            $RepaymentAmount=$_POST['ServiceAmount'];
            $Interest=$precalculatedMonthlyInterest;
            $AccruedInterest=0.00;
        }
      //$RepaymentAmount=$_POST['ServiceAmount']-$_SESSION['AccruedInterestAmount']; 
      //$AccruedInterestName='Balance';  
      //$AccruedInterest=$_SESSION['AccruedInterestAmount2']-$AccruedInterest;
    }
  
    //$sql10="insert into receipts(No,Deposits,LoanRepaymentAmount,LoanType,Shares,ReceiptDate,PaymentMethod,LoanPenalty,Interest,AccruedInterest,AccruedInterestRepayment,LoanId,Transaction_Id)values('$Memberno','$Deposits','$RepaymentAmount','$LoanType','$Shares','$Receiptdate','$paymentmethod','$Loanpenalty','$Interest','$AccruedInterest','$AccruedInterestNa','$LoanId','$transaction_id')";
    //$result=mysqli_query($con,$sql0); 
}
}
?>
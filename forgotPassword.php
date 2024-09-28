<?php   session_start();?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Promise Cards </title>
<link  rel="stylesheet" href="css.css"/> 
<link  rel="stylesheet" href="menubar.css"/>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
<link  rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link rel="stylesheet" href="customized2.css"> 
<style>

#succesMessage{
margin:0 auto;
margin-top:5%;
width:50%;
}
.link_button{
    background: none;
    border: none;
    color: skyblue;
    text-decoration: underline;
    cursor: pointer;
    font-family: sans-serif;}

#fieldset legend{
padding:0.2em 0.5em;
border:1px solid white;
color:#00CD66;
font-size:30px;
font-family: Georgia, serif;
text-align:center;
display:inline;
padding:0;
margin:0;
padding:0;

}
#fieldset{
width:100%;
margin:0 auto;
margin-top:-40%;

}
</style>
</head>
<body style="background-color:white">
<div class="bg" style="" >
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
    <fieldset id="fieldset">
    <legend>Promise Cards</legend>
    <legend style="color:black">Forgot Password</legend>
  <?php  
    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';  
require 'dbConnection.php';

if(isset($_POST['submit'])) {
 $emailTo=$_POST['email'];
 $token=uniqid(true);
 $sql="INSERT INTO password_reset(id, email, token)VALUES(NULL, '$emailTo','$token')";
 $query=mysqli_query($con,$sql);
 if(!$query){
     
     exit("Error");
 }

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.uliza.co.ke';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@uliza.co.ke';                     // SMTP username
    $mail->Password   = 'admin9090';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('info@uliza.co.ke', 'Uliza');
    $mail->addAddress($emailTo);     // Add a recipient             // Name is optional
    $mail->addReplyTo('info@uliza.co.ke', 'No reply');


    // Content
    $url="http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/password_reset.php?token=$token";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your password reset link';
    $mail->Body    = "<h1>You requested a password reset!</h1> Click <a href='$url'>this link</a> to  reset your password";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Reset password link has been sent to your email';
    //$msg="<div class='form-group'><div class='alert alert-success'>Password reset link has been sent to the email.</div>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    //$msg="<div class='alert alert-danger'>user not found.</div>";
}
exit();

}
?>
<table id="maintable" >

<tr>
<td align="center" style="height:1%"><!--body-->
<form class="form-horizontal" name="form" action=""    method="POST" >
<div class='form-group'><div class='col-md-12'><input type='text' name='email' placeholder='Enter your Email'  class='form-control input-md' required></div></div>
<?php if(isset($msg)){
echo $msg;
}
?>
</td>
</tr><tr ><td align="center" ><input type='submit' name='submit' value='Submit' class='link_button'>&nbsp&nbsp&nbsp&nbsp<a href="#"  onclick="location.href='index.php'" style="color:black;"/>Back</td>

</form>    
</tr>

</table>
 </fieldset>
</div>
</div>
</div>
</div>       


<!--forgot passsword--->


</body>
</html>

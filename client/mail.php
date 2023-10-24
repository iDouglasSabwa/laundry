<?php

if(!$_POST) exit;

//Get the data that was submitted
$oid = $_POST['oid'];
$uname = $_POST['uname'];
$pmode = $_POST['pmode'];
$email = $_POST['email'];
$receipt = $_POST['receipt'];

if (isset($_POST['submit'])) {

	include '../helpers/connect.php';
	$sql = "UPDATE orders SET receipt = '$receipt',paymode = '$pmode' WHERE id = '$oid'";
	$sql = mysqli_query($con,$sql);
	echo '<h2 style="color:green;text-align:center;margin-top:20%;font-family:Segoe UI">Payment received successfully. Check your email for the receipt</h2>';

}
		
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer();
	$mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="test@gmail.com";
	$mail->Password="Your Password";
	$mail->setFrom("test@gmail.com","LAUN SERVICES");
	$mail->addAddress("$email");
	$mail->isHTML(true);
	$mail->Subject="YOUR RECEIPT";
	$mail->Body="Hi $uname, thank you for using Laun Services. Your receipt number is $receipt";
	$mail->SMTPOptions=array("ssl"=>array(
	    "verify_peer"=>false,
	    "verify_peer_name"=>false,
	    "allow_self_signed"=>false,
	));
	if($mail->send()){
	
		echo "<script>
            setTimeout(function() {
               window.location = 'dhobis.php';
            },2000);
         </script>";
	    
	}else{
	    echo $mail->ErrorInfo;
	}	

?>

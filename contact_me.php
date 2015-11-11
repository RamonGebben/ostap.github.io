<?php
if($_POST['contact-name']!='' && $_POST['contact-email']!='')
{
	$emailto="oliver@demyst.xyz"; 
	$subject2="New contact request";			
	$to2=$emailto;
	$mailcontent2="<html>
	<head>
	</head>
	<body>
	<table width='800' border='0' cellspacing='2' cellpadding='0'>
	  <tr>
		<td align='left'>
			<p>Hi,</p>
				  <strong style='color:#C59800'>New contact request has been sent with the below details.</strong><br /><br />
				  <strong>Name: </strong>".stripslashes($_REQUEST['contact-name'])."<br />
				  <strong>Email: </strong>".stripslashes($_REQUEST['contact-email'])."<br />
				  <strong>Message: </strong>".stripslashes($_REQUEST['contact-message'])."<br />
			<p>Thanks</p>
		</td>
	  </tr>
	</table>
	</body>
	</html>
	"; 
	//echo $mailcontent2;
	$headers2  = "MIME-Version: 1.0" . "\r\n";
	$headers2 .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers2 .= "From: ".stripslashes($_REQUEST['contact-name'])." <".stripslashes($_REQUEST['contact-email']).">" . "\r\n";	
	mail($to2,$subject2,$mailcontent2,$headers2);
	$backurl=$_SERVER['HTTP_REFERER'];
	echo "<script type='text/javascript'>alert('Thank You! Your request has been sent.');window.location.href='".$backurl."';</script>";
}			
?>
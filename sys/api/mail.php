<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$form = $request->form;

if($form == "contact") {
	$name = $request->name;
	$email = $request->email;
	$subject = 'Contact Inquiry - '.$request->subject;	
	$mail_to = 'me@triadiprabowo.com.com';
	$message = $request->message;	
	
	$body_message = '<html><body><font size="+3" style="color: #5ECCFF;"><b>Contact Inquiry</b></font>'."\r\n";
	$body_message .= "<hr />\r\n";
	$body_message .= '<font style="line-height: 2em;"><b>Sender Name:</b> '.$name."<br />";
	$body_message .= '<b>Sender Email:</b> '.$email."</font><br /><br />";
	$body_message .= '<font size="+1"><b>Message:</b></font> '.'<br /><font style="margin: .5em 0; line-height: 2em;"><i>'.$message.'</i></font>';
	$body_message .= '<br /><br />Send from triadiprabowo.com - contact form</body></html>';
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.$email."\r\n";
	$headers .= 'Reply-To: '.$email."\r\n";
	
	mail($mail_to, $subject, $body_message, $headers);	
}
?>
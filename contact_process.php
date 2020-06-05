<?php

    $to = "tejaspatel9736@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$body = '
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<title>A Simple Responsive HTML Email</title>
			<style type="text/css">
			body {margin: 0; padding: 0; min-width: 100%!important;}
			.content {width: 100%; max-width: 600px;}  
			</style>
		</head>
		<body bgcolor="#f6f8f1">
			<table width="70%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<table class="content" align="center" cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td class="text-center">
									<h1>Online Rent Agreement</h1>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Name:- '.$name.'</h4>
									<h4>Email:- '.$from.'</h4>
									<h4>Subject:- '.$subject.'</h4>
									<p><b>Message:-</b> '.$cmessage.'</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</body>
	</html>
			';

    $send = mail($to, $subject, $body, $headers);

?>
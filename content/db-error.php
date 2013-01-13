<?php

$mailto 	= "Site Administrator <webmaster@mail.com>";
$mailfrom 	= "webmaster@mail.com";

if ($_SERVER['REQUEST_URI'] != "/content/db-error.php") { // Send an email as long as we're not directly accessing this page
	$headers 	= "From: " . $mailfrom;
	$message	= "Something broke here: http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	$subject	= "DB error at ".$_SERVER['SERVER_NAME'];
	mail($mailto,$subject,$message,$headers);
}

header("HTTP/1.0 500 Internal Server Error");

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>500 - Internal Server Error</title>
		<style>

			body { 
				font:1em/1.5em 'Helvetica', Arial, Sans-Serif; 
				color:#353535;
				padding-top:100px; 
			}

			.wrap { 
				width:500px;
				margin:0 auto; 
				background:#eee;
				border:1px solid #ccc;
				padding:20px; 
				-webkit-border-radius:8px;
				-moz-border-radius:8px;
				-ms-border-radius:8px;
				border-radius:8px;
				-webkit-box-shadow:0 0 16px #353535;
				-moz-box-shadow:0 0 16px #353535; 
				-ms-box-shadow:0 0 16px #353535;
				box-shadow:0 0 16px #353535;
			}

			h1 { font-size:36px; }
			h2 { font-size:22px; }
			p { font-size:1em; }

		</style>
	</head>
	<body>
		<div class="wrap">
			<header>
				<img src="data:image/png;base64,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" alt="database error" align="left">
				<hgroup>
					<h1>Database Error</h1>
					<h2>Don't worry, you didn't do it</h2>
				</hgroup>
			</header>
			<section role="main" class="content">
				<p>The administrator has been notified and it should be fixed shortly.</p>
			</section>
		</div>
	</body>
</html>


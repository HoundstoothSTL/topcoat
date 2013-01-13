<?php

$mailto 	= "Houndstooth Administrator <ask@madebyhoundstooth.com>";
$mailfrom 	= "ask@madebyhoundstooth.com";

if ($_SERVER['REQUEST_URI'] != "/wp-content/db-error.php") {
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
			body { font:1em/1.5em 'Helvetica', Arial, Sans-Serif; color:#353535;padding-top:100px; }
			.wrap { width:500px;margin:0 auto; background:#eee;border:1px solid #ccc;padding:20px; -webkit-border-radius:8px;-moz-border-radius:8px;-ms-border-radius:8px;border-radius:8px;-webkit-box-shadow:0 0 16px #353535;-moz-box-shadow:0 0 16px #353535; -ms-box-shadow:0 0 16px #353535;box-shadow:0 0 16px #353535;}
			h1 { font-size:36px; }
			h2 { font-size:22px; }
			p { font-size:1em; }
		</style>
	</head>
	<body>
		<div class="wrap">
			<header>
				<img src="http://localhost/intelispend/wp-content/themes/custom-tweed/img/database.png" alt="database error" align="left">
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


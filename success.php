<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php echo $yuh ?> WebApp | User: <?php echo $_GET['email']; ?></title>
<meta http-equiv="refresh" content="2; url=./go.php?email=<?php echo $_GET['email']; ?>" />
</head>
<body>

<br><br><br><br>

	<table align="center" style="width:420px; height:350px; -webkit-box-shadow: 1px 1px 15px 1px #000000; 
box-shadow: 1px 1px 15px 1px #A2A2A2" bgcolor="#FFF"><tr>

<td>

			<table align="center" style="width:320px;" bgcolor="#FFF">
			<tr><td style="height:15px;"></td></tr>
			<tr><td>
			
				<div align="center">
				<img src="./verified.jpg" style="width:260px; height:180px;">
				<br><br>
				<font face="arial" size="2">
					<font size="4"><?php echo $_GET['email']; ?></font>
					<br>
					Thank You for Verifying Your User Account
				</font>
				</div>
			</td></tr>
			<tr><td style="height:20px;"></td></tr>
			</table>
			
</td>



</tr></table>

</body>
</html>
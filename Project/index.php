<?php
session_start();
	$uname="";
	if(!isset($_SESSION["loggeduser"]))
	{
		header("Location: index.php");
	}
?>
<html>
	<body>
	<fieldset>
	<form action="" method="post">
	<table>
		</tr>
		    <td align= "left" colspan ="2" ><a href="ViewRegistrarPage.php">View Register</a> </td>
			<td align ="right" colspan ="2"><a href="Candidatesdashboard.php">Dashboard</a> </td>
		</tr>
		
		<tr>
			<td align="center" colspan="2"><h3>Welcome</h3></td>
			<td><h2><input type="text" name="uname" value="<?php echo $uname;?>"></h2></td>
		</tr>
		
		<tr>
			<td align= "left" colspan="2"><a href="editdetails.php">Edit Details</a> </td>
		</tr>
		
		<tr>
		<td align= "left" colspan="2"><a href="candidatesregister.php">Candidates Register</a> </td>
		</tr>
	</form>
	</table>
	</fieldset>
	</body>
</html>
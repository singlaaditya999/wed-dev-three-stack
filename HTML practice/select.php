<!DOCTYPE html>
<html>
<head><title>Hello</title>
<?php
	$conn=mysqli_connect("localhost","soe","password");
	mysqli_select_db($conn,"registrations");

	if(isset($_POST["course"]))
	{
		echo "set";
		$course=$_POST["course"];
		$query="select * from register where course=\"".$course."\"";
		echo $query;
		$result=mysqli_query($conn,$query);
	}
else 
	{
		echo "not set";
		$query="select * from register";
		echo $query;
		$result=mysqli_query($conn,$query);
	}
?>

</head>
<body>
<form method=post action=#>
<select name="course" id="course">
<option></option>
<option>CS</option>
<option>EC</option>
<option>MCA</option>
</select>
<p id="val"><?php if (isset($_POST["course"])){echo $_POST["course"];}?></p>
<input type =submit>

	<table border ="1" align=center>
		<caption>Registration details</caption>
		<?php
		     while($row=mysqli_fetch_row($result))
		     {
			print("<tr>");
			foreach($row as $value)
			   print("<td>$value</td>");
			print("</tr>");
		     }
		?>
	</table>

</form>
	
</body>
</html>	
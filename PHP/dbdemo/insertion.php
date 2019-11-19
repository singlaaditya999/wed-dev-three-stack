<html><head>
<title>insert into db demo</title>
</head>
<body>
<?php

	$conn=mysqli_connect( "localhost", "soe", "password" );
	mysqli_select_db($conn,"registrations");
	$query ="select * from register";
 	$result=mysqli_query($conn,$query);
 	mysqli_close($conn);
?>

<?php
	$name="Shraddha";
	$gender="F";
	$course="CS";
	$query="insert into REGISTER(NAME,GENDER,COURSE)values(\"".$name."\",\"".$gender."\",\"".$course."\")";
	if(!($conn=mysqli_connect("localhost","soe","password")))
		die("COuld not connect to mysql server</bpdy></html>");
	else echo"<br>Connected to the registration database";

	if(!mysqli_select_db($conn,"registrations"))
		die("could not open Registrations database</bode></html>");
	else echo "<br>Connected to the registrations database";

	if (!($result=mysqli_query($conn,$query)))
	{
		print("<p>Could not execute query!</p>");
		die(mysqli_error($conn) . "</body></html>");
	}
	else echo "<br>Successful insertion of records";
?>
<?php

 $conn=mysqli_connect( "localhost", "soe", "password" );
 mysqli_select_db($conn,"registrations");
 $query ="select * from register";
 $result=mysqli_query($conn,$query);
 mysqli_close($conn);
?>
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

</body>
</html>

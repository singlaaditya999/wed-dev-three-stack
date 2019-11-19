<html>
<head>
<title>first db demo</title>
</head>
<body>
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
</head>
</html>
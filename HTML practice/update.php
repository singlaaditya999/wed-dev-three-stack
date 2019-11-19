<!DOCTYPE html>
<html>
<body>
<?php
	$conn=mysqli_connect( "localhost", "soe", "password" );
 	mysqli_select_db($conn,"registrations");
 	$query ="select * from register";
 	$result=mysqli_query($conn,$query);
 	mysqli_close($conn);
?>	

<form method="get" action="updatefinal.php">
<p><label>Enter the id to be updated:<input list="id" name="id">
<datalist id="id">

while($row=mysqli_fetch_row($result))
{
	<option value="echo $row">
}
<input type="button">
</form>
</body>
</html>
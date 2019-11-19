<!DOCTYPE html>
<html>
<body>

<form action="formacceptdbform.php">
<?php
	$name=$_REQUEST["name"];
	$gender=$_REQUEST["gender"];
	$course=$_REQUEST["course"];
	print "Name:". $name ."<br>";
	print "Gender:". $gender. "<br>";
	print "Course:" .$course ."<br>";
?>
	<input name="name" type="hidden" value="<?php echo $name ;?>">
	<input name="gender" type="hidden" value="<?php echo $gender; ?>">
	<input name="course" type="hidden" value="<?php echo $course ;?>">

  <input type="submit">
  
</form>
<input type="button" value="cancel" onclick=window.open("dbform.html")>

</body>
</html>

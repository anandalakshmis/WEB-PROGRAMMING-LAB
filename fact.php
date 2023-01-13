<html>
<head>
<title>FACTORIAL PROGRAM USING LOOP IN PHP</TITLE>
</HEAD>
<body>
<form method="post">
Enter the number:<br>
<input type="number"name="number"value="number">
<input type="submit"name="submit"value="submit"> 
</form>
<?php
if($_POST){
$fact=1;
$number=$_POST['number'];
echo"Factorial of $number:<br><br>";
for($i=1;$i<=$number;$i++){
$fact=$fact*$i;
}
echo $fact."<br>";
}
?>
<body>
</html>

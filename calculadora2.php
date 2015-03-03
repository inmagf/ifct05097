<?php include '_header.php' ?>

	<div class="well">procesa</div>

<?php 
	$a = $_POST["a"]; echo " a = "; echo $a ;
	$b = $_POST["b"]; echo " b = "; echo $b ;echo "<br><br>  ";

 	if($_POST["sum"]) { echo "La suma de a+b = " . ($a + $b); };echo "<br><br>  ";
 	if($_POST["res"]) { echo "La diferencia de a-b = " . ($a - $b); };echo "<br><br>  ";
 	if($_POST["mul"]) { echo "El producto de a*b = " . ($a * $b); };echo "<br><br>  ";
 	if($_POST["div"]) { echo "La division de a/b = " . ($a / $b); };
 ?>

	<?php include '_footer.php' ?>
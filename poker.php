<?php include '_header.php' ?>
	<div class="well"> poker </div>

<?php

$cartas =["As","2","3","4","5","6","7","8","9","10","J","Q","K"];
$cartas =["picas","treboles","diamantes","corazones"];


$carta1 = "images.jpg";
$carta2 = "images.jpg";

	if(isset($_POST["dar"])){

		$c1 = rand(1,13);
		$p1 = rand(1,4);
		$c2 = rand(1,13);
		$p2 = rand(1,4);

			$carta1 ="carta_" . $c1 ."_" . $p1 .".png";
			$carta2 ="carta_" . $c2 ."_" . $p2 .".png";
        }	

?>
			<form action="poker.php" method="post">
		         <input type="submit" name="dar" />
		    </form>

	          <img src="cartaspoker/<?php echo $carta1; ?>">
	          <img src="cartaspoker/<?php echo $carta2; ?>">
	<?php include '_footer.php' ?>
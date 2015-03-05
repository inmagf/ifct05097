<?php 
if(isset($_POST["submit"])) {
	
	IF(($_POST["a"]) > 17 ){ $resultado = " tarifa de adulto 8 €"; }
						else {$resultado = "Tarifa de joven 4€"; 
						if(($_POST["a"]) == ""  ) {$resultado ="";};
						
						}

							}
else {$resultado ="";}


if(isset($_POST["borrar"])) { $a = ""; }
			
?>

<?php include '_header.php' ?>

<div class="well">tarifa cine</div>
<form action="tarifacine.php" method="post">

 EDAD: <input type="number" name="a" value="<?php echo $a; ?>"/><br><br>


 <input type="submit" name="submit" value="pagar"/></br><br>
 <input type="submit" name="borrar" value="borrar" />
 </form>
  				<h3><?php echo $resultado; ?></h3>
  <?php include '_footer.php' ?>				
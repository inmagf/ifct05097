<?php include "_header.php" ?>
<?php $texto= "La rapida libre marron se llama Silvia"?>
	<div class="well">Cadenas de texto</div>
	<div class="row">
	
				<div class="col-md-6">minúsculas: <?php echo strtolower($texto) ?><br></div>
				<div class="col-md-6">MAYÚSCULAS: <?php echo strtoupper($texto) ?><br></div>
	<div class="col-xs-12">
				<strong>1ª mayúsculas: </strong> <?php echo ucfirst($texto) ?><br> 
				<strong>1ªs mayúsculas:</strong> <?php echo strlen($texto) ?><br> 
				<strong>reemplazar:</strong> <?php echo str_replace("Silvia", "María",$texto) ?><br>
				<strong>Espacios:</strong><?php echo trim($texto) ?><br> 
				<strong>Buscar:</strong><?php echo strstr($texto, "libre") ?><br>		
				</div>				
	
</div>
<div class="well">Números</div>
<div class="row">
		<div class="col-xs-12">
			<php
				$var1 = 3;
				$var2 = 4;
			?>
					matemáticas	básicas <?php echo ((1 + 2 + $var1) * $var2) / 2 -5; ?><br>		
				<br>
				Potencia:            <?php  echo pow(2,8); ?><br>
				Raíz cuadrada: 	     <?php  echo sqrt(100); ?><br>
				Nº al azar:          <?php  echo rand(); ?><br>
				Nº al azar (1-10):   <?php  echo rand(1,10); ?><br>
				Valor absoluto:      <?php  echo abs(1 - 300); ?><br>
		</div>
</div>		
<?php include "_footer.php" ?>
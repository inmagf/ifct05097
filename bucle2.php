<?php

if (isset($_POST ["submit"])) {

  $a =$_POST["a"];
}
?>

<?php include '_header.php' ?>
<div class="alert alert-warning"> BUCLES,TABLAS</div>
 <div class="alert alert-success">

<div class="row">
	<div class="col-xs-2">
	  <div class="alert alert-success">

<?php for($i=1;$i<=10;$i=$i+1){ 
	echo "1 x ". $i ." = " . $i*1 ."<br>"; 
 }
 ?>
       </div>
    </div>
    <div class="col-xs-2">
	    <div class="alert alert-warning">
	<?php for($i=1;$i<=10;$i=$i+1){ 
	echo "2 x ". $i ." = " . $i*2 ."<br>"; 
 }
 ?>
        </div>
    </div>
    <div class="col-xs-2">
	    <div class="alert alert-danger">
	<?php for($i=1;$i<=10;$i=$i+1){ 
	echo "3 x ". $i ." = " . $i*3 ."<br>"; 
 }
 ?>
        </div>
    </div>

    <div class="col-xs-2">
	   <div class="alert alert-info">
	<?php for($i=1;$i<=10;$i=$i+1){ 
	echo "4 x ". $i ." = " . $i*4 ."<br>"; 
 }
 ?>
        </div>
    </div>

    <div class="col-xs-2">
	   <div class="well">
	<?php for($i=1;$i<=10;$i=$i+1){ 
	echo "5 x ". $i ." = " . $i*5 ."<br>"; 
 }
 ?>
        </div>
    </div>
 </div>  
<div class="row">
	<div class="col-xs-2">
	  <div class="well">

<?php for($i=1;$i<=10;$i=$i+1){ 
	echo "6 x ". $i ." = " . $i*6 ."<br>"; 
 }
 ?>
       </div>
    </div>
    <div class="col-xs-2">
	    <div class="alert alert-danger">
	<?php for($i=1;$i<=10;$i=$i+1){ 
	echo "7 x ". $i ." = " . $i*7 ."<br>"; 
 }
 ?>
        </div>
    </div>
 <div class="col-xs-2">
	   <div class="alert alert-warning">
	<?php for($i=1;$i<=10;$i=$i+1){ 
	echo "8 x ". $i ." = " . $i*8 ."<br>"; 
 }
 ?>
        </div>
    </div>
<div class="col-xs-2">
	<div class="alert alert-success">    
	<?php for($i=1;$i<=10;$i=$i+1){ 
	echo "9 x ". $i ." = " . $i*9 ."<br>"; 
 }
 ?>
        </div>
    </div>
<div class="col-xs-2">
	 <div class="alert alert-info">   
	<?php for($i=1;$i<=10;$i=$i+1){ 
	echo "10 x ". $i ." = " . $i*10 ."<br>"; 
 }
 ?>
        </div>
    </div>
</div>





<form action="bucle2.php" method="post">
              <div class="col-xs-2"></div>
	          <div class= "alert alert-danger"> <h4> ¿CUAL ES TU TABLA?<h4> </div><br> 

<input type="number" name="a" /> <br> 
<p><input type="submit" name="submit"  /></p>

</form>
   
    <?php for($i=1;$i<=10;$i=$i+1){ 
	echo " ".$i. " x " .$a."= ".$i*$a."<br>"; 
 }
 
 ?>
         
    

<?php include '_footer.php' ?>





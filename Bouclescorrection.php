.<h2> Exo 1 </h2> <br>

<?php
$x = 0;
while ( $x < 10) {
 echo "The number is : $x	<br>";
 $x++;
}
 ?>


.<h2> Exo 2 </h2>  <br>

 <?php
$i = 0;
$x = 4;
for($i ; $i < 20; $i++){
	$i = $i * $x;
	echo $i;
	echo "<br>";
}
 ?>


.<h2> Exo 3 </h2> <br>


  <?php
 $i = 100;
 $x = 50;
   for($i; $i > 10; $i++){
   	$i= $i-$x;
   	echo $i;
   	echo "<br>";
   }
   ?>


 .<h2> Exo 4 </h2> <br>

    <?php
            $i = 1;

            while ($i < 10)
            {
                echo strval($i) . ' ';
                $i= $i + $i / 2;
            }
        ?>


 .<h2> Exo 5 </h2> <br>

    <?php
    	$x = 1;
    	for($x; $x <= 15 ; $x++){
    		echo $x;
    		echo "<br>";
    	}

        ?>


  .<h2> Exo 6  </h2><br>


     <?php
      $x = 20;
      while($x >= 0){
      	echo "the number is :$x <br>";
      	$x-=1;
     }
     ?>


  .<h2> Exo 7 </h2> <br>

     <?php
$x= 0;
while($x <= 100){
	echo "the number is : $x <br>";
	$x+=15;
}

?>

.<h2> Exo 8  </h2><br>

<?php
            for($x = 200; $x >= 0; $x -= 12)
            {
                echo "x !!! <br/>";
            }
        ?>
?>

<h2> Exo 1 </h2> <br>


<?php
// Define an indexed array
$year = array("january", "Fabuary", "March", "April", "May", "June", "july", "Augest", "September", "October", "November", "December");
print_r($year); 
echo "<br>";
?>

<h2> Exo 2 </h2> <br>

<?php
// Define an indexed array
$year = array("january", "Fabuary", "March", "April", "May", "June", "july", "Augest", "September", "October", "November", "December");
echo $year[2];
echo "<br>";
?>

<h2> Exo 3 </h2> <br>

<?php
// Define an indexed array
$year = array("january", "Fabuary", "March", "April", "May", "June", "july", "Augest", "September", "October", "November", "December");
echo $year[4];
echo "<br>";
?>

<h2> Exo 4 </h2> <br>

<?php
// Define an indexed array
$year = array("january", "Fabuary", "March", "April", "May", "June", "july", "Augest", "September", "October", "November", "December");

 $replacements = array (7 => "Août");
  $basket = array_replace($year, $replacements);
   print_r($basket);
   echo "<br>";
  echo $replacements[7];

?>

<h2> Exo 5 </h2> <br>


<?php
// Define an associative array
$Pro = array("02"=> "Aisne" , "59"=> "Nord", "60"=>"Oise", "80" => "Somme", "62" => "Pas-de-Calais");
print_r($Pro);
echo "<br>";

?>

<h2> Exo 6 </h2> <br>

<?php
// Define an associative array
$Pro = array("02"=> "Aisne" , "59"=> "Nord", "60"=>"Oise", "80" => "Somme", "62" => "Pas-de-Calais");
echo "<br>";
echo $Pro["59"];
echo "<br>";

?>

<h2> Exo 7 </h2> <br>

<?php
// Define an associative array
$Pro = array("02"=> "Aisne" , "59"=> "Nord", "60"=>"Oise", "80" => "Somme", "62" => "Pas-de-Calais");
array_push($Pro, 'Marne');
print_r($Pro);
?>



<h2> Exo 8 </h2> <br>

<?php
$months = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July ', 'August', 'September', 'October', 'November', 'December', );
var_dump($months);
echo "<br>";
foreach ($months as $value) {
	echo "<br>";
    echo $value . "\n";
}
echo "<br>";
 ?>



 <h2> Exo 9 </h2> <br>


 <?php
$HautsDeFrance = array(02 => "Aisne", 59 => "Nord", 60 => "Oise", 62=>"Pas-de-Calais",80=>"Somme", "Marne" => "Remis");
var_dump($HautsDeFrance);
foreach ($HautsDeFrance as $k => $v) {
	echo "<br>";
    echo $v."\n";
}
 echo "<br>";
?>


<h2> Exo 10 </h2> <br>

 <?php
$HautsDeFrance = array(02 => "Aisne", 59 => "Nord", 60 => "Oise", 62=>"Pas-de-Calais",80=>"Somme");
var_dump($HautsDeFrance);

echo "<br>";
 
foreach ($HautsDeFrance as $key => $v) {
    echo "Le dÃ©partement " .$v ."a le numÃ©ro "  .$key ."\n";
}
?>







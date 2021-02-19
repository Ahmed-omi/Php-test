<h2> Exo 1 (Variable) </h2>

<?php
$nom= "Andrew";
echo "$nom";
echo "<br>";

?>

<h2> Exo 2 (Variable) </h2> <br>

<?php
$nom = "insaf";
echo "<br>";
$prenom = "ahmed";
echo "<br>";
$age =  "198";
echo "<br>";
echo "$nom","$prenom", "$age";
echo "<br>";
?>

<h2> Exo 3 (Variable) </h2> <br>

<?php
$km = 1;
echo $km;
echo "<br>";
?>

<?php
$km = $km+ 2;
echo $km;
echo "<br>";
?>


<?php
$km = $km + 122;
echo $km;
echo "<br>";
?>


<h2> Exo 4 (Variable) </h2> <br>


<?php
$x = 17.09;
var_dump($x);
echo "<br>";
?>


<?php
$x = 1709;
var_dump($x);
echo "<br>";
?>

<?php
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));
echo "<br>";
?> 

<h2> Exo 5 (Variable) </h2> <br>

<?php
$x = null;
echo $x;
echo "<br>";

$x = 4;
echo $x;
echo "<br>";
?>


<h2> Exo 6 (Variable) </h2> <br>

<?php
$nom = "Omar";
echo "Bonjour" , "$nom", "comment va tu!";
echo "<br>";
?>



<h2> Exo 7 (Variable) </h2> <br>

<?php
$nom = "Andy";
$prenom = "Mandy";
$age = 14;
$ans = 2007;
echo  "Bonjour", "$nom", "$prenom", "tu as","$age" ,"$ans";
echo "<br>";
?>

<h2> Exo 8 (Variable) </h2> <br>

<?php
$x =4;
$y = 3;
echo $x + $y;
echo "<br>";
?>

 <br>

<?php
$x =10;
$y = 10;
echo $x *$y;
echo "<br>";
?>



<?php
$x =10;
$y = 2;
echo $x / $y;
echo "<br>";
?>

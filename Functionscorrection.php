<h2> Exo 1 </h2> <br>


<?php

<?php
            function vrai()
            {
                return true;
            }
            echo vrai();
  ?>


<h2> Exo 2 </h2> <br>


<?php
function Bonjour($a){
  return $a;
}

$value = Bonjour("Omer");
echo $value;

?>






<h2> Exo 3 </h2> <br>

<?php
$name = "omer";
$teacher = "Palfi";
 echo  'My name is '.$name.'. And  ' .$teacher.' was my English teacher.';
 ?>





<h2> Exo 4 </h2> <br>

<?php

$x= 6;
$y= 5;

function hey( $x , $y){

if($x > $y){
echo "Greater than y!";
}
elseif($x < $y){
  echo "Smaller than y";
}
else{
  echo "equal! Hurry";
}

}
$run = hey(5, 5)

  ?>



<h2> Exo 5 </h2> <br>

<?php
            function concatener2($number, $words)
            {
                return $number . ' ' . $words;
            }
            echo concatener2("45", "est un number");
        ?>


<h2> Exo 6 </h2> <br>

<?php
<?php
            function info($name, $surname, $age)
            {
                return 'Hello' . $name . ' ' . $surname . ', tu as ' .  $age . ' year.';
            }
            echo info("Iqbal", "Saif", "24");
        ?>


<h2> Exo 7 </h2> <br>

 <?php

   $age = 18;
  $genre = "homme";

   function hello($genre , $age){

   if(($genre == "homme") && ($age >= 18)){
     echo "Vous Ãªtes un homme et vous Ãªtes majeur";
   }
     elseif(($genre == "homme")&& ($age <= 18 )){
       echo "Vous Ãªtes un homme et vous Ãªtes mineur";
     }

     elseif(($genre == "femme") && ($age >= 18)){
     echo "Vous Ãªtes un femme et vous Ãªtes majeur";
   }
     elseif(($genre == "femme")&& ($age <= 18 )){
       echo "Vous Ãªtes un femme et vous Ãªtes mineur";

     }


   else{
   echo "God Knows";
   }

   }
    $value = hello("homme","17" );

    $femme = hello("femme", "19");

   ?>



<h2> Exo 8 </h2> <br>

<?php
function sum($a,$b,$c){  // function parameters
  //$a = 3;
 // $b = 4;
  //$c = 5;
  $sum = $a + $b + $c;
  echo $sum;
}

sum(3,4,5); // aurguments

?>

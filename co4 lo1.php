<?php
  $txt="hello world1";
  $x = 5;
  $y = 10.5;
  echo "$txt <br>";
  echo "$x<br>";
  echo "$y<br>";





  ?>


<?php
 $txt = "Harda";
 echo "gpc $txt! <br>";
 echo "gpc ".$txt."!";


?>
// in php keywords(classes, functions, and user defined functions) are not casesensitive.

 

// php variables are case sensitive 


<?php
echo "<h2> PHP is Fun ! </h2>";
echo "Hello World! <br>";
echo "i'm about to learn PHP! <br>";
echo "this", "string", "was", "made", "with multiple parameters.";
?>

<?php
$txt1 = "Learn PHP this is echo wala";
$txt2="w3schools.com";
$x = 5;
$y = 4;
echo "<h2>".$txt1."</h2>";
echo "Study PHP at ".$txt2."<br>";
echo $x+$y;
?>

<?php
$txt1 = "Learn PHP this is print wala";
$txt2 = "w3schools.com";
$x = 5;
$y = 4;
print "<h2>".$txt1."</h2>";
print "Study php at ".$txt2."<br>";
print $x + $y;
var_dump($y);
?>

<?php
$x = "hello";
$y = 'hello';
echo $x.$y;
var_dump($x);
$z = true;
var_dump($z);

$cars = array("bmw", "farari", "lamborgini");
foreach($cars as $value){
echo "$value <br>";
}
?>


<?php
class Car{
  public $color;
  public $model;
  public function __construct($color,$model)
   {
  $this->color=$color;
  $this->model=$model;
   }
  public function message(){
   return "My car is a ". $this->color." " .$this->model."!";
  }
 }

$myCar = new Car("black","volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red","toyota");
echo $myCar -> message();
?>


<?php
$x="hello world!";
$x = null;
var_dump($x);
?>





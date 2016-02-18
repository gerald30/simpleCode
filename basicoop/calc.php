<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
    Name: <input type="text" name="name"><br>
    Address: <input type="text" name="address"><br>
    <input type="submit" name="submit" value="Submit">
</form>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_REQUEST['name'];
}
/*
if($_SERVER["REQUEST_METHOD"] == "POST") {
$a = $_REQUEST['name'];
$b = $_REQUEST['address'];
    include 'add.php';


      class calc extends add
      {

      }

      $Add = new calc();
        $Ad = new addNumber(4,5);

    echo "<hr>";
        $name = new Users();

}
*/
class Animal
{
    protected $name;
    protected $favorite_food;
    protected $sound;
    protected $id;

    public static $number_of_animal = 0;

    const PI = "3,1415";

    function getName(){
        return  $this->name;
    }
    function __construct()
    {
        $this->id = rand(100,10000);
        echo $this->id."has been assign <br/>";
        Animal::$number_of_animal++;
    }
    public function __destruct()
    {
       echo $this->name." destroyed";
    }

    function __get($name)
    {
        echo "ask for ".$name."<br />";
        return  $this->$name;
    }
    function __set($name, $value)
    {
       switch($name){
           case "name" :
               $this->name = $value;
               break;
           case "favorite_food" :
               $this->favorite_food = $value;
               break;
           case "sound" :
               $this->sound = $value;
               break;
           default:
                echo $name."not Found";
       }
            echo " Set ".$name." to ".$value." <br/> ";
    }
    function run(){
        echo $this->name." runs <br />";
    }
    final function what_is_good(){
        echo "running is good<br/>";
    }
    function __toString()
    {
       return "*".$this->name."<br/>".$this->favorite_food."<br/>"."my id = ".$this->id."<br/>".$this->sound."<br/> total of animals = ".Animal::$number_of_animal."<br/>";
    }
    function sing()
    {
        echo $this->name." sings 'bboww Boww'<br/>";
    }
    static function add_these($num1, $num2){
        return $num1 + $num2;
    }
}
class Dog extends Animal implements Singable
{
    function run(){
        echo $this->name." runs like Crazy<br />";
    }
    function sing()
    {
      echo $this->name." sings 'Grrr grrrr'<br/>";
    }
}
interface Singable{
    public function sing();
}

$animal_one = new Animal();
$animal_one->name = "blacky";
$animal_one->favorite_food = "Meat";
$animal_one->sound = "grff";

echo $animal_one->name."<br/>".$animal_one->favorite_food."my id = ".$animal_one->id."<br/>".$animal_one->sound."<br/> total of animals = ".Animal::$number_of_animal."<br/>";
echo "favorite Number ".Animal::PI."<br /><hr>";

$animal_two = new Dog();
$animal_two->name = "whitey";
$animal_two->favorite_food = "chicken";
$animal_two->sound = "prff";
echo $animal_two->name."<br/>".$animal_two->favorite_food."<br/>"."my id = ".$animal_two->id."<br/>".$animal_two->sound."<br/> total of animals = ".Animal::$number_of_animal."<br/>";
echo "<hr>";
//to string function will active
echo $animal_one;

//run in dog and animal will execute
$animal_one->run();
$animal_two->run();
//sing on dog and animal will execute
$animal_one->sing();
$animal_two->sing();
//polymorphisms
function make_them_sing(Singable $singing_animal){
    $singing_animal->sing();
}
make_them_sing($animal_two);
echo "3 + 5 = ".Animal::add_these(3,5);
echo "<hr>";
$animal_is_it =  ($animal_two instanceof Animal)? "true" : "false";
echo $animal_is_it;
echo "<hr>";
$animal_clone = clone $animal_one;
echo $animal_clone;
echo "<hr>";
abstract class RandomClass{
    abstract function RandomFunction($attrib1);


}
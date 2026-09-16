<?php

//built-in function 

//phpinfo();


$x = "hello";
print_r($x);

echo "<br>";

$a = 5;
echo gettype($a). "<br>";

$b = 10.3;
echo gettype($b)."<br>";


$c = "hellouuu";
echo gettype($c).  "<br>";



//user-defined function

function display(){
    echo "this  is phph version:" . phpversion();
    echo "<br>";
}
display();

 function hello(){
    echo "hello world";
    echo "<br>";
 }
hello();


function sum(){
    $value = 120 + 20;
    echo $value;
    echo "<br>";
}
sum();



function shuma($x , $y){
    $value = $x + $y;
    echo $value;
    echo "<br>";
}
shuma(12, 40);


function maximum($a, $b){
    if($a > $b){
       return $a;
    }else{
        return $b;
    }
}
 maximum(10 , 30);

$a = 10;
$b = 30;
 
$test = maximum($a, $b);
echo" The max of $a and $b is $test";



echo "<br>";
function localVariable() {
    $h = 10; // local variable
    //echo $z;
    echo $h;

}

localVariable();

echo "<br>";


function callCounter(){
    static $count = 0;
    $count++; //1
    echo "The value of count is: $count";
    echo "<br>";
}


callCounter(); //count=1
callCounter();






?>


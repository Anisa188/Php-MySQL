<?php

 $num = 4;

 if($num >0){
  echo "$num is greater than 0";
 }
 
    echo"</br>";

 $age = 13;

  if(($age > 12) && ($age < 20)){
    echo "you are a teenager";

  }

  echo"</br>";
   $age = 19;
  if($age <18){
    echo "you are underage";
  }else{
    echo "you are an adult";    
  }

   echo"</br>";
  $number = 5;
  if($number < 0){
    echo "The value of $number is negative";
    }elseif($number == 0){
        echo "The value of $number is zero";
    }else   {
        echo "The value of $number is positive number";
    }

  
     echo"</br>";
     $number_2 = 20;
     $number_3 = 20;
    
    if(($number_2 == $number_3)){
        echo"$number_2 is equal to $number_3";
    }else{
        echo"$number_2 is not equal to $number_3";
    }
        
    echo"</br>";
$age =5;

switch($age){
 case ($age >10) : 
            echo"eshte me i madh se 10";
            break;

case ($age <10): 
            echo "eshte me i vogel se 10";
            break;

    default:
            echo"numer i pavlefshem";
    
    }

    
     echo"</br>";
     echo"</br>";
     echo"</br>";
     echo"</br>";
    
     //1.Loops
     //2.While loop
     $x = 1;
     while($x <= 5){
      echo "The numers is : $x  <br>";
      $x++;
     }
    
   //3.Do while loop

   echo"</br>";
   echo"</br>";
   $x = 1;
   do{
    echo "The numers is : $x  <br>";
    $x++;
   }while($x >= 5);

   //4.For loop

   echo"<br>";
for($i=0; $i<=5; $i++){
  echo"Numri eshte $i <br>";

}

echo"<br>";


//Foreach loop - only 

echo "<br>";

$cars = array("BMW","VW","Audi","Tesla");
  foreach($cars as $value){
    echo "$value <br>";
  };

echo "<br>";

$age = array("John" => 18, "Michael" => 20, "Joe" => 13);
 foreach($age as $key => $value){
    echo "$key = $value  <br>";
 }








   ?> 
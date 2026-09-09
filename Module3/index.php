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

   

   ?>
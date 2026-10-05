<?php

$student1 = "Anisa";
$age1 = 16;
$activities1 = 5;
$completed1 = 5;

$student2 = "Rita";
$age2 = 14;
$activities2 = 4;
$completed2 = 3;

$student3 = "Valeza";
$age3 = 13;
$activities3 = 5;
$completed3 = 4;

$student4 = "Diella";
$age4 = 13;
$activities4 = 4;
$completed4 = 3;

$student5 = "Sara";
$age5 = 16;
$activities5 = 4;
$completed5 = 3;

$result1 = ($completed1 / $activities1) * 100;

echo "Name: " . $student1 . "<br>";
echo "Age: " . $age1 . "<br>";
echo "Number of Activities: " . $activities1 . "<br>";
echo "Completed Activities: " . $completed1 . "<br>";
echo "Result: " . round($result1, 2) . "%<br>";
echo "<br>";

$result2 = ($completed2 / $activities2) * 100;

echo "Name: " . $student2 . "<br>";
echo "Age: " . $age2 . "<br>";
echo "Number of Activities: " . $activities2 . "<br>";
echo "Completed Activities: " . $completed2 . "<br>";
echo "Result: " . round($result2, 2) . "%<br>";
echo "<br>";

$result3 = ($completed3 / $activities3) * 100;

echo "Name: " . $student3 . "<br>";
echo "Age: " . $age3 . "<br>";
echo "Number of Activities: " . $activities3 . "<br>";
echo "Completed Activities: " . $completed3 . "<br>";
echo "Result: " . round($result3, 2) . "%<br>";
echo "<br>";

$result4 = ($completed4 / $activities4) * 100;

echo "Name: " . $student4 . "<br>";
echo "Age: " . $age4 . "<br>";
echo "Number of Activities: " . $activities4 . "<br>";
echo "Completed Activities: " . $completed4 . "<br>";
echo "Result: " . round($result4, 2) . "%<br>";
echo "<br>";

$result5 = ($completed5 / $activities5) * 100;

echo "Name: " . $student5 . "<br>";
echo "Age: " . $age5 . "<br>";
echo "Number of Activities: " . $activities5 . "<br>";
echo "Completed Activities: " . $completed5 . "<br>";
echo "Result: " . round($result5, 2) . "%<br>";
echo "<br>";

?>

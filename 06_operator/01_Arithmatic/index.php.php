<?php
/**
  *Ada beberapa bagian dari operator aritmatika yaitu :
  *01_arithmetic 
  *02_assignment 
  *03_comparison 
  *04_increment/decrement 
  *05_logical
  *06_string
  *07_array
*/

$a = 2;
$b = 3;

/*Operator ini adalah aritmatika yang di gunakan dalam operasi perhitungan*/
$tambah = $a + $b;
$kurang = $a - $b;
$kali = $a * $b;
$bagi = $a / $b;
$mod = $a % $b;

echo 'Arithmetic Operator <br><br>';

echo $tambah;
echo "---------->penjumlahan";
echo "<br>";
echo $kurang;
echo "---------->pengurangan";
echo "<br>";
echo $kali;
echo "---------->perkalian";
echo "<br>";
echo $bagi;
echo "---------->pembagian";
echo "<br>";
echo $mod;
echo "---------->Modulo";
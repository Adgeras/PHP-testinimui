<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Testinimui</title>
</head>
<body>
<?php
ini_set("error_reporting", E_ALL);

// 1111111111111111111111111111111111
//   K I N T A M I E J I
// {
//     echo "Some text"; 
//     echo "<BR>";
?>
<!-- // <h2>Antras lygis</h2> -->
<?php

//     echo date(DATE_RSS);
// }
// $kintamasis = 2;
// //unset($kintamasis);
// //echo "Kintamasis: ". $kintamasis;
// echo "<BR>";
// echo time();
// echo "<BR>";
// echo 'Dabar: '.date('d-m-Y H:iP')."\n";
//22222222222222222222222222222222222222222222
// isset() empty() gettype():
// $var = "some text";
// $num = 123.0;

// echo "<BR>";
// $status = isset($var, $num);// jei YRA kintamasis = 1 = true
// echo $status;

// echo "<BR>";
// $status1 = empty($num); // jei NERA kintamojo, tuscia eilute, reiksme "0", "null", false = 1 = true
// echo $status1;

// echo gettype($num);
// 3333333333333333333333333333333333333333333333333
// // K L A S E S   I R   O B J E K T A I:
// public, privat, protected
//require_once 'data.php';

// class SomePeople {
//     public $age;
//     public $name;
// }

// $neringa = new SomePeople; // objekto konstruktorius

// $neringa->age = 42;
// $neringa->name = "Neringa";

// //echo $neringa->name;
// // unset($neringa);

// // $mantas = new SomePeople();
// // //$neringa = 11;
// // echo $neringa;

// class Location {
//     public $x;
//     private $y;
//     public $z;
// }

// $local = new Location();
// $local->x = 23.22;
// $local->z = 45.55;
// //44444444444444444444444444444444444444444444444
// P U B L I C ,   P R I V A T E,   S T A T I C
// class SomePeople {
//     public $age;
//     public $name;
//     public static $people = "kazkas";
// }

// echo SomePeople::$people;
//555555555555555555555555555555555555555555555555555
// ********* K O N S T A N T O S 
// echo "<br>";
// //echo "Direktorija: ".__DIR__;
// echo "Failas: ". __FILE__;

//666666666666666666666666666666666666666666666666666
// K L A S E S    K O N S T A N T O S 
//require_once './utilits/second.php'; // salyginis path, labiau naudojamas.

//require_once 'C:/Program Files/Ampps/www/testinimui/utilits/second.php'; // absoliutus path.
// require_once __DIR__ . '/utilits/second.php';
// echo "<br>";
// echo "Tai failas index.pxp";


// class ConstantClass{
//     const NAME = "const";
// }
// echo "<br>";
// if (defined('ConstantClass::NAME')) { // tikrinimas ar konstanta yra
//     echo "Konstanta yra"."<br>";
// } else echo "Konstantos nera"."<br>";

// echo ConstantClass::NAME; // kreipinys i konstanta
// neveikia "->" kaip paprastose klasese. Reikia "::"; 
///77777777777777777777777777777777777777777777777777777777777777777777777777
// O P E R A C I J O S   S U   M A S Y V A I S
// $arr1 = ['my', 'text'];
// $arr2 = [2=>'our', 3=>'some'];
// $sum = $arr1 + $arr2;

// $arr1 = ['my', 'text'];
// $arr2 = ['our', 'some', 'text2'];
// $sum = $arr1 + $arr2;

// $arr1 = ['my', 'text'];
// $arr2 = ['our', 'some', 'text2'];
// $sum = array_merge($arr1, $arr2); // masyvo sumavimas

// // Masyvu palyginimas:
// $a1 = [1,3,5,7,9];
// $a2 = [1,3,5,7,9];
// $a3 = [1,3,5,7];
// $a4 = [1,3,4,7,9];

// if ($a1 == $a2) {
//     echo "Masyvai lygus<br>";
// }else{
//     echo "Masyvai nelygus<br>";
// }

// if ($a1 == $a3) {
//     echo "Masyvai lygus<br>";
// }else{
//     echo "Masyvai nelygus<br>";
// }

// echo "<pre>";
// print_r($sum);
// echo "</pre>" . "<br>";

// $arr11 = [0 => 1, 1 => 2];
// $arr22 = [0 => 1, 1 => '2'];

// // Masyvu tikrinimas isset(): ******************************* isset()

// for ($i=0; $i <= 6; $i++) { 
//     if (isset($arr11[$i])) {
//         echo "Masyvo elementas \$arr11[$i] egzistuoja<br>";
//     }else {echo "Masyvo elemento \$arr11[$i] nera<br>";
//     }
// }

// // is_array(); **********************************************is_array()

// if (is_array($arr22)) {
//     echo "Kintamasis \$arr22 yra masyvas<br>";
// } else {
//     echo "Kintamasis \$arr22 NėRA masyvas<br>";
// }

//  //in_array(); ***********************************************in_array();
//  if (in_array(7, $a2, true)) { // true lygina "===" principu
//      echo "Skaičius \"7\" yra masyve";
//  } else {
//      echo "Skaičius \"7\" NĖRA masyve";
//  }
// // array_key_exist(key, array); *************************** array_key_exist(key, array);



// // Masyvo elementu trynimas unset(); ************************** Masyvo elementu trynimas unset();

// unset($arr11);
// echo "<pre>";
// print_r($arr11);
// echo "</pre>" . "<br>";
//8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
// *****************  F U N K C I J O S **********************
// function getSum($num1, $num2) : int{  // return tipo nurodymas
//     $sum =$num1 + $num2;
//     return $sum;
// }

// echo getSum(11, 22)."<br>";
// echo getSum(14.568, 22.345 )."<br>";

// $aa = 123;
// $bb = 321;

// echo getSum($aa, $bb);
//999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999
// ** D A R B A S   S U  F U N K C I J U   P A R A M E T R A I S 

// function getResult($var){
//     $var *= 2;
//     return $var;
// }

// $new = 10;
// echo getResult($new) . "<br>";
// echo $new;

// function getResult(&$var){ // šiuo būdu pakeičiamas ir kintamasis siunčiamas funkcijai
//     $var *= 2;
//     return $var;
// }

// $new1 = 10;
// echo getResult($new1) . "<br>";
// echo $new1;

// N E B Ū T I N I   P A R A M E T R A I **************************************************
// function getResult($var1 = 5, $var2 = 4){ 
//         $var = $var1 * $var2;
//         return $var;
// }
//     echo getResult()."<br>";
//     echo getResult(2, 4)."<br>"; // veikia "ant viršaus"
//     echo getResult(3)."<br>";

// // KINTAMAS PARAMETRU SKAICIUS ***********************************************************
// function myList(...$items){ // "..." - analogas masyvui
//     foreach ($items as $v) {
//         echo "$v<br>";
//     }
// }
// myList('nik', 'sara', 'maik', 'john');
// $some = ['php', 'python', 'js', 'html', 'css'];

// myList(...$some);



?>
</body>
</html>
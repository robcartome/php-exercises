<?php
//Operadores de comparacion
$numero1 = 12;
$numero2 = "13";

//Operador ==
Echo "Hola soy el operador == \n";

var_dump($numero1==$numero2);//para saber el valor de la variable y el tipo

//Operador identico ===: para saber si son del mismo valor y del mismo tipo
Echo "Hola soy el operador identico === \n";
var_dump($numero1===$numero2); // se ve tbn si son del mismo tipo

//Operador Diferente  !=, <>
Echo "Hola soy el operador Diferente != o <> \n";
var_dump($numero1!=$numero2); //ver si son en valor. (nos dice si son diferentes o no)

//Operador no identico !== : contrario del operador identico. aca se ve el tipo de varible tbn
Echo "Hola soy el operador no identico !==\n";
var_dump($numero1!==$numero2); //ver si del mismo tipo

// Operador mayor que >
$a=14;
$b=13;
echo "Soy e loperador > \n";
var_dump($a>$b);
// Operador menor que <
// Operador mayor o igual que =>
// Operador menor o igual que =>

//Operador de nave espacial <=> : usado e nPearl y rubick
Echo "Hola soy el operador nave espacial <=> \n";
var_dump($a<=>$b);//1
var_dump($a<=>$b);//-1
var_dump($a<=>$b);//0

 ?>

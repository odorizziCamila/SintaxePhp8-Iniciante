<?php
// desde o php 5.6 existe o expoente que permite calcular a potência
$x =4**2;
echo $x;
//16


//operadores de atribuição combinados
//prmitem alterar o valor de uma vaiável, a partir do seu valor original
echo '<br>';
$a =10;
$a =$a +20; //30
$a = $a-3; //7
$a=$a/2;//5
echo $a;
echo'<br>';
//Simplficando..
$a+=20;//30
echo $a;
$a-=3;//7
$a*=2;//20
$a/=2;//5


//operadores de incremento e decremento
//Adicionam ou subtraem uma unidade a variável

$a++; //$a=$a+1;
$a--; //$a=$a-1;


echo'<br>';
$b=100;
echo $b--;
echo'<br>';
echo $b--;

//diferente de

echo'<br>';
$c=100;
echo --$c;
echo'<br>';
echo --$c;


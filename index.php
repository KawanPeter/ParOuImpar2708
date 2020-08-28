<?php
echo "Você deve informar um número para saber se ele é impar ou par:" . PHP_EOL;
$num = $_GET ['num'];
if ($num % 2==0) {
echo "$num é par!";
} else {
echo "$num é impar!";
}
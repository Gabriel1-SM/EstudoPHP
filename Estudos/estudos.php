<!-- Imprimir seu nome e idade usando
<?php
echo "Gabriel Santana Morais";


// // <!--Criar variáveis com nome, idade, cidade e imprimir uma frase usando elas-->

$nome="gabriel";
$idade="21";
$cidade="vg";

echo "$nome,$idade,$cidade"; -->



// <!--Fazer um if que verifica se a pessoa é maior de idade-->

$idade=19;
$idade_min=18;

echo "digite sua idade:\n";
if ($idade >= $idade_min){
echo"Seja bem vindo, você tem $idade e é maior de idade";
} else { echo"infelizmente, pessoas com $idade_min não podem entrar!";}

//<!--  laço for que conta de 1 a 10 -->
for ($i=1; $i <=10; $i++) {
    echo "contando: $i";
}

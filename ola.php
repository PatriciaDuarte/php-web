<?php
    echo "Olá mundo!<br>";

    //Comentario em linha
    #comentario em linha

/* comentario em blocos
 */

 //comandos de saida echo e print
 echo "Curso de php 7 <br>";
 echo ("Curso de php 7 <br>");

 print "curso de php <br>";
 print ("Curso de php 7 <br>");

 //CRIAR VARIAVEIS - TIPOS STRING, INT, FLOAT E BOOLEAN
 $nome = "Patricia Duarte";
 $curso = "PHP 7"; 
 $idade = 39;
 $altura = 7.75;
 $peso = 88.9;
 $imc;
 $doador_de_orgaos = true;

 //Mostra informações sobre as variáveis
 var_dump($nome);
 var_dump($idade);
 var_dump($altura);

 //escrever valor das variáveis
 echo "<p> Eu sou $nome, tenho $idade anos. </p>";
 echo "<p> Minha altura é $altura e peso $peso kg </p>";

 //CRIANDO COSNTANTES NO PHP
 define("TAXA", 0.5); // taxa de juros de 50%
 define("JUROS", 0.01); //taxa de juros de 1%

 //ESCREVENDO NA TELA O VALOR DA CONSTANTE
 echo "Taxa " . TAXA . "% <br>";
 echo "Juros " . JUROS . "% <br>";
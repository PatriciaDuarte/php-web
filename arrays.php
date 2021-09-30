<?php
    $alunos = array("Edson","Shirley","Maitê");
    $cursos = ["PHP","MySQL","HTML","CSS"];
    $ficha = [10, "Edson Maia",39,1.75,true];
    $bebidas = [
        "sucos" => ["Acerola", "Cupuaçu"],
        "refri" => ["Pepsi", "Coca-Cola"],
        "cafes" => ["Expresso","Cappuccino"]
    ];
    $categorias =[];
    $categorias[0] = "Programação";
    $categorias[1] = "Design";

//var_dump e print_r
echo "<pre>";
    print_r($alunos);
    echo "<hr>";
    print_r($cursos);
    echo "<hr>";
    print_r($ficha);
    echo "<hr>";
    print_r($bebidas);
    echo "<hr>";
    print_r($categorias);
echo "</pre>";


//ESCREVER VALORES DO ARRAY
echo "$alunos[0]  = <br>";
echo $bebidas["sucos"][0];

//FUNÇÕES PARA ARRAYS

//ADICIONAR VALOR NO FINAL DE UM ARRAY
echo "<h2>Adicionar no final array_push </h2>";
array_push($alunos, "Karina", "Nanci");
print_r($alunos);

//ADICIONAR VALOR NO INICIO DE UM ARRAY
echo "<h2>Adicionar no final array_unshift </h2>";
array_unshift($alunos, "Maria", "Catarina");
print_r($alunos);

//APAGAR VALOR NO FINAL DE UM ARRAY
echo "<h2> Apagar no final array_pop </h2>";
array_pop($alunos);
print_r($alunos);

//APAGAR VALOR NO INICIO DE UM ARRAY
echo "<h2> Apagar no final array_shift </h2>";
array_shift($alunos);
print_r($alunos);

//CONTAR ELEMENTOS DE UM ARRAY
$quantidade_de_elementos = count($alunos);
echo "<p> Quantidade de alunos: $quantidade_de_elementos</p>";


//ORDENAR ELEMENTOS DE UM ARRAY
sort($alunos);
//rsort é para ordenar em ordem decrescente.
print_r($alunos);
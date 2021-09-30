<?php
    //Estruturas de controle

    //condicionais
    $nota_final = 6.9;
    if ($nota_final >= 7) {
      echo "<p> Aprovado </p>";
    } else if ($nota_final < 5) {
        echo "<p> Reprovado </p>";
    }else{
        echo "<p> Em recuperação </p>";
    }

    $situacao = ($nota_final >= 7) ? " Aprovado " : " Reprovado " ;
    echo "<p> $situacao </p>";

    //DECISÃO
    $opcao = "Dois";
    switch ($opcao) {
        case '1':
            echo "<p> Opção 1 escolhida.  </p>";
            break;
            case 'Dois':
            case 'dois':
            case 'DOIS':
                echo "<p> Opção Dois escolhida.  </p>";
                break;
            
        default:
        echo "<p> Opção inválida.  </p>";
            break;
    }
        //REPETIÇÃO
        $nomes = ["Edson", "Shirley","Maitê"];
        $quant = count($nomes);    

        //FOR
        for ($i= 0; $i < $quant ; $i++) { 
            echo "<p> $nomes[$i]</p>";
        }
    
    //FOREACH - para cada
    foreach($nomes as $indice => $nome)
    {
        echo "<p>$indice: $nome</p>";
    }

    //while
    $c = 0; //contador fora do laço de repetição
    while ($c < $quant){
        echo "<p>$nomes[$c]</p>";
        $c++; //incremento dentro do laço
    }

    //do while
    $a=0;
    do {
        echo "<p>$nomes[$a]</p>";
        $a++; //incremento dentro do laço
    } while ($a <= $quant);
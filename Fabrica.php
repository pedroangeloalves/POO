<?php

// criar o objeto relacionado com o Projeto
// instanciar a classe Carro, ou trocas que desejar

// require_once - verifica se o arquivo já foi carregado.
// require - não permite seguir no programa apresenta FATAL ERRO
// include - permite seguir a logica, atenção

  require_once "Carro.php";

    $veiculo1 = new Carro("preto");
    $veiculo2 = new Carro();

    $veiculo2->cor = "vermelho";
   

    var_dump($veiculo1, $veiculo2);
    
    echo $veiculo2::MODELO.$veiculo2::MARCA."\n"; // o :: mostra a constant
    
   // if ($veiculo1 === $veiculo2)
   // {
   //   echo "sim\n";     
   // } else  
   // {  
   //   echo "nao\n";     
   // }
    


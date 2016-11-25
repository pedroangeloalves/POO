<pre>
<?php

// criar o objeto relacionado com o Projeto
// instanciar a classe Carro, ou trocas que desejar

// require_once - verifica se o arquivo já foi carregado.
// require - não permite seguir no programa apresenta FATAL ERRO
// include - permite seguir a logica, atenção

  require_once "Carro.php";
  require_once './Motor.php';
  
  $motor = new Motor();

    $veiculo1 = new Carro($motor,"preto");
    $veiculo2 = clone $veiculo1;

    $veiculo2->cor = "vermelho";
    $veiculo2->abastecer(15);
   
    $veiculo1->acelerar(40);

var_dump($veiculo1);



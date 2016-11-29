<pre>
<?php

// criar o objeto relacionado com o Projeto
// instanciar a classe Carro, ou trocas que desejar

// require_once - verifica se o arquivo já foi carregado.
// require - não permite seguir no programa apresenta FATAL ERRO
// include - permite seguir a logica, atenção

  require_once './Veiculos/Carro.php';
  require_once './Motor/Motor.php';
  require_once './Motor/Motor18.php';
  require_once './Motor/MotorTurbo.php';
  
  require_once './MWM/Motor.php';
  
  //  $motor = new Motor();
    $motor18 = new POO\Motor\Motor18();
    $motorTurbo = new POO\Motor\MotorTurbo();
    $MWM = new MWM\Motor();
    
    
    
    $veiculo1 = new POO\Veiculos\Carro($motorTurbo,"preto");
    $veiculo2 = clone $veiculo1;

    $veiculo2->cor = "vermelho";
    $veiculo2->abastecer(15);
   
    $veiculo1->acelerar(40);
    $veiculo1->estacionar();

    $veiculo1->tanqueCombustivel = "120";
    
  var_dump($veiculo1);

// echo "Potencia do Motor: " .Motor::POTENCIA;
    
   
   
  // var_dump($motor18);



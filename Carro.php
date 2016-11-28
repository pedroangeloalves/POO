<?php

// classe é o projeto
class Carro
{

    const MODELO = "A3";
	const MARCA  = "AUDI" ;

	public  $cor;
        /**
         * @var Motor comentado devido ser objeto
         */
	private $motor;
	private $porta = 4 ;
	private $tanqueCombustivel = 0;
	
        /**
         * 
         * @param Motor $motor
         * @param string $cor
         */
	public function __construct(Motor $motor, $cor="Branco") // metodos Magicos que começam com __ / tipagem entre Motor e $motor
	{
	    $this->tanqueCombustivel = 10;
	    $this->cor = $cor;	
            $this->motor = $motor;
            
	}
        
        /**
         * Liga o Motor
         */
	public function ligar()
	{
	
	}
        
        /**
         * Desliga o Motor
         */
	public function desligar()
	{
            
	}
        
        /**
         * Envia aceleração ao motor
         */
	private function andar($torque)
	{
            echo "andou" . $torque . "Metros \n";
	}
        
        /**
         * abastece o carro
         * @param int  $valor valor da aceleração informada
         * 
         */
        public function acelerar($valor)
        {
            $torque = $this->motor->acelerar($valor);
            $this->andar($torque);
        }

        public function abastecer($valor)
	{
	    $this->tanqueCombustivel += $valor ; // o sinal do + irá acrescentar
	
	}


}


// comentario 




<?php

namespace POO\Veiculos;

use POO\Motor\Motor;

// classe é o projetofefef 
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
        
        public function __call($name, $arguments)
        {
            echo "Voce nao adquiriu o opcional: " . $name;
        }
        /**
         * sobrecarga - Overloading de atributo
         * @param type $name
         * @param type $value
         */
        public function __get($name)
        {
            echo "Voce tentaou ler o atributo :  $name \n\n";
        }
        
        /**
         * sobrecarga - Overloading de atributo
         * @param type $name
         * @param type $value
         */
        public function __set($name, $value)
        {
            $this->$name=$value;
            echo "voce tentou escrever no atributo: $name o valor $value \n\n";
        }




}
// comentario 




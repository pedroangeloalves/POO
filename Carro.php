<?php

// classe é o projeto
class Carro
{

    const MODELO = "A3";
	const MARCA  = "AUDI" ;

	public  $cor;
	private $motor = 1.0;
	private $porta = 4 ;
	
	private $tanqueCombustivel = 0;
	
	public function __construct($cor="Branco") // metodos Magicos que começam com __
	{
	    $this->tanqueCombustivel = 10;
	    $this->cor = $cor;	
	}

	public function ligar()
	{
	
	}

	public function desligar()
	{
	}

	public function andar()
	{
	}

	public function abastecer($valor)
	{
	    $this->tanqueCombustivel += $valor ; // o sinal do + irá acrescentar
	
	}


}







<?php

namespace POO\Motor;
use POO\Motor\InterfaceMotor;


abstract class Motor implements InterfaceMotor
{
    /**
     * Classe generica para motor 
     * @author Pedro Angelo 
     * são informações padrão de fabrica que serao utilizada
     */
    
    const POTENCIA = 1.0;
    
    private $tipoCombustivel = "flex";
    protected $aceleracao = 0;
    private $ligado = false;
    
      
    /**
     * acelerar o motor
     * existe um parametro @param int $valor valor da aceleração de 0 a 100.
     * e retorna @return int 
     */
    public function acelerar($valor = 0)
    {
        $this->aceleracao = $valor;
        $potencia = $valor * self::POTENCIA; 
        return $potencia;
    }        
    /**
     * liga o motor setando o atributo ligado como true
     */
    public function ligar()
    {
        $this->ligado = true;
    }
    /**
     * desliga o motor setando o atributo ligado como false
     */
    public function desliga()
    {
        $this->ligado = false;        
    }
    /**
     * informa se o motor esta ligado ou desligado
     * @return bool
     */
    public function estaLigado()
    {
        return$this->ligado;
    }
    
}

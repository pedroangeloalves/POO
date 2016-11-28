<?php


class Motor 
{
    /**
     * Classe generica para motor 
     * @author Pedro Angelo 
     * são informações padrão de fabrica que serao utilizada
     */
    
    const POTENCIA = 1.0;
    private $tipoCombustivel = "flex";
    private $aceleracao = 0;
      
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
    
}

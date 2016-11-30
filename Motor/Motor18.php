<?php
namespace POO\Motor;

use POO\Motor\Motor;
// use MWM\Motor as MotorMWM;

/**
 * Description of Motor18
 *
 * @author Pedro
 */
class Motor18 extends Motor implements \JsonSerializable,
                                        \Countable
{
    const POTENCIA = 1.8;
    
    private $nitro = false;
    
    public function ativaNitro()
    {
        $this->nitro = true;
    }
    /**
     * acelar o Motor
     * @param int $valor valor da aceleração de 0 a 100 
     * @return int
     */
    public function acelerar($valor = 0)
    {
       
        if ($this->estaLigado() == false)
        {
            throw new \Exception("Nao foi possivel acelerar, porque o motor nao esta ligado");
        }
        
       $this->aceleracao = $valor;
       
       $torque = $valor * self::POTENCIA;
       
             
       if ($this->nitro == true)
       {
           return $torque * 1.5;
       } else {
           return $torque;
       }
    }
    
    public function jsonSerialize()
    {
        return array(
            "potencia" => self::POTENCIA,
            "nitro" => $this->nitro
                );
    }
    
    public function count()
    {
        return $this->aceleracao;
    }
}

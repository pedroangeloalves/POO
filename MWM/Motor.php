<?php

namespace MWM;

use POO\Motor\InterfaceMotor;

/**
 * Description of Motor
 *
 * @author aluno
 */
class Motor implements InterfaceMotor
{
    public function acelerar($valor = 0) 
    {
        return $valor;
    }

}

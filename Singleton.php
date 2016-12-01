<?php

/**
 * garante que exista apenas uma instancia desse ckasse do projeto
 *
 * @author pedro
 */
class Singleton 
{
    static private $obj = null;
    
    public function __construct() 
    {
    
    }
    
    static public function criar()
    {
        if (self::$obj == NULL)
        {
            self::$obj = new self();
        }
        
        return self::$obj; 
    }
    
}

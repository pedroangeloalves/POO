<?php

function carregaClasse($nomeClasse)
{
    $namespaces = explode('\\', $nomeClasse);
   
    if ($namespaces[0] == 'POO')
    {
        array_shift($namespaces);        
    }
   
    
    $novo = implode('/', $namespaces);
        
    $novo .= ".php";
    
  //  echo $novo;
    
    require_once __DIR__."/".$novo;
        
}
spl_autoload_register("carregaClasse");


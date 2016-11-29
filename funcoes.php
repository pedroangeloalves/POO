<?php

function ola($nome)
{
    echo "ola $nome";
    
}

$idade = 20;

$ola = function($nome) use (&$idade)
{
    echo "que legal $nome";
    $idade = 35;
};


function teste(closure $param)
{
    $param('pedro');
    
}

teste($ola);

// $ola("pedro");
// echo $idade;


// var_dump($ola);
<?php

namespace factoriaF5;

class Bolos
{   
    public $todosLosBolos = 10;
    public $bolosRestantes;



    function primerTiro()
    {
        $bolosTiradosPrimerTiro = rand(0,$this->todosLosBolos);
        $this->bolosRestantes = $this->todosLosBolos - $bolosTiradosPrimerTiro;
        print($bolosTiradosPrimerTiro);      
        
    }
    function segundoTiro()
    {
        $bolosDelSegundoTiro = rand(0,$this->bolosRestantes);
        print($bolosDelSegundoTiro);
    }
    function recuentoDeBolos()
    {
        $puntuacionTotal = $bolosTiradosPrimerTiro + $bolosDelSegundoTiro;
        print($puntuacionTotal);
    }
    function dosTiros()
    {
        $this->primerTiro();
        $this->segundoTiro();
        $this->recuentoDeBolos();
    }
}

$start = new Bolos;
$start->dos();


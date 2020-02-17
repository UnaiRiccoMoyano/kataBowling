<?php

use factoriaF5\Bolos;
use PHPUnit\Framework\TestCase;

class BolosTest extends TestCase
{


  public function testBolosTiradosNoPuedeSerMasDeDiez(){
       $maximoDeBolos = 10;
       $numeroDeBOlosTirados = new Bolos;
       $require = $numeroDeBolosTirados->dosTiros();
      $this->assertEquals($expected,$response);
  }

}

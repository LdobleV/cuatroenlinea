<?php

namespace App;

interface tipoFicha {
    public function getColor();
    public function getColorNum();
}

class Ficha implements tipoFicha {
    
    protected int $color;
    //1 -> Rojo, 2 -> Azul
    public function __construct(int $defColor){

        $this->color = $defColor;
    }

    public function getColor(){
        if($this->color == 1){
            return 'Rojo';
        
        }
            return 'Azul';
    }

    public function getColorNum(){
        return $color;
    }
}



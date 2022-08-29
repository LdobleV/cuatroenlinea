<?php

namespace App;

interface tipoTablero{
    public function throwFicha();
    public function clearTablero();
    public function queHay();
}

class Tablero implements tipoTablero {

    protected int $height;
    protected int $width;
    protected array $tablero;

    public function __construct(int $defWidth, int $defHeight){

        $this->width = $defWidth;
        $this->height = $defHeight;

    }

    public function throwFicha(int $defX, Ficha $ficha){
        if($this->width >= $defX && columnHeight($defX) >= $this->height){
                $this->tablero[$defX][] = $ficha;
        }
    }

    public function clearTablero(){
        for($i = 0; $i < $this->height; $i++){
            for($j = 0; $j < $this->width; $j++){
                $this->tablero[$j][$i] = NULL;
            }
        }
    }
    
    protected function columnHeight(int $defX){
        return count($this->tablero[$defX]);
    }

    public function queHay(int $defWidth, int $defHeight){
        return $tablero[$defWidth][$defHeight];
    }
} 



?>
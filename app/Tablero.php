<?php

namespace App;

interface tipoTablero{
    public function throwFicha(int $defX, Ficha $ficha);
    public function clearTablero();
    public function queHay(int $defWidth, int $defHeight);
}

class Tablero implements tipoTablero {

    protected int $height;
    protected int $width;
    protected array $tablero;

    public function __construct(int $defWidth, int $defHeight){

        $this->width = $defWidth;
        $this->height = $defHeight;
        $this->clearTablero();

    }

    public function throwFicha(int $defX, Ficha $ficha){
        $found = 0;
        if($this->width >= $defX && $this->columnHeight($defX) <= $this->height){
            $i = 0;
                while($found == 0 && $i < $this->height){
                    if($this->tablero[$defX][$i] == NULL){
                        $this->tablero[$defX][$i] = $ficha;
                        $found = 1;
                    }
                    $i++;
                }
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
        $count = 0;
        $finish = 0;
        for($i = 0; $i < $this->height && $finish == 0; $i++){
            if($this->tablero[$defX][$i] != NULL){
                $count++;
            }else{
                $finish = 1;
            }
        }
        return $count;
    }

    public function queHay(int $defWidth, int $defHeight){
        return $this->tablero[$defWidth][$defHeight];
    }
} 



?>
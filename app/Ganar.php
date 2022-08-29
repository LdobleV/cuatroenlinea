<?php

namespace App;

interface ganarDetec{
    public function hayGanadores();
}

class Ganar implements ganarDetec{

    public function ganarDetec(Tablero $tablero, Ficha $ficha){
        return (columnCheck($tablero, $ficha) || rowCheck($tablero, $ficha));
        
    }

    protected function columnCheck(Tablero $tablero, Ficha $ficha){

        $counter = 0;

        for($i = 0; $i < $tablero->width; $i++){
            for($j = 0; $j < $tablero->height; $j++){
                if($counter == 4){
                    return True;
                    }
                if($tablero->queHay($i, $j) != NULL){
                    if($tablero->queHay($i, $j)->getColor() == $ficha->getColor());
                    $counter += 1;
                }
                else{
                    $counter = 0;
                }
            }
            $counter = 0;
            
        }
    }

    protected function rowCheck(Tablero $tablero, Ficha $ficha){
        for($i = 0; $i < $tablero->height; $i++){
            for($j = 0; $j < $tablero->width; $j++){
                if($counter == 4){
                    return True;
                    }
                if($tablero->queHay($i, $j) != NULL){
                    if($tablero->queHay($i, $j)->getColor() == $ficha->getColor());
                    $counter += 1;
                }
                else{
                    $counter = 0;
                }
            }
            $counter = 0;
        }
    }

    protected function diagonalCheck(Tablero $tablero, Ficha $ficha){
        
    }

}

?>  
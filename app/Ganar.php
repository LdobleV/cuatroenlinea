<?php

namespace App;

interface ganarDetec{
    public function hayGanadores();
}

class Ganar implements ganarDetec{

    public function ganarDetec(Tablero $tablero, Ficha $ficha){
        return (columnCheck($tablero) || rowCheck($tablero));
        
    }

    protected function columnCheck(Tablero $tablero){

        $counter = 1;
        $currentColor = 0;
        for($i = 0; $i < $tablero->width; $i++){
            for($j = 0; $j < $tablero->height; $j++){
                if($counter == 4){
                    return True;
                    }
                if($tablero->queHay($i, $j) != NULL){
                    if($tablero->queHay($i, $j)->getColorNum() == $currentColor){
                        $counter += 1;
                    }else{
                            $currentColor = $tablero->queHay($i, $j)->getColorNum();
                            $counter = 1;
                        }
                }
                else{
                    $counter = 1;
                }
            }
            $counter = 1;
        }

        return False;
    }

    protected function rowCheck(Tablero $tablero){

        $counter = 1;
        $currentColor = 0;
        for($i = 0; $i < $tablero->height; $i++){
            for($j = 0; $j < $tablero->width; $j++){
                if($counter == 4){
                    return True;
                    }
                if($tablero->queHay($i, $j) != NULL){
                    if($tablero->queHay($i, $j)->getColorNum() == $currentColor){
                        $counter += 1;
                    }else{
                            $currentColor = $tablero->queHay($i, $j)->getColorNum();
                            $counter = 1;
                        }
                }
                else{
                    $counter = 1;
                }
            }
            $counter = 1;
        }

        return False;
    }

    protected function diagonalCheck(Tablero $tablero){

        $currentColor = 0;
        $startY = 3; //Starts from row 4, but arrays start at 0
        $startX = 0;
        $diagonals = $tablero->heigth + $tablero->width - 7; 

        
            for($d = 0; $d < $diagonals; $d++){
                for($i = $startY, $z = $startX; $z < $tablero->width; $i--, $z++){
                    if($counter == 4){
                        return True;
                        }
                    if($tablero->queHay($i, $j) != NULL){
                        if($tablero->queHay($i, $j)->getColorNum() == $currentColor){
                            $counter += 1;
                        }else{
                                $currentColor = $tablero->queHay($i, $j)->getColorNum();
                                $counter = 1;
                            }
                    }
                    else{
                        $counter = 1;
                    }
                
                }
                $counter = 1;
                if($startY == $tablero->height - 1){
                    $startX++;
                } else{
                    $startY++;
                }
            }
    }

}

?>  
<?php

namespace App;

interface tipoFicha {
    public function getColor(): int;
}

class Ficha implements tipoFicha {
    
    protected int $color;
<<<<<<< HEAD
    //1 -> Rojo, 2 -> Azul
=======
    // 0 -> Blanco, 1 -> Rojo, 2 -> Azul
>>>>>>> 19df1149e401cb2eb95a93f3f53d5f03186e529b

    public function __construct(int $defColor){

        $this->color = $defColor;
    }

    public function getColor(){
<<<<<<< HEAD
        if($this->color == 1){
            return 'Rojo';
        
        }
            return 'Azul';
    }
}

?>  
=======
        if($this->color == 0){
            return 'Blanco';
        }
        if($this->color == 1){
            return 'Rojo'
        
        }
            return 'Azul'
    }
}

?>  
>>>>>>> 19df1149e401cb2eb95a93f3f53d5f03186e529b

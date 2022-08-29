<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TableroTest extends TestCase
{
    /**
     * Checks if the class Ficha works accordingly with it's design
     *
     * @return void
     */
    public function throw_piece_test() {
        $height = rand(6,30);
        $width = rand(6,30);
        $tablero = new Tablero($width,$height);

        $xThrow = rand(0, $width);
        $color = rand(1,2);
        $ficha = new Ficha($color);
        $tablero->throwFicha($xThrow, $ficha);

        $this->assertEquals($ficha, $tablero->queHay($xThrow, 0));
    }

    public function clear_board_test(){

        $this->expectNotToPerformAssertions;

        $height = rand(6,30);
        $width = rand(6,30);
        $tablero = new Tablero($width,$height);

        for($i = 0; $i < 10; $i++){
            $tablero->throwFicha(rand(0,$width), new Ficha(rand(1,2)));
        }

        $tablero->clearTablero;

        for($i = 0; $i < $height; $i++){
            for($j = 0; $j < width; $j++){
                if($tablero->queHay($j, $i) != NULL){
                    $this->fail("The board was not completely cleaned, one piece has been found");
                }
            }
        }


    }

    public function what_is_test(){
        $height = rand(6,30);
        $width = rand(6,30);
        $tablero = new Tablero($width,$height);

        $xThrow = rand(0, $width);
        $color = rand(1,2);
        $ficha = new Ficha($color);
        $tablero->throwFicha($xThrow, $ficha);

        $this->assertEquals($ficha, $tablero->queHay($xThrow, 0));
    }
    
}

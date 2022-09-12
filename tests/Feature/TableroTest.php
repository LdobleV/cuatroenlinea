<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TableroTest extends TestCase
{
    /**
     * Checks if the class Tablero works accordingly with it's design
     *
     * @return void
     */
    public function test_throw_piece() {
        $height = rand(6,30);
        $width = rand(6,30);
        $board = new Tablero($width,$height);

        $xThrow = rand(0, $width - 1);
        $color = rand(1,2);
        $ficha = new Ficha($color);
        $board->throwFicha($xThrow, $ficha);

        $this->assertEquals($ficha, $board->queHay($xThrow, 0));
    }

    public function test_clear_board(){

        $this->expectNotToPerformAssertions();

        $height = rand(6,30);
        $width = rand(6,30);
        $board = new Tablero($width,$height);

        for($i = 0; $i < 6; $i++){
            $board->throwFicha(rand(0,$width), new Ficha(rand(1,2)));
        }

        $board->clearTablero();

        for($i = 0; $i < $height; $i++){
            for($j = 0; $j < $width; $j++){
                if($board->queHay($j, $i) != NULL){
                    $this->fail("The board was not completely cleaned, one piece has been found");
                }
            }
        }


    }

    public function test_what_is(){
        $height = rand(6,30);
        $width = rand(6,30);
        $board = new Tablero($width,$height);

        $xThrow = rand(0, $width);
        $color = rand(1,2);
        $ficha = new Ficha($color);
        $board->throwFicha($xThrow, $ficha);

        $this->assertEquals($ficha, $board->queHay($xThrow, 0));
    }
    
}

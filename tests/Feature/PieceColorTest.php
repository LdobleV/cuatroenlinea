<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PieceColorTest extends TestCase
{
    /**
     * Checks if the class Ficha works accordingly with it's design
     *
     * @return void
     */
    public function test_color() {

        for($i = 0; $i < 15; $i += 1){
            $color = rand(1,2);
            $ficha = new Ficha(1);

            if($color = 1)
                $this->assertEquals($ficha->getColor(), 'Rojo');
            else
                $this->assertEquals($ficha->getColor(), 'Azul');
        }

    }
    
}

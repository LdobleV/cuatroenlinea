<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ColorChangingTestWrong extends TestCase
{
    /**
     * Checks if the ammount of colors changes accordingly with the specified url
     *
     * @return void
     */
    public function test_changing_colors_1()
    {
        $response = $this->get('/jugar/1');

        $preRedColors = preg_match_all('/<div class="bg-red/', $response->getContent());
        $preBlueColors = preg_match_all('/<div class="bg-sky/', $response->getContent());

        $this->assertTrue( ($preRedColors == 1) && ($preBlueColors == 0));
    }

    public function test_changing_colors_2()
    {
        $response2 = $this->get('/jugar/12');

        
        $postRedColors = preg_match_all('/<div class="bg-red/', $response2->getContent());
        $postBlueColors = preg_match_all('/<div class="bg-sky/', $response2->getContent());

        $this->assertTrue( ($postBlueColors == 0) && ($postRedColors == 2) );
    }
}

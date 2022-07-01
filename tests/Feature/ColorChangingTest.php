<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ColorChangingTest extends TestCase
{
    /**
     * Checks if the ammount of colors changes accordingly with the specified url
     *
     * @return void
     */
    public function test_changing_colors()
    {
        $response = $this->get('/jugar/1');

        $preRedColors = preg_match_all('/<div class="bg-red"/', $response->getContent());
        $preBlueColors = preg_match_all('/<div class="bg-sky"/', $response->getContent());

        $respones = $this->get('/jugar/12')

        $postRedColors = preg_match_all('/<div class="bg-red"/', $response->getContent());
        $postBlueColors = preg_match_all('/<div class="bg-sky"/', $response->getContent());

        $response->assertTrue( ($preRedColors == 1) && ($preBlueColors == 0) && ($postRedColors == 1) && ($postBlueColors == 1));
    }
}

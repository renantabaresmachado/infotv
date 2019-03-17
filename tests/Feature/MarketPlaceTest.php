<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\MarketPlace;

class MarketPlaceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCrateMarketPlace()
    {
        MarketPlace::create([
           'name' => 'Infocel',
           'description' => 'Loja de Informatica e Celular',
            'site' => 'www.infocel.com.br',
            'cnpjCpf' => '01993920202'           
            ]);
        $this->assertDatabaseHas('market_places', [
            'name' => 'Infocel'
        ]);
        MarketPlace::create([
           'name' => 'fashionModa',
           'description' => 'Loja de roupas e acessórios',
            'site' => 'www.fashionmoda.com.br',
            'cnpjCpf' => '27036452000180'           
            ]);
        $this->assertDatabaseHas('market_places', [
            'name' => 'fashionModa'
        ]);
    }
}

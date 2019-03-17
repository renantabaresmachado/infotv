<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateUser()
    {
        $mkp = \App\MarketPlace::where('name', 'Infocel')->first();
        User::create([
           'email' => 'contato@infocel.com.br',
           'password' => bcrypt (123456),
            'market_place_id' => $mkp->id       
            ]);
            $this->assertDatabaseHas('users', [
            'email' => 'contato@infocel.com.br'
        ]);
        $mkp1 = \App\MarketPlace::where('name', 'fashionModa')->first();
        User::create([
           'email' => 'contato@fashionmoda.com.br',
           'password' =>  bcrypt (123456),
            'market_place_id' => $mkp1->id       
            ]);
            $this->assertDatabaseHas('users', [
            'email' => 'contato@fashionmoda.com.br'
        ]);
    }
}

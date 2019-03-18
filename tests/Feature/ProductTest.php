<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;

class ProductTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateProduct() {
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('d-m-Y');
        $mkp = \App\MarketPlace::where('name', 'Infocel')->first();
        Product::create([
            'name' => 'Xiaomi Redmi Note 6 pro',
            'description' => 'Xiaomi Redmi Note 6 pro dual Android 8.1 Tela 6.26 64GB Camera dupla 12+5MP',
            'value' => 1.349, 00,
            'paymentMethod' => 'cartão de crédito',
            'imagem' => 'xiaomi.jpg',
            'created' => $date,
            'market_place_id' => $mkp->id
        ]);
        $this->assertDatabaseHas('products', [
            'name' => 'Xiaomi Redmi Note 6 pro'
        ]);
        Product::create([
            'name' => 'Smartphone Motorola One XT1941',
            'description' => 'Branco 64GB Tela de 5,9", Dual Chip, Android 8.1, Câmera Traseira Dupla, Processador Octa-Core e 4GB de RAM',
            'value' => 1.319, 12,
            'paymentMethod' => 'cartão de crédito',
            'imagem' => 'motorola.jpg',
            'created' => $date,
            'market_place_id' => $mkp->id
        ]);
        $this->assertDatabaseHas('products', [
            'name' => 'Smartphone Motorola One XT1941'
        ]);
        Product::create([
            'name' => 'Smartphone Samsung Galaxy J8',
            'description' => '64GB Dual Chip Android 8.0 Tela 6" Octa-Core 1.8GHz 4G Câmera 16MP F1.7 + 5MP F1.9 (Dual Cam) - Prata',
            'value' => 1.124, 10,
            'paymentMethod' => 'cartão de crédito',
            'imagem' => 'sansung.png',
            'created' => $date,
            'market_place_id' => $mkp->id
        ]);
        $this->assertDatabaseHas('products', [
            'name' => 'Smartphone Samsung Galaxy J8'
        ]);
        Product::create([
            'name' => 'Notebook Hp 246 G6',
            'description' => 'Intel I3-7020u Windows 10 Home HDD 500GB 7200RPM - 3XU35LA',
            'value' => 2.499, 00,
            'paymentMethod' => 'cartão de crédito',
            'imagem' => 'notebook.jpg',
            'created' => $date,
            'market_place_id' => $mkp->id
        ]);
        $this->assertDatabaseHas('products', [
            'name' => 'Notebook Hp 246 G6'
        ]);
        Product::create([
            'name' => 'Notebook Dell',
            'description' => 'Core i3-6006U 4GB 1TB Tela 15.6” Windows 10 Inspiron I15-3567-A10P',
            'value' => 2.279, 00,
            'paymentMethod' => 'cartão de crédito',
            'imagem' => 'notebook_dell.jpg',
            'created' => $date,
            'market_place_id' => $mkp->id
        ]);
        $this->assertDatabaseHas('products', [
            'name' => 'Notebook Dell'
        ]);
        Product::create([
            'name' => 'Notebook Lenovo',
            'description' => 'Intel® Core™ i3-7020U (2.3GHz; 3MB Cache) - Windows 10 Home - 4GB (soldado) DDR4 2133MHz - 1TB (5400rpm)',
            'value' => 2.099, 00,
            'paymentMethod' => 'cartão de crédito',
            'imagem' => 'notebook_lenovo.jpg',
            'created' => $date,
            'market_place_id' => $mkp->id
        ]);
        $this->assertDatabaseHas('products', [
            'name' => 'Notebook Lenovo'
        ]);
        $mkp1 = \App\MarketPlace::where('name', 'fashionModa')->first();
        Product::create([
            'name' => 'Camiseta Criativa Urbana Fé',
            'description' => 'Urbana Fé Frases Blusa Religiosa Gospel Blusinha Preta',
            'value' => 67, 00,
            'paymentMethod' => 'cartão de crédito',
            'imagem' => 'blusa_feminina_fe.jpg',
            'created' => $date,
            'market_place_id' => $mkp1->id
        ]);
        $this->assertDatabaseHas('products', [
            'name' => 'Camiseta Criativa Urbana Fé'
        ]);
        Product::create([
            'name' => 'Camiseta feminina',
            'description' => 'Camiseta Lacoste Lisa',
            'value' => 97, 90,
            'paymentMethod' => 'cartão de crédito',
            'imagem' => 'blusa_feminina_lacoste.jpg',
            'created' => $date,
            'market_place_id' => $mkp1->id
        ]);
        $this->assertDatabaseHas('products', [
            'name' => 'Camiseta feminina'
        ]);
        Product::create([
            'name' => 'Camiseta Tshirt Feminina Básica Algodão',
            'description' => 'Good Vibes Floripa',
            'value' => 54, 90,
            'paymentMethod' => 'cartão de crédito',
            'imagem' => 'blusa_feminina_floripa.jpg',
            'created' => $date,
            'market_place_id' => $mkp1->id
        ]);
        $this->assertDatabaseHas('products', [
            'name' => 'Camiseta Tshirt Feminina Básica Algodão'
        ]);
        Product::create([
            'name' => 'Calça Ribana Feminina',
            'description' => 'Tipo Moletom Cintura Alta Moda Insta',
            'value' => 44, 90,
            'paymentMethod' => 'cartão de crédito',
            'imagem' => 'calca_feminina.jpg',
            'created' => $date,
            'market_place_id' => $mkp1->id
        ]);
        $this->assertDatabaseHas('products', [
            'name' => 'Calça Ribana Feminina'
        ]);
        Product::create([
            'name' => 'Calça Clochard Feminina',
            'description' => 'Lançamento Blogueiraccenoura',
            'value' => 49, 90,
            'paymentMethod' => 'cartão de crédito',
            'imagem' => 'calca_clochard_feminina .jpg',
            'created' => $date,
            'market_place_id' => $mkp1->id
        ]);
        $this->assertDatabaseHas('products', [
            'name' => 'Calça Clochard Feminina'
        ]);
        Product::create([
            'name' => 'Calça Jeans Feminina',
            'description' => 'Cintura Alta Barra V Fenda Luxo Premium',
            'value' => 74, 90,
            'paymentMethod' => 'cartão de crédito',
            'imagem' => 'calca_jeans_feminina .jpg',
            'created' => $date,
            'market_place_id' => $mkp1->id
        ]);
        $this->assertDatabaseHas('products', [
            'name' => 'Calça Jeans Feminina'
        ]);
    }

}

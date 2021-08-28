<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'Produto Teste',
                'description' => 'Aqui vai a descrição do produto de teste',
                'price' => 10.00,
                'status' => '1',
                'slug' => Str::slug('Produto Teste'),
                'headline' => 'Produto Teste - Melhor Impossível',
                'title' => 'Produto Teste - Melhor Impossível',
                'days' => '30'
            ],
            [
                'name' => 'Produto Genérico',
                'description' => 'Aqui vai a descrição do produto de teste',
                'price' => 10.00,
                'status' => '1',
                'slug' => Str::slug('Produto Genérico'),
                'headline' => 'Produto Genérico - Melhor Impossível',
                'title' => 'Produto Genérico - Melhor Impossível',
                'days' => '30'
            ]
        ];

        foreach ($product as $key => $value) {
            \App\Models\Product::create($value);
        }
    }
}

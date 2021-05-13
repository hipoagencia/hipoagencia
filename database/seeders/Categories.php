<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productCategorias = [
            ['name' => 'Geral'],
            ['name' => 'Teste']
        ];

        foreach ($productCategorias as $key => $value) {
            \App\Models\Categories::create($value);
        }
    }
}

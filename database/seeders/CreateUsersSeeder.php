<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'falecom@hipoagencia.com.br',
                'is_admin'=>'1',
                'password'=> 'teste',
            ],
            [
                'name'=>'User',
                'email'=>'daniel_martins_4@live.com',
                'is_admin'=>'0',
                'password'=> 'teste',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

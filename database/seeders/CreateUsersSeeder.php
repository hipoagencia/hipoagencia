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
                'password'=> bcrypt('teste'),
                'email_verified_at'=> date('Y-m-d H:i:s'),
                'last_name'=> 'Dummy',
                'cell'=> '13982121107',
                'document'=> '84804178031',
            ],
            [
                'name'=>'User',
                'email'=>'daniel_martins_4@live.com',
                'is_admin'=>'0',
                'password'=> bcrypt('teste'),
                'email_verified_at'=> date('Y-m-d H:i:s'),
                'last_name'=> 'de Souza',
                'cell'=> '13982121107',
                'document'=> '84804178031',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

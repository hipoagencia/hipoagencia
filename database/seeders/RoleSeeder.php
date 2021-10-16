<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'user-list']);
        Permission::create(['name' => 'user-create']);
        Permission::create(['name' => 'user-edit']);
        Permission::create(['name' => 'user-delete']);

        Permission::create(['name' => 'role-list']);
        Permission::create(['name' => 'role-create']);
        Permission::create(['name' => 'role-edit']);
        Permission::create(['name' => 'role-delete']);

        Permission::create(['name' => 'blog-list']);
        Permission::create(['name' => 'blog-create']);
        Permission::create(['name' => 'blog-edit']);
        Permission::create(['name' => 'blog-delete']);

        Permission::create(['name' => 'content-list']);
        Permission::create(['name' => 'content-create']);
        Permission::create(['name' => 'content-edit']);
        Permission::create(['name' => 'content-delete']);


        Permission::create(['name' => 'gallery-list']);
        Permission::create(['name' => 'gallery-create']);
        Permission::create(['name' => 'gallery-edit']);
        Permission::create(['name' => 'gallery-delete']);

        Permission::create(['name' => 'order-list']);
        Permission::create(['name' => 'order-create']);
        Permission::create(['name' => 'order-edit']);
        Permission::create(['name' => 'order-delete']);

        Permission::create(['name' => 'product-list']);
        Permission::create(['name' => 'product-create']);
        Permission::create(['name' => 'product-edit']);
        Permission::create(['name' => 'product-delete']);

        Permission::create(['name' => 'category-list']);
        Permission::create(['name' => 'category-create']);
        Permission::create(['name' => 'category-edit']);
        Permission::create(['name' => 'category-delete']);

        Permission::create(['name' => 'eadModule-list']);
        Permission::create(['name' => 'eadModule-create']);
        Permission::create(['name' => 'eadModule-edit']);
        Permission::create(['name' => 'eadModule-delete']);

        Permission::create(['name' => 'eadContent-list']);
        Permission::create(['name' => 'eadContent-create']);
        Permission::create(['name' => 'eadContent-edit']);
        Permission::create(['name' => 'eadContent-delete']);

    }
}

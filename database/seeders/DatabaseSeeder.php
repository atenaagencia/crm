<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        'label'=>'admin',
        'description'=>'Administrador',
        ]);
        DB::table('roles')->insert([
            'label' => 'supervisor',
            'description' => 'Supervisor de vendas',
        ]);
        DB::table('roles')->insert([
            'label' => 'vendedor',
            'description' => 'Vendedor',
        ]);
        DB::table('roles')->insert([
            'label' => 'assistente',
            'description' => 'Assistente de Vendas',
        ]);
        DB::table('users')->insert([
            'name' => 'Herbet',
            'cpf' =>'04261687550',
            'email' => 'dev@teste.com',
            'password' => Hash::make('01072015'),
            'role_id'=> 1,
        ]);
        DB::table('niches')->insert([
            'description' => 'Alimentício'
        ]);

        DB::table('niches')->insert([
            'description' => 'Roupas & Acessorios'
        ]);
        
        DB::table('niches')->insert([
            'description' => 'Cosméticos'
        ]);

        DB::table('niches')->insert([
            'description' => 'Agronegócio'
        ]);

        DB::table('niches')->insert([
            'description' => 'Beleza'
        ]);
        
        DB::table('niches')->insert([
            'description' => 'Sáude'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'Ivan',
                'apellido' => 'Guerra',
                'correo' => 'Guerra@gmail.com',
                'telefono' => '1234567890'
            ],[
                'nombre' => 'Gerson',
                'apellido' => 'Pastrana',
                'correo' => 'Pastrana@gmail.com',
                'telefono' => '9876543210'
            ],[
                'nombre' => 'Monse',
                'apellido' => 'Leon',
                'correo' => 'Leon@gmail.com',
                'telefono' => '5555555555'
            ]]);
    }
}

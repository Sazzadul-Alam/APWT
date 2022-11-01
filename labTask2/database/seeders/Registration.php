<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Registration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registration')->insert([
            'first-name' => 'Sazzad',
            'last-name' => 'Alam',
            'email' => 'sazzad@gmail.com',
            'phone' => '01732570221',
            'address' => 'Raipur',
            'password' => '1234',
        ]);
    }
}

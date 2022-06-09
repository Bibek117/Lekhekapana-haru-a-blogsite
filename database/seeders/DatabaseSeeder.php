<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name'=>'Bibek',
            'user_type'=>'admin',
            'email'=>'Bibekangdembay@gmail.com',
            'password'=>Hash::make('Bibek1234567')
        ]);
    }
}

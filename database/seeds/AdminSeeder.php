<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'phoud',
            'email' => 'phoud@gmail.com',
            'password' => Hash::make('6121995phoud')
        ]);
    }
}

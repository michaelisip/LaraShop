<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate([
            'name' => 'LaraShop User',
            'email' => 'user@info.com',
            'email_verified_at' => now(),
            'password' => Hash::make('asd123')
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::firstOrCreate([
            'name' => 'LaraShop Admin',
            'email' => 'admin@info.com',
            'email_verified_at' => now(),
            'password' => Hash::make('asd123')
        ]);
    }
}

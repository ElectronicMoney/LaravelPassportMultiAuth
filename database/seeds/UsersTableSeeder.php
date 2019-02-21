<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_role_id' => rand(1, 5),
            'name' => 'Emeka Augustine',
            'email' => 'emoney@cafafanscoders.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);

        User::create([
            'user_role_id' => rand(1, 5),
            'name' => 'Emeka Gift',
            'email' => 'gift@cafafanscoders.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);
    }
}

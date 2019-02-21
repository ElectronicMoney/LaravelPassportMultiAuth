<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'admin_role_id' => rand(1, 5),
            'name' => 'Administrator',
            'email' => 'admin@cafafanscoders.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);

        Admin::create([
            'admin_role_id' => rand(1, 5),
            'name' => 'Author',
            'email' => 'author@cafafanscoders.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);


        Admin::create([
            'admin_role_id' => rand(1, 5),
            'name' => 'Editor',
            'email' => 'editor@cafafanscoders.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);


        Admin::create([
            'admin_role_id' => rand(1, 5),
            'name' => 'Support',
            'email' => 'support@cafafanscoders.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);
    }
}

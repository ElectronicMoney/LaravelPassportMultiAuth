<?php

use Illuminate\Database\Seeder;
use App\Model\Admin;

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
            'admin_role_id' => 1,
            'name' => 'Administrator',
            'email' => 'admin@cafafanscoders.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);

        Admin::create([
            'admin_role_id' => 2,
            'name' => 'Author',
            'email' => 'author@cafafanscoders.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);


        Admin::create([
            'admin_role_id' => 3,
            'name' => 'Editor',
            'email' => 'editor@cafafanscoders.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);


        Admin::create([
            'admin_role_id' => 4,
            'name' => 'Support',
            'email' => 'support@cafafanscoders.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);
    }
}

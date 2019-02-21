<?php

use Illuminate\Database\Seeder;
use App\Model\AdminRole;

class AdminRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminRole::create([
            'name' => 'Administrator',
        ]);

        AdminRole::create([
            'name' => 'Author',
        ]);

        AdminRole::create([
            'name' => 'Editor',
        ]);

        AdminRole::create([
            'name' => 'Support',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRole::create([
            'name' => 'VIP',
        ]);

        UserRole::create([
            'name' => 'Diamond',
        ]);

        UserRole::create([
            'name' => 'Gold',
        ]);

        UserRole::create([
            'name' => 'Silver',
        ]);

        UserRole::create([
            'name' => 'Bronz',
        ]);
    }
}

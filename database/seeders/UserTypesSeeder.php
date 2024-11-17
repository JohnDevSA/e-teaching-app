<?php

namespace Database\Seeders;

use App\Models\UserType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Admin',
                'description' => 'Admin user with high level privilege',

            ],
            [
                'name' => 'Teacher',
                'description' => 'Teacher user with medium level privilege',
            ],
            [
                'name' => 'Student',
                'description' => 'Student user with low level privilege',
            ],
        ];

        foreach ($roles as $role) {
            UserType::create($role);
        }
    }
}

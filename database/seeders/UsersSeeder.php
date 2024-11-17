<?php

namespace Database\Seeders;

use App\Models\UserType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
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
            UserType::firstOrCreate(
                ['name' => $role['name']],
                ['description' => $role['description']]
            );
        }


        // Seed admin user
//        User::firstOrCreate(
//            ['email' => 'admin@teachingapp.co.za',
//            'name' => 'Admin User',
//            'password' => Hash::make('Password1'),
//            'user_type_id' => UserType::where('name', 'admin')->first()->id,
//            ]
//        );

        User::firstOrCreate(
            ['email' => 'teacher@teachingapp.co.za',
            'name' => 'Teacher User',
            'password' => Hash::make('Password1'),
            'user_type_id' => UserType::where('name', 'teacher')->first()->id,
            ]
        );

        User::firstOrCreate(
            ['email' => 'student@teachingapp.co.za',
            'name' => 'Student User',
            'password' => Hash::make('Password1'),
            'user_type_id' => UserType::where('name', 'student')->first()->id,
            ]
        );


    }
}

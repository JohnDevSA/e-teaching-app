<?php

namespace Database\Seeders;

use App\Models\Grade;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grades = [
            [
                'name' => 'Grade 4',
                'description' => 'Introduction to intermediate concepts and foundational skills',
                'start_date' => Carbon::createFromDate(2024, 1, 1),
                'end_date' => Carbon::createFromDate(2040, 12, 31),
            ],
            [
                'name' => 'Grade 5',
                'description' => 'Builds on Grade 4, introducing more advanced topics',
                'start_date' => Carbon::createFromDate(2024, 1, 1),
                'end_date' => Carbon::createFromDate(2040, 12, 31),
            ],
            [
                'name' => 'Grade 6',
                'description' => 'Prepares students for junior high with a focus on critical thinking',
                'start_date' => Carbon::createFromDate(2024, 1, 1),
                'end_date' => Carbon::createFromDate(2040, 12, 31),
            ],
            [
                'name' => 'Grade 7',
                'description' => 'Introduces abstract concepts and encourages independent study',
                'start_date' => Carbon::createFromDate(2024, 1, 1),
                'end_date' => Carbon::createFromDate(2040, 12, 31),
            ],
            [
                'name' => 'Grade 8',
                'description' => 'Focuses on high school readiness and advanced topics',
                'start_date' => Carbon::createFromDate(2024, 1, 1),
                'end_date' => Carbon::createFromDate(2040, 12, 31),
            ],
            [
                'name' => 'Grade 9',
                'description' => 'Provides a foundation for specialized subjects in higher grades',
                'start_date' => Carbon::createFromDate(2024, 1, 1),
                'end_date' => Carbon::createFromDate(2040, 12, 31),
            ],
        ];

        foreach ($grades as $grade) {
            Grade::create($grade);
        }
    }
}

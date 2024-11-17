<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define subjects to be added to each grade
        $subjects = [
            'Mathematics',
            'Science',
            'English',
            'Social Studies',
            'Physical Education',
            'Arts',
        ];

        // Loop through each grade from 4 to 9
        for ($gradeLevel = 4; $gradeLevel <= 9; $gradeLevel++) {
            // Find the existing grade
            $grade = Grade::where('name', 'Grade ' . $gradeLevel)->first();

//            var_dump($grade);

            // Check if the grade exists before attaching subjects
            if ($grade) {
                foreach ($subjects as $subjectName) {
//                    // Find or create the subject
                    $subject = Subject::firstOrCreate([
                        'name' => $subjectName,
                        'grade_id' => $grade->id,
                        'description' => $subjectName,
                        'start_date' => Carbon::createFromDate(2024, 1, 1),
                        'end_date' => Carbon::createFromDate(2040, 12, 31),
                    ]);
//
//                    // Attach the subject to the grade if not already attached
//                    $grade->subjects()->syncWithoutDetaching([$subject->id]);
                }
            }
        }
    }
}

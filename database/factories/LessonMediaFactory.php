<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\LessonMedia;

class LessonMediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LessonMedia::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'lesson_id' => $this->faker->word(),
            'file_type_id' => $this->faker->word(),
            'file_path' => $this->faker->word(),
            'file_size' => $this->faker->word(),
            'uploaded_by' => $this->faker->word(),
        ];
    }
}

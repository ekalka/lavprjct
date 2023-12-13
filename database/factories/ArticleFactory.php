<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'title' => $this->faker->sentence(),
            'shortDesc' => $this->faker->paragraph(),
            'text' => $this->faker->text(),
            'user_id' => $this->faker->numberBetween(1,2),
        ];
    }
}

//фабрики нужны для того, чтобы создавать объекты, наполняя их фейковыми данными

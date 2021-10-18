<?php

namespace Database\Factories;

use App\Models\Container;
use App\Models\Movement;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $container = Container::factory(1)->create()->first();
        $type = [
            'Embarque',
            'Descarga',
            'Gate in',
            'Gate out',
            'Reposicionamento',
            'Pesagem',
            'Scanner'
        ];
        $end = $this->faker->dateTime();

        return [
            'containerId' => $container->id,
            'type' => $type[rand(0, 6)],
            'start' => $this->faker->dateTime($end),
            'end' => $end
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Container;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContainerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Container::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $letter = Str::upper(
            $this->faker->randomLetter() . $this->faker->randomLetter() . $this->faker->randomLetter() . $this->faker->randomLetter()
        ); //4 Letras
        $number = str_pad(rand(1, 9999999), 7, '0', STR_PAD_LEFT); //7 Numeros
        $type = ['20', '40'];
        $status = ['Cheio', 'Vazio'];
        $category = ['Importação', 'Exportação'];

        return [
            'client' => $this->faker->name(),
            'number' => $letter . $number,
            'type' => $type[rand(0, 1)],
            'status' => $status[rand(0, 1)],
            'category' => $category[rand(0, 1)],
        ];
    }
}

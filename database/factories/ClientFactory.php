<?php

namespace Database\Factories;

use App\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'matricula' => $this->faker->randomNumber($nbDigits = 8, $strict = false),
            'gender' => $this->faker->randomElement(['Hombre', 'Mujer']),
            'edad' => $this->faker->numberBetween($min = 1, $max = 120),
            'sala' => $this->faker->numberBetween($min = 1, $max = 5),
            'religion' => $this->faker->randomElement(['cristiano','catolico','testigo','musulman']),
            'ocupacion' => $this->faker->jobTitle,
            'estadocivil' => $this->faker->randomElement(['casado','divorciado','viudo','soltero']),
            'medicotratante' => $this->faker->name,
            'originariode' => $this->faker->country,
            'radicaen' => $this->faker->city,
            'escolaridad' => $this->faker->randomElement(['preparatoria','licenciatura','secundaria','primaria']),
            'municipales' => $this->faker->randomElement(['Si', 'No']),
            'habitacion' => $this->faker->numberBetween($min = 1, $max = 5),
            'tabaquismo' => $this->faker->randomElement(['positivo', 'negativo']),
            'etilismo' => $this->faker->randomElement(['positivo', 'negativo']),
            'higiene' => $this->faker->randomElement(['Si', 'No']),
            'alimentacion' => $this->faker->randomElement(['buena', 'regular','mala']),
            'dominio' => $this->faker->randomElement(['diestro', 'zurdo', 'ambidiestro']),
            'hijos' => $this->faker->numberBetween($min = 1, $max = 10),
            'pasatiempo' => $this->faker->randomElement(['gym', 'correr', 'netflix', 'caminar', 'cocinar']),
            'otros' => $this->faker->sentence,

        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\{Issuing, StatusOccurrence, TypeOccurrence, User};
use Illuminate\Database\Eloquent\Factories\Factory;

class OccurrencesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'name' => $this->faker->name,
            'cpf' => $this->faker->numerify('###.###.###-##'),
            'rg' => $this->faker->numerify('##.###.###-#'),
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'users_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'clients_id' => function () {
                return Client::inRandomOrder()->first()->id;
            },
            'issuings_id' => function () {
                return Issuing::inRandomOrder()->first()->id;
            },
            'type_occurrences_id' => function () {
                return TypeOccurrence::inRandomOrder()->first()->id;
            },
            'status_occurrences_id' => function () {
                return StatusOccurrence::inRandomOrder()->first()->id;
            },
        ];
    }
}

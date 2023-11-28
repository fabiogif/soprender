<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\{Issuing, StatusOccurrence, TypeOccurrence, User};
use Database\Seeders\ClientTableSeeder;
use Database\Seeders\TypeOccurrenceTableSeeder;
use Database\Seeders\UsersTableSeeder;
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
                return UsersTableSeeder::class;
            },
            'clients_id' => function () {
                return ClientTableSeeder::class;
            },
            'issuings_id' => function () {
                return IssuingFactory::class;
            },
            'type_occurrences_id' => function () {
                return TypeOccurrenceTableSeeder::class;
            },
            'status_occurrences_id' => function () {
                return StatusOccurrenceTableSeeder::class;
            },
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Tenant;
use Database\Factories\ClientFactory;
use Faker\Core\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return ClientFactory::factoryForModel('client')->create();
    }
}

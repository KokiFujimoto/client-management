<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class FakeClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory()->count(200)->create();
    }
}

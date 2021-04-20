<?php

namespace Database\Seeders;
use App\Models\Appreciation;
use Illuminate\Database\Seeder;

class AppreciationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appreciation::factory()->count(50)->create();
    }
}

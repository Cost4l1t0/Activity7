<?php

namespace Database\Seeders;

use App\Models\Kit;
use Illuminate\Database\Seeder;

class KitSeeder extends Seeder
{
    public function run(): void
    {
        Kit::create(['nombre' => 'Kit Starter Robotics', 'user_id' => 1]);
        Kit::create(['nombre' => 'Educational Robotics Kit', 'user_id' => 2]);
        Kit::create(['nombre' => 'Advanced Kit Pro', 'user_id' => 3]);
    }
}
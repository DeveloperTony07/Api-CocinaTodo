<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Occasion;

class OccasionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Occasion::create(['occasion' => "Birthday"]);
        Occasion::create(['occasion' => "Father's Day"]);
        Occasion::create(['occasion' => "Mother's Day"]);
        Occasion::create(['occasion' => "Children"]);
        Occasion::create(['occasion' => "Christmas"]);
        Occasion::create(['occasion' => "Summer"]);
    }
}

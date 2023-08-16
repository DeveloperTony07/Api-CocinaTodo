<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MeasurementUnit;

class MeasurementUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        MeasurementUnit::create(['measurement_unit' => "ml.", 'description' => "millilitre"]);
        MeasurementUnit::create(['measurement_unit' => "L.", 'description' => "litre"]);
        MeasurementUnit::create(['measurement_unit' => "dl.", 'description' => "decilitre"]);
        MeasurementUnit::create(['measurement_unit' => "tsp.", 'description' => "teaspoon"]);
        MeasurementUnit::create(['measurement_unit' => "tbsp.", 'description' => "tablespoon"]);
        MeasurementUnit::create(['measurement_unit' => "fl oz.", 'description' => "fluid ounce"]);
        MeasurementUnit::create(['measurement_unit' => "gill", 'description' => "gill"]);
        MeasurementUnit::create(['measurement_unit' => "c.", 'description' => "cup"]);
        MeasurementUnit::create(['measurement_unit' => "pt.", 'description' => "pint"]);
        MeasurementUnit::create(['measurement_unit' => "qt.", 'description' => "quart"]);
        MeasurementUnit::create(['measurement_unit' => "mg.", 'description' => "milligram"]);

        MeasurementUnit::create(['measurement_unit' => "g.", 'description' => "gram"]);
        MeasurementUnit::create(['measurement_unit' => "kg.", 'description' => "kilogram"]);
        MeasurementUnit::create(['measurement_unit' => "lb.", 'description' => "pound"]);
        MeasurementUnit::create(['measurement_unit' => "oz.", 'description' => "ounce"]);
        MeasurementUnit::create(['measurement_unit' => "mm.", 'description' => "millimeter"]);
        MeasurementUnit::create(['measurement_unit' => "cm.", 'description' => "centimeter"]);
        MeasurementUnit::create(['measurement_unit' => "m.", 'description' => "meter"]);
        MeasurementUnit::create(['measurement_unit' => "", 'description' => ""]);
    }
}

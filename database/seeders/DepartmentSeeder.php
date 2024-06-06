<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Department; // Assuming Department model is in the "App\Models" namespace


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Department::insert([
        [
            'name' => 'CAST',
            'head' => 'Josefina juit Pangan'
        ],
        [
            'name' => 'CCJ',
            'head' => 'Victor Vistal'
        ],
        [
            'name' => 'CON',
            'head' => 'Apple Cosare'
        ],
        [
            'name' => 'BSM',
            'head' => 'Stern Salera'
        ],
        [
            'name' => 'COE',
            'head' => 'James MAnte'
        ]

        ]);
    }
}

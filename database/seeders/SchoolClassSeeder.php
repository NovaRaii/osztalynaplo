<?php

namespace Database\Seeders;

use App\Models\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassSeeder extends Seeder
{
    const ITEMS = [
        ['name' => '9.A', 'year' => 2025],
        ['name' => '10.B', 'year' => 2025],
        ['name' => '9.C', 'year' => 2024],
        ['name' => '10.D', 'year' => 2024],
        ['name' => '9.D', 'year' => 2023],
        ['name' => '10.A', 'year' => 2023],
    ];

    public function run()
    {
        foreach (self::ITEMS as $item) {
            $class = new SchoolClass();
            $class->name = $item['name'];
            $class->year = $item['year'];
            $class->save();
        }
    }
}

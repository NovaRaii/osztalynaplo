<?php

namespace Database\Seeders;

use App\Models\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassSeeder extends Seeder
{
    const ITEMS = [
        ['name' => '9.A', 'year' => 2025],
        ['name' => '10.B', 'year' => 2024],
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

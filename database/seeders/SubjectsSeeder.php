<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    const ITEMS = [
        'Matematika',
        'Fizika',
        'Irodalom',
        'Történelem',
        'Testnevelés',
        'Informatika',
        'Nyelvtan',
        'Angol nyelv',
        'Német nyelv',
        'Kémia'
    ];

    public function run()
    {
        foreach (self::ITEMS as $item) {
            $subject = new Subject();
            $subject->name = $item;
            $subject->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Mark;
use Illuminate\Database\Seeder;

class MarksSeeder extends Seeder
{
    const ITEMS = [
        ['student_id' => 1, 'subject_id' => 1, 'mark' => 5, 'date' => '2025-03-01'],
        ['student_id' => 2, 'subject_id' => 1, 'mark' => 4, 'date' => '2025-03-02'],
        ['student_id' => 3, 'subject_id' => 3, 'mark' => 3, 'date' => '2025-03-03'],
        ['student_id' => 4, 'subject_id' => 4, 'mark' => 2, 'date' => '2025-03-04'],
    ];

    public function run()
    {
        foreach (self::ITEMS as $item) {
            $mark = new Mark();
            $mark->student_id = $item['student_id'];
            $mark->subject_id = $item['subject_id'];
            $mark->mark = $item['mark'];
            $mark->date = $item['date'];
            $mark->save();
        }
    }
}

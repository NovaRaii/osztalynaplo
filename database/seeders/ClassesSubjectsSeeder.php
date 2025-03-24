<?php

namespace Database\Seeders;

use App\Models\Classessubject;
use Illuminate\Database\Seeder;

class ClassesSubjectsSeeder extends Seeder
{
    const ITEMS = [
        ['class_id' => 1, 'subject_id' => 1],
        ['class_id' => 1, 'subject_id' => 2],
        ['class_id' => 2, 'subject_id' => 3],
        ['class_id' => 2, 'subject_id' => 4],
    ];

    public function run()
    {
        foreach (self::ITEMS as $item) {
            $classSubject = new Classessubject();
            $classSubject->class_id = $item['class_id'];
            $classSubject->subject_id = $item['subject_id'];
            $classSubject->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Classessubject;
use Illuminate\Database\Seeder;

class ClassesSubjectsSeeder extends Seeder
{
    const ITEMS = [
        ['school_class_id' => 1, 'subject_id' => 1],
        ['school_class_id' => 1, 'subject_id' => 2],
        ['school_class_id' => 1, 'subject_id' => 3],
        ['school_class_id' => 1, 'subject_id' => 4],
        ['school_class_id' => 1, 'subject_id' => 5],
        ['school_class_id' => 2, 'subject_id' => 1],
        ['school_class_id' => 2, 'subject_id' => 2],
        ['school_class_id' => 2, 'subject_id' => 3],
        ['school_class_id' => 2, 'subject_id' => 4],
        ['school_class_id' => 2, 'subject_id' => 5],
        ['school_class_id' => 3, 'subject_id' => 1],
        ['school_class_id' => 3, 'subject_id' => 2],
        ['school_class_id' => 3, 'subject_id' => 3],
        ['school_class_id' => 3, 'subject_id' => 4],
        ['school_class_id' => 3, 'subject_id' => 5],
        ['school_class_id' => 3, 'subject_id' => 6],
        ['school_class_id' => 3, 'subject_id' => 7],
        ['school_class_id' => 4, 'subject_id' => 1],
        ['school_class_id' => 4, 'subject_id' => 2],
        ['school_class_id' => 4, 'subject_id' => 3],
        ['school_class_id' => 4, 'subject_id' => 4],
        ['school_class_id' => 5, 'subject_id' => 1],
        ['school_class_id' => 5, 'subject_id' => 2],
        ['school_class_id' => 5, 'subject_id' => 3],
        ['school_class_id' => 5, 'subject_id' => 4],
        ['school_class_id' => 6, 'subject_id' => 1],
        ['school_class_id' => 6, 'subject_id' => 2],
        ['school_class_id' => 6, 'subject_id' => 3],
        ['school_class_id' => 6, 'subject_id' => 4],
    ];

    public function run()
    {
        foreach (self::ITEMS as $item) {
            $classSubject = new Classessubject();
            $classSubject->school_class_id = $item['school_class_id'];
            $classSubject->subject_id = $item['subject_id'];
            $classSubject->save();
        }
    }
}

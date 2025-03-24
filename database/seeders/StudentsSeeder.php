<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    const ITEMS = [
        ['name' => 'Kiss Péter', 'gender' => 'male', 'class_id' => 1],
        ['name' => 'Nagy Anna', 'gender' => 'female', 'class_id' => 1],
        
        ['name' => 'Tóth Gábor', 'gender' => 'male', 'class_id' => 2],
        ['name' => 'Szabó Éva', 'gender' => 'female', 'class_id' => 2],
        
        ['name' => 'Horváth Zoltán', 'gender' => 'male', 'class_id' => 3],
        ['name' => 'Kovács Laura', 'gender' => 'female', 'class_id' => 3],
        ['name' => 'Farkas Márk', 'gender' => 'male', 'class_id' => 4],
        ['name' => 'Lukács Zsófia', 'gender' => 'female', 'class_id' => 4],
        
        ['name' => 'Pál László', 'gender' => 'male', 'class_id' => 5],
        ['name' => 'Juhász Klára', 'gender' => 'female', 'class_id' => 5],
        ['name' => 'Varga Tamás', 'gender' => 'male', 'class_id' => 6],
        ['name' => 'Sipos Petra', 'gender' => 'female', 'class_id' => 6],
    ];

    public function run()
    {
        foreach (self::ITEMS as $item) {
            $student = new Student();
            $student->name = $item['name'];
            $student->gender = $item['gender'];
            $student->class_id = $item['class_id'];
            $student->save();
        }
    }
}

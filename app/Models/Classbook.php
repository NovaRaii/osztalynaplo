<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SchoolClass;
use Illuminate\Database\Eloquent\Student;
use Illuminate\Database\Eloquent\Classessubject;
use Illuminate\Database\Eloquent\Mark;


class Classbook extends Model
{
    public $timestamps = false;
    protected $fillable = ['schoolclass_id', 'student_id', 'classessubject_id', 'mark_id'];
  /*
    function schoolclass()
    {
        return $this->belongsTo(SchoolClass::class);
    }

    function student()
    {
        return $this->belongsTo(Student::class);
    }

    function classessubject()
    {
        return $this->belongsTo(Classessubject::class);
    }

    function mark()
    {
        return $this->belongsTo(Mark::class);
    }
    */
}

   
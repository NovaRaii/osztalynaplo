<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classessubject extends Model
{
    public $timestamps = false;
    protected $fillable = ['school_class_id', 'subject_id'];

    public function class()
    {
        return $this->belongsTo(Schoolclass::class, 'school_class_id');
    }

    public function classessubject()
    {
        return $this->belongsTo(SchoolClass::class, 'subject_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classessubject extends Model
{
    public $timestamps = false;
    protected $fillable = ['class_id', 'subject_id'];

    public function schoolclass()
    {
        return $this->belongsTo(Schoolclass::class, 'class_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}

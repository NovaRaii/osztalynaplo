<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classessubject extends Model
{
    public $timestamps = false;
    protected $fillable = ['class_id', 'subject_id'];
}

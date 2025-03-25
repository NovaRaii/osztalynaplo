<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'year'];
    protected $table = 'classes';
    
    function students()
    {
        return $this->hasMany(Student::class);
    }

    function classessubjects()
    {
        return $this->hasMany(Classessubject::class);
    }
}

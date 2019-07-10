<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    // public $primaryKey = 'id';

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = true;

    public function fees()
    {
        return $this->hasMany(Fees::class);
    }
}

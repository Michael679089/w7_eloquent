<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function course() // a schedule can only have one course.
    {
        return $this->hasOne(Course::class);
    }
}

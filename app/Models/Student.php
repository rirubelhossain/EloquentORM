<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model /// this is student model student inherited by model class 
{
    use HasFactory;
    protected $table = 'students';
}

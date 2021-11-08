<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    use HasFactory;

    protected $table = 'courses';

    // protected $primaryKey = 'code';

    protected $fillable = ['code', 'name', 'lecturer', 'sks', 'description'];
}

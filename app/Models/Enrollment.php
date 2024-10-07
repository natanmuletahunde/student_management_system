<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{ 
    protected $table = 'enrollments';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'batch_id', 'student_id'];
    use HasFactory;
}

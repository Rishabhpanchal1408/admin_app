<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student_tbl';
    protected $fillable = ['first_name', 'last_name', 'gender', 'number', 'hobby', 'address', 'profile_photo', 'password'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}

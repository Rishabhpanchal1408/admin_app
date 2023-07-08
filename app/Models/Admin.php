<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin_tbl';
    protected $fillable = ['email', 'password'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}

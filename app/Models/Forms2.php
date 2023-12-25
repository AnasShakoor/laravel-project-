<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms2 extends Model
{
    use HasFactory;
    protected  $table = 'forms2';
    protected $fillable = ['name', 'email', 'password'];
     protected $primaryKey = "my_id";
} 


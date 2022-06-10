<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    //allows a field to be mass assigned
    //using guarded to prevent mass assignment
    protected  $guarded = [''];
//    protected $fillable=['title'];
}

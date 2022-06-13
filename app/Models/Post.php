<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class post extends Model
{
    use HasFactory;
    //allows a field to be mass assigned
    //using guarded to prevent mass assignment
    protected  $guarded = [''];
//    protected $fillable=['title'];
    public function  category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}

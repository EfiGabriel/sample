<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotlistItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'Item'
    ];
    protected $dates = ['created_at','updated_at','deleted_at'];
}

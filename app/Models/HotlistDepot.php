<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotlistDepot extends Model
{
    use HasFactory;
    protected $fillable = [
        'Depot'
    ];
    protected $dates = ['created_at','updated_at','deleted_at'];
}

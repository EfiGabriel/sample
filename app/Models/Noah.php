<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noah extends Model
{
    use HasFactory;

    protected $fillable = [
        'SBU',
        'Depot',
        'Item',
        'UOM',
        'Pallet',
        'Actual',
        'TP',
        'Item Type',
        'Status'
    ];
    protected $dates = ['created_at','updated_at','deleted_at'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voivodeship extends Model
{
    use HasFactory;

    protected $table = 'voivodeships';
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}

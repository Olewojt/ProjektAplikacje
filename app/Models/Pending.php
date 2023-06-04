<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pending extends Model
{
    use HasFactory;
    
    protected $table = 'pending';

    protected $fillable = [
        'user_id',
        'accepted'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

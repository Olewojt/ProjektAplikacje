<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAddress extends Model
{
    use HasFactory;

    protected $table = 'company_address';
    public $timestamps = false;

    protected $fillable = [
        'company_id',
        'voivodeship_id',
        'city',
        'street',
        'building_number',
        'zip_code',
    ];

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function voivodeship() {
        return $this->belongsTo(Voivodeship::class);
    }
}

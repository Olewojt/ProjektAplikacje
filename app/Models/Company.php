<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'companies';

    protected $fillable = [
        'name',
        'description',
        'regon',
        'nip',
        'phone_number',
        'e_mail',
        'website',
        'user_id',
        'industry_id'
    ];

    public function address()
    {
        return $this->hasOne(CompanyAddress::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

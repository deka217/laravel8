<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mobil extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $collection = 'mobils';
    protected $primaryKey = '_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'mesin',
        'kapasitas_penumpang',
        'tipe',
        'profileId'
    ];
    public function relasiprofile()
    {
        return $this->hasMany(Profile::class, 'jenisId','mobil_id');
    }

    
}

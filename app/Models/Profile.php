<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Profile extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $collection = 'profiles';
    protected $primaryKey = '_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tahun_keluaran',
        'warna',
        'harga',
        'jenisId'
    ];
    public function relasimotor()
    {
        return $this->hasMany(Motor::class, 'profile_id','_id');
    }

    public function relasimobil()
    {
        return $this->hasMany(Mobil::class, 'profile_id','mobil_id');
    }

    
}

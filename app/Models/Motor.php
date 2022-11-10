<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Motor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $collection = 'motors';
    protected $primaryKey = '_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'mesin',
        'tipe_suspensi',
        'tipe_transmisi',
        'profileId'
    ];
    public function relasiprofile()
    {
        return $this->hasMany(Profile::class, 'jenisId','motor_id');
    }

    
}

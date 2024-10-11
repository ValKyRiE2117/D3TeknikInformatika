<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dosen extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'dosen';

    // The attributes that are mass assignable
    protected $fillable = [
        'nama_dosen',
        'slug_dosen',
        'npp',
        'alamat_dosen',
        'telp_dosen',
        'email_dosen',
        'password_dosen',
    ];

    // The attributes that should be hidden for arrays (e.g., password)
    protected $hidden = [
        'password_dosen',
        'remember_token',
    ];

    public function setPasswordDosenAttribute($value)
    {
        $this->attributes['password_dosen'] = Hash::make($value);
    }

    public function getAuthPassword()
    {
        return $this->password_dosen;
    }
}

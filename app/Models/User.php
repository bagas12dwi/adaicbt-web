<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone_number',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function privilege()
    {
        return $this->hasOne('\App\Models\Privilege');
    }

    public function psikoedukasi()
    {
        return $this->hasMany('\App\Models\Psikoedukasi');
    }

    public function relaksasi()
    {
        return $this->hasMany('\App\Models\Relaksasi');
    }

    public function restrukturisasi()
    {
        return $this->hasMany('\App\Models\Restrukturisasi');
    }

    public function terapi()
    {
        return $this->hasMany('\App\Models\Terapi');
    }

    public function document()
    {
        return $this->belongsTo('\App\Models\Document');
    }
}

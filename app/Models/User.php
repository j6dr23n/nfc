<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
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
    ];

    public function isAdmin()
    {
        return $this->role === 'admin' ? true : false;
    }

    public function isUser()
    {
        return $this->role === 'user' ? true : false;
    }

    public function info()
    {
        return $this->hasOne(Info::class);
    }

    public function socials()
    {
        return $this->hasMany(Social::class)->whereNotNull('url');
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
<<<<<<< HEAD
=======
    /** @use HasFactory<\Database\Factories\UserFactory> */
>>>>>>> cbc2d63 (Laravelプロジェクトの初回コミット)
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var list<string>
>>>>>>> cbc2d63 (Laravelプロジェクトの初回コミット)
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var list<string>
>>>>>>> cbc2d63 (Laravelプロジェクトの初回コミット)
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}

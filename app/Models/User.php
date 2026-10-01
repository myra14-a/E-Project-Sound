<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    /** @use HasFactory<UserFactory> */
    use HasFactory;

    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

<<<<<<< HEAD
    public function reviews() { return $this->hasMany(\App\Models\Review::class); }
    public function ratings() { return $this->hasMany(\App\Models\Rating::class); }

=======
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
<<<<<<< HEAD
        'username',
        'address',
        'phone',
        'email',
        'password',
        'is_admin',
=======
        'email',
        'password',
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
<<<<<<< HEAD
        'is_admin',
=======
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
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
<<<<<<< HEAD
            'is_admin' => 'boolean',
=======
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
            'password' => 'hashed',
        ];
    }
}

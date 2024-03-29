<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable, HasRoles;

    const ADMIN = 'admin';
    const USER = 'user';
    const VIP_USER = 'vip_user';
    const BUSINESS = 'business';
    const VIP_BUSINESS = 'vip_business';
    const MEDIA = 'media';

    public static function getAllRoleNames()
    {
        return [
            self::ADMIN,
            self::USER,
            self::VIP_USER,
            self::BUSINESS,
            self::VIP_BUSINESS,
            self::MEDIA
        ];
    }

    protected $guard_name = 'jwt';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'google_id', 'fb_id', 'avatar', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'google_id', 'fb_id'
    ];

    protected $appends = [
        'avatar_url'
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'avatar' => $this->avatar_url,
            'roles' => $this->getRoleNames(),
            'has_password' => !empty($this->password)
        ];
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function getAvatarUrlAttribute()
    {
        return $this->avatar ? Storage::url($this->avatar) : asset('assets/img/faces/face-0.jpg');
    }
}

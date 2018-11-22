<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'name',
        'description',
        'first_name',
        'last_name',
        'job_title',
        'address',
        'street',
        'city',
        'state',
        'vip',
        'active',
        'avatar',
        'video',
        'zip',
        'email',
        'phone',
        'url',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'referral'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

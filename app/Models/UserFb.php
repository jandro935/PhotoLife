<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFb extends Model
{
    protected $table = 'users_fb';

    protected $fillable = ['user_id', 'fb_id', 'gender', 'profile_url', 'avatar_original'];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}

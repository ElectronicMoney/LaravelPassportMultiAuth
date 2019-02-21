<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class UserRole extends Model
{
    protected $fillable = ['name'];

    /**
     * admin relationship
     *
     * @return User
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}

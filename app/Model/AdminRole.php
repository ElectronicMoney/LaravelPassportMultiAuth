<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Admin;

class AdminRole extends Model
{

    protected $fillable = ['name'];

    /**
     * admin relationship
     *
     * @return Admin
     */
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
}

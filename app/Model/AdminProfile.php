<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    protected $table = 'adminprofile';

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
}

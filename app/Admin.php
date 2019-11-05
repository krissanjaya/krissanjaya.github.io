<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $table= "tb_admin";
    protected $primaryKey = "admin_id";
    public $timestamps = true;

    protected $fillable = [
        'admin_username', 'admin_password', 'admin_logged_in','admin_logged_out', 'admin_nama', 'admin_image', 'role_id', 'admin_active',
    ];

    protected $hidden = [
        'admin_password',
    ];

    public function getAuthPassword()
    {
      return $this->admin_password;
    }
}

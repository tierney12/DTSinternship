<?php

namespace App\Models;

use App\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Ultraware\Roles\Traits\HasRoleAndPermission;

/**
 * @property string email
 */
class User extends Authenticatable implements \Ultraware\Roles\Contracts\HasRoleAndPermission
{
    use Notifiable, HasRoleAndPermission;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class, 'user_supplier');
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

    public function documents(){
        return this.$this->morphToMany(Document::class, 'documentable');
    }
}

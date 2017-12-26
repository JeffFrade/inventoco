<?php

namespace InvOco;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    protected $primaryKey = 'user';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public static function getUser()
    {
        return User::find(auth()->id());
    }

    public function levels()
    {
        return $this->hasOne(Level::class, 'id_level', 'id_level');
    }
}

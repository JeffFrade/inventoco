<?php

namespace InvOco;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'user';

    protected $primaryKey = 'user';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'name', 'email', 'password', 'id_level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'id_level' => 'integer',
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

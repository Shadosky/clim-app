<?php
/**
 * Created by PhpStorm.
 * User: kevingiroux
 * Date: 26/06/2018
 * Time: 18:03
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $connection = 'mysql';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the phone record associated with the user.
     */
    public function vote()
    {
        return $this->hasOne('App\Models\PollVotes', 'id_user');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: kevingiroux
 * Date: 26/06/2018
 * Time: 18:03
 */
namespace App\Models;


class Users extends Model
{
    protected $connection = 'psql';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'versions';

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
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
}
<?php
/**
 * Created by PhpStorm.
 * User: kevingiroux
 * Date: 26/06/2018
 * Time: 18:03
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollVotes extends Model
{
    protected $connection = 'mysql';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'poll_votes';

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'vote',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the user that owns the vote.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Users', 'id_user');
    }
}
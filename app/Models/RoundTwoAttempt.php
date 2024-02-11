<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoundTwoAttempt extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'username',
        'password',
        'correct'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'username' => 'string',
        'password' => 'string',
        'correct' => 'boolean',
    ];
}

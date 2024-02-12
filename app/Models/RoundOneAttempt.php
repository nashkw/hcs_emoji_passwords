<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoundOneAttempt extends Model
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
        'correct',
        'is_group_a',
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
        'is_group_a' => 'boolean',
    ];
}

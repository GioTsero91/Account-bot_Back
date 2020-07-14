<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";
    protected $fillable = [
        'fname', 'lname', 'username', 'password', 'email'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
<?php

namespace App;

use Core\Model;
use App\User;

class User extends Model
{
    public $table = 'users';

    public $id;
    public $name;
    public $lastname;
    public $email;
    public $password;

    public $fields = [
        'name',
        'lastname',
        'email',
        'password',
    ];
}
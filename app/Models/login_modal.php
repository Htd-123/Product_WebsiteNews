<?php

namespace App\Models;

use CodeIgniter\Model;

class login_modal extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'user_id';

    protected $allowedFields = ['username', 'password'];

    public function getUserByUsername($username, $password)
    {
        return $this->where(['username' => $username, 'password' => $password])->first();
    }
}

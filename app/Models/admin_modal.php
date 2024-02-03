<?php

namespace App\Models;

use CodeIgniter\Model;

class admin_modal extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'Title', 'HeaderImageURL', 'Content', 'categories_id'];

    public function insertAdmin($data)
    {
        return $this->insert($data);
    }

    public function deleteAdmin($data)
    {
        return $this->delete($data);
    } 
}

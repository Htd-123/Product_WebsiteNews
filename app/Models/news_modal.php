<?php

namespace App\Models;

use CodeIgniter\Model;

class news_modal extends Model
{
    public function getCategories()
    {
        return $this->db->table('Categories')->get()->getResult();
    }

    public function getArticleTitles()
    {
        return $this->db->table('articles')->select('id, Title, HeaderImageURL')->orderBy('Title', 'DESC')->get()->getResult();
    }
    

    protected $table = 'articles';
    protected $primarykey = 'id';
    protected $content_Text = 'Content';
}

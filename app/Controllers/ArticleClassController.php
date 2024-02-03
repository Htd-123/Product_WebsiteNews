<?php

namespace App\Controllers;

use App\Models\ArticleClassification_modal;

class ArticleClassController extends BaseController
{
    public function index($danhMucId)
    {
        $newsModel = new \App\Models\news_modal();
        $danhMucModel = new \App\Models\Categories_model();
        $tieuDeBaiBaoModel = new \App\Models\ArticleClassification_modal();
        
        $data['articleTitles'] = $newsModel->getArticleTitles();
        $data['categories'] = $newsModel->getCategories();
    
        $danhMuc = $danhMucModel->find($danhMucId);

        $data['danh_muc'] = $danhMuc;
        $data['tieu_de_bai_bao'] = $tieuDeBaiBaoModel->where('categories_id', $danhMucId)->findAll();
        return view('article_view', $data);
    }
}

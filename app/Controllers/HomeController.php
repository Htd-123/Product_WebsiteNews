<?php

namespace App\Controllers;

use App\Models\content_model;
use App\Models\news_modal;

class HomeController extends BaseController
{
    public function index()
    {
        $newsModel = new news_modal();
        $data['articleTitles'] = $newsModel->getArticleTitles();
        $data['categories'] = $newsModel->getCategories();
        
        return view('home_view', $data); 
    }

    public function view($id)
    {
        $newModel = new news_modal();

        $data['new_items'] = $newModel->find($id);
        $data['articleTitles'] = $newModel->getArticleTitles();
        $data['categories'] = $newModel->getCategories();

        return view('content_view', $data);
    }
}

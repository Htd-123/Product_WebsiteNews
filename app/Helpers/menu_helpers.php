<?php

function display_menu()
{
    $newsModel = new \App\Models\news_modal();
    $data['articleTitles'] = $newsModel->getArticleTitles();
    $data['categories'] = $newsModel->getCategories();

    echo view('menu', $data);
}

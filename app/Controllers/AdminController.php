<?php

namespace App\Controllers;


class AdminController extends BaseController
{
    public function index()
    {
        return view('admin_view');
    }

    public function saveArticle()
    {
        $admin_modal = new \App\Models\admin_modal();

        $data = [
            'id' => $this->request->getVar('id'),
            'Title' => $this->request->getVar('Title'),
            'HeaderImageURL' => $this->request->getVar('HeaderImageURL'),
            'Content'=> $this->request->getVar('Content'),
            'categories_id'=> $this->request->getVar('categories_id'),
        ];

        $admin_modal->insertAdmin($data);

        return redirect()->to('add-article');
    }

    public function deleteArticle()
    {
        $admin_modal = new \App\Models\admin_modal();

        $data = [
            'id'=> $this->request->getVar('id'),
        ];

        $admin_modal->deleteAdmin($data);

        return redirect()->to('add-article');
    }

    public function editArticle()
    {
        $id = $this->request->getPost('id');
        $articleModel = new \App\Models\admin_modal();
        $article = $articleModel->find($id);

        if ($article) {
            return view('edit_article', ['article' => $article]);
        } else {
            return "Bài báo không tồn tại";
        }
    }

    public function update()
    {
        $articleModel = new \App\Models\admin_modal();
        $id = $this->request->getPost('id');

        $data = [
            'Title' => $this->request->getPost('Title'),
            'HeaderImageURL' => $this->request->getPost('HeaderImageURL'),
            'Content' => $this->request->getPost('Content'),
            'categories_id' => $this->request->getPost('categories_id'),
        ];

        $articleModel->update($id, $data);

        return "Bài báo đã được cập nhật thành công!";
    }
}

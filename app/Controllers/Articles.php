<?php

namespace App\Controllers;

use App\Models\ArticlesModel;

class Articles extends BaseController
{
    protected $articlesModel;

    public function __construct()
    {
        $this->articlesModel = new ArticlesModel();
    }

    public function manageArticles()
    {
        $articles = $this->articlesModel->getArticles();

        // Tampilkan halaman manajemen artikel
        $data = [
            'title' => 'Manage Articles',
            'title_page' => 'Mengatur Artikel',
            'breadcrumb' => 'Artikel',
            'articles' => $articles,
        ];

        return view('admin/manage_articles/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Artikel'
        ];

        return view('admin/manage_articles/create', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->articlesModel->save([
            'title'     => $this->request->getVar('title'),
            'slug'      => $slug,
            'content'   => $this->request->getVar('content'),
        ]);

        session()->setFlashdata('msg', 'Artikel berhasil ditambahkan.');

        return redirect()->to('/admin/manage_articles/');
    }

    public function delete($id)
    {
        $this->articlesModel->delete($id);
        session()->setFlashdata('msg', 'Artikel berhasil dihapus');

        return redirect()->to('/admin/manage_articles/');
    }
}

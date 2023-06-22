<?php

namespace App\Controllers;

use App\Models\ArticlesModel;
use App\Models\CommentsModel;

class Admin extends BaseController
{
    protected $articlesModel;
    protected $commentsModel;

    public function __construct()
    {
        $this->articlesModel = new ArticlesModel();
        $this->commentsModel = new CommentsModel();
    }

    public function index()
    {
        $articles = $this->articlesModel->getArticles();
        $comments = $this->commentsModel->getComments();

        // Menghitung jumlah artikel & komentar
        $articleCount = $this->articlesModel->getCountsArticles();
        $commentCount = $this->commentsModel->getCountsComments();

        $data = [
            'title' => 'Dashboard Admin',
            'title_page' => 'Dashboard',
            'breadcrumb' => 'Home',
            'articleCount' => $articleCount,
            'commentCount' => $commentCount,
            'articles' => $articles,
            'comments' => $comments
        ];
        return view('admin/dashboard', $data);
    }

    public function manageReports()
    {
        // Tampilkan halaman manajemen laporan
        return view('admin/manage_reports');
    }

    public function logout()
    {
        // Hapus session atau token saat admin logout
        session()->remove('admin_id');

        return redirect()->to('/');
    }
}

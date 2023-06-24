<?php

namespace App\Controllers;

use App\Models\ArticlesModel;
use App\Models\CommentsModel;
use Dompdf\Dompdf;

class Admin extends BaseController
{
    protected $articlesModel;
    protected $commentsModel;
    protected $dompdf;

    public function __construct()
    {
        $this->articlesModel = new ArticlesModel();
        $this->commentsModel = new CommentsModel();
        $this->dompdf = new Dompdf();
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
        $articles = $this->articlesModel->getArticles();
        $categoryCounts = $this->commentsModel->getCountByCategory();

        // Menghitung jumlah artikel & komentar
        $articleCount = $this->articlesModel->getCountsArticles();
        $commentCount = $this->commentsModel->getCountsComments();

        $data = [
            'title' => 'Manage Reports',
            'title_page' => 'Mengatur Laporan',
            'breadcrumb' => 'Laporan',
            'articles' => $articles,
            'categoryCounts' => $categoryCounts,
            'articleCount' => $articleCount,
            'commentCount' => $commentCount,
        ];
        // Tampilkan halaman manajemen laporan
        return view('admin/manage_reports', $data);
    }

    public function printpdf()
    {
        $dompdf = $this->dompdf;
        $articles = $this->articlesModel->getArticles();
        $categoryCounts = $this->commentsModel->getCountByCategory();

        // Menghitung jumlah artikel & komentar
        $articleCount = $this->articlesModel->getCountsArticles();
        $commentCount = $this->commentsModel->getCountsComments();

        $data = [
            'title' => 'Manage Reports',
            'title_page' => 'Mengatur Laporan',
            'breadcrumb' => 'Laporan',
            'articles' => $articles,
            'categoryCounts' => $categoryCounts,
            'articleCount' => $articleCount,
            'commentCount' => $commentCount,
        ];

        $html = view('admin/manage_reports', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        // $dompdf->stream(); // download file
        $dompdf->stream('Laporan Mading Online.pdf', [
            'Attachment' => false
        ]);
    }

    public function logout()
    {
        // Hapus session atau token saat admin logout
        session()->remove('admin_id');

        return redirect()->to('/');
    }
}

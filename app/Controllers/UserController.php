<?php

namespace App\Controllers;

use App\Models\ArticlesModel;
use App\Models\CommentsModel;

class UserController extends BaseController
{
    protected $articlesModel;
    protected $commentsModel;

    public function __construct()
    {
        // Membuat instance model
        $this->articlesModel = new ArticlesModel();
        $this->commentsModel = new CommentsModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Mading Sekolah Tinggi JeWePe'
        ];
        return view('home', $data);
    }

    public function articles()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $findArticle = $this->articlesModel->search($keyword);
        } else {
            $findArticle = $this->articlesModel;
        }

        // Mengambil data artikel dari database menggunakan model
        $articles = $findArticle->getArticles();

        $data = [
            'title' => 'Artikel | Berita Terkini',
            'articles' => $articles
        ];
        return view('articles/index', $data);
    }

    public function comments()
    {
        $comments = $this->commentsModel->getComments();
        $articles = $this->articlesModel->getArticles();

        $data = [
            'title' => 'Komentar Artikel',
            'comments' => $comments,
            'articles' => $articles
        ];
        return view('articles/comments', $data);
    }

    public function page($slug)
    {
        $articles = $this->articlesModel->getArticles();
        $articles = $this->articlesModel->where(['slug' => $slug])->first();

        $data = [
            'title' => 'Page Article',
            'articles' => $articles,
        ];
        return view('articles/page', $data);
    }
}

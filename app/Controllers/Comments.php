<?php

namespace App\Controllers;

use App\Models\CommentsModel;

class Comments extends BaseController
{
    protected $commentsModel;

    public function __construct()
    {
        $this->commentsModel = new CommentsModel();
    }

    public function manageComments()
    {
        $comments = $this->commentsModel->getComments();
        $comments = $this->commentsModel->getAllCommentsWithArticleTitle();

        $data = [
            'title' => 'Manage Comments',
            'title_page' => 'Mengatur Komentar',
            'breadcrumb' => 'Komentar',
            'comments' => $comments
        ];
        // Tampilkan halaman manajemen komen
        return view('admin/manage_comments', $data);
    }

    public function store()
    {
        // dd($this->request->getVar());
        $this->commentsModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'comment_content' => $this->request->getVar('comment_content'),
            'article_id' => $this->request->getVar('article_id')
        ]);

        session()->setFlashdata('msg', 'Berhasil menambahkan komentar.');

        return redirect()->back();
    }

    public function delete($id)
    {
        $this->commentsModel->delete($id);
        session()->setFlashdata('msg', 'Komentar berhasil dihapus');

        return redirect()->to('/admin/manage_comments/');
    }
}

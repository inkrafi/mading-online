<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentsModel extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'comment_id';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'email', 'comment_content', 'article_id'];

    public function getComments()
    {
        $this->orderBy('created_at', 'DESC');
        return $this->findAll();
    }

    public function getAllCommentsWithArticleTitle()
    {
        $builder = $this->db->table('comments');
        $builder->select('comments.*, articles.title');
        $builder->join('articles', 'comments.article_id = articles.article_id');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getCountsComments()
    {
        // $articleCount = $this->db->table('articles')->countAllResults();
        $commentCount = $this->db->table('comments')->countAllResults();

        return [
            // 'articleCount' => $articleCount,
            'commentCount' => $commentCount
        ];
    }
}

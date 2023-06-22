<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticlesModel extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'article_id';
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'slug', 'content'];

    public function getArticles()
    {
        $this->orderBy('created_at', 'DESC');
        return $this->findAll();
    }

    public function getCountsArticles()
    {
        $articleCount = $this->db->table('articles')->countAllResults();

        return [
            'articleCount' => $articleCount,
        ];
    }
}

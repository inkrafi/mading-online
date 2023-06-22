<?= $this->extend('layout/admin/template'); ?>


<?= $this->section('content'); ?>


<div class="dashboard-section">
    <div class="section-title"></div>
    <div class="row">
        <div class="col-md-6">
            <!-- Sub-Bagian 1 -->
            <div class="sub-section">
                <h2><?= implode($articleCount); ?></h2>
                <p>Jumlah Artikel</p>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Sub-Bagian 2 -->
            <div class="sub-section justify-content-center">
                <h2><?= implode($commentCount); ?></h2>
                <p>Jumlah Komentar</p>
            </div>
        </div>
    </div>
</div>

<div class="dashboard-section">
    <div class="section-title"></div>
    <div class="row">
        <div class="col-md-5">
            <!-- Sub-Bagian 3 -->
            <div class="sub-section sub-section-overflow">
                <h2 class="pt-3">Artikel Terbaru</h2>
                <ul class="list-group mt-4">
                    <?php foreach ($articles as $article) : ?>
                        <li class="list-group-item">
                            <div class="row">
                                <a class="col article fw-bold" href="/articles/"><?= $article['title']; ?></a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="col-md-7">
            <!-- Sub-Bagian 4 -->
            <div class="sub-section sub-section-overflow">
                <h2 class="pt-3">Komentar</h2>
                <ul class="list-group mt-4">
                    <?php foreach ($comments as $comment) : ?>
                        <li class="list-group-item"><?= substr($comment['comment_content'], 0, 80) . "..."; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>
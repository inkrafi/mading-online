<?= $this->extend('layout/users/template'); ?>
<?= $this->section('content'); ?>
<style>
    .border-article {
        border: 3px solid #333;
        border-radius: 5px;
        padding: 10px;
    }
</style>

<div class="container">
    <h2 class="mt-5 mb-4">BERITA TERKINI</h2>

    <!-- Flashdata ketika komentar berhasil ditambahkan-->
    <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('msg'); ?>
        </div>
    <?php endif; ?>

    <!-- Tombol Tambahkan Komentar -->
    <div class="col-md mb-3">
        <a href="/articles/comments" class="btn btn-primary">Tambahkan Komentar</a>
    </div>


    <!-- List Artikel dari manage_article -->
    <?php foreach ($articles as $article) : ?>
        <div class="row border-article mb-3">
            <div class="col-md-12">
                <h5><?= $article['title']; ?></h5>
                <hr>
                <p>
                    <?= $article['content']; ?>
                </p>
                <div class="d-flex justify-content-between pb-2">
                    <div class="row">
                        <!-- <div class="col-md mb-3">
                            <form action="/articles/<?= $article['slug']; ?>/comments" method="get">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="<?= $article['article_id']; ?>">
                                <button type="submit">Tambahkan Komentar</button>
                            </form>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <a href="/articles/<?= $article['slug']; ?>" class="btn btn-dark">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<?= $this->endSection(); ?>
<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('msg')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('msg'); ?>
    </div>
<?php endif; ?>

<!-- Tombol Tambah Artikel -->
<div class="d-flex justify-content-end">
    <a href="/admin/manage_articles/create" class="btn btn-primary mb-3">+ Tambah Artikel</a>
</div>

<!-- Daftar Artikel -->
<table class="table table-bordered align-middle">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Judul Artikel</th>
            <th>Tanggal & Waktu</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($articles as $article) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $article['title']; ?></td>
                <td><?= $article['created_at']; ?></td>
                <td>
                    <!-- Tombol Edit Artikel -->
                    <a href="/admin/manage_articles/edit/<?= $article['slug']; ?>" class="btn btn-warning">Edit</a>
                    <!-- Tombol Hapus Artikel -->
                    <form action="/articles/<?= $article['article_id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus artikel?');">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</div>
<?= $this->endSection(); ?>
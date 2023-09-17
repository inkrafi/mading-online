<?php

use PhpParser\Node\Stmt\Foreach_;
?>
<?= $this->extend('layout/admin/form/template'); ?>
<?= $this->section('content'); ?>
<style>
    .card {
        border-radius: 20px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 card mt-4">
            <h3 class="my-3 card-header">Ubah Data Artikel</h3>
            <div class="card-body">
                <form action="/articles/update/<?= $articles['article_id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="slug" value="<?= $articles['slug']; ?>">
                    <!-- Judul Artikel -->
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Judul Artikel</label>
                        <div class="col-sm-10">
                            <!-- Validasi input judul -->
                            <input type="text" class="form-control <?= (session()->getFlashdata('_ci_validation_errors')) ? 'is-invalid' : ''; ?>" id="title" name="title" value="<?= old('title', $articles['title']); ?>">
                            <div class="invalid-feedback">
                                judul artikel harus diisi.
                            </div>
                        </div>
                    </div>
                    <!-- Isi Artikel -->
                    <div class="row mb-3">
                        <label for="content" class="col-sm-2 col-form-label">Isi Artikel</label>
                        <div class="col-sm-10">
                            <!-- Validasi input isi artikel -->
                            <textarea class="form-control <?= (session()->getFlashdata('_ci_validation_errors')) ? 'is-invalid' : ''; ?>" id="content" rows="10" name="content"><?= old('content', $articles['content']); ?></textarea>
                            <div class="invalid-feedback">
                                isi artikel harus diisi.
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Ubah Artikel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
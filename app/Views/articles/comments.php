<?= $this->extend('layout/users/template'); ?>
<?= $this->section('content'); ?>
<style>
  body {
    background-color: #00A31130;
  }

  .btn-article {
    background-color: #00A388;
  }

  .card {
    border-radius: 20px;
  }

  .wrapper {
    margin: 100px 0;
  }
</style>
<div class="container">
  <div class="row justify-content-center wrapper">
    <div class="col-8 card mt-4">
      <h3 class="my-3 card-header">Kolom Komentar</h3>
      <div class="card-body">
        <form action="/comments/store" method="post">
          <?= csrf_field(); ?>

          <!-- Dropdown Artikel -->
          <label for="article_id" class="col-sm-2 col-form-label">Pilih Artikel</label>
          <select name="article_id" class="mb-4">
            <?php foreach ($articles as $article) : ?>
              <option value="<?= $article['article_id']; ?>"><?= $article['title']; ?></option>
            <?php endforeach; ?>
          </select>

          <!-- Form komentar (nama, email, isi komentar) -->
          <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name">
            </div>
          </div>
          <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email">
            </div>
          </div>
          <div class="row mb-3">
            <label for="comment_content" class="col-sm-2 col-form-label">Komentar</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="comment_content" rows="4" name="comment_content"></textarea>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-article text-white">Tambahkan Komentar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
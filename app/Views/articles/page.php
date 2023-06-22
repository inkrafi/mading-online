<?= $this->extend('layout/users/template'); ?>
<?= $this->section('content'); ?>
<style>
  .card {
    border-radius: 10px;
    padding: 0 30px;
  }
</style>

<div class="container">
  <h2 class="mt-5 mb-4"><?= $articles['title']; ?></h2>
  <div>
    <p><?= $articles['content']; ?></p>
  </div>
  <br><br>
  <div>
    <p>Diposting tanggal : <?= $articles['created_at']; ?></p>
  </div>

  <div class="row mb-5">
    <div class="card col-6 mt-4">
      <h3 class="my-3">Kolom Komentar</h3>
      <!-- Flashdata ketika komentar berhasil ditambahkan-->
      <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('msg'); ?>
        </div>
      <?php endif; ?>
      <div class="card-body">
        <form action="/comments/store" method="post">
          <?= csrf_field(); ?>

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
              <textarea class="form-control" id="comment_content" rows="5" name="comment_content"></textarea>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <input type="hidden" name="article_id" value="<?= $articles['article_id']; ?>">
            <button type="submit" class="btn btn-dark">Tambahkan Komentar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
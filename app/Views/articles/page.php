<?= $this->extend('layout/users/template'); ?>
<?= $this->section('content'); ?>
<style>
  body {
    margin-top: 7rem;
  }

  .card {
    border-radius: 6px;
    padding: 0 30px;
  }

  .btn-article {
    background-color: #00A388;
    color: white;
  }

  .btn-article:hover {
    color: white;
  }

  .space {
    margin-top: 150px;
  }
</style>

<div class="container">
  <h2 class="mt-5 mb-4"><?= $articles['title']; ?></h2>
  <div class="row">
    <div class="col-md-7">
      <p><?= $articles['content']; ?></p>
    </div>
  </div>
  <br><br>
  <div class="space">
    <p>Diposting tanggal : <?= $articles['created_at']; ?> WIB</p>
  </div>

  <div class="row mb-5">
    <div class="card col-lg-6 mt-4">
      <h3 class="my-3">Tinggalkan Komentar</h3>
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
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="comment_content" class="col-sm-2 col-form-label">Komentar</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="comment_content" rows="3" name="comment_content" required></textarea>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <input type="hidden" name="article_id" value="<?= $articles['article_id']; ?>">
            <button type="submit" class="btn btn-article">Tambahkan Komentar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
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
      <h3 class="my-3 card-header">Tambah Data Artikel</h3>
      <div class="card-body">
        <form action="/articles/save" method="post">
          <?= csrf_field(); ?>
          <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Judul Artikel</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" name="title">
            </div>
          </div>
          <div class="row mb-3">
            <label for="content" class="col-sm-2 col-form-label">Isi Artikel</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="content" rows="10" name="content"></textarea>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Tambah Artikel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
<?= $this->extend('layout/admin/template'); ?>
<?= $this->section('content'); ?>

<!-- Flashdata ketika komentar berhasil dihapus -->
<?php if (session()->getFlashdata('msg')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('msg'); ?>
  </div>
<?php endif; ?>

<!-- Tabel Manage Comments -->
<table class="table table-bordered align-middle">
  <thead class="table-light">
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Komentar</th>
      <th>Tanggal & Waktu</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <!-- Tampilkan data komentar dalam loop -->
    <?php foreach ($comments as $comment) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $comment['title']; ?></td>
        <td>
          <div>
            <strong>Nama</strong> : <?= $comment['name']; ?><br>
            <strong>Email</strong> : <?= $comment['email']; ?><br>
            <strong>Komentar</strong> : <?= substr($comment['comment_content'], 0, 100) . "..."; ?><br>
          </div>
        </td>
        <td><?= $comment['created_at']; ?></td>
        <td>

          <!-- Tombol Info -->
          <button class="btn btn-primary btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#commentInfoModal-<?= $comment['comment_id']; ?>">
            Detail
          </button>

          <!-- Di dalam perulangan untuk menampilkan komentar -->
          <div class="modal fade" id="commentInfoModal-<?= $comment['comment_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="commentInfoModalLabel-<?= $comment['comment_id']; ?>" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="commentInfoModalLabel-<?= $comment['comment_id']; ?>">
                    Detail Komentar <p class="fs-6 d-inline">'<?= $comment['title']; ?>'</p>
                  </h5>
                </div>
                <div class="modal-body">
                  <!-- Menampilkan informasi komentar -->
                  <p><strong>Nama </strong> : <?= $comment['name']; ?></p>
                  <p><strong>Email </strong> : <?= $comment['email']; ?></p>
                  <p><strong>Isi Komentar </strong> : <?= $comment['comment_content']; ?></p>
                  <p><strong>Tanggal & Waktu </strong> : <?= $comment['created_at']; ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Tombol Delete -->
          <form action="/comments/<?= $comment['comment_id']; ?>" method="post" class="d-inline">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger mb-1" onclick="return confirm('Apakah anda yakin menghapus komentar?');">Delete</button>
          </form>

        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?= $this->endSection(); ?>
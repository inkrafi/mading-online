<?= $this->extend('layout/admin/template'); ?>
<?= $this->section('content'); ?>

<style>
    table>tbody>tr>td {
        text-align: center;
    }

    table>thead>tr>th {
        text-align: center;
    }
</style>
<?php
$pdf = false;
if (strpos(current_url(), 'printpdf')) {
    $pdf = true;
}
if ($pdf == false) {
?>
    <input type="button" value="Download as PDF" class="btn btn-secondary mb-3" onclick="window.open('<?= site_url('admin/printpdf') ?>', 'blank')">
<?php } ?>
<table class="table table-bordered align-middle" border="1" cellpadding="10" cellspacing="0">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Daftar Artikel</th>
            <th>Jumlah Komentar</th>
            <th>Tanggal & Waktu</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($articles as $article) : ?>
            <tr>
                <td>
                    <?= $i++; ?>
                </td>
                <td>
                    <?= $article['title']; ?>
                </td>
                <td>
                    <?php foreach ($categoryCounts as $row) : ?>
                        <?php if ($row['article_id'] === $article['article_id']) : ?>
                            <?php echo $row['count']; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?= $article['created_at']; ?>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<table cellpadding="10">
    <tr>
        <td>Jumlah Artikel : <?= implode($articleCount); ?></td>
        <td>Jumlah Komentar : <?= implode($commentCount); ?></td>
    </tr>
</table>


<?= $this->endSection(); ?>
<?= $this->extend('layout/users/template'); ?>
<?= $this->section('content'); ?>
<style>
    .border-article {
        border: 3px solid #79BD8F;
        border-radius: 5px;
        padding: 10px;
    }

    .btn-article {
        background-color: #00A388;
        color: white;
    }

    .btn-article:hover {
        color: white;
    }

    .btn-outline-article {
        background-color: white;
        border: 1px solid #00A388;
    }

    .btn-outline-article:hover {
        background-color: #00A388;
        color: white;
    }

    .wrapper {
        margin-bottom: 10rem;
    }
</style>

<div class="container">
    <h2 class="mt-5 mb-4">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADrUlEQVR4nO2aW4hNURjHf2bGDApJRqF4kaTQCImpcUseeDCNB5e8IPdLE0VpjpLyQpEYSSS3eRBylyge0EFSlEszySU8kNzGGKNV367Vap199t5nzz5n9tn/+h7OXnt/a32/s/Za31prQ6JEiRIlSpSowNUXOAi8B94BB+RaUagEuA10GHYXKKUINNUSvGOqLPZaqwV8Gtij/VZlsVe9FnAjkNJ+q7LY61QxAxgFtBcrgBLL6F9UALZbRn2/AMqBZTJ41tCFtAr4lwMAFfhyoEW79y1dpNs3GMH/8gGguyVwx66E0cCewHhghg+rBgZ48D0CuGY0+p4RcDYAVy2Bv5V8oSLX4OuAzy5ZmZv9AXZnSF0V0ENyj/7MNcn3veYBpUZvcQLvESTYgZJm1okttTQwiO0FFgMbgWPAK8s9bcAOoCxAIlQLXADWBA18KHDemHtNewPc8GEPfQC6BYzLVyY4HPjooZGLfPrtm8XfV+A4MCXD85EA6CYDjuNYjcJPtX9Rf/cX+PTd2+jeKrXdJ+9ntYzcbooEwCTNaSsw0yi/EBKAbwHaFgmADZpT1R0pNgANmlNVQdEBSCUAiEUPqJWU121aPgL0iWsP+OIx31gXVwA3PQTfZlsap2ICoEISKrfF2TBbJamIAHwHhgC9inUW6DDWFMrvaoGSVwD1mtPDEQHQ7a8swibkC8B0o5uOjRiAvgY5CfSPGkAZ8Fxz/FuCbhRriQiAYx+AyVECcHZmfnho3EL8qU8AAB2yuzMv6pOhKiCdpWEvgCYfZjvZ9Wqtktl5BaB2g0eHsf83RjY+lottybBN7dfUSnMTsAu47CNz8wrgehj7gZm0UgbIoMGfsPwzaiNzNnDWI+BsAD4Y94cOop/MGK89Bt0s7/FID74nAg9yBDANeGl5ToGYQ4hKewRwyaffctkuCwrAmdGWWEB8Ig8A9gf0vy0HAJlAqDGnUwCktPMDZfe1ss051GHrCUGmwVLZ8S7tLAA1RtldrWx+DnWoAfOJAeAosNMngE5R2gVAs1Zmy+39aKIBoF3W8wULoESSF6esMoS6LrqMMQUHYKB2/accuOSq+q4EoEq7/iykuta7AFBlBQVgrnY9rGlnlgsA8wQr7wBWaNfV97xhSJ0dPrYE/8jDuWLkAJq06+obgLA0WHaMWsXOAYPIo9IGALVG2GosaNQ3fmGrXCzvepAlBT5DzNXoEvwd29FT3FQpK71Wbc5Py7c5zrc9iRIlSpQoUSIKWv8Bcl9oPbv9LUUAAAAASUVORK5CYII=" width="52">
        INFORMASI TERKINI
    </h2>

    <!-- Flashdata ketika komentar berhasil ditambahkan-->
    <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('msg'); ?>
        </div>
    <?php endif; ?>

    <!-- Search -->
    <!-- <div class="col-6">
        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari" name="keyword">
                <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
            </div>
        </form>
    </div> -->

    <div class="wrapper">
        <!-- Tombol Tambahkan Komentar -->
        <div class="col-md mb-3">
            <a href="/articles/comments" class="btn btn-article">Tambahkan Komentar</a>
        </div>

        <!-- List Artikel dari manage_article -->
        <?php foreach ($articles as $article) : ?>
            <div class="row border-article mb-4">
                <div class="col-md-12">
                    <h5><?= $article['title']; ?></h5>
                    <hr>
                    <p>
                        <?= substr($article['content'], 0, 300) . "..."; ?>
                    </p>
                    <div class="d-flex justify-content-between pb-2">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <a href="/articles/<?= $article['slug']; ?>" class="btn btn-outline-article">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<?= $this->endSection(); ?>
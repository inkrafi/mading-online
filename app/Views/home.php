<?= $this->extend('layout/users/template'); ?>

<?= $this->section('content'); ?>
<section id="hero-section">
    <div class="container">
        <div class="row">
            <h1 class="display-4 text-white fw-bold">
                Selamat Datang di Mading<br>
                Mading Sekolah Tinggi JeWePe
            </h1>
            <p class="text-white opacity-75">
                Berbagai informasi terkini mengenai sekolah tinggi JeWePe.
            </p>
            <div class="d-flex gap-3 mt-2 mt-lg-4">
                <a href="/articles" class="btn btn-article text-white rounded-pill px-4 shadow">Halaman Artikel</a>
            </div>
        </div>
    </div>
</section>
<section id="main-section">
    <div class="container">
        <h1 class="text-center mb-4">Mading Online</h1>
        <div class="row text-center">
            <div class="col-md-7 fs-5">
                <p>
                    Mading online atau papan pengumuman digital, memiliki banyak alasan mengapa keberadaannya sangat penting dan bermanfaat dalam era digital ini. Pertama, mading online memungkinkan aksesibilitas yang tak terbatas, memungkinkan siapa saja, kapan saja, untuk mengakses informasi yang relevan selama terhubung ke internet. Ini memudahkan siswa, guru, orang tua, atau anggota organisasi dalam mendapatkan informasi dengan mudah. Selain itu, keberadaan mading online juga efisien. Berbeda dengan papan pengumuman fisik yang memerlukan pencetakan dan pemeliharaan berkala, mading online dapat diperbarui dengan cepat dan informasi terbaru dapat ditambahkan tanpa perlu mencetak ulang. Hal ini juga membantu mengurangi biaya cetak dan pengadaan perangkat fisik seperti papan pengumuman, spidol, dan lainnya.
                </p>
                <p>
                    Selain itu, mading online memudahkan berbagi informasi. Informasi yang diposting dalam mading online dapat dengan mudah dibagikan melalui tautan atau berbagi sosial media, mencapai audiens yang lebih luas. Dalam hal penyimpanan dan pencarian informasi, mading online juga unggul. Informasi digital dapat diarsipkan dan dicari dengan mudah, membantu dalam melacak informasi yang sudah lama seperti arsip berita atau pengumuman sebelumnya. Keuntungan lainnya adalah dukungan untuk multimedia. Mading online memungkinkan penambahan elemen multimedia seperti gambar, video, atau tautan interaktif untuk membuat informasi lebih menarik dan informatif. Selain itu, interaktivitas juga menjadi fitur penting. Banyak mading online memungkinkan komentar atau diskusi di bawah setiap pengumuman, menciptakan ruang untuk pertanyaan atau diskusi lebih lanjut.
                </p>
            </div>
            <div class="col-md-5">
                <img src="https://images.unsplash.com/photo-1498644035638-2c3357894b10?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1376&q=80" alt="" width="500" height="600">
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
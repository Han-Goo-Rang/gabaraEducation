<x-app-layout title="Kontak">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets_2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets_2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets_2/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets_2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets_2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets_2/css/main.css" rel="stylesheet">



    <body class="index-page">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <!-- About Section -->
            <section id="about" class="about section">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row align-items-xl-center gy-5">
                        <div class="col-xl-5 content">
                            <h3>Tentang Kami</h3>
                            <h2>Komunitas Gabara Education</h2>
                            <p>
                                Gabara Education adalah komunitas belajar yang didirikan di
                                sebuah Garasi seorang warga lokal yang bertempat tinggal di Desa
                                Adipasir. Kegiatan yang kami lakukan adalah mengajar anak-anak
                                dan membimbing mereka untuk mendapatkan pendidikan yang memadai,
                                serta dibuat untuk mengisi waktu luang anak-anak supaya mereka
                                memiliki kegiatan yang positif.
                            </p>
                            <a href="{{ route('home') }}" class="read-more"><span>Selebihnya tentang kami</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>

                        <div class="col-xl-7">
                            <div class="row gy-4 icon-boxes">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="icon-box">
                                        <i class="bi bi-buildings"></i>
                                        <h3>Misi Kami</h3>
                                        <p>
                                            Misi dari Komunitas Gabara Education adalah untuk mendidik
                                            anak-anak desa Adipasir
                                            dengan pendidikan yang layak dan memajukan kecerdasan desa serta
                                            menjadi dampak
                                            positif pada lingkungan sekitar.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box">
                                        <i class="bi bi-clipboard-pulse"></i>
                                        <h3>Visi Kami</h3>
                                        <p>
                                            Visi kami adalah membuat lingkungan belajar yang kondusif yang
                                            membuat anak nyaman belajar
                                            dan senang dengan kegiatan pada lingkungan kami. Dengan Platform
                                            Website Gabara Education ini
                                            kami berharap dapat menyebarluaskan informasi dan kegiatan kami
                                            kepada masyarakat luas
                                            dan dapat mendapatkan dukungan positif dari masyarakat.
                                            Disamping itu, anak-anak dapat belajar
                                            dengan menyenagkan dan interaktif dengan tampilan modern
                                            Platform Website Gabara Education.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="icon-box">
                                        <i class="bi bi-command"></i>
                                        <h3>Veniam omnis</h3>
                                        <p>
                                            Omnis perferendis molestias culpa sed. Recusandae quas
                                            possimus. Quod consequatur corrupti
                                        </p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="icon-box">
                                        <i class="bi bi-graph-up-arrow"></i>
                                        <h3>Delares sapiente</h3>
                                        <p>
                                            Sint et dolor voluptas minus possimus nostrum. Reiciendis
                                            commodi eligendi omnis quideme lorenda
                                        </p>
                                    </div>
                                </div>
                                <!-- End Icon Box -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /About Section -->
        </div>
    </body>
</x-app-layout>

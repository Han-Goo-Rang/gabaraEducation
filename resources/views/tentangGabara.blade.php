<x-app-layout title="Tentang Gabara">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Main CSS File (Tailwind) -->


    <div class="container mx-auto px-4 py-12">
        <!-- About Section -->
        <section id="about" class="about section py-16">
            <div class="container mx-auto px-6" data-aos="fade-up" data-aos-delay="100">
                <div class="flex flex-wrap items-center justify-between space-y-8 md:space-y-0 md:space-x-12">
                    <!-- Left Column: Content -->
                    <div class="w-full md:w-1/2 space-y-4">
                        <h3 class="text-3xl font-semibold text-gray-800">Tentang Kami</h3>
                        <h2 class="text-4xl font-bold text-blue-600">Komunitas Gabara Education</h2>
                        <p class="text-lg text-gray-600">
                            Gabara Education adalah komunitas belajar yang didirikan di
                            sebuah Garasi seorang warga lokal yang bertempat tinggal di Desa
                            Adipasir. Kegiatan yang kami lakukan adalah mengajar anak-anak
                            dan membimbing mereka untuk mendapatkan pendidikan yang memadai,
                            serta dibuat untuk mengisi waktu luang anak-anak supaya mereka
                            memiliki kegiatan yang positif.
                        </p>
                        <a href="{{ route('home') }}" class="inline-flex items-center text-blue-500 hover:text-blue-700 font-semibold">
                            Selebihnya tentang kami
                            <i class="bi bi-arrow-right ml-2"></i>
                        </a>
                    </div>

                    <!-- Right Column: Icon Boxes -->
                    <div class="w-full md:w-1/2">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                            <!-- Mission Box -->
                            <div class="flex flex-col items-start space-y-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="p-6 bg-white shadow-md rounded-lg">
                                    <i class="bi bi-buildings text-4xl text-blue-600"></i>
                                    <h3 class="text-xl font-semibold text-gray-800">Misi Kami</h3>
                                    <p class="text-gray-600">
                                        Misi dari Komunitas Gabara Education adalah untuk mendidik
                                        anak-anak desa Adipasir dengan pendidikan yang layak dan memajukan kecerdasan desa serta
                                        menjadi dampak positif pada lingkungan sekitar.
                                    </p>
                                </div>
                            </div>

                            <!-- Vision Box -->
                            <div class="flex flex-col items-start space-y-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="p-6 bg-white shadow-md rounded-lg">
                                    <i class="bi bi-clipboard-pulse text-4xl text-blue-600"></i>
                                    <h3 class="text-xl font-semibold text-gray-800">Visi Kami</h3>
                                    <p class="text-gray-600">
                                        Visi kami adalah membuat lingkungan belajar yang kondusif yang membuat anak nyaman belajar
                                        dan senang dengan kegiatan pada lingkungan kami. Dengan Platform Website Gabara Education ini
                                        kami berharap dapat menyebarluaskan informasi dan kegiatan kami kepada masyarakat luas
                                        dan dapat mendapatkan dukungan positif dari masyarakat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->
    </div>
</x-app-layout>

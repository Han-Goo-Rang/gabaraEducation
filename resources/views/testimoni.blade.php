<x-app-layout>
    <section class="py-16 bg-gray-50" data-aos="fade-up" data-aos-duration="1300">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <!-- Section Title -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">
                        <span class="block text-blue-600">Apa kata Mereka</span> Tentang Gabara Education?
                    </h2>
                    <div class="mt-6 relative">
                        <!-- Gambar Utama -->
                        <img
                            class="absolute w-20 h-20 top-0 left-0 transform -rotate-3"
                            src="{{ asset('assets/img/shape/t01.png') }}"
                            alt="Decorative Shape"
                        >
                        <!-- Gambar di Atas -->
                        <img
                            class="relative w-10 h-10 transform translate-x-2 translate-y-2"
                            src="{{ asset('assets/img/icons/quote.png') }}"
                            alt="Quote Icon"
                        >
                    </div>

                </div>

                <!-- Testimonial Swiper -->
                <div>
                    <div class="swiper testimonial-slider">
                        <div class="swiper-wrapper">
                            <!-- Testimonial Item -->
                            <div class="swiper-slide bg-white rounded-lg shadow-lg p-6">
                                <p class="text-gray-600 text-lg italic mb-4">
                                    “Sebagai Tech Lead Developer untuk Komunitas Gabara Education, saya memegang peran vital dalam membangun fondasi teknologi yang mendukung visi besar komunitas ini.
                                    Platform LMS yang saya kembangkan bukan sekadar alat pembelajaran digital, melainkan jembatan yang menghubungkan anak-anak desa dengan akses pendidikan yang berkualitas.
                                    Dengan pendekatan inovatif dan fokus pada user experience, saya memastikan bahwa platform ini tidak hanya ramah pengguna, tetapi juga menarik dan interaktif.
                                    Setiap fitur yang dirancang mencerminkan kebutuhan anak-anak desa, seperti materi yang interaktif, forum diskusi yang menyenangkan,
                                    dan integrasi teknologi terbaru yang membuat proses belajar menjadi lebih menarik..”
                                </p>
                                <div class="flex items-center mt-6">
                                    <img src="{{ asset('images/img_profile/Bangjoule.png') }}" alt="Zulfa Mustafa Akhyar Iswahyudi" class="w-12 h-12 rounded-full mr-4">
                                    <div>
                                        <h4 class="text-gray-800 font-semibold">Zulfa Mustafa Akhyar Iswahyudi</h4>
                                        <p class="text-sm text-gray-500">Tech Lead Developer</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Item -->

                            <!-- Testimonial Item -->
                            <div class="swiper-slide bg-white rounded-lg shadow-lg p-6">
                                <p class="text-gray-600 text-lg italic mb-4">
                                    “Gabara Education adalah harapan baru bagi masyarakat desa.
                                    Mereka hadir dengan misi luar biasa untuk memberdayakan anak-anak desa yang seringkali tidak mendapatkan akses pendidikan yang layak.
                                    Dengan penuh semangat,
                                    komunitas ini berjuang agar tidak ada lagi anak-anak yang merasa terpinggirkan hanya karena mereka tinggal di daerah terpencil.”
                                </p>
                                <div class="flex items-center mt-6">
                                    <img src="{{ asset('images/img_profile/Felix.png') }}" alt="Chris Carroll" class="w-12 h-12 rounded-full mr-4">
                                    <div>
                                        <h4 class="text-gray-800 font-semibold">Christian Felix Saliman Sugiono</h4>
                                        <p class="text-sm text-gray-500">Backend Engineer - Filament</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Item -->
                             <!-- Testimonial Item -->
                             <div class="swiper-slide bg-white rounded-lg shadow-lg p-6">
                                <p class="text-gray-600 text-lg italic mb-4">
                                    “Sebagai seorang developer yang terlibat dalam pengembangan platform LMS untuk Komunitas Gabara Education,
                                    setiap hari saya merasa diberkati karena memiliki kesempatan untuk bekerja pada sesuatu yang lebih besar dari
                                    sekadar kode atau proyek teknologi biasa. LMS ini bukan hanya platform pembelajaran,
                                    melainkan sebuah alat yang memberikan harapan bagi anak-anak desa yang sebelumnya sulit mengakses pendidikan formal yang berkualitas.”
                                </p>
                                <div class="flex items-center mt-6">
                                    <img src="{{ asset('images/img_profile/Edo.png') }}" alt="Chris Carroll" class="w-12 h-12 rounded-full mr-4">
                                    <div>
                                        <h4 class="text-gray-800 font-semibold">Eduardo Bagus Prima Julian</h4>
                                        <p class="text-sm text-gray-500">Livewire Developer</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Item -->
                             <!-- Testimonial Item -->
                             <div class="swiper-slide bg-white rounded-lg shadow-lg p-6">
                                <p class="text-gray-600 text-lg italic mb-4">
                                    “Dari perspektif saya sebagai developer, tantangan pertama yang saya hadapi adalah membangun sistem yang mudah diakses
                                    oleh semua pengguna, terutama di daerah dengan koneksi internet terbatas. Memastikan platform ini bisa berjalan dengan
                                    baik di berbagai perangkat dengan berbagai kondisi jaringan menjadi prioritas utama. Setiap baris kode yang saya tulis,
                                    setiap fitur yang saya integrasikan, dirancang dengan fokus untuk memberikan pengalaman belajar yang lancar dan menyenangkan
                                    bagi anak-anak desa.”
                                </p>
                                <div class="flex items-center mt-6">
                                    <img src="{{ asset('images/img_profile/Rafa.png') }}" alt="Chris Carroll" class="w-12 h-12 rounded-full mr-4">
                                    <div>
                                        <h4 class="text-gray-800 font-semibold">Muhammad Fathi Rafa</h4>
                                        <p class="text-sm text-gray-500">Jetstream Developer</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Item -->
                             <!-- Testimonial Item -->
                             <div class="swiper-slide bg-white rounded-lg shadow-lg p-6">
                                <p class="text-gray-600 text-lg italic mb-4">
                                    “Tentu saja, tantangan lain datang dari bekerja dengan tim yang saling bergantung satu sama lain.
                                    Sebagai Tech Lead Developer, saya memastikan setiap anggota tim memahami visi besar di balik proyek ini dan berkolaborasi
                                    dengan baik. Kami sering berdiskusi tentang bagaimana teknologi bisa digunakan untuk memecahkan masalah yang dihadapi
                                    anak-anak desa dalam pendidikan.”
                                </p>
                                <div class="flex items-center mt-6">
                                    <img src="{{ asset('images/img_profile/Hisyam.png') }}" alt="Chris Carroll" class="w-12 h-12 rounded-full mr-4">
                                    <div>
                                        <h4 class="text-gray-800 font-semibold">Tsaqif Hisyam Saputra</h4>
                                        <p class="text-sm text-gray-500">UI/UX Designer</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Item -->
                             <!-- Testimonial Item -->
                             <div class="swiper-slide bg-white rounded-lg shadow-lg p-6">
                                <p class="text-gray-600 text-lg italic mb-4">
                                    “Selain itu, saya juga bekerja keras untuk membuat LMS ini interaktif dan menarik.
                                    Saya berusaha menciptakan fitur seperti kuis, video pembelajaran, dan aktivitas yang tidak hanya edukatif,
                                    tetapi juga mengundang rasa ingin tahu. Dalam setiap pengembangan, saya memperhatikan detail-detail kecil yang mungkin tampak sepele,
                                    tetapi sangat penting untuk kenyamanan pengguna, seperti waktu muat yang cepat dan antarmuka yang mudah dipahami oleh anak-anak.”
                                </p>
                                <div class="flex items-center mt-6">
                                    <img src="{{ asset('images/img_profile/Kaka.png') }}" alt="Chris Carroll" class="w-12 h-12 rounded-full mr-4">
                                    <div>
                                        <h4 class="text-gray-800 font-semibold">Maulana Kaka Halin Widyadhana</h4>
                                        <p class="text-sm text-gray-500">UI/UX Designer</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Item -->
                             <!-- Testimonial Item -->
                             <div class="swiper-slide bg-white rounded-lg shadow-lg p-6">
                                <p class="text-gray-600 text-lg italic mb-4">
                                    “Ketika melihat anak-anak mulai menggunakan platform ini dengan penuh semangat,
                                    saya merasa bahwa setiap baris kode yang saya tulis memiliki dampak langsung.
                                    Saya merasa sangat bangga bisa menjadi bagian dari perubahan ini dan berharap platform LMS Gabara Education bisa terus berkembang,
                                    menjangkau lebih banyak anak-anak di desa, dan memberikan mereka kesempatan untuk mengejar impian mereka.”
                                </p>
                                <div class="flex items-center mt-6">
                                    <img src="{{ asset('images/img_profile/Seng.png') }}" alt="Chris Carroll" class="w-12 h-12 rounded-full mr-4">
                                    <div>
                                        <h4 class="text-gray-800 font-semibold">Ung Pengseng</h4>
                                        <p class="text-sm text-gray-500">Instructor Guide - Mathematics</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

<x-app-layout title="Kontak">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <body>
        <div class="wrapper">
            <!-- Main Content -->
            <main class="main-content site-wrapper-reveal">
                <!--== Start Map Area Wrapper ==-->
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-map-area">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423.37113277990994!2d109.53727646252524!3d-7.433489815984383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65531f75994001%3A0x75057356ff63fc3!2sMUSHOLLA%20WARU%20DOYONG!5e1!3m2!1sid!2sid!4v1733407132399!5m2!1sid!2sid"
                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--== End Map Area Wrapper ==-->
                <!-- Contact Form -->
                <section class="contact-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-8 m-auto text-center">
                                <h2 class="title">Berikut profil kami sebagai Komunitas Belajar yang hadir
                                    untuk memberikan pendidikan kepada Desa Adipasir, Kecamatan Rakit</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-xl-10 m-auto">
                                <div class="contact-info-content-style">
                                    <div class="info-item info-item2">
                                        <div class="info-title">
                                            <h4>Narahubung</h4>
                                            <div class="icon">
                                                <i class="icon_mail_alt"></i>
                                            </div>
                                        </div>
                                        <div class="info-content">
                                            <a href="mailto:gabaraeducation@gmail.com">gabaraeducation@gmail.com</a>
                                            <a href="https://wa.link/93t88k">0822 5510 8336</a>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-title">
                                            <h4>Datangi Komunitas Kami</h4>
                                            <div class="icon">
                                                <i class="icon_pin_alt"></i>
                                            </div>
                                        </div>
                                        <div class="info-content">
                                            <p>Desa Adipasir RT 07/02 Kecamatan Rakit, Banjarnegara</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-title">
                                            <h4>Info Volunteer</h4>
                                            <div class="icon">
                                                <i class="icon_briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="info-content">
                                            <p>Kirimkan email anda ke email kami: <a
                                                    href="mailto:gabaraeducation@gmail.com">gabaraeducation@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </main>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>

</x-app-layout>

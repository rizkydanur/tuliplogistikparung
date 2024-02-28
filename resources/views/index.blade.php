@extends('layouts.app')


@section('title', 'Home')

@section('content')


{{-- Carousel Start --}}
<section>
     <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/carousel-1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Pergudangan Modern</p>
                            <h1 class="animated fadeInLeft">Bebas Custom Sesuai Kebutuhan Anda</h1>
                            <!-- <a class="btn animated fadeInUp" >Get A Quote</a> -->
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="assets/img/carousel-1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Keamanan 24 Jam</p>
                            <h1 class="animated fadeInLeft">Kami Amankan 24 Jam Penuh</h1>
                            <!-- <a class="btn animated fadeInUp">Get A Quote</a> -->
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="assets/img/carousel-1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Dekat Dengan Gerbang Tol</p>
                            <h1 class="animated fadeInLeft">Dapatkan Akses Bisa Kemana Saja</h1>
                            <!-- <a class="btn animated fadeInUp">Get A Quote</a> -->
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


</section>
{{-- Carousel End --}}

            {{-- Feature Start--}}
            <section>
                <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-12">
                                <div class="feature-item">
                                    <div class="feature-text">
                                        <h3>Keamanan Terjamin</h3>
                                        <p>Dilengkapi dengan One Gate System, Security, dan CCTV 24 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="feature-item">
                                    <div class="feature-text">
                                        <h3>Pergudangan Custome</h3>
                                        <p>Luas Pergudangan Bebas Custome Sesuai Kebutuhan Gudang Anda</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="feature-item">
                                    <div class="feature-text">
                                        <h3>Berlokasi Strategis</h3>
                                        <p>10 Menit dari Gerbang Tol dan Posisi Gudang berada di Pinggir Jalan raya utama Parung, Bogor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Feature End--}}


            {{-- About Start --}}
            <section>
                <div class="about wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="about-img">
                                    <img src="assets/img/about-2.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="section-header text-left">
                                    <p>Selamat Datang Di Tulip Logistik Parung</p>
                                    <h2>25 Years Experience</h2>
                                </div>
                                <div class="about-text">
                                    <p>
                                        Tulip Logistik Parung Didirikan pada tahun 2021 yang berfokus pada pengadaan warehouse atau pergudangan dengan bangunan berstandar internasional.
                                    </p>
                                    <p>
                                        Dibawah naungan PT Indoswiss Internasional yang merupakan perusahaan konstruksi berstandar internasional yang berdiri sejak <br> tahun 2011, dan telah memulai industrinya sejak tahun 2000 di 3 negara yaitu united arab emirates, yemen, dan saudi arabia
                                    </p>
                                    <a class="btn" href="{{ route('about') }}">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- About End --}}


            {{-- Fact Start --}}
            <section>
                <div class="fact">
                    <div class="container-fluid">
                        <div class="row counters">
                            <div class="col-md-6 fact-left wow slideInLeft">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="fact-icon">
                                            <i class="flaticon-building"></i>
                                        </div>
                                        <div class="fact-text">
                                            <h2 data-toggle="counter-up">37</h2>
                                            <p>Total Gudang</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="fact-icon">
                                            <i class="flaticon-building"></i>
                                        </div>
                                        <div class="fact-text">
                                            <h2 data-toggle="counter-up">0</h2>
                                            <p>Total Gudang Tersedia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 fact-right wow slideInRight">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="fact-icon">
                                            <i class="flaticon-building"></i>
                                        </div>
                                        <div class="fact-text">
                                            <h2 data-toggle="counter-up">0</h2>
                                            <p>Total Gudang SOLD</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="fact-icon">
                                            <i class="flaticon-crane"></i>
                                        </div>
                                        <div class="fact-text">
                                            <h2 data-toggle="counter-up">0</h2>
                                            <p>Planning Total Pembangunan Gudang</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Fact End --}}


            {{-- Galery Start --}}
            <section>
                <div class="service">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>Gallery</p>
                            <h2>Dokumentasi Gallery</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="assets/img/Gambar 1.png" alt="Image">
                                        <div class="service-overlay">
                                            <!-- <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                            </p> -->
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <h3>Pintu Masuk Gudang</h3>
                                        <a class="btn" href="assets/img/Gambar 1.png" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="assets/img/Gambar 2.png" alt="Image">
                                        <div class="service-overlay">
                                            <!-- <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                            </p> -->
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <h3>Tampak Atas</h3>
                                        <a class="btn" href="assets/img/Gambar 2.png" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="assets/img/Gambar 3.png" alt="Image">
                                        <div class="service-overlay">
                                            <!-- <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                            </p> -->
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <h3>Tampak Samping</h3>
                                        <a class="btn" href="assets/img/Gambar 3.png" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="assets/img/Gambar 4.png" alt="Image">
                                        <div class="service-overlay">
                                            <!-- <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                            </p> -->
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <h3>Tampak Depan</h3>
                                        <a class="btn" href="assets/img/Gambar 4.png" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="assets/img/Gambar 5.png" alt="Image">
                                        <div class="service-overlay">
                                            <!-- <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                            </p> -->
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <h3>Gudang Pampers</h3>
                                        <a class="btn" href="assets/img/Gambar 5.png" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="assets/img/Gambar 6.png" alt="Image">
                                        <div class="service-overlay">
                                            <!-- <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                            </p> -->
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <h3>Indo Green Box</h3>
                                        <a class="btn" href="assets/img/gambar 6.png" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="assets/img/Gambar 7.png" alt="Image">
                                        <div class="service-overlay">
                                            <!-- <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                            </p> -->
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <h3>Rute Jalanan Terdekat</h3>
                                        <a class="btn" href="assets/img/Gambar 7.png" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="assets/img/Gambar 8.png" alt="Image">
                                        <div class="service-overlay">
                                            <!-- <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                            </p> -->
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <h3>Pintu Tol Kayu Manis</h3>
                                        <a class="btn" href="assets/img/Gambar 8.png" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="assets/img/Gambar 9.png" alt="Image">
                                        <div class="service-overlay">
                                            <!-- <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                            </p> -->
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <h3>Pasar Parung</h3>
                                        <a class="btn" href="assets/img/Gambar 9.png" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Service End --}}


            {{-- Video Start --}}
            {{-- <section>
                <div class="video wow fadeIn" data-wow-delay="0.1s">
                    <div class="container">
                        <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/7x55TbkfrcE?si=6Vu9jXdrF-LDdaIU" data-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>

                <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7x55TbkfrcE?si=6Vu9jXdrF-LDdaIU" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <section>
                <div class="service">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>Gallery</p>
                            <h2>Dokumentasi Video</h2>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7x55TbkfrcE?si=6Vu9jXdrF-LDdaIU" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Video End --}}


            {{-- Team Start --}}
            {{-- <section>
                <div class="team">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>Our Management</p>
                            <h2>Our Direktur</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="assets/img/team-1.jpg" alt="Team Image">
                                    </div>
                                    <div class="team-text">
                                        <h2>Adam Phillips</h2>
                                        <p>CEO & Founder</p>
                                    </div>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="assets/img/team-2.jpg" alt="Team Image">
                                    </div>
                                    <div class="team-text">
                                        <h2>Dylan Adams</h2>
                                        <p>Civil Engineer</p>
                                    </div>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="assets/img/team-3.jpg" alt="Team Image">
                                    </div>
                                    <div class="team-text">
                                        <h2>Jhon Doe</h2>
                                        <p>Interior Designer</p>
                                    </div>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="assets/img/team-4.jpg" alt="Team Image">
                                    </div>
                                    <div class="team-text">
                                        <h2>Josh Dunn</h2>
                                        <p>Painter</p>
                                    </div>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            {{-- Team End --}}


            {{-- FAQs Start --}}
            <section>
                <div class="faqs">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>Tentang Pertanyaan</p>
                            <h2>Tanyakan pada Kami</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div id="accordion-1">
                                    <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                                Dimana Lokasi Pergudangannya?
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                            <div class="card-body">
                                                Lokasi Terletak di Jl. Raya Parung Bogor, Desa Jampang, Kec. Kemang, Kab. Bogor, Jawa Barat - 16310.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                                Apakah kita bisa custom sesuai keinginan?
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                            <div class="card-body">
                                                Gudang ini bisa dicustom sesuai dengan keinginan dan kebutuhan
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                                Berapa Biaya yang dibutuhkan
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                            <div class="card-body">
                                               Untuk Lebih Lanjut Silahkan Kontak WA tertera atau bisa klik button wa di samping kanan anda
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="accordion-2">
                                    <div class="card wow fadeInRight" data-wow-delay="0.1s">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                                Apakah Dekat dengan Pintu Tol
                                            </a>
                                        </div>
                                        <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                            <div class="card-body">
                                               Lokasi Pergudangan Kami Dekat Dengan Pintu Tol Kayu Manis
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                                Apakah Keamanan Terjamin?
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                            <div class="card-body">
                                                Keamanan sangat terjamin karena security tersedia 24 jam untuk menjaga keamanan
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                                Lorem ipsum dolor sit amet?
                                            </a>
                                        </div>
                                        <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- FAQs End --}}


            {{-- Testimonial Start --}}
            {{--<div class="testimonial wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider-nav">
                                <div class="slider-nav"><img src="assets/img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="assets/img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="assets/img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="assets/img/testimonial-4.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="assets/img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="assets/img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="assets/img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="assets/img/testimonial-4.jpg" alt="Testimonial"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider">
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
            {{-- Testimonial End --}}


            {{-- Blog Start --}}
            {{-- <div class="blog">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Latest Blog</p>
                        <h2>Latest From Our Blog</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="assets/img/blog-1.jpg" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>Lorem ipsum dolor sit</h3>
                                    <a class="btn" href="">+</a>
                                </div>
                                <div class="blog-meta">
                                    <p>By<a href="">Admin</a></p>
                                    <p>In<a href="">Construction</a></p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="assets/img/blog-2.jpg" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>Lorem ipsum dolor sit</h3>
                                    <a class="btn" href="">+</a>
                                </div>
                                <div class="blog-meta">
                                    <p>By<a href="">Admin</a></p>
                                    <p>In<a href="">Construction</a></p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="assets/img/blog-3.jpg" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>Lorem ipsum dolor sit</h3>
                                    <a class="btn" href="">+</a>
                                </div>
                                <div class="blog-meta">
                                    <p>By<a href="">Admin</a></p>
                                    <p>In<a href="">Construction</a></p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- Blog End --}}

@endsection








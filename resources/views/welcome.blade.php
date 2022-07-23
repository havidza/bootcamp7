@extends('layouts.app')

@section('content')
<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 copywriting">
                        <p class="story">
                            LEARN FROM EXPERT
                        </p>
                        
                        <h1 class="header">
                            Start Your <span class="text-primary">Developer <br> Journey</span> Today
                        </h1>
                        
                        <p class="support">
                            Bootcamp kami membantu junior developer <br> yang mempunyai keinginan menjadi programmer
                        </p>
                        <p class="cta">
                            <a href="#pricing" class="btn btn-master btn-primary">
                                Get Started
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <a href="#">
                            <img src="{{ asset('images/banner.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row brands">
            <div class="col-lg-12 col-12 text-center">
                <img src="{{ asset('images/brands.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>


<section class="benefits" id="benefits" style="scroll-margin-top: 7em;">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    OUR SUPER BENEFITS
                </p>
                <h2 class="primary-header">
                    Learn Faster & Better
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Diversity
                    </h3>
                    <p class="support">
                        Belajar dari mana saja <br> dan dapatkan skill baru
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                <img src="{{ asset('images/ic_globe-1.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Guideline
                    </h3>
                    <p class="support">
                        Codev8 akan membantu kamu <br> memilih path yang sesuai untukmu
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe-2.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Mentoring
                    </h3>
                    <p class="support">
                        Kami akan memastikan bahwa <br> kamu mendapatkan yang kamu mau
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe-3.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Future Job
                    </h3>
                    <p class="support">
                        Raih pekerjaan impianmu <br> bersama kami
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps">
    <div class="container">
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/step1.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    BETTER CAREER
                </p>
                <h2 class="primary-header">
                    Prepare The Journey
                </h2>
                <p class="support">
                    Belajar darimana saja dan <br> dapatkan skill baru
                </p>

            </div>
        </div>
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-left copywriting pl-150">
                <p class="story">
                    STUDY HARDER
                </p>
                <h2 class="primary-header">
                    Finish The Project
                </h2>
                <p class="support">
                    Setiap dari kamu akan bergabung ke grup pribadi <br> juga belajar bersama dalam membangun sebuah projek
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/step2.png') }}" class="cover" alt="">
            </div>

        </div>
        <div class="row item-step">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/step3.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    END GAME
                </p>
                <h2 class="primary-header">
                    Big Demo Day
                </h2>
                <p class="support">
                    Belajar bagaimana cara berbicara secara publik untuk mendemonstrasikan <br> final projek serta mendapatkan masukan yang penting
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pricing" id="pricing" style="scroll-margin-top: 5em;">
    <div class="container">
        <div class="row pb-70">
            <div class="col-lg-5 col-12 header-wrap copywriting">
                <p class="story">
                    GOOD INVESTMENT
                </p>
                <h2 class="primary-header text-white">
                    Start Your Journey
                </h2>
                <p class="support">
                    Pilih paket kelas sesuai pilihanmu <br> dan dapatkan silabus sesuai industri terkini
                                </p>
                <p class="mt-5">
                    <a href="{{ route('download-silabus') }}" class="btn btn-master btn-thirdty me-3">
                        View Syllabus
                    </a>
                </p>
            </div>
            <div class="col-lg-7 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-biasa   ">
                            <p class="story text-center">
                                BELAJAR NAGIH
                            </p>
                            <h1 class="price text-center">
                                200K
                            </h1>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Akses Materi Selamanya
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Program Mentoring
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Belajar Secara Fleksibel
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Bebas Download PDF
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Mendapatkan Sertifikat
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <p>
                                <a href="{{ route('checkout.create','belajar-nagih') }}" class="btn btn-master btn-primary w-100 mt-3">
                                    Ambil Kelas Ini
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-biasa">
                            <p class="story text-center">
                                BARU BELAJAR
                            </p>
                            <h1 class="price text-center">
                                100K
                            </h1>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Akses Materi Selamanya
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Program Mentoring
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Belajar Secara Fleksibel
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <p>
                                <a href="{{ route('checkout.create','baru-belajar') }}" class="btn btn-master btn-secondary w-100 mt-3">
                                    Mulai Kelas Ini
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-70">
            <div class="col-lg-12 col-12 text-center">
                <img src="{{ asset('images/brands.png') }}" height="30" alt="">
            </div>
        </div>
    </div>
</section>

<section class="testimonials" id="testimonials" style="scroll-margin-top: 3em;">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    SUCCESS STUDENTS
                </p>
                <h2 class="primary-header">
                    We Really Love Codev8
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{ asset('images/stars.svg') }}" alt="">
                            <p class="message">
                                Saya tidak terlalu suka koding tetapi setelah mereka mengajari saya cara melatih logika saya, saya benar-benar jatuh cinta dengan koding
                            </p>
                            <div class="user">
                                <img src="{{ asset('images/fanny_photo.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Fanny
                                    </h4>
                                    <p class="role">
                                        Developer di Google
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{ asset('images/stars.svg') }}" alt="">
                            <p class="message">
                                Koding sangat penting jika kita ingin membangun sebuah start-up.
                            </p>
                            <div class="user">
                                <img src="{{ asset('images/beatrice.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Beatrice
                                    </h4>
                                    <p class="role">
                                        CEO di Ajus Corp
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{ asset('images/stars.svg') }}" alt="">
                            <p class="message">
                                Latar belakang saya adalah desain dan seni tetapi saya sangat menyukai bagaimana membuat desain saya berfungsi dalam tahap pengembangan
                            </p>
                            <div class="user">
                                <img src="{{ asset('images/maman.jpg') }}" class="photo rounded-circle" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Andi
                                    </h4>
                                    <p class="role">
                                        UI UX di Media.inc
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row copyright">
                    <div class="col-lg-12 col-12">
                        <p>
                            All Rights Reserved. Copyright PT. Codev8 Technology Indonesia
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<footer class="text-white text-center text-lg-start" style="background-color: #0c50b4;">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Tentang Perusahaan</h5>

          <p>
            PT. Codev8 Teknologi Indonesia merupakan salah satu perusahaan yang bergerak dalam bidang teknologi dan jasa.
          </p>

          <p>
            Misi kami adalah menyediakan kursus online yang terjangkau bagi seluruh masyarakat Indonesia.
          </p>

          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-facebook-f"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-twitter"></i></a>
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-google-plus-g"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Nusukan, Surakarta, Indonesia</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">admin@codev8.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+62 819 123 768</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Jam Operasional</h5>

          <table class="table text-center text-white">
            <tbody class="font-weight-normal">
              <tr>
                <td>Senin - Jumat :</td>
                <td>08.00 - 16.00</td>
              </tr>
              <tr>
                <td>Sabtu :</td>
                <td>08.00 - 14.00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright 
      PT. Codev8 Technology Indonesia
    </div>
    <!-- Copyright -->
  </footer>
  
    
@endsection
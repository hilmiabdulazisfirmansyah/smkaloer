<!DOCTYPE html>
<html lang="id">
<head>

     <title>@yield('title', 'SMK ALOER WARGAKUSUMAH')</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="Website Pendidikan SMK ALOER WARGAKUSUMAH">
     <meta name="keywords" content="Belajar Pemrograman, SmartSchool">
     <meta name="author" content="SMK ALOER WARGAKUSUMAH">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     @include('blog.template.website1.css.home')

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>

     {{-- Login --}}
     @include('blog.template.website1.modal.login')

     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="{{ route('home') }}" class="navbar-brand">
                         <img src="{{ asset('img/logo.png') }}" class="align-top" alt="logo aloer" style="display: inline-block;width: 25px;height: 33px;"> SMK ALOER<span>.</span></a>
                    </div>

                    <!-- MENU LINKS -->
                    <div class="collapse navbar-collapse">
                         <ul class="nav navbar-nav navbar-nav-first">

                          @foreach ($navbar as $nav)
                          <li>
                              <a href="{{ $nav->link }}" class="smoothScroll">{{ $nav->menu }}</a>
                         </li>

                         @endforeach

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-phone"></i> (022) 595 0166</a></li>
                         {{-- login --}}
                         @if (auth()->user())
                         <a href="{{ route('profile') }}" class="section-btn">Profile</a>
                         <a href="{{ route('logout') }}" class="section-btn">Logout</a>
                         @endif

                         @if (!auth()->user())
                         <a href="#login" class="section-btn" data-toggle="modal" data-target="#login">Login</a>
                         <a href="#daftar" class="section-btn" data-toggle="modal" data-target="#daftar">Daftar</a>
                         @endif
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

               <div class="owl-carousel owl-theme">

                    @foreach ($carousels as $carousel)
                    <div class="item" style="background-image: url('{{ asset($carousel->path) }}');">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-8 col-sm-12">

                                   </div>
                              </div>
                         </div>
                    </div>
                    @endforeach


               </div>
          </section>


          <!-- POSTINGAN -->
          <section id="about" data-stellar-background-ratio="0.5">
               <div class="container">


                    @foreach ($posts as $post)
                    <div class="row" style="margin-bottom: 20vh">

                         <div class="col-md-6 col-sm-12">
                              <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                                   <img src="{{ asset($post->cover) }}" class="img-responsive" alt="">
                              </div>
                         </div>

                         <div class="col-md-6 col-sm-12">
                              <div class="about-info">
                                   <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                        <h4>{{$post->created_at}}<p class="post-meta"><i>Di Posting Oleh -</i> {{ $post->user_id }}</h4>
                                             <h2>{{ucwords($post->judul)}} - {{ucwords($post->sub_judul)}}</h2>
                                        </div>

                                        <div class="wow fadeInUp mt-5" data-wow-delay="0.4s" style="margin-bottom: 25px">
                                             @php
                                             $string = strip_tags($post->postingan);
                                             if (strlen($string) > 500) {

                                                 $stringCut = substr($string, 0, 500);
                                                 $endPoint = strrpos($stringCut, ' ');

                                                 $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                            }
                                            echo $string;
                                            @endphp
                                       </div>
                                       <a href="{{ route('postingan_detail',['id' => $post->id]) }}" class="section-btn">Baca Selengkapnya</a>
                                  </div>
                             </div>

                        </div>
                        @endforeach


                   </div>
              </section>


              <!-- TEAM -->
              <section id="team" data-stellar-background-ratio="0.5">
               <div class="container">
                    <div class="row">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Guru dan Tenaga Kependidikan</h2>
                                   <h4>Mendidik dan Bertanggung Jawab</h4>
                              </div>
                         </div>

                         @foreach($pendidik as $guru)
                         <div class="col-md-4 col-sm-4">
                              <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                                   <img src="{{ asset($guru->photo) }}" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Hubungi : {{ $guru->nama }}</h4> 
                                             <ul class="social-icon">
                                                  <li><a href="{{ $guru->link_fb }}" class="fa fa-facebook"></a></li>
                                                  <li><a href="{{ $guru->link_ig }}" class="fa fa-instagram"></a></li>
                                                  <li><a href="{{ $guru->link_yt }}" class="fa fa-youtube"></a></li>
                                                  <li><a href="{{ $guru->link_wa }}" class="fa fa-whatsapp"></a></li>
                                                  <li><a href="{{ $guru->link_git }}" class="fa fa-github"></a></li>
                                                  <li><a href="{{ $guru->email }}" class="fa fa-envelope-o"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                              </div>
                              <div class="team-info">
                                   <h3>{{ $guru->nama }}</h3>
                                   <p>{{ $guru->jenis_ptk_id_str}}</p>
                              </div>
                         </div>
                         @endforeach

                    </div>
               </div>
          </section>


          <!-- MENU-->
          @include('blog.template.website1.menu.index', [
               'judul'       =>   'PROFILE', 
               'sub_judul'   =>   'PROFILE SEKOLAH SMK ALOER WARGAKUSUMAH',
               'cards'       =>   $profiles])

          @include('blog.template.website1.menu.index', [
               'judul'        =>   'SMARTSCHOOL / SMARTAPP',
               'sub_judul'    =>   'APLIKASI MANAGEMENT SEKOLAH',
               'cards'        =>   $smartschools])

          @include('blog.template.website1.menu.index', [
               'judul'        =>   'JURUSAN',
               'sub_judul'    =>   'Terdapat Beberapa Jurusan di SMK ALOER WARGAKUSUMAH',
               'cards'        =>   $jurusan]) 

          @include('blog.template.website1.menu.index', [
               'judul'        =>   'PROGRAM SEKOLAH',
               'sub_judul'    =>   'Program Sekolah yang Kreatif dan Inovatif',
               'cards'        =>   $program])

          @include('blog.template.website1.menu.index', [
               'judul'        =>   'EKSTRAKULIKULER',
               'sub_judul'    =>   'Kegiatan tambahan yang dilakukan disekolah atau diluar sekolah',
               'cards'        =>   $ekskul])

               <!-- TESTIMONIAL -->
               <section id="testimonial" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>
                    <div class="container">
                         <div class="row">

                              <div class="col-md-12 col-sm-12">
                                   <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                        <h2>Testimoni</h2>
                                   </div>
                              </div>  

                              <div class="col-md-offset-2 col-md-8 col-sm-12">
                                   <div class="owl-carousel owl-theme">

                                        @foreach ($testimonial as $testimoni)
                                        <div class="item">
                                             <p>"{{ $testimoni->komentar }}"</p>
                                             <div class="tst-author">
                                                  <h4>{{ $testimoni->nama }}</h4>
                                                  <span>{{ $testimoni->peran }}</span>
                                             </div>
                                        </div>
                                        @endforeach

                                   </div>
                              </div>

                         </div>
                    </div>
               </section>  


               <!-- CONTACT -->
               <section id="contact" data-stellar-background-ratio="0.5">
                    <div class="container">
                         <div class="row">
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
       -->
       <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
          <div id="google-map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1611.1830948074887!2d107.78369505610476!3d-7.051101684758597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c722328a6e4d%3A0x43aa2e5d2500db18!2sSMK%20Aloer%20Wargakusumah!5e1!3m2!1sid!2sid!4v1582609627749!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
     </div>    

     <div class="col-md-6 col-sm-12">

          <div class="col-md-12 col-sm-12">
               <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Kirim Testimoni Anda</h2>
                    <h4>Mengenai SMK ALOER WARGAKUSUMAH</h4>
               </div>
          </div>

          <!-- CONTACT FORM -->
          <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

               <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
               <h6 class="text-success">Testimoni Berhasil di Kirim</h6>

               <!-- IF MAIL NOT SENT -->
               <h6 class="text-danger">Mohon Masukkan Alamat email yang valid</h6>

               <div class="col-md-6 col-sm-6">
                    <input type="text" class="form-control" id="cf-name" name="name" placeholder="Nama Lengkap">
               </div>

               <div class="col-md-6 col-sm-6">
                    <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email">
               </div>

               <div class="col-md-12 col-sm-12">
                    <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Peran (Orang Tua Siswa / Alumni / Siswa / Visitor)">

                    <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Masukkan Komentar Anda"></textarea>

                    <button type="submit" class="form-control" id="cf-submit" name="submit">Kirim</button>
               </div>
          </form>
     </div>

</div>
</div>
</section>          


<!-- FOOTER -->
<footer id="footer" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">

               <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                         <div class="section-title">
                              <h2 class="wow fadeInUp" data-wow-delay="0.2s">Alamat Kantor</h2>
                         </div>
                         <address class="wow fadeInUp" data-wow-delay="0.4s">
                              <p>Kp. Baru RT 01 RW 05,<br>Ds. Mekarpawitan Kec. Paseh<br>Kab. Bandung, 40383</p>
                         </address>
                    </div>
               </div>

               <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                         <div class="section-title">
                              <h2 class="wow fadeInUp" data-wow-delay="0.2s">Informasi</h2>
                         </div>
                         <address class="wow fadeInUp" data-wow-delay="0.4s">
                              <p>(022) 595 0166</p>
                              <p><a href="mailto:smkaloerwk1@gmail.com">smkaloerwk1@gmail.com</a></p><br>
                              <p>0821 1882 5906 (Eliyana Safitri, S.Pd. - Kepala Sekolah)</p><br>
                              <p>0821 1146 6564 (Undang, S.Pd. - Kesiswaan)</p><br>
                              <p>0821 1146 6564 (Agus Syamsudin, S.Pd. - Ketua Bursa Kerja Khusus)</p><br>
                              <p>0853 2158 3245 (Hilmi Abdul Azis Firmansyah - Developer)</p><br>
                         </address>
                    </div>
               </div>

               <div class="col-md-4 col-sm-8">
                    <div class="footer-info footer-open-hour">
                         <div class="section-title">
                              <h2 class="wow fadeInUp" data-wow-delay="0.2s">Jam Kerja</h2>
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.4s">
                              <p>Minggu: Tutup</p>
                              <div>
                                   <strong>Senin - Sabtu</strong>
                                   <p>7:00 WIB - 17:15 WIB</p>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="col-md-2 col-sm-4">
                    <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                         <li><a href="https://www.facebook.com/smkaloerwk" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                         <li><a href="https://api.whatsapp.com/send?phone=+6285321583245" class="fa fa-whatsapp"></a></li>
                    </ul>

                    <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
                         <p><br>Copyright &copy; 2020 <br>SMK ALOER WARGAKUSUMAH

                              <br><br>Developer: Devisty Company</p>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="{{ asset('template/home/js/jquery.js') }}"></script>
     <script src="{{ asset('vendor/bootstrap/js/popper.min.js') }}"></script>
     <script src="{{ asset('template/home/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('template/home/js/jquery.stellar.min.js') }}"></script>
     <script src="{{ asset('template/home/js/wow.min.js') }}"></script>
     <script src="{{ asset('template/home/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('template/home/js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('template/home/js/smoothscroll.js') }}"></script>
     <script src="{{ asset('template/home/js/custom.js') }}"></script>
</body>
</html>
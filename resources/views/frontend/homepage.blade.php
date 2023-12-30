@extends('frontend.layout')

@section('content')

<div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('frontend/images/6505894.jpg')}}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
            <div class="text w-100 text-center mb-md-5 pb-md-5">
                <h1 class="mb-4">Temukan Barang dan Layanan dengan Mudah!</h1>
                <p style="font-size: 18px;">Dengan fitur pencarian yang efisien, kami memastikan Anda dapat dengan cepat menemukan barang atau layanan yang Anda cari. Nikmati kemudahan dalam menavigasi melalui berbagai kategori produk yang tersedia.</p>
                
            </div>
            </div>
        </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12	featured-top">
            <div class="row justify-content-center no-gutters">
                <div class="col-md-10 d-flex align-items-center">
                <div class="services-wrap rounded-right w-100">
                    <h3 class="heading-section text-center mb-4">Bagaimana proses jual beli di sini ?</h3>
                    <div class="row d-flex mb-4">
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                        <div class="services w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fi fi-rr-discover"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Cari barang kesukaanmu!</h3>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                        <div class="services w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fi fi-sr-handshake"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Negosiasi</h3>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-self-stretch ftco-animate">
                        <div class="services w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fi fi-sr-cart-shopping-fast"></span></div>
                        <div class="text w-100 text-center mx-auto m-auto">
                            <h3 class="heading mb-2 text-center">Deal</h3>
                        </div>
                        </div>
                    </div>
                    </div>
                    <p class="text-center mt-5"><a href="{{route('shop')}}"
                        class="btn text-center mx-auto m-auto ml-auto btn-primary py-3 px-4">Cari Barang</a>
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2 class="mb-2">Barang Tersedia</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-car owl-carousel">
                    @foreach($shops as $shop)
                    <div class="item">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end" style="background-image: url({{ Storage::url($shop->thumbnail)}});"></div>
                                <div class="text"> <h2 class="mb-0"><a href="#">{{ $shop->nama_barang }}</a></h2>
                                    <div class="d-flex mb-3"><p class="price ml-auto">Rp.{{ $shop->harga }}</p></div>
                                <p class="d-flex mb-0 d-block"><center><a href="{{ route('shop.show', $shop->nama_barang) }}" class="btn btn-secondary py-2 ml-1">Detail Barang</a></center></p>
                                </div>
                                
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                    
            </div>
        </div>
        </div>
    </section>
    <section class="ftco-section ftco-about">
        <div class="container">
          <div class="row no-gutters">
              <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
              style="background-image: url({{ asset('frontend/images/about.jpg')}});">
              </div>
              <div class="col-md-6 wrap-about ftco-animate">
              <div class="heading-section heading-section-white pl-md-5">
                  <h2 class="mb-4">Selamat datang di Tel-U Consignment</h2>

                  <p>Selamat datang di Tel-U Consignment, platform eksklusif bagi anggota komunitas Telkom University untuk menjelajahi dan bertransaksi dengan mudah. Temukan beragam barang dan layanan dengan cepat melalui fitur pencarian efisien kami, serta nikmati kemudahan tawar-menawar harga secara online untuk mendapatkan kesepakatan terbaik. Dengan informasi terperinci, foto berkualitas tinggi, dan deskripsi lengkap, kami memastikan pengalaman berbelanja Anda lebih informatif dan memuaskan. Bergabunglah dalam komunitas yang aman dan terpercaya, dan rasakan kenyamanan bertransaksi di Tel-U Consignment, di mana kepuasan Anda adalah prioritas utama.</p>
                  <p><a href="#" class="btn btn-primary py-3 px-4">Cari Barang</a></p>
              </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Features</span>
            <h2 class="mb-3">Keunggulan Web Kami</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span
                    class="fi fi-sr-form"></span></div>
                <div class="text w-100">
                <h3 class="heading mb-2">Informasi Terperinci</h3>
                <p>Kami memberikan informasi barang yang sangat terperinci, didukung dengan foto berkualitas tinggi dan deskripsi lengkap.</p>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span
                    class="fi fi-sr-shield-check"></span></div>
                <div class="text w-100">
                <h3 class="heading mb-2">Berbelanja dengan Aman</h3>
                <p>Dengan berbelanja di FJB Telkom University, Anda berada dalam lingkungan terpercaya yang diisi oleh sesama anggota komunitas Telkom University.</p>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fi fi-brands-whatsapp"></span></div>
                <div class="text w-100">
                <h3 class="heading mb-2">Terhubung Langsung dengan Penjual</h3>
                <p>Sekali klik, anda akan terhubung ke kontak WhatsApp penjual tanpa perlu menyimpan nomor terlebih dahulu.</p>
                </div>
            </div>
            </div>
            <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fi fi-sr-handshake-angle"></span></div>
                <div class="text w-100">
                <h3 class="heading mb-2">Tawar-Menawar Harga Secara Online!</h3>
                <p>Proses negosiasi menjadi lebih praktis dengan kemampuan tawar-menawar harga secara langsung melalui platform kami. </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section id="team" class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">About Us</span>
          <h2 class="mb-3">Meet Our Team</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url('{{ asset('frontend/images/raka.jpg')}}')">
                </div>
                <div class="text pt-4">
                  <p class="name">Achrie Raka Ramadhani</p>
                  <span class="position">Fullstack Web Developer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url('{{ asset('frontend/images/fadli.png')}}')">
                </div>
                <div class="text pt-4">
                  <p class="name">Fadli Kurniawan</p>
                  <span class="position">Fullstack Web Developer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url('{{ asset('frontend/images/yesro.png')}}')">
                </div>
                <div class="text pt-4">
                  <p class="name">Yesro Gomos Nainggolan</p>
                  <span class="position">Project Manager</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url('{{ asset('frontend/images/yoan.jpg')}}')">
                </div>
                <div class="text pt-4">
                  <p class="name">Yoan Nindita Prabowo</p>
                  <span class="position">System Analyst</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url('{{ asset('frontend/images/sekar.png')}}')">
                </div>
                <div class="text pt-4">
                  <p class="name">Sekar Wening Candra Kinanthi</p>
                  <span class="position">Database Administrator</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    @endsection
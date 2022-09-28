@extends('layouts.template')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="HomepageAbout">

        {{-- Bagian Tentang Kami --}}
        <div class="TentangKami">
          <h2>Tentang Kami</h2>
          <div class="title">
            <h4>ChadShop, Toko Peralatan Olahraga Yang Dikenal Seluruh Masyarakat Dunia</h4>
            <p>
              ChadShop adalah toko online yang didedikasikan untuk seluruh Chad diseluruh Indonesia.
            </p>
          </div>
        <div class="row">

          <hr>

          <div class="Card-1">
            <i class="fa-solid fa-check-double"></i>
            <h3>Mudah Dipakai</h3>
            <p>Tampilan ChadShop mudah dipahami oleh user</p>
          </div>

          <div class="Card-1">
            <i class="fa-solid fa-check-double"></i>
            <h3>Mudah Dipakai</h3>
            <p>Tampilan ChadShop mudah dipahami oleh user</p>
          </div>

          <div class="Card-1">
            <i class="fa-solid fa-check-double"></i>
            <h3>Mudah Dipakai</h3>
            <p>Tampilan ChadShop mudah dipahami oleh user</p>
          </div>

          <div class="Card-1">
            <i class="fa-solid fa-check-double"></i>
            <h3>Mudah Dipakai</h3>
            <p>Tampilan ChadShop mudah dipahami oleh user</p>
          </div>
            <hr>
        </div>
        </div>

        {{-- Bagian Testimoni --}}
        <div class="Testimoni">
          <h2>Testimoni Pelanggan</h2>
        <p>Rill Cuy 1000% No Fek Fek</p>

        <div class="column">
            <div class="CardPelanggan1 row">
              <div class="card-text col">
                <h2>"Farhan Kebab Si Giga Chad"</h2>
                <p>"ChadShop adalah Toko Yang Menyediakan Berbagai Jenis Peralatan Olahraga Dan Sejenisnya."</p>
              </div>
              <img src="/images/chad-1.jpg" class="rounded mx-auto d-block" alt="...">
            </div>

          <div class="CardPelanggan2 row">
              <div class="card-text col">
                <h2>"Fahri Cilok Petualang Hebat"</h2>
                <p>"Toko Yang Lengkap Dan Bersih, Pelayanannya Ramah Bintang 5, Saya Pasti Akan Menjadi Pelanggan Setia Disini."</p>
              </div>
              <img src="/images/chad-2.jpg" class="rounded mx-auto d-block" alt="...">
            </div>

            <div class="CardPelanggan1 row">
              <div class="card-text col">
                <h2>"Joseph Joestar Penebak Handal"</h2>
                <p>"Biar Kutebak, Kata Kamu Selanjutnya Ialah, Apa Kamu Mau Saya Wawancarai ?"</p>
              </div>
              <img src="/images/chad-3.png" class="rounded mx-auto d-block" alt="...">
            </div>

          <div class="CardPelanggan2 row">
              <div class="card-text col">
                <h2>"Slamet Kopling Pembalap Handal"</h2>
                <p>"Saya Tidak Pernah Beli Disini, Cuma Numpang Lewat Saja Karena Saya Pembalap."</p>
              </div>
              <img src="/images/ctgy-1.jpg" class="rounded mx-auto d-block" alt="...">
            </div>

        </div>
          <hr>
        </div>

        {{-- Bagian Kontak Kami--}}
        <div class="KontakKami">
          <h2>Kontak Kami</h2>
        <p>Untuk mendapatkan Informasi terbaru Tentang Kami</p>
        </div>

        {{-- Bagian Button medsos --}}
        <div class="IconMedsos">
            <a href="#">
                <div class="section facebook" tooltip="Facebook">
                    <div class="icon">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="section instagram" tooltip="Instagram">
                    <div class="icon">
                        <i class="fab fa-instagram fa-lg"></i>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="section youtube" tooltip="Youtube">
                    <div class="icon">
                        <i class="fab fa-youtube fa-lg"></i>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="section twitter" tooltip="Twitter">
                    <div class="icon">
                        <i class="fab fa-twitter fa-lg"></i>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="section github" tooltip="Github">
                    <div class="icon">
                        <i class="fab fa-github fa-lg"></i>
                    </div>
                </div>
            </a>
        </div>

    </div>
  </div>
</div>
@endsection
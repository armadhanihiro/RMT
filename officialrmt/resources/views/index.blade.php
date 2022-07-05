@extends('layouts.main')

{{-- Hero --}}
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      {{-- <ol id="hero-carousel-indicators" class="carousel-indicators"></ol> --}}

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url(img/masjid.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Remaja Masjid Thoyyibah</h2>
              <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(img/rmt.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Remaja Masjid Thoyyibah</h2>
              <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(img/rmt2.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Remaja Masjid Thoyyibah</h2>
              <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
            </div>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
{{-- End Hero --}}

@section('container')

<!-- Content -->
  <section class="jumbotron">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-3">
          <img src="img/logo.png" alt="Masjid" width="200px" />
        </div>
        <div class="col-md-9">
          <h3 class="display-4 fw-bold" id="paragraph">Remaja Masjid Thoyyibah</h3>
          <p>Remaja Masjid Thoyyibah merupakan perkumpulan pemuda Masjid Thoyyibah yang melakukan aktivitas sosial, kegiatan-kegiatan islami dan juga ibadah di lingkungan suatu masjid.</p>
        </div>
      </div>
      <div class="row mt-3">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum tempora accusantium, ipsa illo amet non accusamus quasi, fugit sint optio quam natus deleniti temporibus sapiente nulla molestias exercitationem autem possimus ea
          eligendi? Culpa saepe tempore, tenetur veritatis nam praesentium ducimus soluta error laudantium assumenda dolorum perferendis blanditiis minima facere ipsam amet vero reiciendis, dicta ipsa modi? Quis est, voluptatum voluptates
          dolore nesciunt fugiat ipsam. Dignissimos incidunt neque, blanditiis rerum nihil earum fuga temporibus inventore sunt ullam distinctio ipsa impedit amet saepe molestias fugiat? Animi, eaque! Deserunt dignissimos deleniti impedit
          magnam iste perferendis incidunt ipsam est vel hic. Fugiat, ea nulla?
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, corporis repudiandae inventore harum itaque est similique iure accusamus unde exercitationem placeat quia magnam ducimus quos labore a rem, recusandae voluptate
          vero error obcaecati optio sit cum laboriosam! Eligendi quia tempore a ad, delectus repellendus ut reiciendis odit quasi eum blanditiis illo tenetur libero perspiciatis cum, magnam assumenda. Expedita repellat accusamus nisi,
          fuga quod neque nemo atque reiciendis placeat quidem? Ipsam eaque sint ipsa, itaque laboriosam qui, temporibus dolores error eos ullam quia nesciunt dolor veniam? Dignissimos id veniam deleniti natus repellat. Impedit maxime
          accusamus laudantium eius debitis, magnam dolorem alias officia ex dicta asperiores atque. Quidem id et, iusto tempora est repudiandae sed neque nobis soluta unde nisi ea? Neque quibusdam ad dolore quas suscipit, amet incidunt
          minus quis nulla fugit atque maiores laudantium a dicta! Mollitia reiciendis delectus saepe nisi suscipit ipsa praesentium quod asperiores nihil odit! At omnis numquam vel, iste sequi est aliquam optio repellendus unde! Ullam
          quas hic perspiciatis illum minima soluta, delectus sint vitae sequi repudiandae suscipit voluptatibus sapiente, atque maxime neque possimus blanditiis? Hic autem aliquam unde necessitatibus porro expedita, excepturi dicta,
          nostrum, corrupti illo reprehenderit accusamus maxime ex. Dignissimos, quaerat! Laborum praesentium perspiciatis tempore debitis nihil voluptates, optio sapiente natus possimus id et impedit animi in facilis perferendis corrupti
          blanditiis ratione ut aspernatur doloribus excepturi consectetur temporibus suscipit? Iste nostrum unde iusto nobis laboriosam autem nemo dignissimos ipsa voluptates. Repellat illo provident natus mollitia blanditiis autem
          aspernatur voluptas, repudiandae rem, voluptatibus rerum laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus et id, maiores obcaecati quo nihil dolor, voluptatibus accusantium omnis, exercitationem nam velit deserunt? Asperiores sit a eligendi reprehenderit eaque magni
          deleniti aspernatur vitae minima, voluptates corrupti? Illo dolorem incidunt quis molestiae nulla iusto placeat, sunt, unde sed minima praesentium accusamus.
        </p>
      </div>
    </div>
  </section>
<!-- End Content -->
@endsection
    
    

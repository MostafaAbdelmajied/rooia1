@extends("test.layout")
@section("video")
<div class="video-container">
    <video id="video" src="img/ved-1.mp4" poster="img/poster.jpeg" controls></video>
    <div class="overlay" id="videoOverlay">
        <div class="play-button"  id="playButton">
            <i class="fa fa-play"></i>
        </div>
        <div class="text-content">
            <h1>a seasoned entity in the mining services industry</h1>
            <p>from exploration to extraction. Their commitment to safety, efficiency, and environmental</p>
            <p> responsibility has earned them the trust of major industry players.</p>
        </div>
    </div>
</div>
@endsection

@section("content")
<div class="container">
    <div class="mt-5 row">
      <div class="col-md-6 p-md-4">
        <img src="img/img-1.jpeg" class="img-fluid w-100" style="max-height:500px ;border-top:5px solid #D16D0A ;border-left:5px solid #D16D0A ; border-radius:25px ;" alt="">
      </div>
      <div class="col-md-6 p-md-4 about-desc">
        <p>Misr Arab Company S.A.E.</p>
        <h2 class="fw-bold">We Are Solving All of Your Business Problems</h2>
        <p>Misr Arab Company S.A.E. is a seasoned entity in the mining services industry; boasting an
          impressive 50-year legacy of expertise across various sectors within the mining services domain. Our journey began with foundational infrastructure work
          in mines and quarries and has since expanded to encompass the full spectrum of ore transportation, from extraction to deli
         very as a market-ready product. Our comprehensive suite of services includes drilling, rock blasting, and a suite of internal services tailored to the unique needs of the mining sector</p>
      </div>
    </div>
    <div class="mt-5">
      <h3 class="fw-bold titles">Our services</h3>
      <div class="row my-5">

        
        @foreach ($services as $service)
        <div class="col-md-4">
            <div class="card h-100">
              <img src="{{asset("img/".$service->image)}}" class="img-fluid w-100" style="height:300px" alt="">
              <div class="p-4 position-relative" style="background-color:#E7E7E78F ;">
                <span class="position-absolute p-2 rounded-circle" style="background-color:#D16D0A ;top:-50px;cursor: pointer;"><img src="img/Widget_alt.png" alt=""></span>
               <h4 class="fw-bold">{{$service->title}}</h4>
               <p class="text-black-50 fw-bold">{{$service->en_desc}}</p>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
    <div class="mt-5">
      <h3 class="fw-bold titles">Our projects</h3>
      <h5 class="mt-5">netbel project</h5>
      <div class="row my-5">
        <div class="col-lg-3 col-md-6">
          <div class="position-relative">
            <img src="img/img-5.jpeg" class="img-fluid w-100" style="height: 300px;" alt="">
            <div class="px-4" style="transform:translateY(-70px) ;">
              <h5 class="fw-bold">name project</h5>
              <p class="fw-bold text-white">Definition of project</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="position-relative">
            <img src="img/img-8.jpeg" class="img-fluid w-100" style="height: 300px;" alt="">
            <div class="px-4" style="transform:translateY(-70px) ;">
              <h5 class="fw-bold">name project</h5>
              <p class="fw-bold text-white">Definition of project</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="position-relative">
            <img src="img/img-7.jpeg" class="img-fluid w-100" style="height: 300px;" alt="">
            <div class="px-4" style="transform:translateY(-70px) ;">
              <h5 class="fw-bold">name project</h5>
              <p class="fw-bold text-white">Definition of project</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="position-relative">
            <img src="img/img-5.jpeg" class="img-fluid w-100" style="height: 300px;" alt="">
            <div class="px-4" style="transform:translateY(-70px) ;">
              <h5 class="fw-bold">name project</h5>
              <p class="fw-bold text-white">Definition of project</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-5">
      <h5 class="mt-5">ongoing project</h5>
      <div class="row my-5">
        <div class="col-lg-3 col-md-6">
          <div class="position-relative">
            <img src="img/img-5.jpeg" class="img-fluid w-100" style="height: 300px;" alt="">
            <div class="px-4" style="transform:translateY(-70px) ;">
              <h5 class="fw-bold">name project</h5>
              <p class="fw-bold text-white">Definition of project</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="position-relative">
            <img src="img/img-8.jpeg" class="img-fluid w-100" style="height: 300px;" alt="">
            <div class="px-4" style="transform:translateY(-70px) ;">
              <h5 class="fw-bold">name project</h5>
              <p class="fw-bold text-white">Definition of project</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="position-relative">
            <img src="img/img-7.jpeg" class="img-fluid w-100" style="height: 300px;" alt="">
            <div class="px-4" style="transform:translateY(-70px) ;">
              <h5 class="fw-bold">name project</h5>
              <p class="fw-bold text-white">Definition of project</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="position-relative">
            <img src="img/img-5.jpeg" class="img-fluid w-100" style="height: 300px;" alt="">
            <div class="px-4" style="transform:translateY(-70px) ;">
              <h5 class="fw-bold">name project</h5>
              <p class="fw-bold text-white">Definition of project</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

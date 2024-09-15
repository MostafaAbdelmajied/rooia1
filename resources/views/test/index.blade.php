<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>مصر العربية</title>
    <!--bootstrap-file-->
    <link rel="stylesheet" href="{{asset('css2/bootstrap.min.css')}}" />
    <!--bootstrap-file-->
    <!--fontawesome-file-->
    <link rel="stylesheet" href="{{asset('css2/all.min.css')}}" />
    <!--icons-site-->
    <link rel="icon" type="png" href="{{asset('img/logo.png')}}" />
    <!--icons-site-->
    <link rel="stylesheet" href="{{asset('css2/style.css')}}" />
    <!--google-font-->
    <!--woow AnimateFiles Css-->
    <link rel="stylesheet" href="{{asset('css2/all.min.css')}}" />
    <!--woow AnimateFiles Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@400;700&display=swap"
      rel="stylesheet" />
    <!--google-font-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
  </head>
  <body class="text-black">
    <div class="d-flex flex-wrap">
      <div class="head head-tri position-relative" style="background-color:#130C26 ;">
        <div class="container">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-wrap gap-3">
              <div class="d-flex align-items-center gap-2 text-white">
                <i class="fa-regular fa-envelope"></i>
                <p class="m-0">info@lifesmilesofnewhope.com</p>
              </div>
              <div class="d-flex align-items-center gap-2 text-white">
                <i class="fa-solid fa-phone"></i>
                <p class="m-0">(770)445-1314</p>
              </div>
              <div class="d-flex align-items-center gap-2 text-white">
                <i class="fa-solid fa-location-dot"></i>
                <p class="m-0">Egypt in Giza</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="head" style="background-color:#BF6309 ;">
        <div class="container d-flex justify-content-end">
          <select class="border-0 bg-transparent fw-bold text-white">
            <option value="AR">اللغة العربية</option>
            <option value="EN">English</option>
          </select>
        </div>
      </div>
    </div>
      <header id="home">
        <div class="container-fluid">
          <nav class="navbar shadow bg-white navbar-expand-lg px-3 pt-0">
            <img src="{{url('public/img/logo.png')}}" style="width: 100px" alt="" />
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                <span style="color: #3b3a5e"
                  ><i class="fa-solid fa-bars p-1"></i
                ></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav text-center m-auto">
                <li class="nav-item active">
                  <a class="nav-link fw-bold" href="index.html">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fw-bold" href="about.html"
                    >About</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link fw-bold" href="services.html">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fw-bold" href="gallery.html">Gallery</a>
                </li>
                <li class="nav-item fw-bold">
                  <a class="nav-link" href="project.html">Project</a>
                </li>
                <li class="nav-item fw-bold">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>
              <div class="d-flex align-items-center gap-4">
                <span class="p-1 px-2 rounded-circle" style="background-color: #D9D9D9;"><i class="fa-solid fa-search text-secondary"></i></span>
                <div class="btn text-white hovers" style="background-color:#B86009 ;">Get in Touch</div>
              </div>
            </div>
          </nav>
        </div>
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
            <div class="col-md-4">
              <div class="card h-100">
                <img src="img/img-2.jpeg" class="img-fluid w-100" style="height:300px" alt="">
                <div class="p-4 position-relative" style="background-color:#E7E7E78F ;">
                  <span class="position-absolute p-2 rounded-circle" style="background-color:#D16D0A ;top:-50px;cursor: pointer;"><img src="img/Widget_alt.png" alt=""></span>
                 <h4 class="fw-bold">power& Energy sectors</h4>
                 <p class="text-black-50 fw-bold">The power and energy sectors are crucial for driving economic growth and ensuring a sustainable future
                  by providing reliable .</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card h-100">
                <img src="img/img-4.jpeg" class="img-fluid w-100" style="height:300px" alt="">
                <div class="p-4 position-relative" style="background-color:#E7E7E78F ;">
                  <span class="position-absolute p-2 rounded-circle" style="background-color:#D16D0A ;top:-50px;cursor: pointer;"><img src="img/Widget_alt.png" alt=""></span>
                 <h4 class="fw-bold">power& Energy sectors</h4>
                 <p class="text-black-50 fw-bold">The power and energy sectors are crucial for driving economic growth and ensuring a sustainable future
                  by providing reliable .</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card h-100">
                <img src="img/img-3.jpeg" class="img-fluid w-100" style="height:300px" alt="">
                <div class="p-4 position-relative" style="background-color:#E7E7E78F ;">
                  <span class="position-absolute p-2 rounded-circle" style="background-color:#D16D0A ;top:-50px;cursor: pointer;"><img src="img/Widget_alt.png" alt=""></span>
                 <h4 class="fw-bold">power& Energy sectors</h4>
                 <p class="text-black-50 fw-bold">The power and energy sectors are crucial for driving economic growth and ensuring a sustainable future
                  by providing reliable .</p>
                </div>
              </div>
            </div>
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

      <footer class="mt-5 p-4 d-flex align-items-center justify-content-center">
        <div class="row w-100 text-white">
          <div class="col-md-3">
            <img src="img/logo.png" style="border-radius:40px ;" alt="">
            <p class="mt-3">delivering high-quality and reliable solutions
              for building and infrastructure needs</p>
              <div class="btn text-white hovers" style="background-color:#B86009 ;">Get in Touch</div>
          </div>
          <div class="col-md-3 mt-3">
            <h2 class="fw-bold">Contact us</h2>
            <div class="d-flex flex-column gap-3 mt-3">
              <div class="d-flex align-items-center gap-2">
                <i class="fa-regular fa-envelope"></i>
                <p class="m-0">info@lifesmilesofnewhope.com</p>
              </div>
              <div class="d-flex align-items-center gap-2">
                <i class="fa-solid fa-phone"></i>
                <p class="m-0">(770)445-1314</p>
              </div>
              <div class="d-flex align-items-center gap-2">
                <i class="fa-solid fa-location-dot"></i>
                <p class="m-0">Egypt in Giza</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-3">
            <h2 class="fw-bold">Our serviccs</h2>
            <div class="d-flex flex-column gap-3 mt-3">
              <div class="d-flex align-items-center gap-2 hovers">
                <i class="fa-solid fa-chevron-right"></i>
                <p class="m-0">Name services</p>
              </div>
              <div class="d-flex align-items-center gap-2 hovers">
                <i class="fa-solid fa-chevron-right"></i>
                <p class="m-0">Name services</p>
              </div>
              <div class="d-flex align-items-center gap-2 hovers">
                <i class="fa-solid fa-chevron-right"></i>
                <p class="m-0">Name services</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-4">
            <p>Sending a message via e-mail</p>
            <div class="position-relative">
              <input type="email" class="form-control" placeholder="Email">
              <div class="position-absolute text-white btn hovers" style="background-color:#000 ;right: 0;top: 0;">Send</div>
          </div>
          </div>
        </div>
      </footer>

    <!--scirpt Files-->
    <script src="{{asset('js2/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js2/wow.min.js')}}"></script>
    <script src="{{asset('js2/all.min.js')}}"></script>
    <script src="{{asset('js2/main.js')}}"></script>
    <!--scirpt Files-->
  </body>
</html>

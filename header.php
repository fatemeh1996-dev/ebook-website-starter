  <header class="header">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet" />
<link href="<?php bloginfo("template_url"); ?>/css/font-awesome.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    
<!-- hero -->
    <div class="hero text-white pt-7">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-6">
            <div class="image-container mb-5 px-4">
              <img src="<?php bloginfo("template_url"); ?>/images/header-ebook.png" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-container p-4 d-flex flex-column justify-content-center h-100 mb-5">
              <h1 class="display-3 fw-bold"><?php the_title(); ?></h1>
              <p class="lead">
                <?php the_content(); ?>
                <!--Form  -->
              <div class="form-container text-center">
                <form action="">
                  <div class="my-4">
                    <input type="text" class="form-control form-control-lg rounded-5" placeholder="Email Address" />

                  </div>
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg text-white">
                      Free Download
                    </button>
                  </div>
                </form>
              </div>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img src="<?php bloginfo("template_url"); ?>/images/wave.svg" alt="">
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,320L26.7,272C53.3,224,107,128,160,96C213.3,64,267,96,320,122.7C373.3,149,427,171,480,170.7C533.3,171,587,149,640,144C693.3,139,747,149,800,133.3C853.3,117,907,75,960,58.7C1013.3,43,1067,53,1120,96C1173.3,139,1227,213,1280,245.3C1333.3,277,1387,267,1413,261.3L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg> -->
    <!-- <svg
    class="frame-decoration"
    data-name="Layer 2"
    xmlns="http://www.w3.org/2000/svg"
    preserveAspectRatio="none"
    viewBox="0 0 1920 192.275"
  >
    <defs>
      <style>
        .cls-1 {
          fill: #f3f6f9;
        }
      </style>
    </defs>
    <title>frame-decoration</title>
    <path
      class="cls-1"
      d="M0,158.755s63.9,52.163,179.472,50.736c121.494-1.5,185.839-49.738,305.984-49.733,109.21,0,181.491,51.733,300.537,50.233,123.941-1.562,225.214-50.126,390.43-50.374,123.821-.185,353.982,58.374,458.976,56.373,217.907-4.153,284.6-57.236,284.6-57.236V351.03H0V158.755Z"
      transform="translate(0 -158.755)"
    />
  </svg> -->
  </header>
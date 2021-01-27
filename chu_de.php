<html>

<head>
  <title>iMusic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- custom css -->
  <link rel="stylesheet" href="./assets/css/index.css">
  <link rel="stylesheet" href="./assets/css/pages/chu_de.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/page.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/blocks.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/print.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/reponsive.css">

  <!-- bootstrap & jquery -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- slickJS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- font aws -->
  <!-- <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" /> -->
  <!-- carousel -->
  <link rel="stylesheet" type="text/css" href="./assets/css/slick.css">
  <script type="text/javascript" src="./assets/js/slick.js"></script>
  <script type="text/javascript" src="./assets/js/jquery.mousewheel.min.js"></script>
  <!-- animate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body style="background: linear-gradient(to bottom,#0B0C27, #0C1033)">
  <!-- nav bar -->
  <div class="navbar-container">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#imusic_navbar"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars"
            class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
              d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
            </path>
          </svg>
        </span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="./assets/images/logo-nav.png" alt="logo">
      </a>
      <!-- Mobile search -->
      <div class="d-lg-none d-md-flex mobile-search">
        <div class="row im-search">
          <div class="d-flex align-items-center" style="padding: 5px 10px">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
              class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512">
              <path
                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
              </path>
            </svg>
          </div>
          <input class="im-search-input" type="search" placeholder="Search song, album, playlist">
        </div>
      </div>

      <div class="collapse navbar-collapse" id="imusic_navbar">
        <ul class="d-flex justify-content-between navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link im-nav-item" href="#">BÀI HÁT<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link im-nav-item" href="#">ALBUM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link im-nav-item" href="#">CHỦ ĐỀ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link im-nav-item" href="#">BẢNG XẾP HẠNG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link im-nav-item" href="#">TOP 100</a>
          </li>
          <li class="nav-item">
            <a class="nav-link im-nav-item" href="#">TIN TỨC</a>
          </li>
        </ul>
      </div>
      <div class="d-none d-lg-flex float-right">
        <div class="row im-search">
          <div class="d-flex align-items-center" style="padding: 5px 10px">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
              class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512">
              <path
                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
              </path>
            </svg>
          </div>
          <input class="d-none d-xl-block im-search-input" type="search" placeholder="Search song, album, playlist">
        </div>
      </div>
    </nav>
  </div>
  <!-- nav bar -->
  <div>
    <div class="col-12 d-flex justify-content-center rm-pd">
      <div class="chu-de-overlay"></div>
      <div class="top-thumbs" style="z-index: -1;position: absolute;">
        <div class="top-thumbs-slicks" style="position: relative;">
          <img src="./assets/images/im-rapviet-2.png" class="top-thumbs-img">
          <img src="./assets/images/im-rapviet-2.png" class="rapviet-img">
          <img src="./assets/images/im-rapviet-2.png" class="rapviet-img">
        </div>
      </div>
      <div class="im-wrapper container" style="z-index: 2;">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-9">
              <div class="p-5"></div>
              <div class="p-3"></div>
              <div class="top-items">
                <div class="top-item-slicks">
                  <div class="the-title">
                    <div style="color: #9BCE33" class="main-sub-title">
                      CHỦ ĐỀ HOT
                    </div>
                    <div class="main-title">
                      RAP VIỆT
                    </div>
                  </div>
                  <div class="p-4"></div>
                  <div class="col-12 m-stuff">
                    <div class="row">
                      <a href="#" class="play-btn">PLAY ALL</a>
                    </div>
                  </div>
                </div>
                <div class="top-item-slicks">
                  <div class="the-title">
                    <div style="color: #9BCE33" class="main-sub-title">
                      CHỦ ĐỀ HOT
                    </div>
                    <div class="main-title">
                      RAP VIỆT
                    </div>
                  </div>
                  <div class="p-4"></div>
                  <div class="col-12 m-stuff">
                    <div class="row">
                      <a href="#" class="play-btn">PLAY ALL</a>

                    </div>
                  </div>
                </div>
                <div class="top-item-slicks">
                  <div class="the-title">
                    <div class="main-sub-title" style="color: #9BCE33">
                      CHỦ ĐỀ HOT
                    </div>
                    <div class="main-title">
                      RAP VIỆT
                    </div>
                  </div>
                  <div class="p-4"></div>
                  <div class="col-12 m-stuff">
                    <div class="row">
                      <a href="#" class="play-btn">PLAY ALL</a>

                    </div>
                  </div>
                </div>
              </div>
              <div class="py-0 py-md-5 px-1 dots-wrapper">
                <div class="top-items-dot"></div>
              </div>
              <div class="im-main-content">
                <div class="py-4"></div>
                <!-- chu de -->
                <section style="height:fit-content">
                  <div class=" d-flex justify-content-between align-items-center">
                    <div class="im-breadcrumb">
                      CHỦ ĐỀ
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <section>
                    <div class="d-flex justify-content-start flex-wrap" style="gap: 18px">
                      <div class="square-image-card">
                        <div class="image-card-overlay" role="green-overlay"></div>
                        <img src="./assets/images/im-top100-01.png" />
                        <div class="image-card-info">
                          <h3 class="album-name">rap việt</h3>
                          <span class="album-songs">20 songs</span>
                        </div>
                      </div>
                      <div class="square-image-card">
                        <div class="image-card-overlay" role="red-overlay"></div>
                        <img src="./assets/images/im-top100-02.png" />
                        <div class="image-card-info">
                          <h3 class="album-name">king of rap</h3>
                          <span class="album-songs">20 songs</span>
                        </div>
                      </div>
                      <div class="square-image-card">
                        <div class="image-card-overlay" role="yellow-overlay"></div>
                        <img src="./assets/images/im-top100-03.png" />
                        <div class="image-card-info">
                          <h3 class="album-name">us thịnh hành</h3>
                          <span class="album-songs">20 songs</span>
                        </div>
                      </div>
                      <div class="square-image-card">
                        <div class="image-card-overlay" role="pink-overlay"></div>
                        <img src="./assets/images/im-top100-04.png" />
                        <div class="image-card-info">
                          <h3 class="album-name">top 100 dân ca</h3>
                          <span class="album-songs">20 songs</span>
                        </div>
                      </div>
                      <div class="square-image-card">
                        <div class="image-card-overlay" role="purple-overlay"></div>
                        <img src="./assets/images/im-top100-05.png" />
                        <div class="image-card-info">
                          <h3 class="album-name">k-pop</h3>
                          <span class="album-songs">20 songs</span>
                        </div>
                      </div>
                      <div class="square-image-card">
                        <div class="image-card-overlay" role="green-overlay"></div>
                        <img src="./assets/images/im-top100-05.png" />
                        <div class="image-card-info">
                          <h3 class="album-name">c-pop</h3>
                          <span class="album-songs">20 songs</span>
                        </div>
                      </div>
                      <div class="square-image-card">
                        <div class="image-card-overlay" role="purple-overlay"></div>
                        <img src="./assets/images/im-top100-05.png" />
                        <div class="image-card-info">
                          <h3 class="album-name">k-pop</h3>
                          <span class="album-songs">20 songs</span>
                        </div>
                      </div>
                      <div class="square-image-card">
                        <div class="image-card-overlay" role="green-overlay"></div>
                        <img src="./assets/images/im-top100-05.png" />
                        <div class="image-card-info">
                          <h3 class="album-name">c-pop</h3>
                          <span class="album-songs">20 songs</span>
                        </div>
                      </div>
                      <div class="square-image-card">
                        <div class="image-card-overlay" role="purple-overlay"></div>
                        <img src="./assets/images/im-top100-05.png" />
                        <div class="image-card-info">
                          <h3 class="album-name">v-pop</h3>
                          <span class="album-songs">20 songs</span>
                        </div>
                      </div>
                      <div class="square-image-card">
                        <div class="image-card-overlay" role="green-overlay"></div>
                        <img src="./assets/images/im-top100-05.png" />
                        <div class="image-card-info">
                          <h3 class="album-name">t-pop</h3>
                          <span class="album-songs">20 songs</span>
                        </div>
                      </div>
                      <div class="square-image-card">
                        <div class="image-card-overlay" role="green-overlay"></div>
                        <img src="./assets/images/im-top100-05.png" />
                        <div class="image-card-info">
                          <h3 class="album-name">s-pop</h3>
                          <span class="album-songs">20 songs</span>
                        </div>
                      </div>
                      <div class="square-image-card">
                        <div class="image-card-overlay" role="green-overlay"></div>
                        <img src="./assets/images/im-top100-05.png" />
                        <div class="image-card-info">
                          <h3 class="album-name">a-pop</h3>
                          <span class="album-songs">20 songs</span>
                        </div>
                      </div>

                    </div>
                  </section>
                </section>
                <!-- chu de -->
                <div class="py-4"></div>
                <!-- album -->
                <section style="height:fit-content">
                  <div class=" d-flex justify-content-between align-items-center">
                    <div class="im-breadcrumb">
                      Album <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                        class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 256 512">
                        <path
                          d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <section class="crs-new-release crs-carousel">
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-crs-1.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Hãy trao cho anh</div>
                        <div class="item-artist">Sơn Tùng M-TP</div>
                      </div>
                    </div>
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-crs-1.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Hãy trao cho anh</div>
                        <div class="item-artist">Sơn Tùng M-TP</div>
                      </div>
                    </div>
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-crs-1.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Hãy trao cho anh</div>
                        <div class="item-artist">Sơn Tùng M-TP</div>
                      </div>
                    </div>
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-crs-1.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Hãy trao cho anh</div>
                        <div class="item-artist">Sơn Tùng M-TP</div>
                      </div>
                    </div>
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-crs-1.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Hãy trao cho anh</div>
                        <div class="item-artist">Sơn Tùng M-TP</div>
                      </div>
                    </div>
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-crs-1.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Hãy trao cho anh</div>
                        <div class="item-artist">Sơn Tùng M-TP</div>
                      </div>
                    </div>
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-crs-1.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Hãy trao cho anh</div>
                        <div class="item-artist">Sơn Tùng M-TP</div>
                      </div>
                    </div>
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-crs-1.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Hãy trao cho anh</div>
                        <div class="item-artist">Sơn Tùng M-TP</div>
                      </div>
                    </div>
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-crs-1.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Hãy trao cho anh</div>
                        <div class="item-artist">Sơn Tùng M-TP</div>
                      </div>
                    </div>
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-crs-1.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Hãy trao cho anh</div>
                        <div class="item-artist">Sơn Tùng M-TP</div>
                      </div>
                    </div>
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-crs-1.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Hãy trao cho anh</div>
                        <div class="item-artist">Sơn Tùng M-TP</div>
                      </div>
                    </div>
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap">
                          <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                            <div class="crs-item-ls-count">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                </path>
                              </svg>&nbsp;1M2
                            </div>
                          </div>
                          <img src="./assets/images/im-crs-1.png" width="100%">
                          <div class="play-overlay animate__animated animate__fadeIn">
                            <div style="display:flex;align-items: center;">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                  d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <div class="item-name">Hãy trao cho anh</div>
                        <div class="item-artist">Sơn Tùng M-TP</div>
                      </div>
                    </div>
                  </section>
                </section>
                <!-- album -->
              </div>
            </div>
            <div class="d-none d-md-block col-md-3">
              <div class="py-4"></div>
              <div class="py-5"></div>
              <div class="py-5"></div>
              <div class="py-5"></div>
              <!-- chu de hot -->
              <section style="height:fit-content;">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="im-breadcrumb">
                    CHỦ ĐỀ HOT <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                      class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 256 512">
                      <path
                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                      </path>
                    </svg>
                  </div>
                </div>
                <div class="py-2"></div>
                <div class="d-flex flex-column">
                  <div class="col-12 rm-pd">
                    <div class="d-flex im-hot-topic-item">
                      <div class="w-100 rm-pd">
                        <div class="solid-filter" role="green"></div>
                      </div>
                      <div class="flex-shrink-1 rm-pd">
                        <img class="float-right" src="./assets/images/im-rapviet.png" style="height: 100%;">
                      </div>
                      <div class="info-overlay d-flex align-items-center">
                        <div class="p-3 px-4">
                          <div class="name text-uppercase">rap việt</div>
                          <div class=" total-song">20 songs</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <div class="col-12 rm-pd">
                    <div class="d-flex im-hot-topic-item">
                      <div class="w-100 rm-pd">
                        <div class="solid-filter" role="red"></div>
                      </div>
                      <div class="flex-shrink-1 rm-pd">
                        <img class="float-right" src="./assets/images/im-kingofrap.png" style="height: 100%;">
                      </div>
                      <div class="info-overlay d-flex align-items-center">
                        <div class="p-3 px-4">
                          <div class="name text-uppercase">king of rap</div>
                          <div class=" total-song">20 songs</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <div class="col-12 rm-pd">
                    <div class="d-flex im-hot-topic-item">
                      <div class="w-100 rm-pd">
                        <div class="solid-filter" role="yellow"></div>
                      </div>
                      <div class="flex-shrink-1 rm-pd">
                        <img class="float-right" src="./assets/images/im-usthinhhanh.png" style="height: 100%;">
                      </div>
                      <div class="info-overlay d-flex align-items-center">
                        <div class="p-3 px-4">
                          <div class="name text-uppercase">us thịnh hành</div>
                          <div class=" total-song">20 songs</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <div class="col-12 rm-pd">
                    <div class="d-flex im-hot-topic-item">
                      <div class="w-100 rm-pd">
                        <div class="solid-filter" role="pink"></div>
                      </div>
                      <div class="flex-shrink-1 rm-pd">
                        <img class="float-right" src="./assets/images/im-top100danca.png" style="height: 100%;">
                      </div>
                      <div class="info-overlay d-flex align-items-center">
                        <div class="p-3 px-4">
                          <div class="name text-uppercase">top 100 dân ca</div>
                          <div class=" total-song">20 songs</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <div class="col-12 rm-pd">
                    <div class="d-flex im-hot-topic-item">
                      <div class="w-100 rm-pd">
                        <div class="solid-filter" role="purple"></div>
                      </div>
                      <div class="flex-shrink-1 rm-pd">
                        <img class="float-right" src="./assets/images/im-kpop.png" style="height: 100%;">
                      </div>
                      <div class="info-overlay d-flex align-items-center">
                        <div class="p-3 px-4">
                          <div class="name text-uppercase">kpop</div>
                          <div class=" total-song">20 songs</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <div class="col-12 rm-pd">
                    <div class="d-flex im-hot-topic-item">
                      <div class="w-100 rm-pd">
                        <div class="solid-filter" role="orange"></div>
                      </div>
                      <div class="flex-shrink-1 rm-pd">
                        <img class="float-right" src="./assets/images/im-trending.png" style="height: 100%;">
                      </div>
                      <div class="info-overlay d-flex align-items-center">
                        <div class="p-3 px-4">
                          <div class="name text-uppercase">trending</div>
                          <div class=" total-song">20 songs</div>
                        </div>
                      </div>
                    </div>
                  </div>
              </section>
              <!-- chu de hot -->
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="py-5"></div>


    <!-- footer -->
    <div>
      <div class="footer">
        <div class="footer-bg">
          <img src="./assets/images/im-footer-01.png" alt="footer-background">
        </div>
        <div class="py-4 py-lg-5 py-md-4 d-flex align-items-center">
          <div class="im-wrapper container" style="z-index: 2;">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-1 pb-3">
                  <div class="d-flex align-items-center justify-content-md-end">
                    <img src="./assets/images/imusic-logo.png" width="42px">
                  </div>
                </div>
                <div class="col-md-3 my-sm-3 my-md-0">
                  <div class="py-3">CÔNG TY CỔ PHẦN ABC MUSIC</div>
                  <div class="sub-text">
                    <div>Địa chỉ:</div>
                    <div class="address">70 Nguyễn Phi Khanh, Phường Tân Định, Quận 1, Thành phố Hồ
                      Chí Minh</div>
                  </div>
                </div>
                <div class="col-md-5 my-sm-3 my-md-0">
                  <div class="d-flex align-items-center">
                    <div class="py-3">CUSTOMER SERVICE</div>
                  </div>
                  <div class="sub-text">
                    <div>Phone: (098) 7459 893</div>
                    <div>Email: anhdt.des@gmail.com</div>
                  </div>
                </div>
                <div class="col-md-3 my-sm-3 my-md-0">
                  <div class="d-flex align-items-center">
                    <div class="py-3">KẾT NỐI VỚI CHÚNG TÔI:</div>
                  </div>
                  <div class="sub-text">
                    <div class="row">
                      <div class="col-3 col-md-9 col-lg-7 d-flex justify-content-between">
                        <a class="mr-2" href="#">
                          <img class="social" src="./assets/images/im-fb-icon.png">
                        </a>
                        <a class="mr-2" href="#">
                          <img class="social" src="./assets/images/im-ptr-icon.png">
                        </a>
                        <a href="#">
                          <img class="social" src="./assets/images/im-youtube-icon.png">
                        </a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex align-items-center footer-end">
          <div class="im-wrapper container">
            <div class="col-md-12  py-4 ">
              <div class="row">
                <div class="col-0 col-md-1"></div>
                <div class="col-12 col-md-3 pb-3 footer-end__design">&copy; Design by Datian.s</div>
                <div class="col-12 col-md-5">
                  <div class="sub-text pb-2">Điều khoản sử dụng</div>
                  <div class="sub-text">
                    <span class="terms">Bản quyền nội dung cung cấp bởi </span>ABC Music
                  </div>
                </div>
                <div class="col-12 col-md-3 pt-5 pt-sm-5 pt-md-0">
                  <img class="pr-2 pb-3" src="./assets/images/tb-bct.png" width="170px">
                  <img class="pl-2" src="./assets/images/dmca.png" width="120px">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->

</body>
<script>
  // document ready
  $(document).ready(async function () {
    // initialize the carousel
    runCrs(1, 1, "crs-today-listen");
    runCrs(0, 1, "crs-top-artist");
    runCrs(1, 2, "crs-new-release");
    runCrs(3, 1, "crs-highlight-artist");
    runCrsThumb();
  });
  // carousel init function
  function runCrs(_type, _rows, _sectionName) {
    // _type: type of item (1:square or 0:round)
    // _rows: define how many rows to display in the carousel
    // _sectionName: name of section
    const _arrPrev = _sectionName + "-prev";
    const _arrNext = _sectionName + "-next";
    var crs = $("." + _sectionName + "");
    crs.slick({
      rows: _rows,
      prevArrow: $('.' + _arrPrev + ''),
      nextArrow: $('.' + _arrNext + ''),
      infinite: true,
      slidesToShow: _type === 1 ? 5 : _type === 0 ? 6 : 1, // _type: type of item (1:square or 0:round)
      autoplay: _type === 3 ? true : false,
      slidesToScroll: _type === 3 ? 1 : 2,
      speed: 1000,
      autoplaySpeed: 2000,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
      ],
      dots: true,
      appendDots: _type === 3 ? $(".highlight-artist-dot") : null,
      asNavFor: _type === 3 ? ".crs-highlight-artist-info" : null
    });
  }
  // carousel thumbs function
  function runCrsThumb() {
    $(".top-items").slick({
      dots: true,
      arrows: false,
      fade: true,
      autoplay: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 1000,
      autoplaySpeed: 3000,
      asNavFor: ".top-thumbs-slicks",
      appendDots: $(".top-items-dot"),
    });
    $(".top-thumbs-slicks").slick({
      dots: false,
      arrows: false,
      fade: true,
      autoplay: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 800,
      autoplaySpeed: 2500,
      asNavFor: ".top-items"
    });

    $(".crs-highlight-artist-info").slick({
      dots: false,
      arrows: false,
      fade: true,
      autoplay: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 800,
      autoplaySpeed: 1900,
      asNavFor: ".crs-highlight-artist"
    });
  }
</script>

</html>
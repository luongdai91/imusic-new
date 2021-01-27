<div class="d-none d-lg-block col-lg-3">
  <div class="p-5"></div>
  <!-- Nghe tiep -->
  <section style="height: fit-content;">
    <div class="row">
      <div class="col-12 rm-pd d-flex justify-content-between align-items-center">
        <div class="im-breadcrumb">
          NGHE TIẾP
        </div>
        <div class="autoplay">
          <span>Autoplay</span>
          <input type="checkbox" id="switch-nghetiep" checked />
          <label for="switch-nghetiep">Toggle</label>
        </div>
      </div>
    </div>
    <div class="py-3"></div>
    <div class="row">
      <div class="col-12 rm-lg-pr">
        <div class="song-item-med pl-2 pl-lg-0">
          <div class="row d-flex justify-content-between px-2">
            <div class="row">
              <div class="row px-4">
                <div class="img-wrapper">
                  <div class="play-overlay">
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                      class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path
                        d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                      </path>
                    </svg>
                  </div>
                  <img src="<?php echo $home; ?>/assets/images/im-crs-1.png">
                </div>
                <div class="d-flex align-items-center">
                  <div class="pl-2 flex-grow-1">
                    <div class="name truncate">Hãy trao cho anh (Official)
                    </div>
                    <div class="artist">Sơn Tùng M-TP</div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="right-control d-none d-sm-none d-md-flex d-lg-none justify-content-center align-items-center ">
              <span>
                <a class="item px-1">
                  03:30
                </a>
              </span>
            </div>
            <div class="d-none d-md-flex d-xl-flex align-items-center">
              <div class="px-1">
                <div class="listen-count right">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                    class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                      d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                    </path>
                  </svg>&nbsp;1M2</div>
                <div class="right-control animate__animated animate__fadeIn">
                  <span>
                    <a class="item px-1">
                      03:30
                    </a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-2"></div>
    </div>
    <div class="col-12 mb-5">
      <button type="button" class="btn btn-reverse btn-large btn-rounded">xem thêm</button>
    </div>
  </section>
  <!-- Nghe tiep -->
  <!-- BXH bài hát -->
  <section style="height:fit-content;">
    <div class="d-flex justify-content-between align-items-center">
      <div class="im-breadcrumb">
        BXH BÀI HÁT <i class="fas fa-angle-right"></i>
      </div>
    </div>
    <div class="py-2"></div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="bxh-mv-vn-tab" data-toggle="tab" href="#bxh-bh-vn" role="tab"
          aria-controls="bxh-mv-vn" aria-selected="true">Việt Nam</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="bxh-mv-am-tab" data-toggle="tab" href="#bxh-bh-am" role="tab"
          aria-controls="bxh-mv-am" aria-selected="false">Âu Mỹ</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="bxh-mv-h-tab" data-toggle="tab" href="#bxh-bh-hq" role="tab"
          aria-controls="bxh-mv-h" aria-selected="false">Hàn Quốc</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="bxh-bh-vn" role="tabpanel" aria-labelledby="bxh-bh-vn-tab">
        <div class="im-top-chart">
          <div class="p-3"></div>
          <?php
          $json_get_sidebar_song = file_get_contents("https://imusic.vn/webapi/chart-song.php?country=bai-hat-Viet-Nam");
          $data = json_decode($json_get_sidebar_song);
          $item = $data->items;
          ?>
          <div class="im-top-st">
            <img src="<?php echo $item[0]->icon; ?>" style="width:100%;">
            <div class="im-top-st-label">
              <div class="label p-2 px-3">1</div>
            </div>
            <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[0]->id.'/'.$item[0]->url; ?>.html" title="<?php echo $item[0]->name; ?>"><div class="play-overlay animate__animated animate__fadeIn"></div></a>
            <div class="p-1"></div>
          </div>
          <div class="col-12 rm-pd">
            <div class="d-flex">
              <div class="w-100 d-flex flex-column">
                <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[0]->id.'/'.$item[0]->url; ?>.html" title="<?php echo $item[0]->name; ?>">
                  <div class="song"><?php echo $item[0]->name; ?></div>
                </a>
                <div class="artist"><?php echo $item[0]->author; ?></div>
              </div>
              <div class="flex-shrink-1 d-flex align-items-center count">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                  class="svg-inline--fa fa-headphones fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512">
                  <path
                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                  </path>
                </svg>&nbsp;<?php echo $item[0]->views; ?>
              </div>
            </div>
          </div>
          <div class="p-3"></div>
          <?php
          for ($i = 1; $i < 10; $i++) {
            ?>
            <div class="col-12 rm-lg-pr">
              <div class="song-item-med pl-2 pl-lg-0">
                <div class="row d-flex justify-content-between px-2">
                  <div class="row">
                    <div class="index" role="<?php if($i==1){echo '2nd';}elseif($i==2){echo '3rd';} ?>"><?php if($i<9){echo 0;}echo $i+1; ?></div>
                    <div class="download-btn" role="2nd">
                      <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
                        <svg aria-hidden="true" focusable="false"
                          data-prefix="fas" data-icon="download" class="svg-inline--fa fa-download fa-w-16"
                          role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path
                            d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                          </path>
                        </svg>
                      </a>
                    </div>
                    <div class="px-1">
                      <div class="row px-4">
                        <div class="img-wrapper">
                          <div class="play-overlay">
                            <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
                              <svg aria-hidden="true" focusable="false" data-prefix="far"
                                data-icon="play-circle" class="svg-inline--fa fa-play-circle fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                            </a>
                          </div>
                          <img src="<?php if($item[$i]->icon == 'images/defaut.png'){echo 'https://imusic.vn/'.$item[$i]->icon;}else{echo $item[$i]->icon;} ?>">
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="pl-2 flex-grow-1">
                            <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
                              <div class="name truncate"><?php echo $item[$i]->name; ?></div>
                            </a>
                            <div class="artist"><?php echo $item[$i]->author; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div
                    class="right-control d-none d-sm-none d-md-flex d-lg-none justify-content-center align-items-center ">
                    <span>
                      <a class="item px-1">
                        03:30
                      </a>
                    </span>
                  </div> -->
                  <div class="d-none d-md-flex d-xl-flex align-items-center">
                    <div class="px-1">
                      <div class="listen-count right">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                          class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                          </path>
                        </svg>&nbsp;<?php echo $item[$i]->views; ?></div>
                      <!-- <div class="right-control animate__animated animate__fadeIn">
                        <span>
                          <a class="item px-1">
                            03:30
                          </a>
                        </span>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-2"></div>
            <?php
          }
          ?>
        </div>
      </div>
      <div class="tab-pane fade" id="bxh-bh-am" role="tabpanel" aria-labelledby="bxh-bh-am-tab">
        <div class="im-top-chart">
          <div class="p-3"></div>
          <?php
          $json_get_sidebar_song = file_get_contents("https://imusic.vn/webapi/chart-song.php?country=bai-hat-Au-My");
          $data = json_decode($json_get_sidebar_song);
          $item = $data->items;
          ?>
          <div class="im-top-st">
            <img src="<?php echo $item[0]->icon; ?>" style="width:100%;">
            <div class="im-top-st-label">
              <div class="label p-2 px-3">1</div>
            </div>
            <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[0]->id.'/'.$item[0]->url; ?>.html" title="<?php echo $item[0]->name; ?>"><div class="play-overlay animate__animated animate__fadeIn"></div></a>
            <div class="p-1"></div>
          </div>
          <div class="col-12 rm-pd">
            <div class="d-flex">
              <div class="w-100 d-flex flex-column">
                <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[0]->id.'/'.$item[0]->url; ?>.html" title="<?php echo $item[0]->name; ?>">
                  <div class="song"><?php echo $item[0]->name; ?></div>
                </a>
                <div class="artist"><?php echo $item[0]->author; ?></div>
              </div>
              <div class="flex-shrink-1 d-flex align-items-center count">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                  class="svg-inline--fa fa-headphones fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512">
                  <path
                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                  </path>
                </svg>&nbsp;<?php echo $item[0]->views; ?>
              </div>
            </div>
          </div>
          <div class="p-3"></div>
          <?php
          for ($i = 1; $i < count($item); $i++) {
            ?>
            <div class="col-12 rm-lg-pr">
              <div class="song-item-med pl-2 pl-lg-0">
                <div class="row d-flex justify-content-between px-2">
                  <div class="row">
                    <div class="index" role="<?php if($i==1){echo '2nd';}elseif($i==2){echo '3rd';} ?>"><?php if($i<9){echo 0;}echo $i+1; ?></div>
                    <div class="download-btn" role="2nd">
                      <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
                        <svg aria-hidden="true" focusable="false"
                          data-prefix="fas" data-icon="download" class="svg-inline--fa fa-download fa-w-16"
                          role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path
                            d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                          </path>
                        </svg>
                      </a>
                    </div>
                    <div class="px-1">
                      <div class="row px-4">
                        <div class="img-wrapper">
                          <div class="play-overlay">
                            <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
                              <svg aria-hidden="true" focusable="false" data-prefix="far"
                                data-icon="play-circle" class="svg-inline--fa fa-play-circle fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                            </a>
                          </div>
                          <img src="<?php if($item[$i]->icon == 'images/defaut.png'){echo 'https://imusic.vn/'.$item[$i]->icon;}else{echo $item[$i]->icon;} ?>">
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="pl-2 flex-grow-1">
                            <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
                              <div class="name truncate"><?php echo $item[$i]->name; ?></div>
                            </a>
                            <div class="artist"><?php echo $item[$i]->author; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div
                    class="right-control d-none d-sm-none d-md-flex d-lg-none justify-content-center align-items-center ">
                    <span>
                      <a class="item px-1">
                        03:30
                      </a>
                    </span>
                  </div> -->
                  <div class="d-none d-md-flex d-xl-flex align-items-center">
                    <div class="px-1">
                      <div class="listen-count right">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                          class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                          </path>
                        </svg>&nbsp;<?php echo $item[$i]->views; ?></div>
                      <!-- <div class="right-control animate__animated animate__fadeIn">
                        <span>
                          <a class="item px-1">
                            03:30
                          </a>
                        </span>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-2"></div>
            <?php
          }
          ?>
        </div>
      </div>
      <div class="tab-pane fade" id="bxh-bh-hq" role="tabpanel" aria-labelledby="bxh-bh-hq-tab">
        <div class="im-top-chart">
          <div class="p-3"></div>
          <?php
          $json_get_sidebar_song = file_get_contents("https://imusic.vn/webapi/chart-song.php?country=bai-hat-Han-Quoc");
          $data = json_decode($json_get_sidebar_song);
          $item = $data->items;
          ?>
          <div class="im-top-st">
            <img src="<?php echo $item[0]->icon; ?>" style="width:100%;">
            <div class="im-top-st-label">
              <div class="label p-2 px-3">1</div>
            </div>
            <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[0]->id.'/'.$item[0]->url; ?>.html" title="<?php echo $item[0]->name; ?>"><div class="play-overlay animate__animated animate__fadeIn"></div></a>
            <div class="p-1"></div>
          </div>
          <div class="col-12 rm-pd">
            <div class="d-flex">
              <div class="w-100 d-flex flex-column">
                <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[0]->id.'/'.$item[0]->url; ?>.html" title="<?php echo $item[0]->name; ?>">
                  <div class="song"><?php echo $item[0]->name; ?></div>
                </a>
                <div class="artist"><?php echo $item[0]->author; ?></div>
              </div>
              <div class="flex-shrink-1 d-flex align-items-center count">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones"
                  class="svg-inline--fa fa-headphones fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512">
                  <path
                    d="M256 32C114.52 32 0 146.496 0 288v48a32 32 0 0 0 17.689 28.622l14.383 7.191C34.083 431.903 83.421 480 144 480h24c13.255 0 24-10.745 24-24V280c0-13.255-10.745-24-24-24h-24c-31.342 0-59.671 12.879-80 33.627V288c0-105.869 86.131-192 192-192s192 86.131 192 192v1.627C427.671 268.879 399.342 256 368 256h-24c-13.255 0-24 10.745-24 24v176c0 13.255 10.745 24 24 24h24c60.579 0 109.917-48.098 111.928-108.187l14.382-7.191A32 32 0 0 0 512 336v-48c0-141.479-114.496-256-256-256z">
                  </path>
                </svg>&nbsp;<?php echo $item[0]->views; ?>
              </div>
            </div>
          </div>
          <div class="p-3"></div>
          <?php
          for ($i = 1; $i < 10; $i++) {
            ?>
            <div class="col-12 rm-lg-pr">
              <div class="song-item-med pl-2 pl-lg-0">
                <div class="row d-flex justify-content-between px-2">
                  <div class="row">
                    <div class="index" role="<?php if($i==1){echo '2nd';}elseif($i==2){echo '3rd';} ?>"><?php if($i<9){echo 0;}echo $i+1; ?></div>
                    <div class="download-btn" role="2nd">
                      <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
                        <svg aria-hidden="true" focusable="false"
                          data-prefix="fas" data-icon="download" class="svg-inline--fa fa-download fa-w-16"
                          role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path
                            d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                          </path>
                        </svg>
                      </a>
                    </div>
                    <div class="px-1">
                      <div class="row px-4">
                        <div class="img-wrapper">
                          <div class="play-overlay">
                            <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
                              <svg aria-hidden="true" focusable="false" data-prefix="far"
                                data-icon="play-circle" class="svg-inline--fa fa-play-circle fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                  d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                </path>
                              </svg>
                            </a>
                          </div>
                          <img src="<?php echo $item[$i]->icon; ?>">
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="pl-2 flex-grow-1">
                            <a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
                              <div class="name truncate"><?php echo $item[$i]->name; ?></div>
                            </a>
                            <div class="artist"><?php echo $item[$i]->author; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div
                    class="right-control d-none d-sm-none d-md-flex d-lg-none justify-content-center align-items-center ">
                    <span>
                      <a class="item px-1">
                        03:30
                      </a>
                    </span>
                  </div> -->
                  <div class="d-none d-md-flex d-xl-flex align-items-center">
                    <div class="px-1">
                      <div class="listen-count right">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                          class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                          </path>
                        </svg>&nbsp;<?php echo $item[$i]->views; ?></div>
                      <!-- <div class="right-control animate__animated animate__fadeIn">
                        <span>
                          <a class="item px-1">
                            03:30
                          </a>
                        </span>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-2"></div>
            <?php
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- BXH Bài hát -->
</div>
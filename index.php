<?php
include 'inc/connect.php';

$data_index = $db_home->tbl_page->findOne(['pid' => "1"], [
  'projection' => [
    'page_content_top' => 1,
    'page_title' => 1,
    'page_description' => 1,
    'page_h1' => 1,
  ],
]);
$title = $data_index->page_title;
$description = $data_index->page_description;
// $h1 = $data_index->page_h1;
// $content_top = $data_index->page_content_top;
$anh_share = $home . '/images/'.$anh_share;
include 'inc/header.php';
?>
  <div>
    <div class="col-12 d-flex justify-content-center rm-pd">
      <div class="top-thumbs" style="z-index: -1;position: absolute;">
        <div class="top-thumbs-slicks slick-mar" style="position: relative;">
          <img src="./assets/images/top-thumbs.png" class="top-thumbs-img">
          <img src="./assets/images/top-thumbs.png" class="top-thumbs-img">
          <img src="./assets/images/top-thumbs.png" class="top-thumbs-img">
        </div>
      </div>
      <div class="im-wrapper container" style="z-index: 2;">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12 col-lg-9">
              <div class="p-5"></div>
              <div class="p-3"></div>
              <div class="top-items">
                <?php
                $data_slide = json_decode(file_get_contents("https://imusic.vn/webapi/home.php?type=slide"));
                foreach ($data_slide as $key => $value) {
                  ?>
                  <div class="top-item-slicks">
                    <div class="the-title">
                      <div class="main-title"><?php echo $value->name; ?></div>
                      <div class="main-sub-title"><?php echo $value->author; ?></div>
                    </div>
                    <div class="p-4"></div>
                    <div class="col-12 m-stuff">
                      <div class="row">
                        <div class="col-md-12 col-xl-2 rm-pd">
                          <a href="<?php echo $value->url; ?>" class="play-btn">PLAY ALL</a>
                        </div>
                        <div class="pt-5 im-show-mb"></div>
                        <div class="col-md-12 col-lg-10 rm-pd">
                          <a href="<?php echo $value->url; ?>" class="dl-n-sh-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                              <path class="a"
                                d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,1,0-2,0V14.59l-1.29-1.3a1,1,0,0,0-1.42,0ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"
                                transform="translate(-3 -2)" />
                            </svg>
                            <span class="d-none d-md-inline im-hide-m">TẢI XUỐNG&nbsp;</span>
                          </a>
                          <a href="https://www.facebook.com/share.php?u=<?php echo $value->url; ?>" class="dl-n-sh-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.007" height="20.033"
                              viewBox="0 0 20.007 20.033">
                              <path class="a"
                                d="M18,14a4,4,0,0,0-3.08,1.48l-5.1-2.35a3.64,3.64,0,0,0,0-2.26l5.1-2.35A4,4,0,1,0,14,6a4.17,4.17,0,0,0,.07.71L8.79,9.14a4,4,0,1,0,0,5.72l5.28,2.43A4.17,4.17,0,0,0,14,18a4,4,0,1,0,4-4ZM18,4a2,2,0,1,1-2,2A2,2,0,0,1,18,4ZM6,14a2,2,0,1,1,2-2A2,2,0,0,1,6,14Zm12,6a2,2,0,1,1,2-2A2,2,0,0,1,18,20Z"
                                transform="translate(-1.994 -1.967)" />
                            </svg>
                            <span class="d-none d-md-inline im-hide-m">CHIA SẺ&nbsp;</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                }
                ?>
              </div>
              <div class="py-5 px-1">
                <div class="top-items-dot"></div>
              </div>
              <div class="im-main-content">
                <div class="p-2"></div>
                <!-- nghe gi hom nay -->
                <section style="height:fit-content;">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="im-breadcrumb">
                      NGHE GÌ HÔM NAY
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                        class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 256 512">
                        <path
                          d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                      </svg>
                    </div>
                    <div class="crs-nav px-2">
                      <div class="row">
                        <div class="px-2 crs-today-listen-prev">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-left"
                            class="svg-inline--fa fa-angle-left fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 256 512">
                            <path
                              d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z">
                            </path>
                          </svg>
                        </div>
                        <div class="px-2 crs-today-listen-next">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                            class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 256 512">
                            <path
                              d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                            </path>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <section class="crs-today-listen crs-carousel">
                    <?php
                    $json_nghe_gi_hom_nay = json_decode(file_get_contents("https://imusic.vn/webapi/home.php?type=nghe-gi-hom-nay"));
                    foreach ($json_nghe_gi_hom_nay as $key => $value) {
                      ?>
                        <div class="crs-item-sq" role="square">
                            <div class="d-flex">
                              <div class="img-wrap img-index">
                                <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                                  <div class="crs-item-ls-count">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                      class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                      </path>
                                    </svg>
                                    &nbsp;<?php echo $value->views; ?>
                                  </div>
                                </div>
                                <img src="<?php echo $value->icon; ?>" width="100%">
                                <div class="play-overlay animate__animated animate__fadeIn">
                                  <div style="display:flex;align-items: center;">
                                    <a href="<?php echo $value->url; ?>">
                                      <svg class="sub" xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                                        viewBox="0 0 18 20">
                                        <path class="a"
                                          d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,1,0-2,0V14.59l-1.29-1.3a1,1,0,0,0-1.42,0ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"
                                          transform="translate(-3 -2)" />
                                      </svg>
                                    </a>
                                    <a href="<?php echo $value->url; ?>" title="<?php echo $value->name; ?>">
                                      <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                        class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                          d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                        </path>
                                      </svg>
                                    </a>
                                    <a href="https://www.facebook.com/share.php?u=<?php echo $value->url; ?>">
                                      <svg class="sub" xmlns="http://www.w3.org/2000/svg" width="20.007" height="20.033"
                                        viewBox="0 0 20.007 20.033">
                                        <path class="a"
                                          d="M18,14a4,4,0,0,0-3.08,1.48l-5.1-2.35a3.64,3.64,0,0,0,0-2.26l5.1-2.35A4,4,0,1,0,14,6a4.17,4.17,0,0,0,.07.71L8.79,9.14a4,4,0,1,0,0,5.72l5.28,2.43A4.17,4.17,0,0,0,14,18a4,4,0,1,0,4-4ZM18,4a2,2,0,1,1-2,2A2,2,0,0,1,18,4ZM6,14a2,2,0,1,1,2-2A2,2,0,0,1,6,14Zm12,6a2,2,0,1,1,2-2A2,2,0,0,1,18,20Z"
                                          transform="translate(-1.994 -1.967)" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="crs-item-info">
                              <a href="<?php echo $value->url; ?>" title="<?php echo $value->name; ?>">
                                <div class="item-name"><?php echo $value->name; ?></div>
                              </a>
                              <div class="item-artist"><?php echo $value->author; ?></div>
                            </div>
                        </div>
                        <?php
                      }
                      ?>
                  </section>
                </section>
                <!-- nghe gi hom nay -->
                <div class="py-4"></div>
                <!-- nghe si noi bat -->
                <section style="height:fit-content;">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="im-breadcrumb">
                      NGHỆ SĨ NỔI BẬT
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                        class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 256 512">
                        <path
                          d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                      </svg>
                    </div>
                    <div class="d-none d-md-block crs-nav px-2">
                      <div class="row">
                        <div class="px-2 crs-top-artist-prev">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-left"
                            class="svg-inline--fa fa-angle-left fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 256 512">
                            <path
                              d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z">
                            </path>
                          </svg>
                        </div>
                        <div class="px-2 crs-top-artist-next">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                            class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 256 512">
                            <path
                              d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                            </path>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <section class="crs-top-artist crs-carousel">
                    <?php
                    $json_nghe_si_noi_bat = json_decode(file_get_contents("https://imusic.vn/webapi/home.php?type=nghe-si-noi-bat"));
                    foreach ($json_nghe_si_noi_bat as $key => $value) {
                      ?>
                      <div class="crs-item-sq" role="round">
                        <div class="d-flex justify-content-center">
                          <a href="<?php echo $value->url; ?>" title="<?php echo $value->name; ?>">
                            <img class="img-wrap" src="<?php echo $value->avatar; ?>" width="100%">
                          </a>
                        </div>
                        <div class="crs-item-info">
                          <div class="item-artist"><?php echo $value->name; ?></div>
                        </div>
                      </div>
                      <?php
                    }
                    ?>
                  </section>
                </section>
                <!-- nghe si noi bat -->
                <div class="py-4"></div>
                <!-- moi phat hanh -->
                <section style="height:fit-content">
                  <div class=" d-flex justify-content-between align-items-center">
                    <div class="im-breadcrumb">
                      MỚI PHÁT HÀNH<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                        class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 256 512">
                        <path
                          d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                      </svg>
                    </div>
                    <div class="crs-nav px-2">
                      <div class="row">
                        <div class="px-2 crs-new-release-prev">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-left"
                            class="svg-inline--fa fa-angle-left fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 256 512">
                            <path
                              d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z">
                            </path>
                          </svg>
                        </div>
                        <div class="px-2 crs-new-release-next">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                            class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 256 512">
                            <path
                              d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                            </path>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <section class="crs-new-release crs-carousel">
                    <?php
                    $json_moi_phat_hanh = json_decode(file_get_contents("https://imusic.vn/webapi/home.php?type=moi-phat-hanh"));
                    foreach ($json_moi_phat_hanh as $key => $value) {
                      ?>
                      <div class="crs-item-sq" role="square">
                        <div class="d-flex">
                          <div class="img-wrap img-index">
                            <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                              <div class="crs-item-ls-count">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                  class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path fill="currentColor"
                                    d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                  </path>
                                </svg>&nbsp;<?php echo $value->views; ?>
                              </div>
                            </div>
                            <img src="<?php echo $value->icon; ?>" width="100%">
                            <div class="play-overlay animate__animated animate__fadeIn">
                              <div style="display:flex;align-items: center;">
                                <a href="<?php echo $value->url; ?>">
                                  <svg class="sub" xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                                    viewBox="0 0 18 20">
                                    <path class="a"
                                      d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,1,0-2,0V14.59l-1.29-1.3a1,1,0,0,0-1.42,0ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"
                                      transform="translate(-3 -2)" />
                                  </svg>
                                </a>
                                <a href="<?php echo $value->url; ?>" title="<?php echo $value->name; ?>">
                                  <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                    class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                      d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                    </path>
                                  </svg>
                                </a>
                                <a href="https://www.facebook.com/share.php?u=<?php echo $value->url; ?>">
                                  <svg class="sub" xmlns="http://www.w3.org/2000/svg" width="20.007" height="20.033"
                                    viewBox="0 0 20.007 20.033">
                                    <path class="a"
                                      d="M18,14a4,4,0,0,0-3.08,1.48l-5.1-2.35a3.64,3.64,0,0,0,0-2.26l5.1-2.35A4,4,0,1,0,14,6a4.17,4.17,0,0,0,.07.71L8.79,9.14a4,4,0,1,0,0,5.72l5.28,2.43A4.17,4.17,0,0,0,14,18a4,4,0,1,0,4-4ZM18,4a2,2,0,1,1-2,2A2,2,0,0,1,18,4ZM6,14a2,2,0,1,1,2-2A2,2,0,0,1,6,14Zm12,6a2,2,0,1,1,2-2A2,2,0,0,1,18,20Z"
                                      transform="translate(-1.994 -1.967)" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="crs-item-info">
                          <a href="<?php echo $value->url; ?>" title="<?php echo $value->name; ?>">
                            <div class="item-name"><?php echo $value->name; ?></div>
                          </a>
                          <div class="item-artist"><?php echo $value->author; ?></div>
                        </div>
                      </div>
                      <?php
                    }
                    ?>
                  </section>
                </section>
                <!-- moi phat hanh -->
                <div class="py-4"></div>
                <!-- MV hot -->
                <section style="height:fit-content;">
                  <div class="d-flex justify-content-between align-items-center mb-3 mt-4">
                    <div class="im-breadcrumb">
                      MV hot
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                        class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 256 512">
                        <path
                          d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <?php
                        $json_mv_hot = json_decode(file_get_contents("https://imusic.vn/webapi/home.php?type=mv-hot"));
                        ?>
                        <div class="col-md-6">
                          <div class="mv-item-med">
                            <img class="thumb" src="https://imusic.vn/<?php echo $json_mv_hot[0]->icon; ?>">
                            <div class="info">
                              <div style="position:absolute;width:100%">
                                <div class="name">
                                  <?php echo $json_mv_hot[0]->name; ?>
                                </div>
                                <div class="d-flex justify-content-between">
                                  <div class="artist">
                                    <?php echo $json_mv_hot[0]->author; ?>
                                  </div>
                                  <div class="artist pr-3">
                                    <div class="crs-item-ls-count">
                                      <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="headphones-alt" class="svg-inline--fa fa-headphones-alt fa-w-16"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                          d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                        </path>
                                      </svg>&nbsp;<?php echo $json_mv_hot[0]->views; ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="play-overlay animate__animated animate__fadeIn">
                              <div style="display:flex;align-items: center;">
                                <a href="<?php echo $json_mv_hot[0]->url; ?>">
                                  <svg class="sub" xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                                    viewBox="0 0 18 20">
                                    <path class="a"
                                      d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,1,0-2,0V14.59l-1.29-1.3a1,1,0,0,0-1.42,0ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"
                                      transform="translate(-3 -2)" />
                                  </svg>
                                </a>
                                <a href="<?php echo $json_mv_hot[0]->url; ?>" title="<?php echo $json_mv_hot[0]->name; ?>">
                                  <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                    class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                      d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                    </path>
                                  </svg>
                                </a>
                                <a href="https://www.facebook.com/share.php?u=<?php echo $json_mv_hot[0]->url; ?>">
                                  <svg class="sub" xmlns="http://www.w3.org/2000/svg" width="20.007" height="20.033"
                                    viewBox="0 0 20.007 20.033">
                                    <path class="a"
                                      d="M18,14a4,4,0,0,0-3.08,1.48l-5.1-2.35a3.64,3.64,0,0,0,0-2.26l5.1-2.35A4,4,0,1,0,14,6a4.17,4.17,0,0,0,.07.71L8.79,9.14a4,4,0,1,0,0,5.72l5.28,2.43A4.17,4.17,0,0,0,14,18a4,4,0,1,0,4-4ZM18,4a2,2,0,1,1-2,2A2,2,0,0,1,18,4ZM6,14a2,2,0,1,1,2-2A2,2,0,0,1,6,14Zm12,6a2,2,0,1,1,2-2A2,2,0,0,1,18,20Z"
                                      transform="translate(-1.994 -1.967)" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 im-hide-mb">
                          <div class="mv-item-med">
                            <img class="thumb" src="https://imusic.vn/<?php echo $json_mv_hot[1]->icon; ?>">
                            <div class="info">
                              <div style="position:absolute;width:100%">
                                <div class="name">
                                  <?php echo $json_mv_hot[1]->name; ?>
                                </div>
                                <div class="d-flex justify-content-between">
                                  <div class="artist">
                                    <?php echo $json_mv_hot[1]->author; ?>
                                  </div>
                                  <div class="artist pr-3">
                                    <div class="crs-item-ls-count">
                                      <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="headphones-alt" class="svg-inline--fa fa-headphones-alt fa-w-16"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                          d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                        </path>
                                      </svg>&nbsp;<?php echo $json_mv_hot[1]->views; ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="play-overlay animate__animated animate__fadeIn">
                              <div style="display:flex;align-items: center;">
                                <a href="<?php echo $json_mv_hot[1]->url; ?>">
                                  <svg class="sub" xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                                    viewBox="0 0 18 20">
                                    <path class="a"
                                      d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,1,0-2,0V14.59l-1.29-1.3a1,1,0,0,0-1.42,0ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"
                                      transform="translate(-3 -2)" />
                                  </svg>
                                </a>
                                <a href="<?php echo $json_mv_hot[1]->url; ?>" title="<?php echo $json_mv_hot[1]->name; ?>">
                                  <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                    class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                      d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                    </path>
                                  </svg>
                                </a>
                                <a href="https://www.facebook.com/share.php?u=<?php echo $json_mv_hot[1]->url; ?>">
                                  <svg class="sub" xmlns="http://www.w3.org/2000/svg" width="20.007" height="20.033"
                                    viewBox="0 0 20.007 20.033">
                                    <path class="a"
                                      d="M18,14a4,4,0,0,0-3.08,1.48l-5.1-2.35a3.64,3.64,0,0,0,0-2.26l5.1-2.35A4,4,0,1,0,14,6a4.17,4.17,0,0,0,.07.71L8.79,9.14a4,4,0,1,0,0,5.72l5.28,2.43A4.17,4.17,0,0,0,14,18a4,4,0,1,0,4-4ZM18,4a2,2,0,1,1-2,2A2,2,0,0,1,18,4ZM6,14a2,2,0,1,1,2-2A2,2,0,0,1,6,14Zm12,6a2,2,0,1,1,2-2A2,2,0,0,1,18,20Z"
                                      transform="translate(-1.994 -1.967)" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <?php
                        for ($i = 2; $i < count($json_mv_hot); $i++) {
                          ?>
                          <div class="col-md-3 col-6 crs-item-sq py-1" role="square">
                            <div class="d-flex">
                              <div class="img-wrap" style="width:100%;">
                                <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                                  <div class="crs-item-ls-count">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                      class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path
                                        d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                      </path>
                                    </svg>&nbsp;<?php echo $json_mv_hot[$i]->views; ?>
                                  </div>
                                </div>
                                <img src="https://imusic.vn/<?php echo $json_mv_hot[$i]->icon; ?>" width="100%">
                                <div class="play-overlay animate__animated animate__fadeIn" style="width: 100%;">
                                  <div style="display:flex;align-items: center;">
                                    <a href="<?php echo $json_mv_hot[$i]->url; ?>">
                                      <svg class="sub" xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                                        viewBox="0 0 18 20">
                                        <path class="a"
                                          d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,1,0-2,0V14.59l-1.29-1.3a1,1,0,0,0-1.42,0ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"
                                          transform="translate(-3 -2)" />
                                      </svg>
                                    </a>
                                    <a href="<?php echo $json_mv_hot[$i]->url; ?>" title="<?php echo $json_mv_hot[$i]->name; ?>">
                                      <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                        class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                          d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                        </path>
                                      </svg>
                                    </a>
                                    <a href="https://www.facebook.com/share.php?u=<?php echo $json_mv_hot[$i]->url; ?>">
                                      <svg class="sub" xmlns="http://www.w3.org/2000/svg" width="20.007" height="20.033"
                                        viewBox="0 0 20.007 20.033">
                                        <path class="a"
                                          d="M18,14a4,4,0,0,0-3.08,1.48l-5.1-2.35a3.64,3.64,0,0,0,0-2.26l5.1-2.35A4,4,0,1,0,14,6a4.17,4.17,0,0,0,.07.71L8.79,9.14a4,4,0,1,0,0,5.72l5.28,2.43A4.17,4.17,0,0,0,14,18a4,4,0,1,0,4-4ZM18,4a2,2,0,1,1-2,2A2,2,0,0,1,18,4ZM6,14a2,2,0,1,1,2-2A2,2,0,0,1,6,14Zm12,6a2,2,0,1,1,2-2A2,2,0,0,1,18,20Z"
                                          transform="translate(-1.994 -1.967)" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="crs-item-info">
                              <a href="<?php echo $json_mv_hot[$i]->url; ?>" title="<?php echo $json_mv_hot[$i]->name; ?>">
                                <div class="item-name"><?php echo $json_mv_hot[$i]->name; ?></div>
                              </a>
                              <div class="item-artist"><?php echo $json_mv_hot[$i]->author; ?></div>
                            </div>
                          </div>
                          <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- MV hot -->
                <div class="py-4"></div>
                <!-- bai hat -->
                <section style="height:fit-content;">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="im-breadcrumb">
                      BÀI HÁT<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                        class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 256 512">
                        <path
                          d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12 rm-xs-pd">
                        <div class="row">
                          <?php
                          $json_bai_hat = json_decode(file_get_contents("https://imusic.vn/webapi/home.php?type=bai-hat"));
                          foreach ($json_bai_hat as $key => $value) {
                            ?>
                            <div class="col-12 col-md-6 song-item-100 px-3 px-md-3">
                              <div class="d-flex justify-content-between">
                                <div class="left row">
                                  <div class="px-1 d-flex pl-3 align-items-center"><?php echo $key+1; ?></div>
                                  <div class="px-1">
                                    <div class="row px-4">
                                      <div class="img-wrapper">
                                        <div class="play-overlay">
                                          <a href="<?php echo $value->url; ?>" title="<?php echo $value->name; ?>">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far"
                                              data-icon="play-circle" class="svg-inline--fa fa-play-circle fa-w-16 main"
                                              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                              <path
                                                d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                              </path>
                                            </svg>
                                          </a>
                                        </div>
                                        <img src="<?php echo $value->icon; ?>">
                                      </div>
                                      <div class="d-flex align-items-center">
                                        <div class="pl-2">
                                          <a href="<?php echo $value->url; ?>" title="<?php echo $value->name; ?>">
                                            <div class="name truncate"><?php echo $value->name; ?></div>
                                          </a>
                                          <div class="artist"><?php echo $value->author; ?></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="right d-flex align-items-center">
                                  <div class="px-1">
                                    <div class="listen-count right">
                                      <a class="item px-1 d-none d-xl-inline">
                                        <i class="fas fa-share-alt"></i>
                                      </a>
                                      <a href="<?php echo $value->url; ?>" class="item l-2 d-none d-xl-inline">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download" class="svg-inline--fa fa-download fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path  d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg>
                                      </a>
                                      <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="headphones-alt" class="svg-inline--fa fa-headphones-alt fa-w-16"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                          d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                        </path>
                                      </svg>&nbsp;<?php echo $value->views; ?></div>
                                  </div>
                                </div>
                              </div>
                              <hr class="im">
                            </div>
                            <?php
                          }
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- bai hat -->
                <div class="py-4"></div>
                <!-- giai tri -->
                <section style="height:fit-content;">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="im-breadcrumb">
                      GIẢI TRÍ<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                        class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 256 512">
                        <path
                          d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="py-2"></div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <?php
                        $json_giai_tri = json_decode(file_get_contents("https://imusic.vn/webapi/home.php?type=giai-tri"));
                        foreach ($json_giai_tri as $key => $value) {
                          ?>
                          <div class="col-md-3 col-6 crs-item-sq py-1" role="square">
                            <div class="d-flex">
                              <div class="img-wrap" style="width:100%;">
                                <div class="d-flex justify-content-end" style="position: relative;width: 100%;">
                                  <div class="crs-item-ls-count">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                      class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                      </path>
                                    </svg>&nbsp;<?php echo $value->views; ?>
                                  </div>
                                </div>
                                <img src="https://imusic.vn/<?php echo $value->icon; ?>" width="100%">
                                <div class="play-overlay animate__animated animate__fadeIn" style="width: 100%;">
                                  <div style="display:flex;align-items: center;">
                                    <a href="<?php echo $value->url; ?>">
                                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                        class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                          d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                        </path>
                                      </svg>
                                    </a>
                                    <a href="<?php echo $value->url; ?>" title="<?php echo $value->name; ?>">
                                      <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                        class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                          d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                        </path>
                                      </svg>
                                    </a>
                                    <a href="https://www.facebook.com/share.php?u=<?php echo $value->url; ?>">
                                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt"
                                        class="svg-inline--fa fa-share-alt fa-w-14 sub" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                          d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                        </path>
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="crs-item-info">
                              <a href="<?php echo $value->url; ?>" title="<?php echo $value->name; ?>">
                                <div class="item-name"><?php echo $value->name; ?></div>
                              </a>
                              <div class="item-artist"><?php echo $value->author; ?></div>
                            </div>
                          </div>
                          <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- MV hot -->
              </div>
            </div>
            <?php
            include 'inc/sidebar.php';
            ?>
          </div>
        </div>
      </div>

    </div>
    <div class="p-5"></div>

<?php
include 'inc/footer.php';
?>
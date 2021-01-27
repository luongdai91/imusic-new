<?php
include 'inc/connect.php';
$id = $_GET['id'];
$url = $_GET['url'];

$json_get_song_detail = file_get_contents("https://imusic.vn/webapi/artist.php?url=$url");
$data_artist = json_decode($json_get_song_detail);
$info = $data_artist->detail;

$urlartist = $info->url;
if ($url != $urlartist) {
  $direct = $home . '/nghe-si/' . $urlartist . '.html';
  echo "<meta http-equiv='refresh' content='0;URL=$direct'>";
  exit();
}
$name = $info->name;
$title = $info->title;
$description = $info->description;
$anh_share =  $info->avatar;

include 'inc/header.php';
?>
<link rel="stylesheet" href="<?php echo $home; ?>/assets/css/components/player/player.css">
<link rel="stylesheet" href="<?php echo $home; ?>/assets/css/pages/nghe_nhac.css">
<link rel="stylesheet" href="<?php echo $home; ?>/assets/css/components/player/audio_player.css">
<link rel="stylesheet" href="<?php echo $home; ?>/assets/css/components/autoplay/autoplay.css">
<script src="<?php echo $home; ?>/assets/js/amplitude.js"></script>
  <div>
    <div class="col-12 d-flex justify-content-center">
      <div class="im-wrapper container" style="z-index: 2;">
        <div class="py-3"></div>
        <div class="row">
          <div class="col-12 col-lg-9 px-4">
            <!-- Player -->
            <section class="row">
              <div class="col-12">
                <div class="player-breadcrumb">
                  <span><?php echo $name; ?></span>
                </div>
              </div>

              <div class="col-12">
                <div id="im-player">
                  <div class="overlay">
                    <img src="<?php echo $info->cover; ?>" class="main-album-art" />
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div id="im-player-center">
                        <img src="<?php echo $info->avatar; ?>" class="main-album-art" />

                        <div class="song-meta-data">
                          <div class="album-art" role="circle">
                            <img src="<?php echo $info->avatar; ?>" class="main-album-art" />
                          </div>
                          <span class="song-name"><?php echo $name; ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="py-2"></div>
            <div class="col-12">
              <div class="row d-flex align-items-center mt-3 m-stuff">
                <a href="https://www.facebook.com/share.php?u=<?php echo $geturl; ?>" class="dl-n-sh-btn">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                      <path d="M412.7,355.3c-18.6,0-35.8,6.5-49.2,17.4l-135.3-97.9c2.3-12.4,2.3-25.2,0-37.6l135.3-97.9c13.5,10.9,30.6,17.4,49.2,17.4
		c43.2,0,78.4-35.1,78.4-78.4S456,0,412.7,0s-78.4,35.1-78.4,78.4c0,7.6,1,14.8,3.1,21.7l-128.5,93.1
		c-19.1-25.3-49.4-41.7-83.5-41.7c-57.7,0-104.5,46.8-104.5,104.5c0,57.7,46.8,104.5,104.5,104.5c34.2,0,64.5-16.4,83.5-41.7
		l128.5,93.1c-2,6.9-3.1,14.2-3.1,21.7c0,43.2,35.1,78.4,78.4,78.4s78.4-35.1,78.4-78.4S456,355.3,412.7,355.3z M412.7,44.4
		c18.7,0,34,15.2,34,34s-15.2,34-34,34c-18.7,0-34-15.2-34-34S394,44.4,412.7,44.4z M125.4,313.5c-31.7,0-57.5-25.8-57.5-57.5
		s25.8-57.5,57.5-57.5s57.5,25.8,57.5,57.5S157.1,313.5,125.4,313.5z M412.7,467.6c-18.7,0-34-15.2-34-34s15.2-34,34-34
		c18.7,0,34,15.2,34,34S431.5,467.6,412.7,467.6z" />
                    </g>
                  </svg>
                  <span class="d-none d-md-inline im-hide-m">CHIA
                    SẺ&nbsp;</span>
                  </a>
              </div>
            </div>
            <div class="py-2"></div>
            <div class="col-12">
              <div class="row lyrics-wrapper">
                <div class="lyrics-header d-flex justify-content-between align-items-center w-100">
                  <div class="song-info">
                    <p>TIỂU SỬ</p>
                  </div>
                </div>
                <hr class="im w-100">
                <div class="row lyrics-body w-100">
                  <div class="col-12 lyrics">
                    <div id="lyrics" class="truncate" style="width: 100%">
                      <?php echo $info->story; ?>
                    </div>
                  </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center w-100">
                  <div class="see-all-lyrics">
                    <button id="see-all-btn">
                      <span id="btn-text" class="btn-text">Xem toàn bộ</span>
                      <span id="btn-icon">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down"
                          class="svg-inline--fa fa-chevron-down " role="img" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 448 512">
                          <path
                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                          </path>
                        </svg>
                      </span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <section style="height: fit-content; width: 100%;">
                <div class="col-12 d-flex justify-content-between align-items-center mb-3 mt-4">
                  <div class="im-breadcrumb">BÀI HÁT CỦA <?php echo $name; ?></div>
                </div>
                <div class="py-2"></div>
                <div class="col-md-12">
                  <div class="row">
                    <?php
                    $data_song = $data_artist->song_of_artist;
                    foreach ($data_song as $key => $value) {
                      ?>
                      <div class="col-12 col-md-12">
                        <div class="song-item-med px-0 px-md-1">
                          <div class="d-flex justify-content-between">
                            <div class="left row">
                              <div class="px-1">
                                <div class="row px-4">
                                  <div class="img-wrapper">
                                    <div class="play-overlay">
                                      <a href="<?php echo $value->url; ?>" title="<?php echo $value->name; ?>">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                          class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
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
                                        <div class="name truncate" style="width: auto"><?php echo $value->name; ?></div>
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
                                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                    class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                      d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                    </path>
                                  </svg>&nbsp;<?php echo $value->views; ?>
                                </div>
                                <div class="right-control animate__animated animate__fadeIn">
                                  <span>
                                    <!-- <a class="item px-2">
                                      03:30
                                    </a> -->
                                    <a href="https://www.facebook.com/share.php?u=<?php echo $value->url; ?>" class="item px-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20.007" height="20.033"
                                        viewBox="0 0 20.007 20.033">
                                        <path class="a"
                                          d="M18,14a4,4,0,0,0-3.08,1.48l-5.1-2.35a3.64,3.64,0,0,0,0-2.26l5.1-2.35A4,4,0,1,0,14,6a4.17,4.17,0,0,0,.07.71L8.79,9.14a4,4,0,1,0,0,5.72l5.28,2.43A4.17,4.17,0,0,0,14,18a4,4,0,1,0,4-4ZM18,4a2,2,0,1,1-2,2A2,2,0,0,1,18,4ZM6,14a2,2,0,1,1,2-2A2,2,0,0,1,6,14Zm12,6a2,2,0,1,1,2-2A2,2,0,0,1,18,20Z"
                                          transform="translate(-1.994 -1.967)" />
                                      </svg>
                                    </a>
                                    <a href="<?php echo $value->url; ?>" class="item pl-2">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                                        <path class="a"
                                          d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,1,0-2,0V14.59l-1.29-1.3a1,1,0,0,0-1.42,0ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"
                                          transform="translate(-3 -2)" />
                                      </svg>
                                    </a>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr class="im">
                        </div>
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                </div>
              </section>
            </div>
            <style>
              .slick-track{width: auto!important}
            </style>
            <div class="mt-3">
              <div class="col-12 d-flex justify-content-center rm-pd">
                <div class="im-wrapper container" style="z-index: 2;">
                  <div class="im-main-content">
                    <section style="height:fit-content">
                      <div class="d-flex justify-content-between align-items-center mb-3 mt-4">
                        <div class="im-breadcrumb">ALBUM CỦA <?php echo $name; ?></div>
                      </div>
                      <div class="py-2"></div>
                      <section class="crs-new-release crs-carousel">
                        <?php
                        $data_album = $data_artist->album_of_artist;
                        foreach ($data_album as $key => $value) {
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
                      </section>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php include 'inc/sidebar-artist.php'; ?>
        </div>
      </div>
    </div>
  </div>

  </div>
  <div class="p-5"></div>
  <script>
    const showAllBtn = document.querySelector('#see-all-btn');
    const btnText = document.querySelector('#btn-text');
    const btnIcon = document.querySelector('#btn-icon');
    const lyrics = document.querySelector('#lyrics');

    showAllBtn.addEventListener('click', function () {
      lyrics.classList.toggle('show-all');
      showAllBtn.classList.toggle('on');
      const isCollapsed = showAllBtn.classList.value === 'on';
      if (isCollapsed) {
        btnText.innerHTML = 'Thu gọn';
        btnIcon.innerHTML = '' +
          `<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-up" class="svg-inline--fa fa-chevron-up fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path></svg>`;
      } else {
        btnText.innerHTML = 'Xem toàn bộ';
        btnIcon.innerHTML = '' +
          `<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>`;
      }

    })
  </script>
  <!-- Style for range slider -->
  <script>
    document.getElementById("amplitude-volume-slider").oninput = function () {
      this.style.background = 'linear-gradient(to right,  #30c592 0%,  #30c592 ' + this.value + '%,  #6871a2 ' + this
        .value +
        '%,   #6871a2 100%)'
    };
  </script>

  <!-- Script for audio player -->
  <script>
    Amplitude.init({
      "songs": [{
          name: "<?php echo $name; ?>",
          artist: '<?php echo $singer; ?>',
          url: "<?php echo $info->play_url; ?>",
          cover_art_url: '<?php echo $info->icon; ?>',
        },
      ],
      "autoplay": true
    });
  </script>
<?php
include 'inc/footer.php';
?>
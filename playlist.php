<?php
include 'inc/connect.php';
$id = $_GET['id'];
$url = $_GET['url'];

$json_get_song_detail = file_get_contents("https://imusic.vn/webapi/play.php?id_album=$id");
$data_playlist = json_decode($json_get_song_detail);

$urlalbum = $data_playlist->url;
if ($url != $urlalbum) {
  $direct = $home . '/playlist/' . $id . '/' . $urlalbum . '.html';
  echo "<meta http-equiv='refresh' content='0;URL=$direct'>";
  exit();
}
$name = $data_playlist->name;
$singer = $data_playlist->singer;
$title = $data_playlist->title;
$description = $data_playlist->description;
$anh_share =  $data_playlist->imageURL;

include 'inc/header.php';
?>
  <div>
    <div class="col-12 d-flex justify-content-center">
      <div class="im-wrapper container" style="z-index: 2;">
        <div class="py-3"></div>
        <div class="row">
          <div class="col-12 col-lg-9 px-4">
            <!-- Player -->
            <section class="row">
              <div class="col-12">
                <div class="breadcrumb breadcrumb_type5" xmlns:v="http://rdf.data-vocabulary.org/">
                  <span class="breadcrumb__divider" typeof="v:Breadcrumb"><a href="<?php echo $home; ?>" rel="v:url" property="v:title" alt="home" title="Trang Chủ">Trang Chủ</a></span> 
                  <span class="bre-nav">›</span><span class="breadcrumb__divider" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Playlist" alt="playlist" target="_blank" href="<?php echo $home.'/playlist';?>">Playlist</a></span> 
                  <span class="bre-nav">›</span><span  class="breadcrumb__point player-breadcrumb" typeof="v:Breadcrumb"><span><?php echo $name; ?></span></span>
                </div>
              </div>
              <div class="col-12">
                <div class="player-title">
                  <span><?php echo $name.' - '.$singer; ?></span>
                </div>
              </div>

              <div class="col-12">
                <div id="im-player">
                  <div class="overlay">
                    <img data-amplitude-song-info="cover_art_url" class="main-album-art" />
                  </div>
                  <!-- audio player - header -->
                  <div class="row">
                    <div class="col-12">
                      <div id="im-player-center">
                        <img data-amplitude-song-info="cover_art_url" class="main-album-art" />

                        <div class="song-meta-data">
                          <div class="album-art" role="circle">
                            <img data-amplitude-song-info="cover_art_url" class="main-album-art" />
                          </div>
                          <span data-amplitude-song-info="name" class="song-name"></span>
                          <span data-amplitude-song-info="artist" class="song-artist"></span>
                          <span data-amplitude-song-info="lyrics" class="song-lyrics">(Chưa có lời Karaoke)</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- audio player - body -->
                  <div class="row">
                    <!-- curr - total time :: Mobile view -->
                    <div class="col-12 d-block d-lg-none">
                      <div class="time-container" style="padding-left: 1.5rem">
                        <span class="current-time">
                          <span class="amplitude-current-minutes"></span>
                          <span>
                            :
                          </span>
                          <span class="amplitude-current-seconds"></span>
                        </span>

                        <span style="margin:0px 4px; color: #6871A2"> / </span>

                        <span class="duration">
                          <span class="amplitude-duration-minutes"></span>:<span
                            class="amplitude-duration-seconds"></span>
                        </span>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="time-progress">
                        <div id="progress-container">
                          <input type="range" class="amplitude-song-slider" />
                          <progress id="song-played-progress" class="amplitude-song-played-progress"></progress>
                          <progress id="song-buffered-progress" class="amplitude-buffered-progress"
                            value="0"></progress>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- audio player - footer  -->
                  <div class="row">
                    <div class="col-8 d-flex justify-content-start align-items-center mb-3">
                      <div id="im-player-controls" class="im-player-controls__left">
                        <div class="amplitude-play-pause" id="play-pause">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play-circle"
                            class="svg-inline--fa fa-play-circle " role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                              d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                            </path>
                          </svg>
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pause-circle"
                            class="svg-inline--fa fa-pause-circle " role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                              d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm-16 328c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v160zm112 0c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v160z">
                            </path>
                          </svg>
                        </div>
                        <div class="amplitude-next" id="next">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="forward"
                            class="svg-inline--fa fa-forward fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                              d="M500.5 231.4l-192-160C287.9 54.3 256 68.6 256 96v320c0 27.4 31.9 41.8 52.5 24.6l192-160c15.3-12.8 15.3-36.4 0-49.2zm-256 0l-192-160C31.9 54.3 0 68.6 0 96v320c0 27.4 31.9 41.8 52.5 24.6l192-160c15.3-12.8 15.3-36.4 0-49.2z">
                            </path>
                          </svg>
                        </div>
                        <div class="amplitude-repeat" id="repeat">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20.001">
                            <path class="a"
                              d="M5.5,17.5H4V6.5h7.8l-.8.79a1,1,0,0,0,1.41,1.42l2.5-2.5a1,1,0,0,0,0-1.42l-2.5-2.5A1,1,0,1,0,11,3.71l.79.79H3a1,1,0,0,0-1,1v13a1,1,0,0,0,1,1H5.5a1,1,0,0,0,0-2ZM21,4.5H18.5a1,1,0,0,0,0,2H20v11H11.63l.79-.79a1,1,0,0,0-1.41-1.42l-2.5,2.5a1,1,0,0,0,0,1.42l2.5,2.5a1,1,0,1,0,1.41-1.42l-.79-.79H21a1,1,0,0,0,1-1V5.5A1,1,0,0,0,21,4.5Z"
                              transform="translate(-2 -1.999)" />
                          </svg>
                        </div>
                        <!-- curr - total time -->
                        <div class="time-container d-lg-inline d-none">
                          <span class="current-time">
                            <span class="amplitude-current-minutes"></span>
                            <span>
                              :
                            </span>
                            <span class="amplitude-current-seconds"></span>
                          </span>

                          <span style="margin:0px 4px; color: #6871A2"> / </span>

                          <span class="duration">
                            <span class="amplitude-duration-minutes"></span>:<span
                              class="amplitude-duration-seconds"></span>
                          </span>
                        </div>
                      </div>
                    </div>

                    <div class="col-4 d-flex justify-content-end align-items-center">
                      <div class="im-player-controls__right d-flex align-items-center">
                        <div class="autoplay">
                          <span>Autoplay</span>
                          <input type="checkbox" id="switch-autoplay" checked />
                          <label for="switch-autoplay">Toggle</label>
                        </div>
                        <div id="volume-container" class="volume-container">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="volume-up"
                            class="svg-inline--fa fa-volume-up" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512">
                            <path
                              d="M215.03 71.05L126.06 160H24c-13.26 0-24 10.74-24 24v144c0 13.25 10.74 24 24 24h102.06l88.97 88.95c15.03 15.03 40.97 4.47 40.97-16.97V88.02c0-21.46-25.96-31.98-40.97-16.97zm233.32-51.08c-11.17-7.33-26.18-4.24-33.51 6.95-7.34 11.17-4.22 26.18 6.95 33.51 66.27 43.49 105.82 116.6 105.82 195.58 0 78.98-39.55 152.09-105.82 195.58-11.17 7.32-14.29 22.34-6.95 33.5 7.04 10.71 21.93 14.56 33.51 6.95C528.27 439.58 576 351.33 576 256S528.27 72.43 448.35 19.97zM480 256c0-63.53-32.06-121.94-85.77-156.24-11.19-7.14-26.03-3.82-33.12 7.46s-3.78 26.21 7.41 33.36C408.27 165.97 432 209.11 432 256s-23.73 90.03-63.48 115.42c-11.19 7.14-14.5 22.07-7.41 33.36 6.51 10.36 21.12 15.14 33.12 7.46C447.94 377.94 480 319.54 480 256zm-141.77-76.87c-11.58-6.33-26.19-2.16-32.61 9.45-6.39 11.61-2.16 26.2 9.45 32.61C327.98 228.28 336 241.63 336 256c0 14.38-8.02 27.72-20.92 34.81-11.61 6.41-15.84 21-9.45 32.61 6.43 11.66 21.05 15.8 32.61 9.45 28.23-15.55 45.77-45 45.77-76.88s-17.54-61.32-45.78-76.86z">
                            </path>
                          </svg>
                          <input id="amplitude-volume-slider" class="amplitude-volume-slider" type="range" value="100"
                            min="0" max="100" step="1" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="py-2"></div>
            <!-- Now Playing Song Info -->
            <div class="col-12">
              <div class="row d-flex align-items-center mt-3 m-stuff">
                <!-- <a href="<?php echo $home . '/download-mp3/' . $id; ?>" class="dl-n-sh-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                    <path class="a"
                      d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,1,0-2,0V14.59l-1.29-1.3a1,1,0,0,0-1.42,0ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"
                      transform="translate(-3 -2)" />
                  </svg>
                  <span class="d-none d-md-inline im-hide-m">TẢI
                    XUỐNG&nbsp;</span></a> -->
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
                    SẺ&nbsp;</span></a>
              </div>
            </div>
            <!-- <div class="py-2"></div>
            <div class="col-12">
              <div class="row lyrics-wrapper">
                <div class="lyrics-header d-flex justify-content-between align-items-center w-100">
                  <div class="song-info">
                    <p>Lời bài hát:
                      <span class="song-info__name">
                        <?php echo $name; ?>
                      </span>
                    </p>
                    <p>Ca sĩ:
                      <span class="song-info__singer"><?php echo $singer; ?></span>
                    </p>
                  </div>
                  <div class="copy-lyrics">
                    <span>
                      <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="copy"
                        class="svg-inline--fa fa-copy " role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path
                          d="M433.941 65.941l-51.882-51.882A48 48 0 0 0 348.118 0H176c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h224c26.51 0 48-21.49 48-48v-48h80c26.51 0 48-21.49 48-48V99.882a48 48 0 0 0-14.059-33.941zM266 464H54a6 6 0 0 1-6-6V150a6 6 0 0 1 6-6h74v224c0 26.51 21.49 48 48 48h96v42a6 6 0 0 1-6 6zm128-96H182a6 6 0 0 1-6-6V54a6 6 0 0 1 6-6h106v88c0 13.255 10.745 24 24 24h88v202a6 6 0 0 1-6 6zm6-256h-64V48h9.632c1.591 0 3.117.632 4.243 1.757l48.368 48.368a6 6 0 0 1 1.757 4.243V112z">
                        </path>
                      </svg>
                    </span>
                    <span class="d-none d-md-inline">Sao chép</span>
                  </div>
                </div>
                <hr class="im w-100">
                <div class="row lyrics-body w-100">
                  <div class="col-12 lyrics">
                    <p id="lyrics" class="truncate">
                      <?php echo $data_playlist->lyric; ?>
                    </p>
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
            </div> -->

            <div class="mt-3">
              <div class="col-12 d-flex justify-content-center rm-pd">
                <div class="im-wrapper container" style="z-index: 2;">
                  <div class="im-main-content">
                    <section style="height:fit-content">
                      <div class="d-flex justify-content-between align-items-center mb-3 mt-4">
                        <div class="im-breadcrumb">PLAYLIST LIÊN QUAN</div>
                      </div>
                      <div class="py-2"></div>
                      <section class="crs-new-release crs-carousel">
                        <?php
                        $related = $data_playlist->related;
                        foreach ($related as $key => $value) {
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
                                    <a href="<?php echo $home.'/playlist/'.$value->id.'/'.$value->url.'.html'; ?>">
                                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
                                        class="svg-inline--fa fa-download fa-w-16 sub" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                          d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                        </path>
                                      </svg>
                                    </a>
                                    <a href="<?php echo $home.'/playlist/'.$value->id.'/'.$value->url.'.html'; ?>" title="<?php echo $value->name; ?>">
                                      <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
                                        class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                          d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
                                        </path>
                                      </svg>
                                    </a>
                                    <a href="https://www.facebook.com/share.php?u=<?php echo $home.'/playlist/'.$value->id.'/'.$value->url.'.html'; ?>">
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
                              <a href="<?php echo $home.'/playlist/'.$value->id.'/'.$value->url.'.html'; ?>" title="<?php echo $value->name; ?>">
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
          <?php include 'inc/sidebar-song.php'; ?>
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
    // var songsToAdd = [{
    //     name: 'Terrain',
    //     artist: 'pg.lost',
    //     album: 'Key',
    //     url: 'https://521dimensions.com/songs/Terrain-pglost.mp3',
    //     cover_art_url: 'https://521dimensions.com/img/open-source/amplitudejs/album-art/key.jpg',
    //   },
    //   {
    //     name: 'Vorel',
    //     artist: 'Russian Circles',
    //     album: 'Guidance',
    //     url: 'https://521dimensions.com/songs/Vorel-RussianCircles.mp3',
    //     cover_art_url: 'https://521dimensions.com/img/open-source/amplitudejs/album-art/guidance.jpg',
    //   },
    //   {
    //     name: 'Intro / Sweet Glory',
    //     artist: 'Jimkata',
    //     album: 'Die Digital',
    //     url: 'https://521dimensions.com/songs/IntroSweetGlory-Jimkata.mp3',
    //     cover_art_url: 'https://521dimensions.com/img/open-source/amplitudejs/album-art/die-digital.jpg',
    //   },
    //   {
    //     name: 'Offcut #6',
    //     artist: 'Little People',
    //     album: 'We Are But Hunks of Wood Remixes',
    //     url: 'https://521dimensions.com/songs/Offcut6-LittlePeople.mp3',
    //     cover_art_url: 'https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-but-hunks-of-wood.jpg',
    //   },
    //   {
    //     name: 'Dusk To Dawn',
    //     artist: 'Emancipator',
    //     album: 'Dusk To Dawn',
    //     url: 'https://521dimensions.com/songs/DuskToDawn-Emancipator.mp3',
    //     cover_art_url: 'https://521dimensions.com/img/open-source/amplitudejs/album-art/from-dusk-to-dawn.jpg',
    //   },
    //   {
    //     name: 'Anthem',
    //     artist: 'Emancipator',
    //     album: 'Soon It Will Be Cold Enough',
    //     url: 'https://521dimensions.com/songs/Anthem-Emancipator.mp3',
    //     cover_art_url: 'https://521dimensions.com/img/open-source/amplitudejs/album-art/soon-it-will-be-cold-enough.jpg',
    //   },
    // ];

    Amplitude.init({
      "songs": [
      <?php
      $items_playlist = $data_playlist->items;
      foreach ($items_playlist as $key => $item) {
      ?>
      {
          name: "<?php echo $item->title; ?>",
          artist: '<?php echo $item->singer; ?>',
          url: "<?php echo $item->url; ?>",
          cover_art_url: '<?php if(!empty($item->imageURL_600)){echo $item->imageURL_600;}else{echo $item->imageURL;} ?>',
        },
      <?php } ?>
      ],
      "autoplay": true
    });

    /*
      Gets all of the add to playlist buttons so we can
      add some event listeners to actually add to playlist.
    */
    var addToPlaylistButtons = document.getElementsByClassName(
      'add-to-playlist-button'
    );

    for (var i = 0; i < addToPlaylistButtons.length; i++) {
      /*
        Add an event listener to the add to playlist button.
      */
      addToPlaylistButtons[i].addEventListener('click', function () {
        var songToAddIndex = this.getAttribute('song-to-add');

        /*
          Adds the song to Amplitude, appends the song to the display,
          then rebinds all of the AmplitudeJS elements.
        */
        var newIndex = Amplitude.addSong(songsToAdd[songToAddIndex]);
        appendToSongDisplay(songsToAdd[songToAddIndex], newIndex);
        Amplitude.bindNewElements();

        /*
          Removes the container that contained the add to playlist button.
        */
        var songToAddRemove = document.querySelector(
          '.song-to-add[song-to-add="' + songToAddIndex + '"]'
        );
        songToAddRemove.parentNode.removeChild(songToAddRemove);
      });
    }

    /*
      Appends the song to the display.
    */
    function appendToSongDisplay(song, index) {
      /*
        Grabs the playlist element we will be appending to.
      */
      var playlistElement = document.querySelector('.im-player-playlist');

      /*
        Creates the playlist song element
      */
      var playlistSong = document.createElement('div');
      playlistSong.setAttribute(
        'class',
        'im-player-playlist-song amplitude-song-container amplitude-play-pause'
      );
      playlistSong.setAttribute('data-amplitude-song-index', index);

      /*
        Creates the playlist song image element
      */
      var playlistSongImg = document.createElement('img');
      playlistSongImg.setAttribute('src', song.cover_art_url);

      /*
        Creates the playlist song meta element
      */
      var playlistSongMeta = document.createElement('div');
      playlistSongMeta.setAttribute('class', 'playlist-song-meta');

      /*
        Creates the playlist song name element
      */
      var playlistSongName = document.createElement('span');
      playlistSongName.setAttribute('class', 'playlist-song-name');
      playlistSongName.innerHTML = song.name;

      /*
        Creates the playlist song artist album element
      */
      var playlistSongArtistAlbum = document.createElement('span');
      playlistSongArtistAlbum.setAttribute('class', 'playlist-song-artist');
      playlistSongArtistAlbum.innerHTML =
        song.artist + ' &bull; ' + song.album;

      /*
        Appends the name and artist album to the playlist song meta.
      */
      playlistSongMeta.appendChild(playlistSongName);
      playlistSongMeta.appendChild(playlistSongArtistAlbum);

      /*
        Appends the song image and meta to the song element
      */
      playlistSong.appendChild(playlistSongImg);
      playlistSong.appendChild(playlistSongMeta);

      /*
        Appends the song element to the playlist
      */
      playlistElement.appendChild(playlistSong);
    }
  </script>
<?php
include 'inc/footer.php';
?>
<?php
include 'inc/connect.php';
include 'function/function.php';

if (empty($_GET['q'])) {
    redirect($home, '', 0);
} else {
    $keyword = $_GET['q'];
    $type = $_GET['type'];
}

if (empty($type)) {
    redirect($home.'/search.php?type=bai-hat&q='.$keyword, '', 0);
}
if (empty($_GET['p'])) {
    $p = 1;
} else {
    $p = $_GET['p'];
}
if (checkadult($keyword) == 'no') {
    header("Location: $home");
}
$title = 'Kết quả với từ khóa ' . $keyword;
$description = 'Tìm kiếm các kết quả với từ khóa ' . $keyword . ' về các bài hát và video nhạc trên ' . $namehome;
$meta_key = $keyword;
$anh_share = $home . '/images/anh-share-tai-nhac-zing-mp3-mien-phi-ve-may.jpg';
include 'inc/header.php';

$json_get_data = file_get_contents("https://imusic.vn/webapi/search.php?$type&key=$keyword&p=$p");
$data = json_decode($json_get_data);
?>

  <div>
    <div class="col-12 d-flex justify-content-center rm-pd">

      <div class="im-wrapper container" style="z-index: 2;">
        <div class="col-md-12 bai-hat-wrapper">
          <div class="row">
            <div class="col-md-12 col-lg-9 px-3" role="container">
              <div class="p-md-4 p-3"></div>
              <section class="search-area">
                <div class="search-header">
                  <span class="primary-text">KẾT QUẢ TÌM KIẾM CỦA TỪ KHOÁ:</span>
                  <span class="secondary-text"><?php echo $keyword; ?></span>
                  <span class="result"><?php echo number_format($data[0]->total); ?> kết quả</span>
                </div>
                <div class="py-3"></div>
                <div class="search-tabs">
                  <!-- desktop tabs -->
                  <ul class="d-none d-md-flex nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item im-nav-item">
                      <a class="nav-link <?php if($type=='bai-hat'){echo 'active';} ?> im-nav-link" href="<?php echo $home; ?>/search.php?type=bai-hat&q=<?php echo $keyword; ?>">Bài hát</a>
                    </li>
                    <li class="nav-item im-nav-item">
                      <a class="nav-link <?php if($type=='album'){echo 'active';} ?> im-nav-link" href="<?php echo $home; ?>/search.php?type=album&q=<?php echo $keyword; ?>">Album</a>
                    </li>
                    <!-- <li class="nav-item im-nav-item">
                      <a class="nav-link <?php if($type=='video'){echo 'active';} ?> im-nav-link" href="<?php echo $home; ?>/search.php?type=video&q=<?php echo $keyword; ?>">Video</a>
                    </li> -->
                  </ul>

                  <!-- mobile tabs -->
                  <div class="d-flex d-md-none dropdown mobile-tabs search-mobile-tabs">
                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <span><?php if($type=='bai-hat'){echo 'Bài Hát';}elseif($type=='album'){echo 'Album';}elseif($type=='video'){echo 'Video';} ?></span>
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down"
                        class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path
                          d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                        </path>
                      </svg>
                    </button>
                    <div class="dropdown-menu mobile-dropdown__sub" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="<?php echo $home; ?>/search.php?type=bai-hat&q=<?php echo $keyword; ?>">Bài hát</a>
                      <a class="dropdown-item" href="<?php echo $home; ?>/search.php?type=album&q=<?php echo $keyword; ?>">Album</a>
                      <!-- <a class="dropdown-item" href="<?php echo $home; ?>/search.php?type=video&q=<?php echo $keyword; ?>">Video</a> -->
                    </div>
                  </div>
                </div>
                <div class="py-3"></div>
                <div class="search-result">
                  <?php
                  $data_item = $data[0]->data;
                  foreach ($data_item as $key => $value) {
                    ?>
                    <div class="song-item-100  px-1">
                      <div class="d-flex justify-content-between">
                        <div class="left row">
                          <div class="px-1">
                            <div class="row px-4">
                              <div class="img-wrapper">
                                <a href="<?php echo $home.'/'.$value->url; ?>" title="<?php echo $value->name; ?>">
                                  <div class="play-overlay">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play-circle"
                                      class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z">
                                      </path>
                                    </svg>
                                  </div>
                                  <img src="<?php echo $value->icon; ?>">
                                </a>
                              </div>
                              <div class="d-flex align-items-center">
                                <div class="pl-2">
                                  <a href="<?php echo $home.'/'.$value->url; ?>" title="<?php echo $value->name; ?>">
                                    <div class="name truncate"><?php echo $value->name; ?></div>
                                  </a>
                                  <div class="artist"><?php echo $value->author; ?></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="d-none d-md-flex align-items-center">
                          <div class="right-control">
                            <span>
                              <a class="item px-2">
                                03:30
                              </a>
                            </span>
                          </div>
                        </div> -->
                        <div class="right d-flex align-items-center">
                          <div class="px-1">
                            <div class="listen-count right">
                              <a href="https://www.facebook.com/share.php?u=<?php echo $home.'/'.$value->url; ?>" class="item px-1 d-none d-md-inline">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.007" height="20.033"
                                  viewBox="0 0 20.007 20.033">
                                  <path class="a"
                                    d="M18,14a4,4,0,0,0-3.08,1.48l-5.1-2.35a3.64,3.64,0,0,0,0-2.26l5.1-2.35A4,4,0,1,0,14,6a4.17,4.17,0,0,0,.07.71L8.79,9.14a4,4,0,1,0,0,5.72l5.28,2.43A4.17,4.17,0,0,0,14,18a4,4,0,1,0,4-4ZM18,4a2,2,0,1,1-2,2A2,2,0,0,1,18,4ZM6,14a2,2,0,1,1,2-2A2,2,0,0,1,6,14Zm12,6a2,2,0,1,1,2-2A2,2,0,0,1,18,20Z"
                                    transform="translate(-1.994 -1.967)" />
                                </svg>
                              </a>
                              <a href="<?php echo $home.'/'.$value->url; ?>" class="item l-2 d-none d-md-inline">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                                  <path class="a"
                                    d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,1,0-2,0V14.59l-1.29-1.3a1,1,0,0,0-1.42,0ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"
                                    transform="translate(-3 -2)" />
                                </svg>
                              </a>
                              <a class="item l-2">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                  class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                  <path fill="currentColor"
                                    d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                  </path>
                                </svg>
                                &nbsp;<?php echo $value->views; ?>
                              </a>

                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="im">
                    </div>
                    <?php
                  }
                  ?>
                  <!-- pagination -->
                  <div class="row pagination-section">
                    <section class="container flex-column justify-content-center align-items-center pagination">
                      <div>
                        <div class="col-12">
                          <a href="<?php echo $home; ?>/search.php?type=<?php echo $type; ?>&q=<?php echo $keyword; ?>&p=<?php echo $p+1; ?>" title="Trang <?php echo $p+1; ?>">
                            <button type="button" class="btn btn-rounded btn-large">
                              TIẾP THEO
                            </button>
                          </a>
                        </div>
                      </div>
                      <div>
                        <div class="col-12">
                          <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <?php if($p != 1){ ?>
                                <li class="page-item">
                                  <a href="<?php echo $home; ?>/search.php?type=<?php echo $type; ?>&q=<?php echo $keyword; ?>&p=<?php echo $p-1; ?>" class="page-link" aria-label="Previous">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                                      class="svg-inline--fa fa-chevron-left fa-w-10" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                      <path fill="currentColor"
                                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                      </path>
                                    </svg>
                                  </a>
                                </li>
                                <?php
                              }
                              $pg = ceil($data[0]->total / 20);
                              $sc = 6;
                              $st = floor($p / $sc) * $sc;
                              $en = $st + $sc;
                              $g = $st;
                              for ($g; ($g < $en); $g++) {
                                  if ($g == 1 and $g != $p) {
                                      print('<li class="page-item"><a href="./search.php?type='.$type.'&q='.$keyword.'" class="page-link">1</a></li>');
                                  } elseif ($g == 1 and $g == $p) {
                                      print('<li class="page-item active"><a class="page-link">1</a></li>');
                                  } elseif ($g == $p) {
                                      print('<li class="page-item active"><a class="page-link">' . $g . '</a></li>');
                                  } elseif ($g <= $pg) {
                                      if ($g > 0) {
                                          if ($p != "1") {
                                            $xx = "$g";
                                          } else {
                                            $xx = $g;
                                          }
                                          print('<li class="page-item"><a href="./search.php?type='.$type.'&q='.$keyword.'&p=' . $xx . '" class="page-link">' . $g . '</a></li>');
                                      }
                                  }
                              }
                              ?>
                              <?php if($p != ceil($data[0]->total/20)){ ?>
                                <li class="page-item">
                                  <a class="page-link">...</a>
                                </li>
                                <li class="page-item">
                                  <a href="<?php echo $home; ?>/search.php?type=<?php echo $type; ?>&q=<?php echo $keyword; ?>&p=<?php echo ceil($data[0]->total/20); ?>" class="page-link" title="Trang cuối"><?php echo ceil($data[0]->total/20); ?></a>
                                </li>
                                <li class="page-item">
                                  <a href="<?php echo $home; ?>/search.php?type=<?php echo $type; ?>&q=<?php echo $keyword; ?>&p=<?php echo $p+1; ?>" class="page-link" aria-label="Next">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                                      class="svg-inline--fa fa-chevron-right fa-w-10" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                      <path fill="currentColor"
                                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                      </path>
                                    </svg>
                                  </a>
                                </li>
                              <?php } ?>
                            </ul>
                          </nav>
                        </div>
                      </div>
                    </section>
                  </div>
                  <!-- End :: Pagination -->
                </div>
              </section>
            </div>
            <?php
            include 'inc/sidebar-list-song.php';
            ?>
          </div>

        </div>

      </div>

    </div>

  </div>
  <div class="p-5"></div>

<?php
include 'inc/footer.php';
?>
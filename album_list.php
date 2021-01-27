<?php
include 'inc/connect.php';

if(empty($_GET['p'])) {
  $p = 1;
}else{
  $p = $_GET['p'];
}
$data_cat_root = $db_home->tb_category->findOne(['id' => "28",], [
  'projection' => [
    'title' => 1,
    'description' => 1,
    'h1' => 1,
    'content_top' => 1,

  ],
]);
$title = $data_cat_root->title;
$title = str_replace('%page%', ' - Trang '.$p, $title);
$description = $data_cat_root->description;
$description = str_replace('%type%', '', $description);
// $meta_key = str_replace('%name%', '', $meta_key);
// $meta_key = str_replace(' ,', ',', $meta_key);
$anh_share = $home . '/images/anh-share-tai-nhac-zing-mp3-mien-phi-ve-may.jpg';
include 'inc/header.php';
?>

  <div class="col-12 d-flex justify-content-center rm-pd">
    <div class="im-wrapper container" style="z-index: 2;">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-9">
            <div class="p-5"></div>

            <div class="im-main-content">
              <!-- album  -->
              <section style="height:fit-content">
                <div class=" d-flex justify-content-between align-items-center">
                  <div class="im-breadcrumb">
                    ALBUM
                  </div>
                </div>
                <div class="py-2"></div>
                <section class="crs-new-release crs-carousel">
                  <?php
                  $json_get_playlist = file_get_contents("https://imusic.vn/webapi/list.php?album&p=$p&limit=20");
                  $data_playlist = json_decode($json_get_playlist);
                  $data = $data_playlist[0]->data;
                  foreach ($data as $key => $value) {
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

                <!-- phan trang -->
                <div class="row pagination-section">
                  <section class="container flex-column justify-content-center align-items-center pagination">
                    <div>
                      <div class="col-12">
                        <a href="./playlist?p=<?php echo $p+1; ?>" title="Trang <?php echo $p+1; ?>">
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
                                <a href="./playlist?p=<?php echo $p-1; ?>" class="page-link" aria-label="Previous">
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
                            $pg = ceil($data_playlist[0]->total / 20);
                            $sc = 6;
                            $st = floor($p / $sc) * $sc;
                            $en = $st + $sc;
                            $g = $st;
                            for ($g; ($g < $en); $g++) {
                                if ($g == 1 and $g != $p) {
                                    print('<li class="page-item"><a href="./playlist" class="page-link">1</a></li>');
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
                                        print('<li class="page-item"><a href="./playlist?p=' . $xx . '" class="page-link">' . $g . '</a></li>');
                                    }
                                }
                            }
                            ?>
                            <?php if($p != ceil($data_playlist[0]->total/20)){ ?>
                              <li class="page-item">
                                <a class="page-link">...</a>
                              </li>
                              <li class="page-item">
                                <a href="./playlist?p=<?php echo ceil($data_playlist[0]->total/20); ?>" class="page-link" title="Trang cuối"><?php echo ceil($data_playlist[0]->total/20); ?></a>
                              </li>
                              <li class="page-item">
                                <a href="./playlist?p=<?php echo $p+1; ?>" class="page-link" aria-label="Next">
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
              </section>
              <!-- album  -->
            </div>
          </div>
          <?php include 'inc/sidebar-list-album.php'; ?>
        </div>
      </div>
    </div>

  </div>
  <div class="p-5"></div>
  <!-- Content -->
<?php
include 'inc/footer.php';
?>
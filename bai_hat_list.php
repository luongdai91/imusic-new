<?php
include 'inc/connect.php';

if(empty($_GET['p'])) {
  $p = 1;
}else{
  $p = $_GET['p'];
}
$data_cat_root = $db_home->tb_category->findOne(['id' => "1",], [
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
  <div>
    <div class="col-12 d-flex justify-content-center rm-pd">

      <div class="im-wrapper container" style="z-index: 2;">
        <div class="col-md-12 bai-hat-wrapper">
          <div class="row">
            <div class="col-md-12 col-lg-9">
              <div class="p-md-5 p-3"></div>
              <div class="im-main-content">
                <!-- bai hat -->
                <section style="height:fit-content;">
                  <div class="row px-3 pr-5 pr-sm-3">
                    <div class="col-9 col-lg-8">
                      <div class="im-breadcrumb">
                        BÀI HÁT
                      </div>
                    </div>
                    <div class="col-3 col-lg-4 d-sm-flex d-md-block justify-content-end">
                      <!-- mobile tabs -->
                      <div class="d-block d-md-none dropdown mobile-tabs">
                        <button class="btn btn-small" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <span>
                            Hot nhất
                          </span>
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down"
                            class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path fill="currentColor"
                              d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                            </path>
                          </svg>
                        </button>
                        <div class="dropdown-menu mobile-dropdown__sub" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Hot nhất</a>
                          <a class="dropdown-item" href="#">Gần đây</a>
                        </div>
                      </div>

                      <!-- desktop tabs -->
                      <ul class="d-none d-md-flex bh-tabs nav nav-tabs flex-nowrap" id="mytab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="bh-hot-nhat-tab" data-toggle="tab" href="#bh-hot-nhat"
                            role="tab" aria-controls="bh-hot-nhat" aria-selected="true">Hot nhất</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="bh-gan-day-tab" data-toggle="tab" href="#bh-gan-day" role="tab"
                            aria-controls="bh-gan-day" aria-selected="false">Gần đây</a>
                        </li>
                      </ul>

                    </div>
                  </div>

                  <div class="py-2"></div>
                  <div class="col-md-12">
                    <div class="row">
                      <?php
                      $json_get_song = file_get_contents("https://imusic.vn/webapi/list.php?songs&p=$p&limit=20");
                      $data_song = json_decode($json_get_song);
                      $data = $data_song[0]->data;
                      foreach ($data as $key => $value) {
                        ?>
                        <div class="col-12 col-md-6">
                          <div class="song-item-med px-0 px-md-1">
                            <div class="d-flex justify-content-between">
                              <div class="left row">
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
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
                                      class="px-2 svg-inline--fa fa-headphones-alt fa-w-16" role="img"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                      <path fill="currentColor"
                                        d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
                                      </path>
                                    </svg>&nbsp;<?php echo $value->views; ?></div>
                                  <div class="right-control animate__animated animate__fadeIn">
                                    <span>
                                      <!-- <a class="item px-2">
                                        03:30
                                      </a> -->
                                      <a href="https://www.facebook.com/share.php?u=<?php echo $value->url; ?>" class="item px-1">
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
                                      </a>
                                      <a href="<?php echo $value->url; ?>" class="item pl-2" title="Mở bài hát <?php echo $value->name.' - '.$value->author; ?> trong tab mới">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                          <path
                                            d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,0,0-2,0V14.59l-1.29-1.3A1,1,0,0,0,8.29,13.29ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z" />
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
                  <!-- pagination -->
                  <div class="row pagination-section">
                    <section class="container flex-column justify-content-center align-items-center pagination">
                      <div>
                        <div class="col-12">
                          <a href="./nghe-nhac?p=<?php echo $p+1; ?>" title="Trang <?php echo $p+1; ?>">
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
                                  <a href="./nghe-nhac?p=<?php echo $p-1; ?>" class="page-link" aria-label="Previous">
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
                              $pg = ceil($data_song[0]->total / 20);
                              $sc = 6;
                              $st = floor($p / $sc) * $sc;
                              $en = $st + $sc;
                              $g = $st;
                              for ($g; ($g < $en); $g++) {
                                  if ($g == 1 and $g != $p) {
                                      print('<li class="page-item"><a href="./nghe-nhac" class="page-link">1</a></li>');
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
                                          print('<li class="page-item"><a href="./nghe-nhac?p=' . $xx . '" class="page-link">' . $g . '</a></li>');
                                      }
                                  }
                              }
                              ?>
                              <?php if($p != ceil($data_song[0]->total/20)){ ?>
                                <li class="page-item">
                                  <a class="page-link">...</a>
                                </li>
                                <li class="page-item">
                                  <a href="./nghe-nhac?p=<?php echo ceil($data_song[0]->total/20); ?>" class="page-link" title="Trang cuối"><?php echo ceil($data_song[0]->total/20); ?></a>
                                </li>
                                <li class="page-item">
                                  <a href="./nghe-nhac?p=<?php echo $p+1; ?>" class="page-link" aria-label="Next">
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
                <!-- bai hat -->
              </div>
            </div>
            <?php include 'inc/sidebar-list-song.php'; ?>
          </div>
        </div>
      </div>

    </div>
    <div class="p-5"></div>
<?php
include 'inc/footer.php';
?>
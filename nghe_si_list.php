<?php
include 'inc/connect.php';

if(empty($_GET['p'])) {
  $p = 1;
}else{
  $p = $_GET['p'];
}

$data_cat_root = $db_home->tbl_page->findOne(['pid' => "16",], [
  'projection' => [
    'page_title' => 1,
    'page_description' => 1,
    'page_h1' => 1,
    'page_content_top' => 1,
  ],
]);
$title = $data_cat_root->page_title;
$description = $data_cat_root->page_description;
// $meta_key = str_replace('%name%', '', $meta_key);
// $meta_key = str_replace(' ,', ',', $meta_key);
$anh_share = $home . '/images/tai-nhac-mp3-mien-phi-imusic.vn.jpg';
include 'inc/header.php';
?>
  <!-- Content -->
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
                    NGHỆ SĨ
                  </div>
                </div>
                <div class="py-2"></div>
                <section class="crs-new-release crs-carousel">
                  <?php
                  $json_get_artist = file_get_contents("https://imusic.vn/webapi/artist.php?p=$p&limit=20");
                  $data_artist = json_decode($json_get_artist);
                  $data = $data_artist[0]->data;
                  foreach ($data as $key => $value) {
                    ?>
                    <div class="crs-item-sq" role="square">
                      <div class="d-flex">
                        <div class="img-wrap img-index">
                          <img src="<?php echo $value->avatar; ?>" width="100%">
                          <a href="<?php echo $home.'/nghe-si/'.$value->url; ?>.html" title="<?php echo $value->name; ?>">
                            <div class="play-overlay animate__animated animate__fadeIn">
                              <div style="display:flex;align-items: center;"></div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="crs-item-info">
                        <a href="<?php echo $home.'/nghe-si/'.$value->url; ?>.html" title="<?php echo $value->name; ?>">
                          <div class="item-name"><?php echo $value->name; ?></div>
                        </a>
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
                        <a href="./nghe-si?p=<?php echo $p+1; ?>" title="Trang <?php echo $p+1; ?>">
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
                                <a href="./nghe-si?p=<?php echo $p-1; ?>" class="page-link" aria-label="Previous">
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
                            $pg = ceil($data_artist[0]->total / 20);
                            $sc = 6;
                            $st = floor($p / $sc) * $sc;
                            $en = $st + $sc;
                            $g = $st;
                            for ($g; ($g < $en); $g++) {
                                if ($g == 1 and $g != $p) {
                                    print('<li class="page-item"><a href="./nghe-si" class="page-link">1</a></li>');
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
                                        print('<li class="page-item"><a href="./nghe-si?p=' . $xx . '" class="page-link">' . $g . '</a></li>');
                                    }
                                }
                            }
                            ?>
                            <?php if($p != ceil($data_artist[0]->total/20)){ ?>
                              <li class="page-item">
                                <a class="page-link">...</a>
                              </li>
                              <li class="page-item">
                                <a href="./nghe-si?p=<?php echo ceil($data_artist[0]->total/20); ?>" class="page-link" title="Trang cuối"><?php echo ceil($data_artist[0]->total/20); ?></a>
                              </li>
                              <li class="page-item">
                                <a href="./nghe-si?p=<?php echo $p+1; ?>" class="page-link" aria-label="Next">
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
          <?php include 'inc/sidebar-list-song.php'; ?>
        </div>
      </div>
    </div>

  </div>
  <div class="p-5"></div>
  <!-- Content -->
<?php
include 'inc/footer.php';
?>
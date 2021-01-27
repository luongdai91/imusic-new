<?php
include 'inc/connect.php';

if(empty($_GET['p'])) {
  $p = 1;
}else{
  $p = $_GET['p'];
}
$arr = $db_home->tbl_page->findOne(['pid' => '15',], [
  'projection' => [
    'page_title' => 1,
    'page_description' => 1,
    'page_h1' => 1
  ],
]);

$title = $arr['page_title'];
$description = $arr['page_description'];
// $h1 = $arr['page_h1'];
// $content_top = $arr['page_content_top'];
// $meta_key = str_replace('%name%', '', $arr['meta_keyword']);
// $meta_key = str_replace(' ,', ',', $meta_key);
// $meta_key = str_replace('   ', ' ', $meta_key);
// $meta_key = str_replace('  ', ' ', $meta_key);
$anh_share = $home . '/images/tai-nhac-mp3-mien-phi-imusic.vn.jpg';
include 'inc/header.php';
?>

  <div class="py-4"></div>
  <div class="im-wrapper container">
    <div class="row px-3">
      <div class="col-12 col-md-12 col-lg-9">
        <div class="row">
          <div class="col-12">
            <div class="im-breadcrumb">tin tức nổi bật</div>
          </div>
        </div>
        <div class="py-3"></div>
        <div class="d-md-flex row">
          <?php
          $data_tin_tuc = json_decode(file_get_contents("https://imusic.vn/webapi/news.php?p=$p&limit=12"));
          $data = $data_tin_tuc[0]->data;
          foreach ($data as $key => $value) {
            ?>
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
              <div class="tin-tuc-card">
                <div class="post">
                  <a href="<?php echo $home.'/tin-tuc/'.$value->url.'.html'; ?>" title="<?php echo $value->title; ?>">
                    <img class="card-image" src="https://imusic.vn/<?php echo $value->icon; ?>" alt="<?php echo $value->title; ?>">
                    <p class="card-title"><?php echo $value->title; ?></p>
                  </a>
                </div>
                <div class="post-time" style="text-align: center;">
                  <div class="divider"></div>
                  <div class="py-2"></div>
                  <span class="post-estimate-time"><?php echo $value->create_time; ?><br>Lượt xem: <?php echo $value->views; ?></span>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
        <div class="row pagination-section">
          <section class="container flex-column justify-content-center align-items-center pagination">
            <div>
              <div class="col-12">
                <a href="./tin-tuc?p=<?php echo $p+1; ?>" title="Trang <?php echo $p+1; ?>">
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
                        <a href="./tin-tuc?p=<?php echo $p-1; ?>" class="page-link" aria-label="Previous">
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
                    $pg = ceil($data_tin_tuc[0]->total/12);
                    $sc = 6;
                    $st = floor($p / $sc) * $sc;
                    $en = $st + $sc;
                    $g = $st;
                    for ($g; ($g < $en); $g++) {
                        if ($g == 1 and $g != $p) {
                            print('<li class="page-item"><a href="./tin-tuc" class="page-link">1</a></li>');
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
                                print('<li class="page-item"><a href="./tin-tuc?p=' . $xx . '" class="page-link">' . $g . '</a></li>');
                            }
                        }
                    }
                    ?>
                    <?php if($p != ceil($data_tin_tuc[0]->total/12)){ ?>
                      <li class="page-item">
                        <a class="page-link">...</a>
                      </li>
                      <li class="page-item">
                        <a href="./tin-tuc?p=<?php echo ceil($data_tin_tuc[0]->total/12); ?>" class="page-link" title="Trang cuối"><?php echo ceil($data_tin_tuc[0]->total/12); ?></a>
                      </li>
                      <li class="page-item">
                        <a href="./tin-tuc?p=<?php echo $p+1; ?>" class="page-link" aria-label="Next">
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
      </div>
      <?php include 'inc/sidebar-list-news.php'; ?>
    </div>
  </div>

  <div class="py-4"></div>
  <script>
  // document ready
  $(document).ready(async function () {


    var cardTitles = document.querySelectorAll(".card-title");
    cardTitles.forEach(title => {
      $clamp(title, {
        clamp: 3
      });
    })
  });
</script>
<?php
include 'inc/footer.php';
?>
<?php
function geturl() {
    $pageURL = 'http';
    if (!empty($_SERVER['HTTPS'])) {
        if ($_SERVER['HTTPS'] == 'on') {
            $pageURL .= "s";
        }
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

$geturl = geturl();
$geturl = str_replace(':443', '', $geturl);
if ($geturl == $home . '/index.html' || $geturl == $home . '/index.php') {
    echo "<meta http-equiv='refresh' content='0;URL=$home'>";
    exit();
}

$canonical = $geturl;
if (!empty($_GET['p'])) {
    $canonical = str_replace('/' . $_GET['p'], '', $canonical);
    $canonical = str_replace('?p=' . $_GET['p'], '', $canonical);
    $canonical = str_replace('/page' . $_GET['p'], '', $canonical);
}

if (strpos($geturl, '/bai-hat/') !== FALSE) {
    $direct_bh = str_replace('/bai-hat/', '/nghe-nhac/', $geturl);
    echo "<meta http-equiv='refresh' content='0;URL=$direct_bh'>";
    exit();
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <base href="<?php echo $home; ?>">
  <meta name="keywords" content="<?php echo $meta_key; ?>" />
  <meta itemprop="url" content="<?php echo $geturl; ?>" />
  <meta name="robots" content="<?php echo $no; ?>index, <?php echo $no; ?>follow">
  <meta name="revisit-after" content="1 days">
  <meta name="description" content="<?php echo $description; ?>" />
  <link rel="shortcut icon" href="<?php echo $home; ?>/images/<?php echo $web_icon; ?>" />
  <title><?php echo $title; ?></title>
  <link rel="canonical" href="<?php echo $canonical; ?>" />
  <meta property="og:locale" content="vi_VN" />
  <meta property="og:image" content="<?php echo $anh_share; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:url" content="<?php echo $geturl; ?>" />
  <meta property="og:site_name" content="<?php echo $namehome; ?>" />
  <meta itemprop="name" content="<?php echo $title; ?>">
  <meta itemprop="description" content="<?php echo $description; ?>">
  <meta itemprop="image" content="<?php echo $anh_share; ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="<?php echo $namehome; ?>">
  <meta name="twitter:title" content="<?php echo $title; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">
  <meta name="twitter:creator" content="<?php echo $namehome; ?>">
  <meta name="twitter:image:src" content="<?php echo $anh_share; ?>">
  <meta name="author" content="<?php echo $namehome; ?>" />
  <meta name="DC.title" content="<?php echo $title; ?>" />
  <meta name="geo.placename" content="Việt Nam" />
  <meta name="geo.region" content="VN" />
  <meta name="geo.position" content="14.058324;108.277199" />
  <meta name="ICBM" content="14.058324, 108.277199" />
  <?php
  if (strpos($geturl, '/tin-tuc') !== FALSE) {
    ?>
    <link rel="stylesheet" href="<?php echo $home; ?>/assets/css/pages/tintuc.css">
    <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="<?php echo $home; ?>/assets/js/clamp.min.js"></script>
    <?php
  }
  ?>
  <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="<?php echo $home; ?>/assets/css/index.css">
  <?php
  if (strpos($geturl, '/nghe-nhac/') !== FALSE || strpos($geturl, '/playlist/') !== FALSE) {
    ?>
    <link rel="stylesheet" href="<?php echo $home; ?>/assets/css/components/player/player.css">
    <link rel="stylesheet" href="<?php echo $home; ?>/assets/css/pages/nghe_nhac.css">
    <link rel="stylesheet" href="<?php echo $home; ?>/assets/css/components/player/audio_player.css">
    <link rel="stylesheet" href="<?php echo $home; ?>/assets/css/components/autoplay/autoplay.css">
    <?php
  }
  if (strpos($geturl, '/bang-xep-hang/') !== FALSE) {
    ?>
    <link rel="stylesheet" href="<?php echo $home; ?>/assets/css/pages/bang_xep_hang.css">
    <?php
  }
  if (strpos($geturl, '/top-100/') !== FALSE) {
    ?>
    <link rel="stylesheet" href="<?php echo $home; ?>/assets/css/pages/top_100.css">
    <?php
  }
  if (strpos($geturl, '/search.php') !== FALSE) {
    ?>
    <link rel="stylesheet" href="<?php echo $home; ?>/assets/css/pages/search.css">
    <?php
  }
  ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $home; ?>/assets/css/page.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $home; ?>/assets/css/blocks.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $home; ?>/assets/css/print.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $home; ?>/assets/css/reponsive.css">

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
  <link rel="stylesheet" type="text/css" href="<?php echo $home; ?>/assets/css/slick.css">
  <script type="text/javascript" src="<?php echo $home; ?>/assets/js/slick.js"></script>
  <script type="text/javascript" src="<?php echo $home; ?>/assets/js/jquery.mousewheel.min.js"></script>
  <!-- animate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <?php
  if (strpos($geturl, '/nghe-nhac/') !== FALSE || strpos($geturl, '/playlist/') !== FALSE) {
    ?>
    <!-- audio player -->
    <script src="<?php echo $home; ?>/assets/js/amplitude.js"></script>
    <?php
  }
  if ($geturl == $home . '/') {
      echo $sschema;
  }
  echo $analytics;
  ?>
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
      <a class="navbar-brand" href="<?php echo $home; ?>">
        <img src="<?php echo $home; ?>/assets/images/logo-nav.png" alt="logo">
      </a>
      <!-- Mobile search -->
      <div class="d-lg-none d-md-flex mobile-search">
        <div class="row im-search">
          <form name="search_form" action="<?php echo $home; ?>/search.php" method="get" onsubmit="return search()">
            <div class="d-flex align-items-center" style="float:left">
              <button type="submit" style="border:none;background:none;line-height:normal">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                  class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512">
                  <path
                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                  </path>
                </svg>
              </button>
            </div>
            <input class="im-search-input" id="keyword" name="q" type="search" value="<?php echo $keyword; ?>" placeholder="Nhập tên bài hát, album (có dấu)" autocomplete="off">
          </form>
        </div>
      </div>

      <div class="collapse navbar-collapse" id="imusic_navbar">
        <ul class="d-flex justify-content-between navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item <?php if (strpos($geturl, '/nghe-nhac') !== FALSE){echo 'active';} ?>">
            <a class="nav-link im-nav-item" href="<?php echo $home; ?>/nghe-nhac">BÀI HÁT<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php if (strpos($geturl, '/playlist') !== FALSE){echo 'active';} ?>">
            <a class="nav-link im-nav-item" href="<?php echo $home; ?>/playlist">ALBUM</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link im-nav-item" href="<?php echo $home; ?>/video">VIDEO</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link im-nav-item" href="#">CHỦ ĐỀ</a>
          </li> -->
          <li class="nav-item <?php if (strpos($geturl, '/bang-xep-hang/') !== FALSE){echo 'active';} ?>">
            <a class="nav-link im-nav-item" href="<?php echo $home; ?>/bang-xep-hang/bai-hat-Viet-Nam">BẢNG XẾP HẠNG</a>
          </li>
          <li class="nav-item <?php if (strpos($geturl, '/top-100/') !== FALSE){echo 'active';} ?>">
            <a class="nav-link im-nav-item" href="<?php echo $home; ?>/top-100/nhac-viet/nhac-tre">TOP 100</a>
          </li>
          <li class="nav-item <?php if (strpos($geturl, '/nghe-si') !== FALSE){echo 'active';} ?>">
            <a class="nav-link im-nav-item" href="<?php echo $home; ?>/nghe-si">NGHỆ SĨ</a>
          </li>
          <li class="nav-item <?php if (strpos($geturl, '/tin-tuc') !== FALSE){echo 'active';} ?>">
            <a class="nav-link im-nav-item" href="<?php echo $home; ?>/tin-tuc">TIN TỨC</a>
          </li>
        </ul>
      </div>
      <div class="d-none d-lg-flex float-right">
        <div class="row im-search">
          <form name="search_form" action="<?php echo $home; ?>/search.php" method="get" onsubmit="return search()">
            <div class="d-flex align-items-center" style="float:left">
              <button type="submit" style="border:none;background:none;line-height:normal">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                  class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512">
                  <path
                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                  </path>
                </svg>
              </button>
            </div>
            <input class="d-none d-xl-block im-search-input" id="keyword" name="q" type="search" value="<?php echo $keyword; ?>" placeholder="Nhập tên bài hát, album (có dấu)" autocomplete="off">
          </form>
        </div>
      </div>
    </nav>
  </div>
  <!-- nav bar -->
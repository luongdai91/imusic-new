<?php
include 'inc/connect.php';
$id = $_GET['id'];
$url = $_GET['url'];

$json_get_news_detail = file_get_contents("https://imusic.vn/webapi/news.php?url=$url");
$data_news = json_decode($json_get_news_detail);
$data = $data_news->detail;
$title = $data->title;
$description = str_replace('"', "'", $data->description);
$anh_share =  'https://imusic.vn/'.$data->icon;

include 'inc/header.php';
?>
  <link rel="stylesheet" href="<?php echo $home; ?>/assets/css/pages/tin_tuc_detail.css">
  <div class="py-4"></div>
  <div class="im-wrapper container">
    <div class="row px-3">
      <section class="col-12 col-md-12 col-lg-9">
        <div class="row">
          <div class="col-12 d-flex justify-content-end align-items-center">
            <div class="post-header">
              <span class="font-size small">A</span>
              <span class="font-size normal active">A</span>
              <span class="font-size large">A</span>
            </div>
          </div>
        </div>

        <div class="row post-detail">
          <div class="col-12 m-stuff">
            <hr class="im border-bottom">
          </div>
          <div class="col-12">
            <span class="estimate-time"><?php echo $data->create_time; ?></span>
          </div>
          <div class="col-12">
            <style>.post-content img{width:auto!important;max-width:100%;margin:auto;display:flex}@media(max-width:767px){.post-content img{height:auto!important}}</style>
            <article class="post-content">
              <h4 class="post-title"><?php echo $data->title; ?></h4>
              <?php echo $data->content; ?>
            </article>
          </div>
          <div class="col-12 m-stuff">
            <hr class="im">
          </div>
        </div>
        <!-- like share -->
        <div class="row like-share">
          <div class="col-6">
            <div class="text">
              <span>Nếu thấy hay? hãy share cho bạn bè cùng đọc.</span>
            </div>
          </div>
          <div class="col-6 d-flex justify-content-end align-items-center">
            <div class="social-icons">
              <!-- <span class="icon">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link"
                  class="svg-inline--fa fa-link fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512">
                  <path
                    d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z">
                  </path>
                </svg>
              </span>
              <span class="icon">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                  class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512">
                  <path
                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                  </path>
                </svg>
              </span> -->
              <span class="icon">
                <a href="https://www.facebook.com/share.php?u=<?php echo $geturl; ?>">
                  <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                    class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path
                      d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                    </path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="py-3"></div>

        <div class="row">
          <div class="col-12">
            <div class="im-breadcrumb">bài viết liên quan</div>
          </div>
        </div>
        <div class="py-3"></div>
        <div class="d-md-flex row">
          <?php
          $related = $data_news->related;
          foreach ($related as $key => $value) {
            ?>
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
              <div class="tin-tuc-card">
                <div class="post">
                  <a href="<?php echo $home.'/tin-tuc/'.$value->url.'.html'; ?>" title="<?php echo $value->title; ?>">
                    <img class="card-image" src="https://imusic.vn/<?php echo $value->icon; ?>" alt="<?php echo $value->title; ?>">
                    <p class="card-title"><?php echo $value->title; ?></p>
                  </a>
                </div>
                <div class="post-time">
                  <div class="divider"></div>
                  <div class="py-2"></div>
                  <span class="post-estimate-time"><?php echo $value->create_time; ?></span>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
      </section>
      <?php include 'inc/sidebar-news.php'; ?>
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
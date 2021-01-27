<?php
include 'inc/connect.php';
include 'inc/header.php';
?>
<script src="<?php echo $home; ?>/assets/js/clamp.min.js"></script>
  <!-- font aws -->
  <!-- <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" /> -->
  <style>
    .not-found-wrapper {
      height: calc(100% - 94px);
      display: flex;
      justify-content: center;
    }

    @media screen and (max-width: 992px) {
      .not-found-content>div>h4 {
        font-size: 200px !important;
      }
    }
    body{background-image:url('<?php echo $home; ?>/assets/images/im-404.jpg')!important;background-size:cover!important;background-position:center!important;background-repeat:no-repeat!important}
  </style>
  <div class="im-wrapper container not-found-wrapper">
    <div class="row">
      <div class="col-12 not-found-content" style="margin-top: 5rem;">
        <div style="text-align: center; margin-bottom: 2rem;">
          <span style="font-size: 30px;
          color: #ffffff;
          margin-bottom: 2rem;">
            Opps, Page not found..!
          </span>

        </div>
        <div style="text-align: center;">
          <a href="/" class="btn btn-small" style="width: 200px; padding: 8px 10px">
            QUAY LẠI
          </a>
        </div>

        <div>
          <h4 style="font-size: 300px; color: #ffffff; opacity: 0.7;">404</h4>
        </div>
      </div>
    </div>
  </div>


</body>
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


</html>
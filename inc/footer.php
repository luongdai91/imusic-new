<!-- footer -->
  <div>
    <div class="footer">
      <div class="footer-bg">
        <img src="<?php echo $home; ?>/assets/images/im-footer-01.png" alt="footer-background">
      </div>
      <div class="py-4 py-lg-5 py-md-4 d-flex align-items-center">
        <div class="im-wrapper container" style="z-index: 2;">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-1 pb-3">
                <div class="d-flex align-items-center justify-content-md-end">
                  <img src="<?php echo $home; ?>/assets/images/imusic-logo.png" width="42px">
                </div>
              </div>
              <div class="col-md-3 my-sm-3 my-md-0">
                <div class="py-3">CÔNG TY CỔ PHẦN ABC MUSIC</div>
                <div class="sub-text">
                  <div>Địa chỉ:</div>
                  <div class="address">70 Nguyễn Phi Khanh, Phường Tân Định, Quận 1, Thành phố Hồ
                    Chí Minh</div>
                </div>
              </div>
              <div class="col-md-5 my-sm-3 my-md-0">
                <div class="d-flex align-items-center">
                  <div class="py-3">CUSTOMER SERVICE</div>
                </div>
                <div class="sub-text">
                  <div>Phone: (098) 7459 893</div>
                  <div>Email: anhdt.des@gmail.com</div>
                </div>
              </div>
              <div class="col-md-3 my-sm-3 my-md-0">
                <div class="d-flex align-items-center">
                  <div class="py-3">KẾT NỐI VỚI CHÚNG TÔI:</div>
                </div>
                <div class="sub-text">
                  <div class="row">
                    <div class="col-3 col-md-9 col-lg-7 d-flex justify-content-between">
                      <a class="mr-2" href="#">
                        <img class="social" src="<?php echo $home; ?>/assets/images/im-fb-icon.png">
                      </a>
                      <a class="mr-2" href="#">
                        <img class="social" src="<?php echo $home; ?>/assets/images/im-ptr-icon.png">
                      </a>
                      <a href="#">
                        <img class="social" src="<?php echo $home; ?>/assets/images/im-youtube-icon.png">
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex align-items-center footer-end">
        <div class="im-wrapper container">
          <div class="col-md-12  py-4 ">
            <div class="row">
              <div class="col-0 col-md-1"></div>
              <div class="col-12 col-md-3 footer-end__design pb-3 pb-md-0">&copy; Design by Datian.s</div>
              <div class="col-12 col-md-5">
                <div class="sub-text">Điều khoản sử dụng</div>
                <div class="sub-text">
                  <span class="terms">Bản quyền nội dung cung cấp bởi </span>ABC Music
                </div>
              </div>
              <div class="col-12 col-md-3 pt-5 pt-sm-5 pt-md-0">
                <img class="pr-2 pb-3 pb-md-0" src="<?php echo $home; ?>/assets/images/tb-bct.png" width="170px">
                <img class="pl-2" src="<?php echo $home; ?>/assets/images/dmca.png" width="120px">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
</body>
<script>
  // document ready
  $(document).ready(async function () {
    // initialize the carousel
    runCrs(1, 1, "crs-today-listen");
    runCrs(0, 1, "crs-top-artist");
    runCrs(1, 2, "crs-new-release");
    runCrs(3, 1, "crs-highlight-artist");
    runCrsThumb();
  });
  // carousel init function
  function runCrs(_type, _rows, _sectionName) {
    // _type: type of item (1:square or 0:round)
    // _rows: define how many rows to display in the carousel
    // _sectionName: name of section
    const _arrPrev = _sectionName + "-prev";
    const _arrNext = _sectionName + "-next";
    var crs = $("." + _sectionName + "");
    crs.slick({
      rows: _rows,
      prevArrow: $('.' + _arrPrev + ''),
      nextArrow: $('.' + _arrNext + ''),
      infinite: true,
      slidesToShow: _type === 1 ? 5 : _type === 0 ? 6 : 1, // _type: type of item (1:square or 0:round)
      autoplay: _type === 3 ? true : false,
      slidesToScroll: _type === 3 ? 1 : 2,
      speed: 1000,
      autoplaySpeed: 2000,
      responsive: [{
          breakpoint: 993,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: _sectionName === 'crs-top-artist' ? 3 : 2,
            slidesToScroll: _sectionName === 'crs-top-artist' ? 3 : 2
          }
        },
      ],
      dots: true,
      appendDots: _type === 3 ? $(".highlight-artist-dot") : null,
      asNavFor: _type === 3 ? ".crs-highlight-artist-info" : null
    });
  }
  // carousel thumbs function
  function runCrsThumb() {
    $(".top-items").slick({
      dots: true,
      arrows: false,
      fade: true,
      autoplay: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 1000,
      autoplaySpeed: 3000,
      asNavFor: ".top-thumbs-slicks",
      appendDots: $(".top-items-dot"),
    });
    $(".top-thumbs-slicks").slick({
      dots: false,
      arrows: false,
      fade: true,
      autoplay: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 800,
      autoplaySpeed: 2500,
      asNavFor: ".top-items"
    });

    $(".crs-highlight-artist-info").slick({
      dots: false,
      arrows: false,
      fade: true,
      autoplay: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 800,
      autoplaySpeed: 1900,
      asNavFor: ".crs-highlight-artist"
    });
  }
</script>
</html>
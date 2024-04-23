<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/brochure.css?20240419">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage" aria-label="main" itemscope>

      <div class="mainBox">

        <div class="brochureList">
          <div class="pageContent">
            <div class="container">
              <div class="side wow fadeInUp" data-wow-delay="0s">
                <div class="box">
                  <div class="pageTitle">Brochure</div>
                  <button type="button" class="sideMenuBtn">MENU</button>
                  <div class="tab">
                    <button type="button">Pneumatic Nailers and Staplers</button>
                    <button type="button">Air Tools</button>
                    <button type="button">Hand Tools</button>
                  </div>
                  <div class="controlBox">
                    <div class="control block1">
                      <div class="page"></div>
                      <div class="arrowBox"></div>
                    </div>
                    <div class="control block2">
                      <div class="page"></div>
                      <div class="arrowBox"></div>
                    </div>
                    <div class="control block3">
                      <div class="page"></div>
                      <div class="arrowBox"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contentBox wow fadeInUp" data-wow-delay="0.2s">
                <div class="content block1">
                  <div class="listBox">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                      <div class="item">
                        <a href="#">
                          <div class="pic"><img src="../images/in/brochure.jpg" alt=""></div>
                          <h2 class="title">APACH-2018 Chinese Catalog</h2>
                        </a>
                      </div>
                    <?php } ?>
                  </div>
                </div>
                <div class="content block2">
                  <div class="listBox">
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                      <div class="item">
                        <a href="#">
                          <div class="pic"><img src="../images/in/brochure.jpg" alt=""></div>
                          <h2 class="title">2APACH-2018 Chinese Catalog</h2>
                        </a>
                      </div>
                    <?php } ?>
                  </div>
                </div>
                <div class="content block3">
                  <div class="listBox">
                    <?php for ($i = 0; $i < 4; $i++) { ?>
                      <div class="item">
                        <a href="#">
                          <div class="pic"><img src="../images/in/brochure.jpg" alt=""></div>
                          <h2 class="title">3APACH-2018 Chinese Catalog</h2>
                        </a>
                      </div>
                    <?php } ?>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" title="index" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Media</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Brochure</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>
    </main>



    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $(function() {
      $('.side .sideMenuBtn').on('click', function() {
        console.log('a');
        $('.side .tab').slideToggle('fast');
      })
      $('.brochureList .contentBox .listBox').each(function(i) {
        $(this).slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true,
          dots: false,
          appendArrows: `.brochureList .controlBox .block${i + 1} .arrowBox`,
          prevArrow: '<button class="slick-prev" aria-label="Previous" type="button" title="Previous"></button>',
          nextArrow: '<button class="slick-next" aria-label="Next" type="button" title="Next"></button>',
          responsive: [{
              breakpoint: 1440,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 1000,
              settings: {
                slidesToShow: 1,
              }
            },
          ],
        })
      })
    });

    $('.brochureList .contentBox .listBox').each(function(i) {
      $(this).on('init beforeChange', function(event, slick, currentSlide, nextSlide) {
        let allItem = (slick.slideCount + 1 < 10 ? '0' : '') + slick.slideCount;
        let currentSlide1 = (nextSlide == undefined) ? '1' : nextSlide + 1;
        let slideNow = (currentSlide1 < 10 ? '0' : '') + currentSlide1;
        $(`.brochureList .controlBox .block${i + 1} .page`).html('<span>' + slideNow + '</span>' + ' / ' + allItem);
      });
    });

    $('.brochureList .tab button').eq(0).addClass('active');
    $('.brochureList .contentBox .content').eq(0).addClass('active');
    $('.brochureList .controlBox .control').eq(0).addClass('active');
    $('.tab button').on('click', function() {
      $(this).siblings().removeClass('active');
      $(this).toggleClass('active');
      console.log($(this).index());
      $('.brochureList .contentBox .content').eq($(this).index()).siblings().removeClass('active');
      $('.brochureList .contentBox .content').eq($(this).index()).addClass('active');
      $('.brochureList .contentBox .listBox').each(function(i) {
        $(this).slick('refresh')
      })
      $('.brochureList .controlBox .control').eq($(this).index()).siblings().removeClass('active');
      $('.brochureList .controlBox .control').eq($(this).index()).addClass('active');

    })
  </script>
</body>

</html>
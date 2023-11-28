<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/industries.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_industries.jpg" alt=""></div>
        <div class="unitTitleBox">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">INDUSTRIES</h1>
          </div>
        </div>
      </div>


      <div class="pageNav">
        <div class="container">
          <ul>
            <li><a href="#block1">Pneumatic Nailers and Staplers</a></li>
            <li><a href="#block2">Aitr Tools and Hand Tools</a></li>
          </ul>
        </div>
      </div>

      <div class="mainBox">

        <div class="industriesList">
          <div class="pageContent ">

            <div class="container" id="block1">
              <h2 class="listTitle wow fadeInUp" data-wow-delay="0s">Pneumatic Nailers and Staplers</h2>
              <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
                <? for ($i = 0; $i < 12; $i++) { ?>
                  <div class="item">
                    <a href="industries_detail.php">
                      <div class="pic"><img src="../images/in/industries.jpg" alt=""></div>
                      <div class="title">Motorcycle</div>
                    </a>
                  </div>
                <? } ?>
              </div>
            </div>

            <div class="container" id="block2">
              <div class="listTitle wow fadeInUp" data-wow-delay="0s">Aitr Tools and Hand Tools</div>
              <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
                <? for ($i = 0; $i < 12; $i++) { ?>
                  <div class="item">
                    <a href="industries_detail.php">
                      <div class="pic"><img src="../images/in/industries.jpg" alt=""></div>
                      <h3 class="title">Motorcycle</h3>
                    </a>
                  </div>
                <? } ?>
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
              <span itemprop="name">Solutions</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Industries</span>
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
    $('.pageNav li').off().on('click', function() {
      $('.pageNav li').removeClass('active');
      $(this).addClass('active');
    })

    const nav = document.querySelectorAll('.pageNav li');
    const check = document.querySelectorAll('.industriesList .container');
    const options = {
      root: null,
      rootMargin: '0px 0px 0px 0px',
      threshold: 0.2,
    };
    const callback = (entries, observer) => {
      if (entries[0].isIntersecting) {
        entries[0].target.classList.add("active");
        nav.forEach(v => v.classList.remove("active"));
        check.forEach((v, i) => {
          if (v === entries[0].target) {
            nav[i].classList.add("active")
            navBox.scrollLeft = navScroll[i];
          }
        })
      }
    };

    const observer = new IntersectionObserver(callback, options);
    check.forEach(item => observer.observe(item))
  </script>
</body>

</html>
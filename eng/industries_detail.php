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


      <div class="mainBox">

        <div class="industriesDetail">
          <div class="pageContent">
            <div class="container">
              <div class="picBox">
                <div class="pic wow fadeInLeft" data-wow-delay="0s"><img src="../images/in/industries.jpg" alt=""></div>
              </div>
              <div class="infoBox">
                <h1 class="title wow fadeInUp" data-wow-delay="0.2s">Motorcycle</h1>
                <div class="description wow fadeInUp" data-wow-delay="0.4s">New Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact Gun1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact New Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact Gun1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact New Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact Gun1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact New Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact Gun1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact New Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact Gun1/2” Impact GunNew Kit Set With Various Sockets & 1/2” Impact </div>
                <div class="inMore wow fadeInUp" data-wow-delay="0.4s">LEARN MORE</div>
              </div>
            </div>

            <div class="container">
              <div class="products">
                <div class="listTitle">Recommended Products</div>
                <div class="listBox wow fadeInUp" data-wow-delay="0.4s">

                  <? for ($i = 0; $i < 4; $i++) { ?>
                    <div class="item">
                      <a href="products_detail.php">
                        <div class="pic"><img src="../images/in/products.png" alt=""></div>
                        <div class="title">AW050H Patent Air Impact Wrench</div>
                        <div class="more">View More</div>
                      </a>
                    </div>
                  <? } ?>

                </div>
              </div>
            </div>

            <div style="display:none">
              <div class="container">
                <div class="pageBtnBox wow fadeInUp" data-wow-delay="0s">
                  <a class="back" href="industries.php">BACK TO LIST</a>
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
              <span itemprop="name">Motorcycle</span>
              <meta itemprop="position" content="2">
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
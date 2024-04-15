<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_media.jpg" alt=""></div>
        <div class="unitTitleBox">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">NEWS</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">

        <div class="newsList">
          <div class="pageContent">
            <div class="container">
              <div class="side wow fadeInLeft" data-wow-delay="0s">
                <div class="box">
                  <div class="pageTitle">Media</div>
                  <button type="button">MENU</button>
                  <ul>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">EXHIBITION</a></li>
                    <li><a href="#">VIDEO</a></li>
                    <li><a href="#">BROCHURE</a></li>
                    <li><a href="#">BLOG</a></li>
                  </ul>
                </div>
              </div>
              <div class="content">
                <div class="listBox wow fadeInUp" data-wow-delay="0.2s">

                  <? for ($i = 0; $i < 9; $i++) { ?>
                    <div class="item">
                      <a href="news_detail.php">
                        <div class="pic"><img src="../images/in/news.jpg" alt=""></div>
                        <div class="top">
                          <time>2023.12.05</time>
                          <div class="tag">NEWS</div>
                        </div>
                        <div class="info">
                          <h2 class="title">The Automotive Aftermarket Products Expo (AAPEX) November 1-3, Las Vegas</h2>
                          <div class="description">
                            Location:The Venetian EXPO<br />
                            Date: November 1-3,2022<br />
                            Booth：A668<br />
                            Website: https://www.aapexshow.com/
                          </div>
                        </div>
                      </a>
                    </div>
                  <? } ?>

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
              <span itemprop="name">News</span>
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
      $('.side button').on('click', function() {
        $('.side ul').slideToggle('fast');
      })
    })
  </script>
</body>

</html>
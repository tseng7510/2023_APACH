<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/video.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage" aria-label="main" itemscope>

      <div class="mainBox">

        <div class="videoList">
          <div class="pageContent">
            <div class="container">
              <div class="side wow fadeInUp" data-wow-delay="0s">
                <div class="box">
                  <div class="pageTitle">VIDEO</div>
                  <button type="button">MENU</button>
                  <div class="tab">
                    <button type="button">Pneumatic Nailers and Staplers</button>
                    <button type="button">Air Tools</button>
                    <button type="button">Hand Tools</button>
                  </div>
                </div>
              </div>
              <div class="contentBox wow fadeInUp" data-wow-delay="0.2s">
                <div class="content block1">
                  <div class="listBox">
                    <? for ($i = 0; $i < 10; $i++) { ?>
                      <div class="item wow fadeInUp" data-wow-delay="0s">
                        <div class="pic">
                          <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/15vcEOM0zzI?si=ChcTyQUP5QyaIA9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                        </div>
                        <h2 class="title">AW050H Patent Air Impact Wrench</h2>
                      </div>
                    <? } ?>
                  </div>
                </div>
                <div class="content block2">
                  <div class="listBox">
                    <? for ($i = 0; $i < 10; $i++) { ?>
                      <div class="item wow fadeInUp" data-wow-delay="0s">
                        <div class="pic">
                          <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/15vcEOM0zzI?si=ChcTyQUP5QyaIA9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                        </div>
                        <h2 class="title">AW050H Patent Air Impact Wrench</h2>
                      </div>
                    <? } ?>
                  </div>
                </div>
                <div class="content block3">
                  <div class="listBox">
                    <? for ($i = 0; $i < 10; $i++) { ?>
                      <div class="item wow fadeInUp" data-wow-delay="0s">
                        <div class="pic">
                          <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/15vcEOM0zzI?si=ChcTyQUP5QyaIA9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                        </div>
                        <h2 class="title">AW050H Patent Air Impact Wrench</h2>
                      </div>
                    <? } ?>
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
      $('.videoList .tab button').eq(0).addClass('active');
      $('.videoList .contentBox .content').eq(0).addClass('active');
      $('.videoList .controlBox .control').eq(0).addClass('active');
      $('.tab button').on('click', function() {
        $(this).siblings().removeClass('active');
        $(this).toggleClass('active');
        console.log($(this).index());
        $('.videoList .contentBox .content').eq($(this).index()).siblings().removeClass('active');
        $('.videoList .contentBox .content').eq($(this).index()).addClass('active');
      })
      $('.side .box > button').on('click', function() {
        $('.side .tab').slideToggle('fast');
      })
    })
  </script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="unitTitleBox">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">Air Penumatic Tools</h1>
          </div>
        </div>
      </div>

      <?php include('include_products_search.php'); ?>

      <div class="mainBox">

        <div class="products4">
          <div class="pageContent ">
            <div class="container">
              <h2 class="titleBox">Air Impact Wrench</h2>

              <div class="listBox wow fadeInUp" data-wow-delay="0.4s">

                <? for ($i = 0; $i < 12; $i++) { ?>
                  <div class="item">
                    <a href="products_detail.php">
                      <div class="pic"><img src="../images/in/products.png" alt=""></div>
                      <h3 class="title">AW050H Patent Air Impact Wrench</h3>
                      <div class="more">View More</div>
                    </a>
                    <button type="button" class="add">ADD TO INQUIRY</button>
                  </div>
                <? } ?>

              </div>

              <div class="description wow fadeInUp" data-wow-delay="0.2s">High Quality Air Impact Wrench and Pneumatic Impact Tool Manufacturers in Asia
                Are you looking for the best pneumatic impact wrench for cars, trucks, assemblies, agriculture machines, boats, or motorcycles? All of the series of our impact guns are advisable for changing tires, removing lug nuts, and more industrial purposes.<br /><br />
                APACH could provide various drives of air impact wrenches according to customers’ needs. We have 1”, 1/2”, 3/4, 1-1/2” and 3/8” impact wrenches with either pistol or straight types. Six major and common impact mechanisms are available, like twin hammer, pin clutch, jumbo hammer, etc. You could find more specific information on internal clutch mechanisms here on our website.</div>

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
              <span itemprop="name"><a href="products.php">Products Category</a></span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name"><a href="products.php">Air Penumatic Tools</a></span>
              <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">air impact wrench</span>
              <meta itemprop="position" content="4">
            </li>
          </ul>
        </div>
      </div>
    </main>

    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>
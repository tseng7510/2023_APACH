<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_milestone.jpg" alt=""></div>
        <div class="unitTitleBox">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">COMPANY</h1>
          </div>
        </div>
      </div>

      <?php include('include_about.php'); ?>

      <div class="mainBox">

        <div class="about">
          <div class="pageContent">
            <div class="container">

              <h2 class="pageTitle wow fadeInUp" data-wow-delay="0s">Business Items</h2>

              <div class="block1">
                <div class="description wow fadeInLeft" data-wow-delay="0.2s">Pneumatic tools, include Nailers, Stpalers, Impact Wrench, Senders etc. and Electric stapler also.
                  Apach now forward to Auto machine, especial for robot pellet system<br /><br />
                  <span>“APACH”</span> was the sound of pneumatic nailer on working status. Apach co-work with the join members as a team to build the future.<br /><br />
                  Apach establish on 1994with 2 members for design house until now 15000PCS/mon output product., We focus on professional / industrial used tools. Not only on the quality but also ergonomic, durable & reliable of tools. Our tool had sold to all of entire world with “APACH” brand. We are not treat as a manufactory company only, We education the team members as a service mind. The tools must be fit the customers need was the first minding.
                </div>
                <div class="picBox wow">
                  <div class="pic"><img src="../images/in/about_01.png" alt=""></div>
                  <div class="pic"><img src="../images/in/about_02.png" alt=""></div>
                </div>
              </div>

              <div class="block2">
                <div class="pic"><img src="../images/in/about_03.jpg" alt=""></div>
                <div class="infoBox">
                  <div class="logo_in"><img src="../images/logo.svg" alt=""></div>
                  <div class="title">The vision of Apach :</div>
                  <div class="description">
                    <ul>
                      <li>Create & share profits</li>
                      <li>Be the best partner of our customers</li>
                      <li>Establish a company that everyone is willing to join in</li>
                      <li>Become a leading brand in professional (industrial) markets</li>
                    </ul>
                  </div>
                </div>
              </div>


              <div class="block3">
                <h2 class="title">Export Competitiveness</h2>
                <div class="description">
                  <ul>
                    <li>Innovation and technology for the customer need, especial for the ODM/ OEM customer.</li>
                    <li>According the information from customer to setup the sale plan on different country and region.</li>
                    <li>Immediately response to the customer if any non-conformity case. Setup the train coast for the customer need.</li>
                    <li>Annual visit the customer and discuss the new project need on different market.</li>
                    <li>Attend different region exhibition and join the B2B, B2C and O2O business.</li>
                  </ul>
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
              <span itemprop="name">Company</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Company</span>
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
    $('.pageNav li').eq(0).addClass('active');
  </script>
</body>

</html>
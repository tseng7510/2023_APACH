<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/faq.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper technicalPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage faqBox" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_support.jpg" alt=""></div>
        <div class="unitTitleBox">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">SUPPORT</h1>
          </div>
        </div>
      </div>


      <div class="mainBox">
        <div class="faq">
          <div class="pageContent">
            <div class="container">

              <div class="listBox">

                <? for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item">
                    <h2 class="title qBox" role="button">Air Pneumatic Tools</h2>
                    <div class="txtBox aBox">Apache is an Indian tribe in North American, according to legend, Apache was a warrior, who was brave and invincible and has been symbolized by Indians as an image of bravery and victory. This tribe has also been known for being intrepid and valiant in the Indian history. Therefore, posterity use his name for the Indian tribes named Inheriting this tribe’s spirit, Apach has been constantly devoted to developing and making top-end tools since its inception.<br /><br />
                      Therefore, Apach exquisitely designs each of its electric and air tools, and insists on strict durability testing of every piece of key components and parts, as well as rigid pre-delivery inspections of finished products. Just like Apache Indians who are physically strong and capable, Apach’s products are durable and can endure under harsh working environments, and therefore are highly recognized and sought-after by professionals worldwide. Today, Apach is a globally known brand.<br /><br />
                      We offer a complete product line to solve customers’ problems, including coil nailers, framing nailers, finish nailers, staplers, carton closing tools and so forth, which are ideal for use in construction, pre-fabricated housing, pallets, furniture, upholstery, fencing and carton closing. With a powerful R&D team and a wealth of collaborating experience with international brands, the company can customize or develop special-purpose tools tailored to OEM and ODM requests. Apach also collects client feedback and seeks to manufacture products that better fit the needs of users.<br /><br />
                      In 2016, APACH acquired a pneumatic tool company with 30 years of experience in manufacturing, and started another product line developing a series of air impact wrenches, air spray guns, air sander, and other pneumatic tools which could be applied in automotive, motorcycle, boat, assembly, agriculture machine industry, etc. In addition to its nailer and stapler series to fulfill the need for a one-stop purchase and provide more options for clients.</div>
                    <div class="inMore">LEARN MORE</div>
                  </div>
                <? } ?>

              </div>

            </div>
          </div>
        </div>

      </div>

      <div class=" breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" title="index" itemprop="item">
                <span itemprop="name">首頁</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">技術支援</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">常見問題</span>
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
    qa('.faq .inMore', '.aBox')
  </script>
</body>

</html>
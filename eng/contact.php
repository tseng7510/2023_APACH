<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage" aria-label="main" itemscope>

      <div class="mainBox">
        <div class="contactBox">
          <div class="pageContent">
            <div class="container">
              <h1 class="pageTitle wow fadeInUp" data-wow-delay="0s">Contact</h1>


              <div class="infoBox wow fadeInUp" data-wow-delay="0s">
                <div class="description">APACH INDUSTRIAL CO., LTD.</div>
                <ul>
                  <li class="address">176 Industrial 9th Rd, Tali Dist., Taichung City , Taiwan 41280</li>
                  <li class="tel"><a href="tel:+88624915576">+886-4-24915576</a></li>
                  <li class="fax">+886-4-24915580</li>
                  <li class="mail">
                    <a href="mailto:info@apach.com.tw">info@apach.com.tw</a>
                  </li>
                </ul>
              </div>
            </div>


            <div class="container">

              <div class="notice">Please fill in the following fields. We will contact you immediately after receipt.</div>
              <form class="formBox wow fadeInLeft" data-wow-delay="0.2s">
                <ul>
                  <li class="inputItem full wow fadeInUp required">
                    <label for="company">Company name</label>
                    <input type="text" class="inputControl" id="name">
                  </li>
                  <li class="inputItem full wow fadeInUp required">
                    <label for="name">Country</label>
                    <input type="text" class="inputControl" id="country">
                  </li>
                  <li class="inputItem full wow fadeInUp required">
                    <label for="name">Name</label>
                    <input type="text" class="inputControl" id="name">
                  </li>
                  <li class="inputItem full wow fadeInUp">
                    <label for="tel">TEL</label>
                    <input type="text" class="inputControl" id="tel">
                  </li>
                  <li class="inputItem full wow fadeInUp required">
                    <label for="email">E-mail</label>
                    <input type="text" class="inputControl" id="email">
                  </li>
                  <li class="inputItem full wow fadeInUp">
                    <label for="message">Message</label>
                    <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                  </li>

                  <li class="inputItem full wow fadeInUp required">
                    <label for="password">code</label>
                    <input type="password" class="inputControl" id="password">
                    <span class="checkImg"><img src="../images/check_img.jpg"></span>
                    <button class="reBtn"></button>
                  </li>
                </ul>
                <div class="pageBtnBox wow fadeInUp">
                  <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">SEND MESSAGE</button>
                </div>
              </form>
            </div>

            <div class="mapBox wow fadeInUp" data-wow-delay="0.4s"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14568.093082612428!2d120.7120595!3d24.1006771!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34692332d314be3f%3A0xfdee39d0a47801cb!2sAPACH%20INDUSTRIAL%20CO.%2C%20LTD.!5e0!3m2!1szh-TW!2stw!4v1699529676806!5m2!1szh-TW!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
              <span itemprop="name">Contact</span>
              <meta itemprop="position" content="2">
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
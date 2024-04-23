//偵測位置
(function () {
  let options = {};

  let callback = (entries, observer) => {
    entries.forEach((item, index) => {
      if (item.isIntersecting) {
        item.target.classList.add('scrollOver');
        // } else {
      }
    });
  };
  let observer = new IntersectionObserver(callback, options);
  const pic = document.querySelectorAll('.pic');
  pic.forEach((item) => observer.observe(item));
})();

function lightBox(elm) {
  const body = document.querySelector('body');

  const list = document.querySelectorAll(elm);

  list.forEach((s, i) => {
    // 開啟燈箱
    s.addEventListener('click', function (e) {
      const outLightBox = document.createElement('div');
      outLightBox.className = 'outLightBox';
      const lightBox = document.createElement('div');
      lightBox.className = 'lightBox';
      const closeLightBoxBtn = document.createElement('button');
      closeLightBoxBtn.className = 'closeLightBoxBtn';
      lightBox.append(closeLightBoxBtn);
      outLightBox.append(lightBox);
      body.append(outLightBox);

      const imgSrc = s.dataset.src;

      body.classList.add('lightBoxOpen');
      lightBox.innerHTML += `<div class="pageTitle">型號對照表</div><div class="content"><div class="box"><img src="${imgSrc}"/></div></div>`;

      closeLightBoxBtn.addEventListener('click', closeLightBox, false);
      outLightBox.addEventListener('click', closeLightBox, false);
    });
  });

  // 關閉燈箱

  function closeLightBox(e) {
    e.stopPropagation();
    const outLightBox = document.querySelector('.outLightBox');
    const closeLightBoxBtn = document.querySelector('.closeLightBoxBtn');
    if (e.target === outLightBox || e.target === closeLightBoxBtn) {
      body.classList.add('lightBoxClose');
      let closeLightBox = document.querySelector('.lightBoxClose .outLightBox');

      closeLightBox.addEventListener('animationend', closeLightBoxBody);
      function closeLightBoxBody() {
        body.classList.remove('lightBoxClose');
        body.classList.remove('lightBoxOpen');
        outLightBox.remove();
        // 避免開啟燈箱的css動畫影響，每次關閉時清除偵聽
        closeLightBox.removeEventListener('animationend', closeLightBoxBody);
      }
    }
  }
}

$(function () {
  $('.menuSearch .titleBtn').on('click', () => {
    $('.menuSearch .formBox').slideToggle('fast');
  });
});

$(function () {
  $('aside .subTitle').on('click', function () {
    $(this).parent('.item').toggleClass('active');
    $(this).siblings('ul').off().slideToggle('fast');
    $(this).parent('.item').siblings().removeClass('active');
    $(this).parent('.item').siblings().find('ul').off().slideUp('fast');
  });
  $('aside .sideBtn').on('click', function () {
    $(this).parent('aside').toggleClass('active');
  });

  $('.productsSearchBox input')
    .off()
    .on('click', function (e) {
      $('.productsSearchBox .list').stop().slideUp('fast');
      $(this).parent('.inputItem').siblings('.list').stop().slideToggle('fast');
    });

  $('.productsSearchBox .list li')
    .off()
    .on('click', function (e) {
      $(this).parent('.list').siblings('.inputItem').find('input').val($(this).text());
      $(this).parent('.list').stop().slideUp('fast');
    });

  $('.productsSearchBox .title').append('<button class="mobileSearchBtn" type="button"></button>');
  $('.mobileSearchBtn')
    .off()
    .on('click', function () {
      $('.productsSearchBox .selectBox').stop().slideToggle('fast');
    });
});

$(window).on('load resize', function () {
  let windowWidth = $(window).outerWidth();
  $('.menuSearch .formBox').attr('style', '');
  $('aside .contentBox').attr('style', '');
  if (windowWidth < 1000) {
    $('aside .title').prop('disabled', false);
    $('aside .title')
      .off('click')
      .on('click', function () {
        $('aside .contentBox').stop().slideToggle('fast');
      });
  } else {
    $('aside .title').prop('disabled', true);
    $('aside .contentBox').attr('style', '');
  }
  if (windowWidth > 767) {
    $('.productsSearchBox .selectBox').attr('style', '');
  }
});

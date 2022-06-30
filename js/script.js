//承認後削除
alert(
  "サイトリニューアルにあたり、ソニー生命保険株式会社様に承認申請中のため、noindexにしています"
);

new WOW().init();

jQuery(function ($) {

  var topBtn = $(".pagetop");
  topBtn.hide();

  //ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  //ドロワーメニュー
  $(".js-hamburger").on("click", function () {
    if ($(".js-hamburger").hasClass("is-open")) {
      $(".js-drawer-menu").removeClass("is-open"); 
      $(this).removeClass("is-open");
    } else {
      $(".js-drawer-menu").addClass("is-open");
      $(this).addClass("is-open");
    }
  });

  //メニューと背景クリックでドロワーを閉じる
  $(".js-drawer-link,.js-drawer-menu").click(function () {
    $(".js-hamburger,.js-drawer-menu").removeClass("is-open");
  });

  // スムーススクロール
  $(document).on("click", 'a[href*="#"]', function () {
    let time = 400;
    let header = $("header").innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $("html,body").animate({ scrollTop: targetY }, time, "swing");
    return false;
  });

  //スライド上の設定
  $(".js-slider-top").slick({
    accessibility: false,
    arrows: false,
    autoplay: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    swipe: false,
  });
  //スライド下の設定
  $(".js-slider-bottom").slick({
    accessibility: false,
    arrows: false,
    autoplay: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    swipe: false,
    rtl: true,
  });

  // モダール（開く）
  $(".js-modal-open").click(function (e) {
    e.preventDefault();
    let target = $(this).data("target");
    $("." + target).addClass("is-show");
  });

  // モダール（閉じる）
  $(".js-modal-close").click(function (e) {
    e.preventDefault();
    let target = $(this).data("target");
    $("." + target).removeClass("is-show");
  });

  //formの入力確認
  var $submit = $("#js-form-submit");
  $(".js-require").on(
    "change",
    function () {
      if (
        $('#js-contact-form input[type="text"]').val() !== "" &&
        $('#js-contact-form input[type="email"]').val() !== "" &&
        $('#js-contact-form input[type="tel"]').val() !== "" &&
        $('#js-contact-form input[type="checkbox"]').prop("checked") === true
      ) {
        $submit.prop("disabled", false);
      } else {
        $submit.prop("disabled", true);
      }
    }
  );

  //loader
  $(function () {
    const h = $(window).height();
    $(".js-loader-bg ,.js-loader").height(h).css("display", "block");
  });
  $(window).on("load", function () {
    $(".js-loader").delay(600).fadeOut(300);
    $(".js-loader-bg").delay(900).fadeOut(800);
  });
});
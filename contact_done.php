<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <title>斎藤裕介|ソニー生命保険株式会社|札幌ライフプランナー</title>
  <meta name="description" content="ソニー生命保険株式会社の札幌ライフプランナー、斎藤裕介です。" />
  <!-- 承認後 search-console -->
  <!-- <meta name="google-site-verification" content="ZZmaNK6hnIE9ETUzfAtnHBWJqD9NfXjgJU7vExlEDVU" /> -->
  <!-- ファビコン -->
  <link rel="icon" href="./images/common/favicon.ico" id="favicon">
  <link rel="apple-touch-icon" sizes="180x180" href="./images/common/apple-touch-icon-180x180.webp">
  <!-- css -->
  <link rel="stylesheet" href="./css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="./contact.css">
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" defer></script>
  <script src="./js/wow.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
  <script src="./js/script.js" defer></script>
</head>

<body>
  <header class="header js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="/">
          <img src="./images/common/logo.webp" alt="ロゴ">
        </a>
      </h1>
      <button class="header__drawer hamburger u-mobile js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="header__sp-nav sp-nav u-mobile js-drawer-menu">
        <ul class="sp-nav__items">
          <li class="sp-nav__item"><a class="js-drawer-link" href="/">ホーム</a></li>
          <li class="sp-nav__item"><a class="js-drawer-link" href="./index.html#profile">プロフィール</a></li>
          <li class="sp-nav__item"><a class="js-drawer-link" href="./index.html#think">想い</a></li>
          <li class="sp-nav__item"><a class="js-drawer-link" href="./index.html#insu">できること</a></li>
          <li class="sp-nav__item"><a class="js-drawer-link" href="./index.html#access">アクセス</a></li>
          <li class="sp-nav__item"><a class="js-drawer-link" href="./index.html#contact">お問い合わせ</a></li>
        </ul>
      </div>
      <!-- /.sp-nav -->

      <div class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item"><a href="./index.html#profile">プロフィール</a></li>
          <li class="pc-nav__item"><a href="./index.html#think">想い</a></li>
          <li class="pc-nav__item"><a href="./index.html#insu">できること</a></li>
          <li class="pc-nav__item"><a href="./index.html#access">アクセス</a></li>
          <li class="pc-nav__item pc-nav__item--white"><a href="./index.html#contact"><span class="fas fa-envelope"></span>お問い合わせ</a></li>
        </ul>
      </div>
      <!-- /.pc-nav -->
    </div><!-- inner -->
  </header>

  <main>
    <div class="contact-done section-margin">
      <?php

      $your_name = $_POST["name"];
      $your_name2 = $_POST["kana"];
      $your_email = $_POST["email"];
      $your_phone = $_POST["tel"];
      $your_message = $_POST["message"];

      print '<div class="contact-done__inner inner"> ';
      print '<p class="contact-done__name">' . $your_name . '様</p>';
      print '<p>お問い合わせいただきありがとうございます。</p><p>' . $your_email . 'にメールをお送りしますのでお待ちください。</p>';

      $honbun = '';
      $honbun .= $your_name . "様\n";
      $honbun .= "お世話になっております。ソニー生命の斎藤祐介です。\n";
      $honbun .= "このたびはお問い合わせいただきありがとうございました。\n";
      $honbun .= "\n";
      $honbun .= "下記内容でお問い合わせを承りました。\n";
      $honbun .= "--------------------\n";
      $honbun .= $your_message . "\n";
      $honbun .= "--------------------\n";
      $honbun .= "※こちらは自動返信メールです。※\n";
      $honbun .= "\n";
      $honbun .= "返信までしばらくお待ちくださいませ。\n";
      $honbun .= "\n";
      $honbun .= "■■■■■■■■■■■■■■■■\n";
      $honbun .= "ソニー生命保険株式会社\n";
      $honbun .= "札幌ライフプランナーセンター第2支社\n";
      $honbun .= "第2営業所　ライフプランナー\n";
      $honbun .= "斎藤　裕介\n";
      $honbun .= "\n";
      $honbun .= "〒000-0000\n";
      $honbun .= "札幌市中央区\n";
      $honbun .= "電話　000-000-0000\n";
      $honbun .= "携帯　000-0000-0000\n";
      $honbun .= "E-mail:hoge.co.jp\n";
      $honbun .= "会社HP:https://hoge\n";
      $honbun .= "個人HP:https://hogehoge\n";
      $honbun .= "■■■■■■■■■■■■■■■■\n";

      $title = '【斎藤裕介｜ソニー生命】お問い合わせが完了しました。';
      $header='From:hoge.co.jp';
      $honbun = html_entity_decode($honbun, ENT_QUOTES, 'UTF-8');
      mb_language('Japanese');
      mb_internal_encoding('UTF-8');
      mb_send_mail($your_email, $title, $honbun, $header);

      $title = '【Webサイトより】お問い合わせがありました。';
      $header = 'From:' . $your_email;
      $honbun = html_entity_decode($honbun, ENT_QUOTES, 'UTF-8');
      mb_language('Japanese');
      mb_internal_encoding('UTF-8');
      mb_send_mail('hoge.co.jp',$title,$honbun,$header);

      ?>
      <div class="contact-done__home">
        <a class="contact-done__icon" href="/"><i class="fas fa-home"></i></a>
      </div>
    </div>
    </div>

  </main>

  <footer class="footer">
    <ul class="footer__list">
      <li class="footer__item"><a href="./index.html#profile">プロフィール</a></li>
      <li class="footer__item"><a href="./index.html#think">想い</a></li>
      <li class="footer__item"><a href="./index.html#insu">できること</a></li>
      <li class="footer__item"><a href="./index.html#access">アクセス</a></li>
    </ul>
    <a href="/" class="footer__logo">
      <img src="./images/common/logo.webp" alt="ロゴ">
    </a>
    <p class="footer__copyright"><small lang="en">&copy; 2021 Yusuke Saito</small></p>
  </footer>
  <div class="pagetop-btn">
    <a href="#" class="pagetop js-pagetop" aria-label="ページトップに戻る"><i class="fas fa-caret-square-up"></i></a>
  </div>


</body>

</html>
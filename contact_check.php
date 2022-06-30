<!DOCTYPE html>
<html lang="ja">

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

    <div class="contact-check section-margin">
      <div class="contact-check__inner inner">
        <p class="contact-check__text">以下の内容で送信してよろしいですか？</p>
        <div class="contact-check__wrapper">
          <?php

          $your_name = $_POST["name"];
          $your_name2 = $_POST["kana"];
          $your_email = $_POST["email"];
          $your_phone = $_POST["tel"];
          $your_message = $_POST["message"];

          $okflg = true;

          if ($your_name == '') {
            print '<div class="contact-check__message">';
            print 'お名前が入力されていません。';
            print '</div>';
            $okflg = false;
          } else {
            print '<div class="contact-check__message">';
            print 'お名前：';
            print $your_name;
            print '</div>';
          }
          if ($your_name2 == '') {
            print '<div class="contact-check__message">';
            print 'ふりがなが入力されていません。';
            print '</div>';
            $okflg = false;
          } else {
            print '<div class="contact-check__message">';
            print 'ふりがな：';
            print $your_name2;
            print '</div>';
          }
          if (preg_match('/\A[\w\-\.]+\@[\w\-\.]+\.([a-z]+)\z/', $your_email) == 0) {
            print '<div class="contact-check__message">';
            print 'Eメールが誤っています。';
            print '</div>';
            $okflg = false;
          } else {
            print '<div class="contact-check__message">';
            print 'Eメール：';
            print $your_email;
            print '</div>';
          }
          if ($your_phone == '') {
            print '<div class="contact-check__message">';
            print '電話番号が入力されていません。';
            print '</div>';
            $okflg = false;
          } else {
            print '<div class="contact-check__message">';
            print '電話番号：';
            print $your_phone;
            print '</div>';
          }
          if ($your_message == '') {
            print '<div class="contact-check__message">';
            print 'コメントが入力されていません。';
            print '</div>';
            $okflg = false;
          } else {
            print '<div class="contact-check__message">';
            print 'コメント：';
            print $your_message;
            print '</div>';
          }

          if ($okflg == true) {
            print '<form method="post" action="contact_done.php">';
            print '<input type="hidden" name="name" value="' . $your_name . '">';
            print '<input type="hidden" name="kana" value="' . $your_name . '">';
            print '<input type="hidden" name="email" value="' . $your_email . '">';
            print '<input type="hidden" name="tel" value="' . $your_phone . '">';
            print '<input type="hidden" name="message" value="' . $your_message . '">';
            print '<div class="contact-check__btn">';
            print '<input class="btn btn--back" type="button" onclick="history.back()" value="戻る">';
            print '<input class="btn btn--submit" type="submit" value="送信">';
            print '</div>';
            print '</form>';
          } else {
            print '<form>';
            print '<input class="btn btn--back" type="button" onclick="history.back()" value="戻る">';
            print '</form>';
          }

          ?>
        </div>
        <!-- /.contact-check__wrapper -->
      </div><!-- inner -->
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
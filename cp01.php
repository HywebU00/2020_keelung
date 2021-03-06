<!DOCTYPE html>
<html lang="zh-Hant" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>基隆市政府</title>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries [if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  <!-- slick css-->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css" />
  <!-- hyUI css -->
  <link rel="stylesheet" href="css/keelung_gp.css" id="cssStyle" />
  <!-- favicon -->
  <link href="images/favicon.png" rel="icon" type="image/x-icon">
</head>
<body>
  <!-- l-wrap Start -->
  <div class="l-wrap">
    <!-- topnav Start -->
    <?php require_once('include/topnav.html'); ?>
    <!-- topnav End -->
    <!-- header Start -->
    <?php require_once('include/header.html'); ?>
    <!-- header End -->
    <!-- main Start -->
    <div id="center" class="main innerpage">
      <!-- innerimg 內頁上方大圖 -->
      <?php require_once('include/innerimg.html'); ?>
      <div class="container">
        <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
        <div class="center_block">
          <!-- breadcrumb -->
          <?php require_once('include/breadcrumb.html'); ?>
          <!-- h2 -->
          <h2 class="pageTitle">新建里</h2>
          <!-- function -->
          <div class="function_panel">
            <!-- function轉寄回上頁分享 -->
            <?php require('include/function.html'); ?>
          </div>
          <!-- category -->
          <?php require('include/category.html'); ?>
          <!-- tag 文章標籤 -->
          <?php require('include/tag.html'); ?>
          <!-- CP Start -->
          <?php require('include/cp01.html'); ?>
          <!-- CP End -->
          <!-- cp_slider+slick_lightbox -->
          <?php require('include/slider.html'); ?>
          <!-- file download 檔案下載 -->
          <?php require('include/file.html'); ?>
          <!-- weblink 外部連結 -->
          <?php require('include/weblink.html'); ?>
          <!-- publish -->
          <?php require('include/publish.html'); ?>
        </div>
      </div>
    </div>
    <!-- main End -->
    <!-- fatFooter Start -->
    <?php require('include/fatFooter.html'); ?>
    <!-- fatFooter End -->
    <!-- footer Start-->
    <?php require('include/footer.html'); ?>
    <!-- footer End -->
  </div>
  <!-- l-wrap End -->
  <a href="javascript:;" class="scrollToTop">回頁首</a>
  <?php require('include/js.html'); ?>
  <!-- 切換色系用套版時可刪除 -->
  <?php require('include/style.html'); ?>
</body>
</html>
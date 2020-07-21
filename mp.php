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
  <link rel="stylesheet" type="text/css" href="vendor/animate.css" />
  <!-- hyUI css -->
  <link rel="stylesheet" href="css/keelung_gp.css" id="cssStyle" />
  <!-- favicon -->
  <link href="images/favicon.png" rel="icon" type="image/x-icon" />
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
    <div id="center" class="l-main">
      <div class="container">
        <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
      </div>
      <section class="col-12">
        <!-- 輪播 -->
        <?php require('include/c-mpSlider-a.html'); ?>
      </section>
      <section class="col-12">
        <?php require('include/c-mpSlider-b.html'); ?>
      </section>
      <section class="col-8-4">
        <div class="container">
          <div class="col">
            <!-- 輪播 -->
            <?php require('include/c-mpSlider-a.html'); ?>
          </div>
          <div class="col">
            <!-- 輪播 -->
            <?php require('include/c-mpSlider-a.html'); ?>
          </div>
        </div>
      </section>
      <section class="col-12">
        <!-- 跑馬燈 -->
        <?php require('include/c-marquee.html'); ?>
      </section>
      <section class="col-12">
        <!-- 最新公告 12col -->
        <?php require('include/c-news-a.html'); ?>
      </section>
      <section class="col-8-4">
        <div class="container">
          <div class="col">
            <!-- 最新公告 -->
            <?php require('include/c-news-b.html'); ?>
          </div>
          <div class="col">
            <!-- 最新公告 -->
            <?php require('include/c-news-b.html'); ?>
          </div>
        </div>
      </section>
      <section class="col-12">
        <!-- 最新公告 頁簽12col -->
        <?php require('include/c-tabNews-a.html'); ?>
      </section>
      <section class="col-8-4">
        <div class="container">
          <div class="col">
            <!-- 最新公告 頁簽8col -->
            <?php require('include/c-tabNews-b.html'); ?>
          </div>
          <div class="col">
            <!-- 最新公告 頁簽4col -->
            <?php require('include/c-tabNews-b.html'); ?>
          </div>
        </div>
      </section>
      <section class="col-12">
        <!-- 常用服務-方形圖文 -->
        <?php require('include/c-services-a.html'); ?>
      </section>
      <section class="col-12">
        <!-- 常用服務-圓形圖文 -->
        <?php require('include/c-services-b.html'); ?>
      </section>
      <section class="col-12">
        <!-- 常用服務-文字區塊-整齊排列 -->
        <?php require('include/c-services-c.html'); ?>
      </section>
      <section class="col-12">
        <!-- 常用服務-文字區塊-靠左不對齊排列 -->
        <?php require('include/c-services-d.html'); ?>
      </section>
      <section class="col-12">
        <!-- 常用服務-文字區塊-置中不對齊排列 -->
        <?php require('include/c-services-e.html'); ?>
      </section>
      <section class="col-12">
        <!-- 照片/影音資訊-左文右圖（標題、內文、圖片） -->
        <?php require('include/c-videos-a.html'); ?>
      </section>
      <section class="col-12">
        <!-- 照片/影音資訊-左文右圖（標題、內文、圖片） -->
        <?php require('include/c-videos-b.html'); ?>
      </section>
      <section class="col-12">
        <!-- 照片/影音資訊-左文右圖（標題、內文、圖片） -->
        <?php require('include/c-videos-c.html'); ?>
      </section>
      <section class="col-12">
        <!-- 照片/影音資訊-左圖右文（標題、內文、圖片） -->
        <?php require('include/c-videos-d.html'); ?>
      </section>  
      <section class="col-12">
        <!-- 廣告輪播-圖片（圖片） -->
        <?php require('include/c-adSlider-a.html'); ?>
      </section>
      <section class="col-12">
        <!-- 廣告輪播-圖片（標題） -->
        <?php require('include/c-adSlider-b.html'); ?>
      </section>
      <section class="col-4-4-4">
        <div class="container">
          <div class="col">
            <!-- 15 自由編輯-公所資訊 -->
            <?php require('include/c-freeblock-dep.html'); ?>
          </div>
          <div class="col">
            <!-- 16 自由編輯-防疫安全警示 -->
            <?php require('include/c-freeblock-warn.html'); ?>
          </div>
          <div class="col">
          </div>
        </div>
      </section>
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
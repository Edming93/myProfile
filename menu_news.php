<?php
$db = mysqli_connect("localhost", "ming", "Edming1@", "my_profile");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!--익스플로러,크롬 호환-->
    <title>싱어송라이터 우유</title>
    <META name=viewport content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=1.0">
    <meta property="og:type" content="website"> <!-- OPEN GRAPH(face book,카톡 등) SNS전송시 보여질 화면설정-->
    <meta property="og:title" content="싱어송라이터 우유">
    <meta property="og:description" content="Oo.you를 소개하는 공간">
    <meta property="og:image" content="image/free_bird.jpg">
    <meta name="description" content="싱어송라이터 우유를 소개하는 공간"> <!-- 검색 최적화-->
    <meta name="keyword" content="김민지,우유,기밍지,버스킹,버스킹영상"> <!-- ★중요★ 검색했을때 첫페이지표시 키워드 두둥 -->
    <style>
        @font-face {
            font-family: 'Cafe24Ssurroundair';
            font-weight: normal;
            font-style: normal;
            src: url(https://cdn.jsdelivr.net/gh/webfontworld/cafe24/Cafe24Ssurroundair.woff2) format('woff2');
            font-display: swap;
        }
        @font-face {font-family: 'Noto Sans KR';font-style: normal;font-weight: 100;src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Thin.woff2) format('woff2'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Thin.woff) format('woff'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Thin.otf) format('opentype');} @font-face {font-family: 'Noto Sans KR';font-style: normal;font-weight: 300;src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Light.woff2) format('woff2'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Light.woff) format('woff'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Light.otf) format('opentype');} @font-face {font-family: 'Noto Sans KR';font-style: normal;font-weight: 400;src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Regular.woff2) format('woff2'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Regular.woff) format('woff'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Regular.otf) format('opentype');} @font-face {font-family: 'Noto Sans KR';font-style: normal;font-weight: 500;src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Medium.woff2) format('woff2'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Medium.woff) format('woff'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Medium.otf) format('opentype');} @font-face {font-family: 'Noto Sans KR';font-style: normal;font-weight: 700;src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Bold.woff2) format('woff2'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Bold.woff) format('woff'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Bold.otf) format('opentype');} @font-face {font-family: 'Noto Sans KR';font-style: normal;font-weight: 900;src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Black.woff2) format('woff2'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Black.woff) format('woff'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Black.otf) format('opentype');} body, h1, h2, h3, h4, h5, h6, input, textarea, select { font-family: 'Noto Sans KR', sans-serif; }
        body {
            font-family: 'Noto Sans KR';
            background-color:black;
            color: #f1e8ce;
        }

        .header_top_title {
            font-weight: bold;
            font-size: 55px;
            padding-top: 60px;
            font-family: 'Cafe24Ssurroundair';
            text-decoration: none;
            color: #f1e8ce;
        }
        .header_menu_area {
            padding-top: 30px;
        }
        .mom {
            text-align: center;
            width:100%;
            max-width: 1300px;
            margin:0px auto;
        }
        .menu_name {
            text-decoration: none;
            font-size: 19px;
            color: #f0e8ce;
            padding: 0px 10px;
        }
        .news_title {
            font-size:40px;
            font-weight: bold;
            margin-top:50px;
            margin-bottom: 15px;
        }
        .news {
            font-size:16px;
            color: #f0e8ce;
            text-decoration: none;
        }
        .main {
            line-height: 40px;
            width:100%;
            height: 100%;
            margin-bottom: 80px;
        }
        .article_area {
            display: inline-block;
            background-color: #D5D5D4 !important;
            width: 1200px;
            height: 1200px;
        }
        .news_area1 {
            margin-top:30px;
        }
    </style>

</head>

<body>
<div class="mom">
    <div class="header">
        <div class="header_top_title">
            <a class="header_top_title" href="my_profile.php" target="_self">싱어송라이터 우유</a>
        </div>
        <div class="header_menu_area">
            <a class="menu_name" href="menu_introduce.php">INTRODUCE</a>
            <a class="menu_name" href="menu_music.php">MUSIC</a>
            <a class="menu_name" href="menu_video.php">VIDEO</a>
            <a class="menu_name" href="menu_news.php">NEWS</a>
            <a class="menu_name" href="menu_board.php">BOARD</a>
            <a class="menu_name" href="https://www.instagram.com/over93/" target="_blank">INSTAGRAM</a>
            <a class="menu_name" href="https://www.facebook.com/MJ93.K/" target="_blank">FACEBOOK</a>
        </div>
    </div>

    <div class="main">


<!--        <div class="news_area">-->
<!--            <div class="news_content">-->
<!--                <div class="left_content"></div>-->
<!--                <div class="right_content"></div>-->
<!--            </div>-->
<!--            -->
<!--        </div>-->

        <div class="news_area news_area1">
            <a class="news" href="https://www.newsen.com/news_view.php?uid=201308310018591210" target="ooyou_news">윤종신, 김민지에 “얘가 최고다” 무한극찬</a>
        </div>
        <div class="news_area">
            <a class="news" href="http://www.obsnews.co.kr/news/articleView.html?idxno=987743" target="ooyou_news">류지현·김민지, '싸우자 귀신아' 첫 OST '너만 보여' 19일 공개</a>
        </div>
        <div class="news_area">
            <a class="news" href="https://www.chosun.com/site/data/html_dir/2018/07/05/2018070501703.html" target="ooyou_news">[3시의 인디살롱] ‘슈스케5’의 앳된 김민지, 어느새 4년차 싱어송라이터</a>
        </div>
        <div class="news_area">
            <a class="news" href="http://www.interfootball.co.kr/news/articleView.html?idxno=532926" target="ooyou_news">웹드라마 '버티고, 슛' OST에 슈스케 TOP4 참여...‘연일 화제’</a>
        </div>
        <div class="news_area">
            <a class="news" href="http://news.heraldcorp.com/view.php?ud=20201120000303" target="ooyou_news">우유(김민지), 신곡 ‘프리버드’로 컴백</a>
        </div>

        <iframe style="border-radius:12px;"class="news_title" name="ooyou_news" width="1200" height="1200" frameborder="0" allowTransparency="true">
        </iframe>



    </div>
    <?php
    include("footer.php");
    ?>

</body>
</html>

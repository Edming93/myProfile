<?php
$db = mysqli_connect("localhost", "ming", "Edming1@", "my_profile");
mysqli_set_charset($db, 'utf8');
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
            max-width: 1200px;
            height: 100%;
            margin:0px auto;
        }
        .menu_name {
            text-decoration: none;
            font-size: 19px;
            color: #f0e8ce;
            padding: 0px 10px;
        }
        .main {
            text-align: center;
            width:100%;
            height: 100%;
            margin-bottom: 150px;
        }
        .album_photo {
            width:100%;
            max-width:225px;
            height: 225px;
            border-radius: 20px;
        }
        .album_area {
            display: inline-block;
            text-align: center;
            margin-top: 100px;
            width:90%;
        }
        .album_details{
            display: inline-block;
            width:100%;
            max-width:225px;
            height: 225px;
        }
        .img-a {
            display: inline-block;
            width: 225px;
            height: 225px;
            position: relative;
            margin: 10px;
        }
        .img-b {
            border-radius: 20px;
            width:100%;
            max-width:225px;
            height:225px;
        }
        .img-c {
            box-sizing: border-box;
            position: absolute;
            border: 4px solid white;
            text-align: center;
            background-color: black;
            padding: 80px 0px;
            width:100%;
            height:100%;
            top: 0px;
            left: 0px;
            border-radius: 20px;
            transition: all ease 1s 0s;
            opacity: 0;
        }
        .letter {
            display: inline-block;
            position: absolute;
            width:100%;
            top:50%;
            left:0px;
            font-size: 16px;
            line-height: 24px;
        }
        /*.img-c { // div에 text로 주는 방법
            box-sizing: border-box;
            position: absolute;

            width:100%;
            height: 100%;
            display: none;
            top: 0px;
            left: 0px;
            background-color: black;
            border: 4px solid white;
            border-radius: 20px;
            padding: 80px 0px;
            transition: all ease 1s 0s;
            opacity: 0;
        }*/
        .img-a:hover .img-c {
            display: block;
            opacity: 0.8;
        }
        @media (max-width: 509px) { /* 화면 크기가 509px 이하인 경우 : 모바일용 css */
            .album_area{
                margin-top:30px;
                width:90%;
                max-width: unset;
            }
            .img-a {
                width:100%;
                max-width:unset;
                height: unset;
                margin: 10px 0px;
            }
            .img-b {
                max-width:unset;
                height:unset;
            }
            .header_top_title {
                font-size:40px;
            }
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
        <div class="album_area">
            <?php
            $sql = "select * from music";

            if($all=$db->query($sql)){
            while($each=$all->fetch_assoc()){
            $photo = $each['photo'];
            $description =$each['description'];
            $line=$each['line'];
            $height = 24 * $line;
            $height = $height."px";
            $half_height= $height/2;
            ?>
                <div class="img-a">
                    <img src="<?=$photo?>" alt="" class="img-b">
                    <div class="img-c">
                        <div class="letter" style="height:<?=$height?>;margin-top: -<?=$half_height?>px;"><?=$description?></div>
                    </div>
                <!-- DB에 src(jpg)값, div에있는 text값 저장해서 불러와 while문으로 넣기??-->
                <!--<img src="image/sangsang_2.png" alt="" class="img-c">-->
            </div>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>


</body>
</html>

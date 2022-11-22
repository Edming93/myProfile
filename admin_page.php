<?php
$db = mysqli_connect("localhost", "root", "Edming1@", "my_profile");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>우유 관리자 페이지</title>
    <style>

        @font-face {
            font-family: 'Cafe24Ssurroundair';
            font-weight: normal;
            font-style: normal;
            src: url(https://cdn.jsdelivr.net/gh/webfontworld/cafe24/Cafe24Ssurroundair.woff2) format('woff2');
            font-display: swap;
        }

        @font-face {
            font-family: 'Noto Sans KR';
            font-style: normal;
            font-weight: 100;
            src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Thin.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Thin.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Thin.otf) format('opentype');
        }

        @font-face {
            font-family: 'Noto Sans KR';
            font-style: normal;
            font-weight: 300;
            src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Light.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Light.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Light.otf) format('opentype');
        }

        @font-face {
            font-family: 'Noto Sans KR';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Regular.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Regular.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Regular.otf) format('opentype');
        }

        @font-face {
            font-family: 'Noto Sans KR';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Medium.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Medium.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Medium.otf) format('opentype');
        }

        @font-face {
            font-family: 'Noto Sans KR';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Bold.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Bold.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Bold.otf) format('opentype');
        }

        @font-face {
            font-family: 'Noto Sans KR';
            font-style: normal;
            font-weight: 900;
            src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Black.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Black.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Black.otf) format('opentype');
        }

        body, h1, h2, h3, h4, h5, h6, input, textarea, select {
            font-family: 'Noto Sans KR', sans-serif;
        }

        body {
            font-family: 'Noto Sans KR';
            margin:0px;
            background-color: #f5f5f5;
            width:100%;
            height:100%;
        }
        .main {
            width:100%;
            height:1300px;
            text-align: center;
        }
        .main_left{
            width: 330px;
            height: 100vh;
            background-color: black;
            /* float: left; */
            position: fixed;
            left: 0px;
            top: 0px;
        }
        .left_header_top {
            width:100%;
            height:150px;
            font-size: 60px;
            font-weight: 900;
            color:#e9e9de;
            padding: 30px;
            box-sizing: border-box;
        }
        .menu_list {
            width:100%;
            height:calc(100% - 150px);
            text-align: left;
        }
        .menu {
            width:100%;
            height:50px;
            font-size: 23px;
            font-weight: 600;
            color:#e9e9de;
            padding: 8px 0px;
            box-sizing: border-box;
            padding-left: 53px;
        }
        .main_right {
            width:calc(100% - 330px);
            height:100%;
            float:right;
        }
        .a_link {
            text-decoration: none;
            color:#e9e9de;
        }
        .a_link2 {
            text-decoration: none;
            color:unset;
        }
        .square_area {
            width:1100px;
            height: 700px;
            margin-top:120px;
            display: inline-block;
        }
        .square {
            width:300px;
            height:300px;
            top:0px;
            background-color: #efefef;
            position:relative;
            display: inline-block;
            margin:30px;
            border-radius: 30px;
            font-size:40px;
            font-weight: bold;
            box-sizing: border-box;
            color:#b9b9b2;
            box-shadow:5px 5px 7px 3px #666666;
            transition: top .3s ease-in-out;
        }
        .icon_text {
            width:100%;
            height: 100%;
            font-size:40px;
            font-weight: bold;
            padding-top: 45px;
            box-sizing: border-box;
            text-shadow: 3px 3px 2px #666666;
        }
        .bi {
            font-size:80px;
        }

        .square:hover {
            color:#2c2c2c;
            top:-30px;
            cursor: pointer;
        }



    </style>
</head>
<body>
<div class="main">
    <div class="main_left">
        <div class="left_header_top"><a class="a_link2" href="my_profile.php">Oo.you</a></div>
        <div class="menu_list">
            <div class="menu"><a class="a_link" href="admin_page.php">· DASHBOARD</a></div>
            <div class="menu"><a class="a_link" href="admin_main.php">· MAIN</a></div>
            <div class="menu"><a class="a_link" href="admin_introduce.php">· INTRODUCE</a></div>
            <div class="menu"><a class="a_link" href="admin_music.php">· MUSIC</a></div>
            <div class="menu"><a class="a_link" href="admin_video.php">· VIDEO</a></div>
            <div class="menu"><a class="a_link" href="admin_news.php">· NEWS</a></div>
            <div class="menu"><a class="a_link" href="admin_settings.php">· SETTINGS</a></div>
        </div>
    </div>
    <div class="main_right">
        <div class="square_area">
            <div class="square">
                <div class="icon_text">
                    <a class="a_link2" href="admin_main.php"><i class="bi bi-door-open-fill"></i><br>MAIN</a></div>
            </div>
            <div class="square">
                <div class="icon_text">
                    <a class="a_link2" href="admin_introduce.php"><i class="bi bi-person-plus-fill"></i><br>INTRODUCE</a></div>
            </div>
            <div class="square">
                <div class="icon_text">
                    <a class="a_link2" href="admin_music.php"><i class="bi bi-music-note-beamed"></i><br>MUSIC</a></div>
            </div>
            <div class="square">
                <div class="icon_text">
                    <a class="a_link2" href="admin_video.php"><i class="bi bi-camera-reels-fill"></i><br>VIDEO</a></div>
            </div>
            <div class="square">
                <div class="icon_text">
                    <a class="a_link2" href="admin_news.php"><i class="bi bi-newspaper"></i><br>NEWS</a></div>
            </div>
            <div class="square">
                <div class="icon_text">
                    <a class="a_link2" href="admin_settings.php"><i class="bi bi-gear-fill"></i><br>SETTINGS</a></div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
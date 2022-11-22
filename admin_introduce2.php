
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
            margin: 0px;
            background-color: #f5f5f5;
        }

        .main {
            width: 100%;
            height: 1600px;
            text-align: center;
        }

        .main_left {
            width: 330px;
            height: 100%;
            background-color: black;
            float: left;
        }

        .left_header_top {
            width: 100%;
            height: 150px;
            font-size: 60px;
            font-weight: 900;
            color: #e9e9de;
            padding: 30px;
            box-sizing: border-box;
        }

        .menu_list {
            width: 100%;
            height: calc(100% - 150px);
            text-align: left;
        }

        .menu {
            width: 100%;
            height: 50px;
            font-size: 23px;
            font-weight: 600;
            color: #e9e9de;
            padding: 8px 0px;
            box-sizing: border-box;
            padding-left: 53px;
        }

        .main_right {
            width: calc(100% - 330px);
            height: 100%;
            float: right;
            text-align: left;
        }

        .a_link {
            text-decoration: none;
            color: #e9e9de;
        }

        .right_header_top {
            width: 100%;
            height: 80px;
            font-size: 30px;
            font-weight: 900;
            color: #2c2c2c;
            margin-top: 65px;
            margin-left: 50px;
        }

        .main_right_area {
            width: 800px;
            height: calc(100% - 160px);
            margin-left: 50px;
        }

        .main_right_photo_area {
            width: 100%;
            height: 30px;
            margin-bottom: 20px;
        }

        .main_right_select {
            width: 400px;
            height: 100%;
            float: left;
        }

        .main_right_select_2 {
            width: 320px;
            height: 25px;
        }

        .main_search {
            width: 65px;
            height: 30px;
            border-radius: 5px;
            border: 1px solid #b9b9b2;
            margin-left: 10px;
            background-color: #e9e9de;
            color: #666666;
            font-size: 12px;
        }

        .main_right_title {
            height: 100%;
            font-size: 16px;
            padding-top: 2px;
            font-weight: 900;
            float: left;
            margin-right: 13px;
        }

        .main_right_title_2 {
            height: 20px;
            font-size: 16px;
            font-weight: 900;
            margin-bottom: 15px;
        }
        .main_right_introduce_area {
            width: 100%;
            height: 380px;
        }

        .main_right_description_area {
            width: 100%;
            height: 380px;
            margin-top: 50px;
        }

        .main_right_description {
            width: 600px;
            height: 300px;
            border: 1px solid #b9b9b2;
            border-radius: 15px;
            padding: 20px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        .main_right_artist_area {
            width: 100%;
            height: 350px;
            margin-top: 50px;
        }

        .main_right_artist_small_area {
            width: 100%;
            margin-bottom: 20px;
        }

        .main_right_short_text {
            width: 285px;
            height: 25px;
        }

        .main_right_description_left {
            width: 610px;
            height: 100%;
            float: left;
        }

        .main_right_description_right {
            width: 130px;
            height: 50%;
            margin-top: 172px;
            float: left;
            box-sizing: border-box;
        }

        .main_right_artist_left {
            width: 50%;
            height: 100%;
            float: left;
        }

        .main_right_artist_right {
            width: 45%;
            height: 100%;
            float: right;
        }

        .artist_small_left {

        }

        .artist_small_right {
            padding-left: 80px;
            padding-top: 7px;
        }

    </style>
</head>
<body>
<div class="main">
    <div class="main_left">
        <div class="left_header_top"><a class="a_link" href="admin_page.php">Oo.you</a></div>
        <div class="menu_list">
            <div class="menu"><a class="a_link" href="admin_page.php">· DASHBOARD</a></div>
            <div class="menu"><a class="a_link" href="admin_main.php">· MAIN</a></div>
            <div class="menu"><a class="a_link" href="admin_introduce_write.php">· INTRODUCE</a></div>
            <div class="menu"><a class="a_link" href="admin_music.php">· MUSIC</a></div>
            <div class="menu"><a class="a_link" href="admin_video.php">· VIDEO</a></div>
            <div class="menu"><a class="a_link" href="admin_news.php">· NEWS</a></div>
            <div class="menu"><a class="a_link" href="admin_settings.php">· SETTINGS</a></div>
        </div>
    </div>
    <div class="main_right">
        <div class="right_header_top">INTRODUCE</div>
        <div class="main_right_area">
            <form method="post" action="admin_db_write.php">
                <div class="main_right_photo_area">
                    <div class="main_right_title">PHOTO_1</div>
                    <input class="main_right_short_text" type="text" type="submit">
                    <input class="main_search" type="submit" value="insert">
                </div>
                <div class="main_right_photo_area">
                    <div class="main_right_title">PHOTO_1_MODIFY</div>
                    <select class="main_right_select">
                        <option value="1">에드밍</option>
                        <option value="2">밍또기</option>
                        <option value="3">어르신</option>
                    </select>
                    <input class="main_search" type="submit" value="Update">
                    <input class="main_search" type="submit" value="Delete">
                </div>

                <div class="main_right_artist_area">
                    <div class="main_right_artist_left">
                        <div class="main_right_artist_small_area">
                            <div class="main_right_title_2">ARTIST NAME</div>
                            <input class="main_right_short_text" type="text" type="submit">
                            <input class="main_search" type="submit" value="Insert">
                        </div>
                        <div class="main_right_artist_small_area">
                            <div class="main_right_title_2">GENRE</div>
                            <input class="main_right_short_text" type="text" type="submit">
                            <input class="main_search" type="submit" value="Insert">
                        </div>
                        <div class="main_right_artist_small_area">
                            <div class="main_right_title_2">DETAILS</div>
                            <input class="main_right_short_text" type="text" type="submit">
                            <input class="main_search" type="submit" value="Insert">
                        </div>
                    </div>
                    <div class="main_right_artist_right">
                        <div class="main_right_artist_small_area">
                            <div class="artist_small_left">
                                <div class="main_right_title_2">ARTIST NAME_MODIFY</div>
                                <select class="main_right_select_2">
                                    <option value="1">에드밍</option>
                                    <option value="2">밍또기</option>
                                    <option value="3">어르신</option>
                                </select>
                            </div>
                            <div class="artist_small_right">
                                <input class="main_search" type="submit" value="Update">
                                <input class="main_search" type="submit" value="Delete">
                            </div>
                        </div>
                        <div class="main_right_artist_small_area">
                            <div class="artist_small_left">
                                <div class="main_right_title_2">GENRE_MODIFY</div>
                                <select class="main_right_select_2">
                                    <option value="1">에드밍</option>
                                    <option value="2">밍또기</option>
                                    <option value="3">어르신</option>
                                </select>
                            </div>
                            <div class="artist_small_right">
                                <input class="main_search" type="submit" value="Update">
                                <input class="main_search" type="submit" value="Delete">
                            </div>
                        </div>
                        <div class="main_right_artist_small_area">
                            <div class="artist_small_left">
                                <div class="main_right_title_2">DETAILS_MODIFY</div>
                                <select class="main_right_select_2">
                                    <option value="1">에드밍</option>
                                    <option value="2">밍또기</option>
                                    <option value="3">어르신</option>
                                </select>
                            </div>
                            <div class="artist_small_right">
                                <input class="main_search" type="submit" value="Update">
                                <input class="main_search" type="submit" value="Delete">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="main_right_introduce_area">
                    <div class="main_right_description_left">
                        <div class="main_right_title_2">INTRODUCE</div>
                        <textarea class="main_right_description" name="intro_dc"></textarea>
                    </div>
                    <div class="main_right_description_right">
                        <input class="main_search" type="submit" value="Insert">
                    </div>
                </div>

                <div class="main_right_photo_area">
                    <div class="main_right_title">PHOTO_2</div>
                    <input class="main_right_short_text" type="text" type="submit">
                    <input class="main_search" type="submit" value="insert">
                </div>
                <div class="main_right_photo_area">
                    <div class="main_right_title">PHOTO_2_MODIFY</div>
                    <select class="main_right_select">
                        <option value="1">에드밍</option>
                        <option value="2">밍또기</option>
                        <option value="3">어르신</option>
                    </select>
                    <input class="main_search" type="submit" value="Update">
                    <input class="main_search" type="submit" value="Delete">
                </div>

                <div class="main_right_description_area">
                    <div class="main_right_description_left">
                        <div class="main_right_title_2">AlBUM_LIST_DESCRIPTION</div>
                        <textarea class="main_right_description" name="intro_dc"></textarea>
                    </div>
                    <div class="main_right_description_right">
                        <input class="main_search" type="submit" value="Insert">
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>
</body>
</html>
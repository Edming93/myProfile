<?php
$db = mysqli_connect("localhost", "ming", "Edming1@", "my_profile");
mysqli_set_charset($db, 'utf8');
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
            margin: 0px;
            background-color: #f5f5f5;
        }

        .main {
            width: 100%;
            height: 1600px;
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
            border-bottom: 2px solid;
        }
        .big_title {
            width: 18%;
            height: 80px;
            font-size: 30px;
            font-weight: 900;
            color: #2c2c2c;
            float: left;
        }
        .small_title {
            width: 13%;
            height: 30px;
            font-size: 16px;
            font-weight: 900;
            line-height: 40px;
            color: #2c2c2c;
            float: left;
            margin-top: 7px;
        }

        .main_right_area {
            width: 1000px;
            height: calc(100% - 160px);
            margin-left: 50px;
        }
        .table_title_box {
            width: 20%;
            height: 100%;
            padding: 22px 0px 22px 25px;
            box-sizing: border-box;
            float: left;
            font-size: 20px;
            font-weight: 900;
            color: #2c2c2c;
        }
        .table_data_box_area {
            width:50%;
            height:100%;
            padding: 22px 0px 22px 25px;
            box-sizing: border-box;
            float: left;
            font-size: 20px;
            font-weight: 900;
            color: #2c2c2c;
        }
        .table_data_box {
            width: 100%;
            height: 100%;
            margin: 10px 0px;
            float: left;
        }
        .text_box_explain {
            color: #8e8e8e;
            font-size: 12px;
            font-weight: 400;
            float: left;
            height: 100%;
            margin-left: 10px;
            display: inline-block;
            line-height: 29px;
        }

        .text_box_explain_area {
            width: 165px;
            height: 100%;
            float: left;
            box-sizing: border-box;
        }
        .main_table_no_height {
            width:100%;
            height:100%;
            border-bottom: 1px solid #dddddd;
            float:left;
        }
        .text_box_year {
            width: 220px;
            height: 25px;
            float: left;
            border-radius: 5px;
            border: 1px solid #b9b9b2;
        }
        .submit_button {
            width:130px;
            height:30px;
            display:inline-block;
        }
        .submit_button_area {
            width: 100%;
            height: 30px;
            float: left;
            text-align: center;
            margin-top: 35px;
        }

    </style>
    <script>
        <?php
        $no_save = $_GET['no_save'];

        if ($no_save) {

        ?>

        alert('년도를 바꾸실 수 없습니다. 다시 작성해주세요');

        <?php
        }
        ?>

    </script>
</head>
<body>
<div class="main">
    <div class="main_left">
        <div class="left_header_top"><a class="a_link" href="admin_page.php">Oo.you</a></div>
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
        <div class="right_header_top">
            <div class="big_title">INTRODUCE</div>
            <div class="small_title">_ MODIFY</div>
        </div>

        <div class="main_right_area">

            <form method="post" action="admin_db_modify.php">

                <div class="main_table_no_height">
                    <div class="table_title_box">YEAR</div>
                    <div class="table_data_box_area">

                        <?php
                        $year = $_GET['year'];
                        ?>
                        <input class="text_box_year" type="text" name="year" value="<?= $year ?>" readonly>


                        <div class="text_box_explain_area">
                            <div class="text_box_explain">작품년도를 입력</div>
                        </div>
                    </div>
                </div>
                <div class="main_table_no_height">
                    <div class="table_title_box">WORK_NAME</div>
                    <div class="table_data_box_area">
                        <?php
                        $get_name_1 = $_GET['get_name_1'];
                        $get_name_2 = $_GET['get_name_2'];
                        $get_name_3 = $_GET['get_name_3'];
                        $get_name_4 = $_GET['get_name_4'];
                        $get_name_5 = $_GET['get_name_5'];

                        $get_name_ = [$get_name_1,$get_name_2,$get_name_3,$get_name_4,$get_name_5];

                        $work_name_value_= ['work_name_1','work_name_2','work_name_3','work_name_4','work_name_5'];
                        $work_name_= ['work_list_name_1','work_list_name_2','work_list_name_3','work_list_name_4','work_list_name_5'];

                        $sql = "select * from introduce where year={$year}";

                        if ($all = $db->query($sql)) {
                        while ($each = $all->fetch_assoc()) {
                            $year = $each['year'];

                        for ($a=0;$a<5;$a++) {
                            $work_name_value_[$a] = $each[$work_name_value_[$a]];

                            ?>
                        <div class="table_data_box">
                            <input class="text_box_year" type="text" name="<?=$work_name_[$a]?>" value="<?=$work_name_value_[$a]?>">

                            <div class="text_box_explain_area">
                                <!--<input class="plus_button" type="button" value="+" onclick="plus_button();"/>-->
                                <div class="text_box_explain">작품명을 입력</div>
                            </div>
                        </div>
                            <?php
                        }
                        }
                        }
                        ?>

                    </div>
                </div>

                <div class="submit_button_area">
                        <input type="submit" class="submit_button" value="MODIFY">
                </div>
            </form>
        </div>


    </div>
</div>
</body>
</html>
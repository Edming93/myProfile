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
    <!--<script src="../assets/js/jquery-3.6.0.js"></script>-->


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
        .a_link_color_black {
            text-decoration: none;
            color: #2c2c2c;
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

        .main_right_area {
            width: 1000px;
            height: calc(100% - 160px);
            margin-left: 50px;
        }
        .main_left_table {
            width: 90%;
            height: 65px;
            border-bottom: 1px solid #dddddd;
        }
        .main_right_table {
            width:90%;
            margin-top: 15px;

        }
        .left_table_title_box {
            width: 60%;
            height: 100%;
            padding: 15px 0px;
            padding-left: 25px;
            box-sizing: border-box;
            float: left;
            font-size: 20px;
            font-weight: 900;
            color: #2c2c2c;
        }
        .right_table_title_box {
            width: 100%;
            height: 100%;
            padding: 5px 0px;
            padding-left: 25px;
            box-sizing: border-box;
            font-size: 18px;
            font-weight: 400;
            color: #8d8c8c;
        }
        .table_data_box {
            width: 40%;
            height: 100%;
            padding: 15px 0px;
            box-sizing: border-box;
            float: left;
            font-size: 20px;
            font-weight: 900;
            color: #2c2c2c;
        }
        .text_box_explain {
            color: #8e8e8e;
            font-size: 14px;
            font-weight: 400;
            float: left;
            height: 100%;
            margin-left: 10px;
            display: inline-block;
            line-height: 33px;
        }
        .insert_write_area {
            width: 90%;
            height: 55px;
            border-bottom: 1px solid #dddddd;
            /* padding-top: 14px; */
            line-height: 50px;
            box-sizing: border-box;
        }

        .left_area {
            width:40%;
            float:left;
        }
        .right_area {
            width: 45%;
            float: left;
            margin-left: 45px;


        }
        .right_area_title {
            display: inline-block;
            font-weight: 900;
            font-size: 13px;
        }
        .right_area_button {
            width:80px;
            float: right;
        }
        .button {
            width: 75px;
            height: 23px;
            display: inline-block;
            line-height: 18px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
        }
        .song_name_area {
            font-size:14px;
            margin-left:15px;
            width: 360px;
        }
        .mini_button {
            width: 75px;
            height: 23px;
            display: inline-block;
            line-height: 18px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            float:right;
        }
        .change_color {
            text-decoration: none;
            color:red;
        }
        .change_color:visited {
            text-decoration: none;
            color:red;
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
            <div class="menu"><a class="a_link" href="admin_introduce.php">· INTRODUCE</a></div>
            <div class="menu"><a class="a_link" href="admin_music.php">· MUSIC</a></div>
            <div class="menu"><a class="a_link" href="admin_video.php">· VIDEO</a></div>
            <div class="menu"><a class="a_link" href="admin_news.php">· NEWS</a></div>
            <div class="menu"><a class="a_link" href="admin_settings.php">· SETTINGS</a></div>
        </div>
    </div>
    <div class="main_right">
        <div class="right_header_top">INTRODUCE</div>
        <div class="main_right_area">
            <div class="left_area">
                <div class="insert_write_area">

                    <div class="right_area_button">
                    <a href="admin_introduce_write.php"><input type="button" class="button" value="INSERT"></a>
                    </div>
                </div>
                <?php
                $get_year = $_GET['year'];

                $sql = "select * from introduce";

                if ($all = $db->query($sql)) {
                    while ($each = $all->fetch_assoc()) {

                        $year = $each['year'];
                        ?>
                <a class="a_link_color_black" href="admin_introduce.php?year=<?=$year?>">
                        <div class="main_left_table">

                                <div class="left_table_title_box"><?= $year ?></div>
                            <div class="table_data_box">
                                <div class="text_box_explain">년도 앨범작업물</div>
                            </div>
                        </div>
                </a>
                        <?php
                    }
                }
                ?>
            </div>

            <script>
                <?php
               /* $year = $_GET['year'];*/
                ?>

                function db_button() {

                    let answer;
                    answer = confirm('<?= $get_year?>년도 작업물 정보를 지우시겠습니까? 유저사이트의 정보도 함께 삭제됩니다.');


                    if (answer == true) {

                        location.href = "admin_db_delete.php?year=<?= $get_year ?>";

                    }
                }

            </script>


            <div class="right_area">
                <div class="insert_write_area">
                    <div class="right_area_title">WORK_LIST</div>
                    <div class="right_area_button">
                        <input type="button" class="button" value="DELETE" onclick="db_button();">
                    </div>

                    <div class="right_area_button">

                        <a href="admin_introduce_modify.php?year=<?= $get_year ?>">

                            <input type="button" class="button" value="MODIFY"></a>
                    </div>
                </div>
                <div class="main_right_table">

                    <?php

                    $main_title = $_GET['main_title'];


                    $sql = "select * from introduce where year='{$get_year}'";

                    if ($all = $db->query($sql)) {
                        while ($each = $all->fetch_assoc()) {
                                $work_name_1 = $each['work_name_1'];
                                $work_name_2 = $each['work_name_2'];
                                $work_name_3 = $each['work_name_3'];
                                $work_name_4 = $each['work_name_4'];
                                $work_name_5 = $each['work_name_5'];

                                ?>

                                <div class="right_table_title_box">
                                    <div>
                                        <a class="a_link_color_black" href="admin_introduce.php?year=<?=$get_year?>&main_title=<?=$work_name_1?>"><?= $work_name_1 ?> </a>
                                        <input type="button" class="mini_button" value="sub_title +" onClick="location.href='admin_mini_insert.php?main_title=<?=$main_title?>&year=<?=$get_year?>'">
                                        <div class="song_name_area">
                                            <?php
                                            $sql_2 = "select * from mini_album where year='{$get_year}'and main_title='{$work_name_1}'";

                                            $a = 1;

                                            if ($all = $db->query($sql_2)) {
                                                while ($mini_each = $all->fetch_assoc()) {
                                                    $num = $mini_each['num'];
                                                    $mini_work_name = $mini_each['mini_work_name'];


                                                    ?>

                                                    <div class="song_name"><?=$a?>.<?=$mini_work_name?></div>

                                                    <?php
                                                    $a = $a + 1;
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <div>
                                        <a class="a_link_color_black" href="admin_introduce.php?year=<?=$get_year?>&main_title=<?=$work_name_2?>"><?= $work_name_2 ?> </a>
                                        <div class="song_name_area">
                                            <?php
                                            $sql_2 = "select * from mini_album where year='{$get_year}'and main_title='{$work_name_2}'";

                                            $a = 1;

                                            if ($all = $db->query($sql_2)) {
                                                while ($mini_each = $all->fetch_assoc()) {
                                                    $num = $mini_each['num'];
                                                    $mini_work_name = $mini_each['mini_work_name'];


                                                    ?>

                                                    <div class="song_name"><?=$a?>.<?=$mini_work_name?></div>

                                                    <?php
                                                    $a = $a + 1;
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="a_link_color_black" href="admin_introduce.php?year=<?=$get_year?>&main_title=<?=$work_name_3?>"><?= $work_name_3 ?> </a>

                                        <div class="song_name_area">
                                            <?php
                                            $sql_2 = "select * from mini_album where year='{$get_year}'and main_title='{$work_name_3}'";

                                            $a = 1;

                                            if ($all = $db->query($sql_2)) {
                                                while ($mini_each = $all->fetch_assoc()) {
                                                    $num = $mini_each['num'];
                                                    $mini_work_name = $mini_each['mini_work_name'];


                                                    ?>

                                                    <div class="song_name"><?=$a?>.<?=$mini_work_name?></div>

                                                    <?php
                                                    $a = $a + 1;
                                                }
                                            }
                                            ?>
                                        </div>

                                    </div>
                                    <div>
                                        <a class="a_link_color_black" href="admin_introduce.php?year=<?=$get_year?>&main_title=<?=$work_name_4?>"><?= $work_name_4 ?> </a>
                                        <div class="song_name_area">
                                            <?php
                                            $sql_2 = "select * from mini_album where year='{$get_year}'and main_title='{$work_name_4}'";

                                            $a = 1;

                                            if ($all = $db->query($sql_2)) {
                                                while ($mini_each = $all->fetch_assoc()) {
                                                    $num = $mini_each['num'];
                                                    $mini_work_name = $mini_each['mini_work_name'];


                                                    ?>

                                                    <div class="song_name"><?=$a?>.<?=$mini_work_name?></div>

                                                    <?php
                                                    $a = $a + 1;
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="a_link_color_black" href="admin_introduce.php?year=<?=$get_year?>&main_title=<?=$work_name_5?>"><?= $work_name_5 ?> </a>
                                        <div class="song_name_area">
                                            <?php
                                            $sql_2 = "select * from mini_album where year='{$get_year}'and main_title='{$work_name_5}'";

                                            $a = 1;

                                            if ($all = $db->query($sql_2)) {
                                                while ($mini_each = $all->fetch_assoc()) {
                                                    $num = $mini_each['num'];
                                                    $mini_work_name = $mini_each['mini_work_name'];


                                                    ?>

                                                    <div class="song_name"><?=$a?>.<?=$mini_work_name?></div>

                                                    <?php
                                                    $a = $a + 1;
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

        document.querySelectorAll('.a_link_color_black').forEach(function(element_a){
            element_a.addEventListener('click',function() {
                element_a.classList.add('change_color');
            })
        });

</script>

</body>
</html>
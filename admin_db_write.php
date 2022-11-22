<?php
$db = mysqli_connect("localhost", "ming", "Edming1@", "my_profile");
mysqli_set_charset($db, 'utf8');

$year = $_POST['year'];
$work_name_1 = $_POST['work_name_1'];
$work_name_2 = $_POST['work_name_2'];
$work_name_3 = $_POST['work_name_3'];
$work_name_4 = $_POST['work_name_4'];
$work_name_5 = $_POST['work_name_5'];

$get_name_1 = $work_name_1;
$get_name_2 = $work_name_2;
$get_name_3 = $work_name_3;
$get_name_4 = $work_name_4;
$get_name_5 = $work_name_5;


$not_used = 1;

$ask = "select * from introduce where year={$year}";
if($asked = $db->query($ask)) {
    while ($array = $asked->fetch_assoc()) {
        echo $array['year'];
        $not_used = 0;
    }
}

if($not_used && $year>2012) {

    $sql = "insert into introduce(year,work_name_1,work_name_2,work_name_3,work_name_4,work_name_5)";
    $sql = $sql . " values({$year},'{$work_name_1}','{$work_name_2}','{$work_name_3}','{$work_name_4}','{$work_name_5}')";


    if($year && $work_name_1) {
        if($db->query($sql)) {
            /*$get_url = "menu_introduce.php?year=$year&work_name_1=$work_name_1&work_name_2=$work_name_1&work_name_3=$work_name_2&work_name_4=$work_name_3&work_name_5=$work_name_4";
            header('Location:'.$get_url);*/
            header('Location:admin_introduce.php');

        } else {

            echo "DB 저장에 실패하였습니다";
        }

    } else {

        if($year) {
            if($work_name_2 || $work_name_3 || $work_name_4 || $work_name_5) {

                echo "<script>
            alert(\"다시 입력해주세요.\");
             location.href ='admin_introduce_write.php?get_year=$year&get_name_1=$get_name_1&get_name_2=$get_name_2&get_name_3=$get_name_3&get_name_4=$get_name_4&get_name_5=$get_name_5';
          </script>";

            } else {

                echo "<script>
            alert(\"작업명을 입력해주세요.\");
            location.href ='admin_introduce_write.php?get_year=$year';
            </script>";
            }

        }
    }

} else {

    echo "<script>
         
            alert('이미 사용 된 년도이거나 잘 못 입력하셨습니다.');
             location.href ='admin_introduce_write.php?no_save=중복확인&get_name_1=$get_name_1&get_name_2=$get_name_2&get_name_3=$get_name_3&get_name_4=$get_name_4&get_name_5=$get_name_5';
          </script>";


    /*$url = "admin_introduce_write.php?no_save=중복확인&get_name_1=$get_name_1&get_name_2=$get_name_2&get_name_3=$get_name_3&get_name_4=$get_name_4&get_name_5=$get_name_5";
    header('Location:'.$url);*/

}
?>


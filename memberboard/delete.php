<?php
    $num   = $_GET["num"];
    $page   = $_GET["page"];

    $con = mysqli_connect("localhost", "ming", "Edming1@", "my_profile");
    $sql = "delete from memberboard where num=$num"; // 레코드 삭제 명령
    mysqli_query($con, $sql);     // SQL 명령 실행

    mysqli_close($con);           // DB 접속 해제

    // 목록보기 이동
    echo "<script>
	         location.href = '../menu_board.php?page=$page&menu=list';      
	     </script>";
?>
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "ming", "Edming1@", "my_profile");	// DB 접속
	$sql = "select * from memberboard where num=$num";	// 레코드 검색
	$result = mysqli_query($con, $sql);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result);			// 레코드 가져오기

	$id      = $row["id"];						// 아이디
	$name      = $row["name"];					// 이름
	$subject    = $row["subject"];				// 제목
	$regist_day   = $row["regist_day"];			// 작성일

	$content    = $row["content"];				// 내용
	$content = str_replace(" ", "&nbsp;", $content);		// 공백 변환
	$content = str_replace("\n", "<br>", $content);			// 줄바꿈 변환

	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copied  = $row["file_copied"];	
?>	
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>내용보기</title>
<link rel="stylesheet" href="style1.css">
</head>
<body> 
	<h2>회원 게시판 > 내용보기</h2>
	<ul class="board_view">
		<li class="row1">
			<span class="col1"><b>제목 :</b> <?=$subject?></span>	<!-- 제목 출력 -->
			<span class="col2"><?=$name?> | <?=$regist_day?></span>	<!-- 이름, 작성일 출력 -->
		</li>
		<li class="row2">
		<?php
			if($file_name) {
				$file_path = "./data/".$file_copied;
				$file_size = filesize($file_path);

				echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
			       	<a href='download.php?num=$num&file_copied=$file_copied&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
			}	
			echo $content;     // 글 내용 출력
		?>
		</li>		
	</ul>
	<ul class="buttons">
		<li><button onclick="location.href='menu_board.php?page=<?=$page?>&menu=list'">목록보기</button></li>
		<li><button onclick="location.href='../mingsite/menu_board.php?num=<?=$num?>&page=<?=$page?>&menu=modify'">수정하기</button></li>
		<li><button onclick="location.href='../mingsite/memberboard/delete.php?num=<?=$num?>&page=<?=$page?>'">삭제하기</button></li>
		<li><button onclick="location.href='menu_board.php?menu=form'">글쓰기</button></li>
	</ul>
</body>
</html>

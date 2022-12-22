<?
session_start();
include("header.php");

if($_SESSION['mb_id'] != 'admin') {
echo '<script>
		  alert("관리자만 접근할 수 있는 페이지입니다.");
		  history.back();
		  </script>';
}?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/admin.css">
    <title>관리자 페이지</title>

	<style type="text/css">
  a:link { color: #777; text-decoration: none;}
 a:visited { color: #777; text-decoration: none;}
 a:hover { color: #777; text-decoration: underline;}
</style>
  </head>
  <body>
		<div class="header text-center" style="width: 500px; margin: 0 auto;">
      <a href="./home.php"><img src="로고1.png"></a>
    </div>

    <div class="navigation">
      <?php include("nav.php"); ?>
    </div>

    <div class="cont">
      <div class="title"><h2>사용자 관리</h2></div>
      <div class="user_table">
      <table>
	  <th>번호</th>
	  <th>사용자 ID</th>
	  <th>닉네임</th>
	  <th>파일명</th>
	  <th>자격증명</th>
	  <th>발급처</th>
	  <th>발급일자</th>
	  <th>인증여부</th>
	  <th>가입일시</th>
	  <tbody>
	  <?
	  $conn = mysqli_connect("localhost", "hoseo12", "1234", "car_db");
	  $sql = "select member.no,
 	                 member.mb_id,
					 member.mb_nick,
					 member.verify,
					 member.time,
					 upload_file.file_id,
					 upload_file.fname_orig,
					 upload_file.cname,
					 upload_file.c_gov,
					 upload_file.ctime
		        from member
		   left join upload_file
		          on member.mb_id = upload_file.mid
				  WHERE mb_id not like '%admin%'
		    order by member.time asc;";



$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result) )
			{?>
		<tr>
		<td><? echo $row['no'] ?></td>

		<td><? echo $row['mb_id'] ?></td>
		<td><? echo $row['mb_nick'] ?></td>
		<td><a href="../Login/download.php?file_id=<?php echo $row2['file_id'] ?>" target="_blank"</a>
		<?php echo $row['fname_orig'] ?></td>
		<td><? echo $row['cname'] ?></td>
		<td><? echo $row['c_gov'] ?></td>
		<td><? echo $row['ctime'] ?></td>
		<td><?php
	  if($row['verify']==0){
	    echo "X";
	  }
	  else if($row['verify']==1){
	    echo "O";
	  }
	  ?></td>
		<td><? echo $row['time'] ?></td>
		<td><button><a href="mb_ack.php?del=<?echo $row['mb_id']?>">승인</button></td>
		</tr>

		<?}
			mysqli_free_result($result);
}
mysqli_close($conn);
?>
</tbody>
    </table>
    </div>
    </div>


  </body>
  <footer>
    <p>중고차 사기 방지를 위한 <b>블록체인 기반</b> 자동차 정비이력 시스템 </p>
      <p>호서대학교 컴퓨터공학부 캡스톤디자인 12조</p>
  </footer>
</html>

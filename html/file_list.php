<?
session_start();
include("header.php");
?>
<html lang="ko">
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<title>업로드 파일 목록</title>
<style>
  th, td {
    text-align: center;
    padding: 5px;
  }
</style>
</head>
<body>
  <div class="header text-center" style="width: 500px; margin: 0 auto;">
    <a href="./home.php"><img src="로고1.png"></a>
  </div>

  <div class="navigation">
    <?php include("nav.php"); ?>
  </div>
  <div class="home1">

    <div class="section">


<h3>업로드 파일 목록</h3>
<table border="1" style="margin: 0 auto; margin-bottom: 10px;">
  <colgroup>
			<col style="width: 5%;"/>
			<col style="width: 20%;"/>
			<col style="width: 15%;"/>
			<col style="width: 15%;"/>
			<col style="width: 10%;"/>
      <col style="width: 17%;"/>
      <col style="width: 5%;"/>
		</colgroup>

<thead>
  <th>번호</th>
  <th>파일명</th>
  <th>자격증명</th>
  <th>발급처</th>
  <th>발급일자</th>
  <th>업로드 시간</th>
  <th>인증 여부</th>
</thead>

<?php
$db_conn = mysqli_connect("localhost", "hoseo12", "1234", "car_db");
$id = $_SESSION['mb_id'];
$query = "SELECT upload_file.fno, upload_file.fname_orig, upload_file.cname, upload_file.c_gov, upload_file.ctime, upload_file.time, member.verify
          FROM upload_file LEFT JOIN member
          ON upload_file.mid = member.mb_id
          WHERE mid = '$id' ORDER BY fno";
$stmt = mysqli_prepare($db_conn, $query);
$exec = mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while($row = mysqli_fetch_assoc($result)) {
?>
<tbody>
  <td><?php echo $row['fno'] ?></td>
  <td><a href="download.php?file_id=<?php echo $row['file_id'] ?>" target="_blank"</a><?php echo $row['fname_orig'] ?></td>
  <td><?php echo $row['cname'] ?></td>
  <td><?php echo $row['c_gov'] ?></td>
  <td><?php echo $row['ctime'] ?></td>
  <td><?php echo $row['time'] ?></td>
  <td><?php
  if($row['verify']==0){
    echo "X";
  }
  else if($row['verify']==1){
    echo "O";
  }
  ?></td>
</tbody>
<?php
}

mysqli_free_result($result);
mysqli_stmt_close($stmt);
mysqli_close($db_conn);
?>
</table>

<a href='./mypage.php'>파일 업로드</a>

</div>

</div>
<footer>
<p>중고차 사기 방지를 위한 <b>블록체인 기반</b> 자동차 정비이력 시스템 </p>
  <p>호서대학교 컴퓨터공학부 캡스톤디자인 12조</p>
</footer>

</body>
</html>

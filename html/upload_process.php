<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<title>파일 업로드</title>
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
      <!--

	  create table upload_file(
        fno int not null auto_increment,
        file_id varchar(255) not null,
        fname_orig varchar(255) not null,
        fname_save varchar(255) not null,
        cname varchar(255) not null,
        c_gov varchar(255) not null,
        ctime varchar(255) not null,
        time timestamp not null default now(),
        mid varchar(40) not null,
        primary key(fno)
    );
      -->

      <?php
        $db_conn = mysqli_connect("localhost", "hoseo12", "1234", "car_db");


	$id=$_POST['userID'];
	$pw = mysqli_real_escape_string($db_conn, $_POST['userPW']);
	$sql = "SELECT password
          FROM member
		  WHERE mb_id = '$id'
        ";

$result = mysqli_query($db_conn, $sql);
if (mysqli_num_rows($result) > 0)
{
   while($row = mysqli_fetch_assoc($result))
   {
               $hash = $row['password'];


      if(password_verify($pw, $hash) == $pw)
	  {

        if(isset($_FILES['upfile']) && $_FILES['upfile']['name'] != "")
		{
          $file = $_FILES['upfile'];
          $upload_directory = 'data/';
          $ext_str = "hwp,xls,doc,xlsx,docx,pdf,jpg,gif,png,txt,ppt,pptx";
          $allowed_extensions = explode(',', $ext_str);

          $max_file_size = 5242880;
          $ext = substr($file['name'], strrpos($file['name'], '.') + 1);

          // 확장자 체크
          if(!in_array($ext, $allowed_extensions)) {
            echo "업로드할 수 없는 확장자 입니다.";
          }

          // 파일 크기 체크
          if($file['size'] >= $max_file_size) {
            echo "5MB 까지만 업로드 가능합니다.";
          }

          $path = md5(microtime()) . '.' . $ext;
          if(move_uploaded_file($file['tmp_name'], $upload_directory.$path))
		  {
            $query = "INSERT INTO upload_file(file_id, fname_orig, fname_save, cname, c_gov, ctime, time, mid) VALUES(?,?,?,?,?,?,now(),?)";
            $file_id = md5(uniqid(rand(), true));
            $fname_orig = $file['name'];
            $fname_save = $path;
			$cname = $_POST["cert_name"];
		    $c_gov = $_POST["cert_gov"];
			$ctime = $_POST["year"].'/'.$_POST["month"].'/'.$_POST["day"];
			$mid = $id;

            $stmt = mysqli_prepare($db_conn, $query);
            $bind = mysqli_stmt_bind_param($stmt, "sssssss", $file_id, $fname_orig, $fname_save, $cname, $c_gov, $ctime, $mid);
            $exec = mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);

            echo "<script>alert('파일이 업로드 되었습니다.');</script>";
            echo "<script>location.href='file_list.php'</script>";
          }
        }
		}
		else{
			echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
          echo "<script>location.href='mypage.php'</script>";
		}
}
}
		else {
          echo "<script>alert('파일이 업로드에 실패하였습니다.');</script>";
          echo "<script>location.href='mypage.php'</script>";
        }

        mysqli_close($db_conn);
        ?>
</div>
</div>

<footer>
  <p>중고차 사기 방지를 위한 <b>블록체인 기반</b> 자동차 정비이력 시스템 </p>
    <p>호서대학교 컴퓨터공학부 캡스톤디자인 12조</p>
</footer>
</body>
</html>

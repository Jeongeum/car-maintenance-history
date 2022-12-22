<?
/* DB 접속 정보 */
$host   = 'localhost';  // 데이터베이스 서버 주소
$myUser = 'hoseo12';        // 데이터베이스 사용자 ID
$myPw   = '1234';  // 데이터베이스 사용자 PASSWD
$myDb   = 'car_db';    // 데이터베이스 명

$mb_id = $_GET['del'];

echo "<script>alert('$mb_id 를 승인 하시겠습니까?');</script>";

/* DB 접속 */
$conn = mysqli_connect($host,$myUser,$myPw,$myDb);

if (!$conn || mysqli_error($conn))
{
    die ('could not connect');
}


$sql = "update member set verify = '1'
        where mb_id = '$mb_id';
	   ";

$result = mysqli_query($conn, $sql);


    if($result)
	  {
		 echo "<script>
		 alert('승인되었습니다.');
		 </script>

		 <meta http-equiv='refresh' content='0 url=./admin.php'>";

	  }
	  else {
		  echo '<script>
		  alert("승인이 불가합니다.");
		  history.back();
		  </script>';
	       }

if($result === false)
{
    echo mysqli_error($conn);
}
mysqli_close($conn);
?>

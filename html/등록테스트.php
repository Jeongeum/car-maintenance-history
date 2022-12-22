function setInfo() {
	<?php
        $db_conn = mysqli_connect("localhost", "hoseo12", "1234", "car_db");


	$id=$_SESSION['mb_id'];
	$pw = mysqli_real_escape_string($db_conn, document.getElementById('pass').value);
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
	  {?>
    smartContract.setInfo(
      $("#cCarNum").val(),
      $("#cVin").val(),
      $("#cCenter").val(),
      $("#cDetail").val(),
      $("#cDistance").val(),
      { from: $("#account").val(), gas: 3000000 },
      (err, result) => {
        if (!err) alert("트랜잭션이 성공적으로 전송되었습니다.\n" + result);
      }
    );
<?}
else{
			echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
          echo "<script>location.href='등록.php'</script>";
	}
}
}
		

        mysqli_close($db_conn);?>
		}
  else if(document.getElementById('pass').value==""){
    alert("비밀번호를 입력해주세요.");
  }
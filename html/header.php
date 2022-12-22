<?php
  include("db.php");

  if(isset($_SESSION['mb_id'])) {
    if($_SESSION['mb_id'] == 'admin') {?>

      <div style = "float:right; margin-right:10px; margin-top:10px; ">
        관리자님 안녕하세요.
        <button onclick="location.href='logout.php'">로그아웃</button><br/>
      </div>

      <?php
    }

    else {
      ?>
      <div style = "float:right; margin-right:10px; margin-top:10px; ">
        <span style="float:right"><?php echo $_SESSION['mb_id']; ?>님 안녕하세요.</span>
			  <br><button onclick="location.href='mypage.php'">마이페이지</button>
        <button onclick="location.href='logout.php'">로그아웃</button><br/>
      </div>
		  <?
    }
  }

  else {
    ?>
    <div style = "float:right; margin-right:10px; margin-top:10px; ">
      <button onclick="location.href='login_view.php'">로그인</button>
      <button onclick="location.href='register_view.php'">회원가입</button><br/>
    </div>
    <?php
  }
?>

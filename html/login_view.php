<!DOCTYPE html>
<?php
session_start();
include("header.php");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="css/style.css">


    <title></title>

    <style type="text/css">
      a { text-decoration:none }
    </style>

  </head>
  <body>

    <div class="header text-center" style="width: 500px; margin: 0 auto;">
      <a href="./home.php"><img src="로고1.png"></a>
    </div>

    <div class="navigation">
      <?php include("nav.php"); ?>
    </div>

    <!--form 시작-->
    <form action="login_server.php" method="post" class="form">
    <h2> 로그인 </h2>

    <?php if(isset($_GET['error'])) {  ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <?php if(isset($_GET['success'])) {  ?>
    <p class="success"><?php echo $_GET['success']; ?></p>
    <?php } ?>


    <label>아이디</label>
    <input type="text" placeholder="아이디" name="user_id">


    <label>비밀번호</label>
    <input type="password" placeholder="비밀번호" name="pass1">


    <button type="submit" name="login_btn"> 로그인</button>
    <a href="register_view.php"class="save">아직 회원이 아니신가요? (회원가입 페이지) </a>

    </form>


      <footer>
        <p>중고차 사기 방지를 위한 <b>블록체인 기반</b> 자동차 정비이력 시스템 </p>
          <p>호서대학교 컴퓨터공학부 캡스톤디자인 12조</p>
      </footer>
  </body>
</html>

<!DOCTYPE HTML>
<?php
session_start();
include("header.php");
 ?>
<HTML>
	<HEAD>

		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="./css/style.css">

		<style type="text/css">
			a { text-decoration:none }
		</style>

	</HEAD>

	<BODY>
    <div class="header text-center" style="width: 500px; margin: 0 auto;">
			<a href="./home.php"><img src="로고1.png"></a>
		</div>

    <div class="navigation">
      <?php include("nav.php"); ?>
    </div>

		<div class="소개">
			<h1>예시 및 소개</h1>
			<div calss="media">
			<img src="./images/설명1.png"><br>
			<video src="./videos/예시.mp4" controls>
		</div>
		</div>
		<footer>
			<p>중고차 사기 방지를 위한 <b>블록체인 기반</b> 자동차 정비이력 시스템 </p>
				<p>호서대학교 컴퓨터공학부 캡스톤디자인 12조</p>
		</footer>
	</BODY>
</HTML>

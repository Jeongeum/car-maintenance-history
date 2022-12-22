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

		<div class="등록_조회">
			<div class="예시">
				<h1>차량 정비등록 및 정비내역 조회</h1>
				<hr size="5px" color="#c1c1c1">
			</div>

			<div class="description">
				<div class="container">
				<h1 class="mt-3 mb-4">차량 정비이력 조회</h1>
				<input type="text" id="myInput" placeholder="차량번호 입력">
<button onclick="myFunction()">조회</button><br><br>
			<table style="width:100%" id="searchTable">
				<thead>
					<th>기본정보</th>
				</thead>
	   <tr>
	    <td>
	     <table style="width:100%" id="table2">
				 <th>차량번호</th>
				 <th>차대번호</th>
				 <th>제조사</th>
				 <th>차종</th>
				 <th>연식</th>
				 <th>배기량</th>
				 <th>사용연료</th>
	     </table>
			 <thead>
				 <th>정비내역</th>
			 </thead>
	    <tr>
	     <td>
	      <table style="width:100%" id="table1" align="center">
					<th>차량번호</th>
					<th>차대번호</th>
					<th>카센터</th>
					<th>정비내역</th>
					<th>주행거리</th>
					<th>날짜</th>
	      </table>
	     </td>
	    </tr>

	    </td>
	   </tr>
	  </table>
  </div>




  <script src="https://code.jquery.com/jquery-3.4.0.min.js"
    integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./js/lib/web3-light@0.20.6.js"></script>
  <script type="text/javascript" src="./js/lib/moment.js"></script>
  <script type="text/javascript" src="./js/lib/moment_locale.js"></script>
  <script type="text/javascript" src="./js/abi.js"></script>
  <script type="text/javascript" src="./js/carApp.js"></script>

				<hr size="5px" color="#c1c1c1">
				<div class="text" style="padding:10px; height: 100px;">
					<b>• 차량번호로 조회: </b> 조회할 차량의 번호를 입력하면 해당차량에 대한 정비내역이 출력됩니다. <br><br>
				</div>
			</div>
		</div>
			<footer>
				<p>중고차 사기 방지를 위한 <b>블록체인 기반</b> 자동차 정비이력 시스템 </p>
	    		<p>호서대학교 컴퓨터공학부 캡스톤디자인 12조</p>
		</footer>
	</BODY>
</HTML>

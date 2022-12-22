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
				<h1>차량 기본정보 등록 및 정비내역 등록</h1>
				<hr size="5px" color="#c1c1c1">
				<!--<video src="./videos/예시.mp4" controls>-->
			</div>
			<div class="description">
				<div class="container">
    <h1 class="mt-3 mb-4">차량내역 등록</h1>
    <div>
      계정: <input type="text" id="account" value="" placeholder="주소를 입력해주세요" />
			&nbsp;&nbsp;비밀번호 : <input type="password" id="pass"><br>
      <p></p>
    </div>
    <br>

		<h2>기본정보 등록</h2>
		<div class="base1">
		차량 번호 : <input type="text" id="cCarNum" placeholder="차량번호" />
		&nbsp; 차대 번호 : <input type="text" id="cVin" placeholder="차대번호" /><br><br>
		제조사 : <select id="cCo">
		<option value="현대">현대</option>
		<option value="기아">기아</option>
		<option value="제네시스">제네시스</option>
		<option value="르노삼성">르노삼성</option>
		<option value="쌍용">쌍용</option>
		<option value="폭스바겐">폭스바겐</option>
		<option value="벤츠">벤츠</option>
		<option value="bmw">BMW</option>
		<option value="아우디">아우디</option>
	</select>
	&nbsp;모델 명 : <input type="text" id="cCarname" placeholder="모델명" />
		&nbsp;연식 : <input type="text" id="cModelYear" placeholder="연식" /><br><br>
		배기량 : <input type="text" id="cExhaust" placeholder="배기량" />
		&nbsp;연료 : <input type="text" id="cFuel" placeholder="연료" /><br><br>


	</div><button onClick="setCar()">등록하기</button> <br><br>

<h2>정비내역 등록</h2>
	<div class="base2">
		차량 번호 : <input type="text" id="cCarNum" placeholder="차량번호" />
		&nbsp;차대 번호 : <input type="text" id="cVin" placeholder="차대번호" /><br><br>
		정비소 명 : <input type="text" id="cCenter" placeholder="카센터" />
		&nbsp;정비 내역 : <input type="text" id="cDetail" placeholder="정비내역" /><br><br>
		주행거리 : <input type="text" id="cDistance" placeholder="주행거리" /><br><br>
		</div>
		<button onClick="setInfo()">등록하기</button>
	<br><br>
</div>

<script src="https://code.jquery.com/jquery-3.4.0.min.js"
	integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/lib/web3-light@0.20.6.js"></script>
<script type="text/javascript" src="./js/lib/moment.js"></script>
<script type="text/javascript" src="./js/lib/moment_locale.js"></script>
<script type="text/javascript" src="./js/abi.js"></script>
<script type="text/javascript" src="./js/carApp.js"></script>
			<hr size="5px" color="#c1c1c1">
			<div class="text" style="overflow:scroll; padding:10px; height:800px">
				<h2>1. 차량 기본정보 입력</h2> <!--설명마다 이미지 넣기-->
				<p>
				정비내역 등록 전 차량의 기본정보인 차량번호, 차대번호, 제조사, 차종, 연식, 배기량, 연료를 등록합니다.
				</p><br>
				<h2>2. 차량 정비내역 입력</h2>
				<p>
				정비소에서는 차량의 정비 내역인 차량번호, 차대번호, 정비소 이름, 정비내역, 주행거리를 입력합니다.
				이때의 주행거리는 차주가 정기적으로 입력할 주행거리와 비교할 수 있고 조작 여부를 확인하는데에 도움을 줄 수 있습니다.
				</p><br>
				<h2>3. 등록하기 </h2>
				<p>등록하기 버튼을 누르면 현재 시간과 함께 "기본정보 / 정비내역" 이 등록이 됩니다.
				</p>
			</div>
		</div>

			<footer>
				<p>중고차 사기 방지를 위한 <b>블록체인 기반</b> 자동차 정비이력 시스템 </p>
	    		<p>호서대학교 컴퓨터공학부 캡스톤디자인 12조</p>
		</footer>
	</BODY>
</HTML>

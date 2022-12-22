<!DOCTYPE HTML>
<?php
  session_start();
  include("header.php");
?>
<html>
  <head>
    <meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content = "IE=edge">
		<meta name ="viewport" content ="width=device-width, initial-scale=1.0">
		<title>Home</title>
	</head>
  <link rel="stylesheet" type="text/css" href="./css/style.css">

  <style type="text/css">
    a { text-decoration:none }

		.section input[id*="slide"] {display:none;}

		.section .slidewrap {max-width:1200px;margin:0 auto;overflow:hidden;}
		.section .slidelist {white-space:nowrap;font-size:0;}
		.section .slidelist > li {display:inline-block;vertical-align:middle;width:100%;transition:all .5s; height: 500px;}
		.section .slidelist > li > a {display:block;position:relative;}
		.section .slidelist > li > a img {width:100%; height: 500px;}

		.section .slidelist label {position:absolute;z-index:1;top:50%;transform:translateY(-50%);padding:30px;cursor:pointer;}
		.section .slidelist .left {left:30px;background:url('./images/left.png') center center / 100% no-repeat;}
		.section .slidelist .right {right:30px;background:url('./images/right.png') center center / 100% no-repeat;}

		.section input[id="slide01"]:checked ~ .slidewrap .slidelist > li {transform:translateX(0%);}
		.section input[id="slide02"]:checked ~ .slidewrap .slidelist > li {transform:translateX(-100%);}
		.section input[id="slide03"]:checked ~ .slidewrap .slidelist > li {transform:translateX(-200%);}
		.section input[id="slide04"]:checked ~ .slidewrap .slidelist > li {transform:translateX(-300%);}
		.section input[id="slide05"]:checked ~ .slidewrap .slidelist > li {transform:translateX(-400%);}
		.section input[id="slide06"]:checked ~ .slidewrap .slidelist > li {transform:translateX(-500%);}
  </style>
	<body>
    <div class="header text-center" style="width: 500px; margin: 0 auto;">
			<a href="./home.php"><img src="로고.png"></a>
		</div>

    <div class="navigation">
      <?php include("nav.php"); ?>
    </div>

    <div class="home1">
			<div class="section">
				<input type="radio" name="slide" id="slide01" checked>
				<input type="radio" name="slide" id="slide02">
				<input type="radio" name="slide" id="slide03">
				<input type="radio" name="slide" id="slide04">
				<input type="radio" name="slide" id="slide05">
				<input type="radio" name="slide" id="slide06">

				<div class="slidewrap">
					<ul class="slidelist" style="padding-left: 0px;">
						<li>
							<a>
								<label for="slide06" class="left"></label>
								<img src="./images/이유1.png">
								<label for="slide02" class="right"></label>
							</a>
						</li>
						<li>
							<a>
								<label for="slide01" class="left"></label>
								<img src="./images/이유2.png">
								<label for="slide03" class="right"></label>
							</a>
						</li>
						<li>
							<a>
								<label for="slide02" class="left"></label>
								<img src="./images/이유3.png">
								<label for="slide04" class="right"></label>
							</a>
						</li>
						<li>
							<a>
								<label for="slide03" class="left"></label>
								<img src="./images/이유4.png">
								<label for="slide05" class="right"></label>
							</a>
						</li>
						<li>
							<a>
								<label for="slide04" class="left"></label>
								<img src="./images/이유5.png">
								<label for="slide06" class="right"></label>
							</a>
						</li>
						<li>
							<a>
								<label for="slide05" class="left"></label>
								<img src="./images/이유6.png">
								<label for="slide01" class="right"></label>
							</a>
						</li>
					</ul>
				</div>
					<p>최근 국내 중고차 시장은 다양한 온라인 플랫폼이 증가하고, 그에 맞게 변화를 겪고 있음.<br>2020년 국내 중고차 거래 규모는 387만대로 전년 대비 <b>7.2% 증가</b>,<br>지속적으로 중고차 거래가 늘어나는 만큼 문제점도 많음.<br>중고차 피해에서 가장 많은 비중을 차지하는 것은 <b>성능/상태 점검 내용이 실제와 다르다</b>는 것. 이는 전체 비율에서 무려 <b>80%</b>를 차지함.<br>판매자와 구매자 간의 <b>'정보 비대칭성'</b>으로 인해 소비자의 <b>신뢰도가 하락</b>함.<br><br>중고차 시장이 커짐에 따라 중고차 거래와 관련해 다양한 기술이 개발되고 있음.<br>우리는 본 프로젝트를 통해 <b>이더리움 기반의 스마트 컨트랙트를 이용한 블록체인 네트워크</b>를 이용하여 자동차 이력을 관리하는 시스템을 개발하고 <br>자동차 정비내역과 주행거리를 <b>위/변조 없이 확인</b>할 수 있게 하였음.<br>그리고 차주가 직접 주행거리를 입력하도록 하여 <b>주행거리 조작을 방지</b>하고 보상으로 이더를 지급하는 기능을 추가함.<br</p>
			</div>
		</div>
		<footer>
			<p>중고차 사기 방지를 위한 <b>블록체인 기반</b> 자동차 정비이력 시스템 </p>
    		<p>호서대학교 컴퓨터공학부 캡스톤디자인 12조</p>
		</footer>

	</body>
</html>

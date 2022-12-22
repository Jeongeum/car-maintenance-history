<?
session_start();
include("header.php");
?>
<HTML>
	<HEAD>
		<title>파일 업로드</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
    <script type="text/javascript">
			function formSubmit(f) {
				var extArray = new Array('hwp','xls','doc','xlsx','docx','pdf','jpg','gif','png','txt','ppt','pptx');
				var path = document.getElementById("upfile").value;
				if(path == "") {
					alert("파일을 선택해 주세요.");
					return false;
				}

				var pos = path.indexOf(".");
				if(pos < 0) {
					alert("확장자가 없는파일 입니다.");
					return false;
				}

				var ext = path.slice(path.indexOf(".") + 1).toLowerCase();
				var checkExt = false;
				for(var i = 0; i < extArray.length; i++) {
					if(ext == extArray[i]) {
						checkExt = true;
						break;
					}
				}

				if(checkExt == false) {
					alert("업로드 할 수 없는 파일 확장자 입니다.");
	    	return false;
			}

			return true;
		}

	</script>
	</HEAD>
	<BODY>
		<div class="header text-center" style="width: 500px; margin: 0 auto;">
			<a href="./home.php"><img src="로고1.png"></a>
		</div>

    <div class="navigation">
      <?php include("nav.php"); ?>
    </div>
		
		<div class="home1">

			<div class="section">


        <form name="uploadForm" id="uploadForm" method="post" action="upload_process.php" enctype="multipart/form-data" onsubmit="return formSubmit(this);">
          <div>
						<h1>마이페이지</h1>

							<div class="form-group">
								<label for="userID">아이디</label>
								<input type="text" name="userID" id="userID" value="<?echo $_SESSION['mb_id'];?>" readonly>
							</div>

							<div class="form-group">
								<label for="userPW">비밀번호</label>
								<input type="password" name="userPW" id="userPW" placeholder="비밀번호">
							</div>

							<br>

				<div class="form-inline">
					<label for="upfile">정비소 인증</label><br>
					<input type="file" name="upfile" id="upfile" />

					<br><br>


				자격증명 <input type="text" name="cert_name" value="" class="input_form">
                발급처 <input type="text" name="cert_gov" value="" class="input_form"><br>
				취득일자
				<select class="input_form" name="year">
				    <option value="2021" >2021</option>
					<option value="2020" >2020</option>
					<option value="2019" >2019</option>
					<option value="2018" >2018</option>
					<option value="2017" >2017</option>
					<option value="2016" >2016</option>
					<option value="2015" >2015</option>
					<option value="2014" >2014</option>
					<option value="2013" >2013</option>
					<option value="2012" >2012</option>
					<option value="2011" >2011</option>
					<option value="2010" >2010</option>
					<option value="2009" >2009</option>
					<option value="2008" >2008</option>
					<option value="2007" >2007</option>
					<option value="2006" >2006</option>
					<option value="2005" >2005</option>
					<option value="2004" >2004</option>
					<option value="2003" >2003</option>
					<option value="2002" >2002</option>
					<option value="2001" >2001</option>
					<option value="2000" >2000</option>
			    </select>년

				<select class="input_form" name="month">
				    <option value="1" >1</option>
					<option value="2" >2</option>
					<option value="3" >3</option>
					<option value="4" >4</option>
					<option value="5" >5</option>
					<option value="6" >6</option>
					<option value="7" >7</option>
					<option value="8" >8</option>
					<option value="9" >9</option>
					<option value="10" >10</option>
					<option value="11" >11</option>
					<option value="12" >12</option>
                </select>월

				<select class="input_form" name="day">
				    <option value="1" >1</option>
					<option value="2" >2</option>
					<option value="3" >3</option>
					<option value="4" >4</option>
					<option value="5" >5</option>
					<option value="6" >6</option>
					<option value="7" >7</option>
					<option value="8" >8</option>
					<option value="9" >9</option>
					<option value="10" >10</option>
					<option value="11" >11</option>
					<option value="12" >12</option>
					<option value="13" >13</option>
					<option value="14" >14</option>
					<option value="15" >15</option>
					<option value="16" >16</option>
					<option value="17" >17</option>
					<option value="18" >18</option>
					<option value="19" >19</option>
					<option value="20" >20</option>
					<option value="21" >21</option>
					<option value="22" >22</option>
					<option value="23" >23</option>
					<option value="24" >24</option>
					<option value="25" >25</option>
					<option value="26" >26</option>
					<option value="27" >27</option>
					<option value="28" >28</option>
					<option value="29" >29</option>
					<option value="30" >30</option>
					<option value="31" >31</option>
                </select>일
				&nbsp <input type="submit" value="제출하기" />


            	</div>
          </div>

        </form>
		<button onclick="location.href='file_list.php'">업로드 목록</button><br>
			</div>
		</div>
		<footer>
			<p>중고차 사기 방지를 위한 <b>블록체인 기반</b> 자동차 정비이력 시스템 </p>
    		<p>호서대학교 컴퓨터공학부 캡스톤디자인 12조</p>
		</footer>
	</BODY>
</HTML>

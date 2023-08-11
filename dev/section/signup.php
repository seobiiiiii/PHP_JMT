<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>회원가입 페이지</title>
<script>//회원가입 페이지 부분에 필요한 함수 
        function id_check() 
        {
			var user_id = document.register.id.value;
            window.open("section/id_check.php?id="+ user_id , "id_chk",
			"left=500, top=500, width=500, height=150, scrollbars=no, resizeable=no");
 		}
</script>
<link rel="stylesheet" type="text/css" href="resources/css/signup.css">
</head>
<body>
	<section>
        <!-- 회원가입 페이지 전체 영역 -->
		<div class="signup-wrap">
		
			<!-- 회원가입 제목 영역 -->
			<div class="signup-title-area">
    			<h2>회원가입</h2>
    			<hr>
			</div>
			<!-- 회원가입 텍스트 영역 -->
			<div class="signup-welcome-text-area">
				<h3>동양미래대학교 맛집 추천에 오신 것을 환영합니다!</h3>
				<p>회원가입 후 "동양미래대학교 맛집 추천"의 다양한 서비스를 만나보세요.</p>
			</div>
			<div class="signup-input-area">
			<form name="register" action="procces_mb.php?mode=register" method="post">
				<div class="signup-input-id-area">
					<input type="text" name="id" id="id" placeholder="아이디(학번)">
 					<input type="button" name="id_chk" id="id_chk" value="중복확인" onclick="id_check()">
				</div>
				<div class="signup-input-pw-area">
					<input type="password"  name="pw" id="pw" placeholder="비밀번호">
				</div>
				<div class="signup-input-pw-chk-area">
					<input type="password" name="pw_chk" id="pw_chk" placeholder="비밀번호 확인">
				</div>
			</div>
			<div class="signup-btn-area">
				<div class="signup-signup-btn-area">
    				
    					<input type="submit" value="회원가입" onclick="location.href='index.php?section=signup'">
    				</form>
    			</div>
				<div class="signup-cancel-btn-area">
					<input type="button" value="취소" onclick="location.href='index.php'">
				</div>
			</div>
		</div>
	</section>
</body>
</html>
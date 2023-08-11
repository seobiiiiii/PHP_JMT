<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>로그인 페이지</title>
<link rel="stylesheet" type="text/css" href="resources/css/login.css">
</head>
<body>
	<section>
		<div class="login-wrap">
			<div class="login-title-area">
    			<h2>로그인</h2>
    			<hr>
			</div>
			<div class="login-img-area">
				<img src="resources/img/login-img.png" alt="로그인_이미지" width="6%">
				<h3>동양미래대학교 맛집 추천에 오신 것을 환영합니다!</h3>
			</div>

			<form action="procces_mb.php?mode=login" method="post" class="loginForm">
			<div class="login-input-area">
				<div class="login-input-id-area">
					<input type="text" name="id" id="id" placeholder="아이디(학번)">
				</div>
				<div class="login-input-pw-area">
					<input type="password" name="pw" id="pw" placeholder="비밀번호">
				</div>
			</div>
			<div class="login-btn-area">
				<div class="login-login-btn-area">
    				
    					<input type="submit" value="로그인">
    				
    			</div>
    			<div class="login-signup-btn-area">
					<input type="button" value="회원가입" onclick="location.href='index.php?section=signup'">
				</div>
			</div>
			</form>
		</div>
	</section>
</body>
</html>
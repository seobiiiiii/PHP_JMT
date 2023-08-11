<!-- header 영역 -->
<?php
session_start(); 
?>
<div class="header-wrap">
	<!-- 동양미래대학교 로고 영역 -->
	<div class="header-area">
		<header>
			<img src="resources/img/dmu_logo.png" width="200px" height="40px"
				onclick="location.href='index.php'" alt="동양미래대학교_로고" />
		</header>
	</div>
	<!-- nav 영역 -->
	<div class="nav-area">
		<nav>
			<ul>
				<li><a href="index.php?section=store_list">맛집 리스트</a></li>
				<li><a href="index.php?section=store_review">맛집 리뷰</a></li>
				<li><a href="index.php?section=store_report">맛집 제보</a></li>
			</ul>
		</nav>
	</div>
	<!-- 로그인 / 회원가입 영역 -->
	<div class="login-signup-area">
	<?php if(isset($_SESSION['id']))
	{ 	
		echo 
		'<ul>
		<li>'.$_SESSION['id'].'님 </li>
		<li><a href="procces_mb.php?mode=logout">로그아웃</a></li>
		</ul>';
	}
	else 
	{
		echo 
		'<ul>
			<li><a href="index.php?section=login">로그인</a></li>
			<li><a href="index.php?section=signup">회원가입</a></li>
		</ul>';
	}
	?>  	
	</div>
</div>
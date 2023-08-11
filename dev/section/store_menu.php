<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>맛집 메뉴 페이지</title>
<link rel="stylesheet" type="text/css" href="resources/css/store_menu.css">
</head>
<body>
	<section>
		<!-- 맛집 메뉴 감싸는 전체 영역 -->
		<div class="store_menu-wrap">
			<!-- 맛집 리뷰 제목 영역 -->
			<div class="store_menu-title-area">
    			<h2>맛집 메뉴</h2>
    			<hr>
			</div>
			<!-- 맛집 리뷰 테이블 영역 -->
			<div class="store_menu-table-area">
				<table class="store_menu-table">
					<tr>
						<th>음식 분야</th>
						<th>맛집명</th>
						<th>평점</th>
					</tr>				
					<!-- DB 받아올 때에는 <tr><td>DB쿼리</td></tr> (이거 한 문장만 있어도 됨. 즉, 27 ~ 32) -->
					<tr onclick="location.href='index.php?section=store_detail'">
						<td>한식</td>
						<td class="store-name-contents">맛집1</td>
						<td>4.7</td>
					</tr>
					<tr onclick="location.href='index.php?section=store_detail'">
						<td>한식</td>
						<td class="store-name-contents">맛집2</td>
						<td>4.7</td>
					</tr>
					<tr onclick="location.href='index.php?section=store_detail'">
						<td>한식</td>
						<td class="store-name-contents">맛집3</td>
						<td>4.7</td>
					</tr>
					<tr onclick="location.href='index.php?section=store_detail'">
						<td>한식</td>
						<td class="store-name-contents">맛집4</td>
						<td>4.7</td>
					</tr>
					<tr onclick="location.href='index.php?section=store_detail'">
						<td>한식</td>
						<td class="store-name-contents">맛집5</td>
						<td>4.7</td>
					</tr>
				</table>
			</div>
			<div class="store-quick-menu-wrap">
    			<div class="store-quick-menu-area">
    				<ul>한식</ul>
    				<ul>일식</ul>
    				<ul>중식</ul>
    				<ul>양식</ul>
    				<ul>술집</ul>
    				<ul>카페</ul>
    				<ul>기타</ul>
    			</div>
			</div>
		</div>
	</section>
</body>
</html>
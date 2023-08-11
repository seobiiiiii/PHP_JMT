<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>맛집 리스트 페이지</title>
<link rel="stylesheet" type="text/css" href="resources/css/store_list.css">
</head>
<body>
	<section>
		<!-- 맛집 리스트 전체 영역 -->
		<div class="store_list-wrap">
		
			<!-- 맛집 리스트 제목 영역 -->
			<div class="store_list-title-area">
    			<h2>맛집 리스트</h2>
    			<hr>
			</div>
			
			<!-- 맛집 리스트 테이블 영역 -->
			<div class="store_list-table-area">
				<table>
					<tr>
						<th><img src="resources/img/dmu_circle_logo.jpg" alt="동양미래대학교_로고" id="dmu_logo"></th>
						<td onclick="location.href='index.php?section=store_menu'">한식<img src="resources/img/kor_food.png" alt="한식_이미지"  id="food"></td>
						<td onclick="location.href='index.php?section=store_menu'">일식<img src="resources/img/jpn_food.png" alt="일식_이미지" id="food"></td>
						<td onclick="location.href='index.php?section=store_menu'">중식<img src="resources/img/chn_food.png" alt="중식_이미지" id="food"></td>
					</tr>
					<tr>
						<td onclick="location.href='index.php?section=store_menu'">양식<img src="resources/img/usa_food.png" alt="패스트푸드_이미지" id="food"></td>
						<td onclick="location.href='index.php?section=store_menu'">술집<img src="resources/img/alcohol.png" alt="술집_이미지" id="food"></td>
						<td onclick="location.href='index.php?section=store_menu'">카페<img src="resources/img/coffee.png" alt="커피/음료_이미지" id="food"></td>
						<td onclick="location.href='index.php?section=store_menu'">기타<img src="resources/img/more_food.png" alt="기타_이미지" id="food"></td>
					</tr>
				</table>
			</div>
		</div>
	</section>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>학식 페이지</title>
<link rel="stylesheet" type="text/css" href="resources/css/store_review.css">
</head>
<body>
	<section>
		<!-- 맛집 리뷰 감싸는 전체 영역 -->
		<div class="store_review-wrap">
			<!-- 맛집 리뷰 제목 영역 -->
			<div class="store_review-title-area">
    			<h2>맛집 리뷰</h2>
    			<hr>
			</div>
			<!-- 맛집 리뷰 테이블 영역 -->
			<div class="store_review-table-area">
				<table class="store_review-table">
					<tr>
						<th>번호</th>
						<th>맛집명</th>
						<th>리뷰 내용</th>
						<th>평점</th>
					</tr>
					<!-- DB 받아올 때에는 <tr><td>DB쿼리</td></tr> (이거 한 문장만 있어도 됨. 즉, 27 ~ 32) -->
					<tr onclick="location.href='index.php?section=store_detail'">
						<td>5</td>
						<td>맛집5</td>
						<td class="review-contents">맛있고 저렴해요!</td>
						<td>4.7</td>
					</tr>
					<tr onclick="location.href='index.php?section=store_detail'">
						<td>4</td>
						<td>맛집4</td>
						<td class="review-contents">맛있고 저렴해요!</td>
						<td>4.7</td>
					</tr>
					<tr onclick="location.href='index.php?section=store_detail'">
						<td>3</td>
						<td>맛집3</td>
						<td class="review-contents">맛있고 저렴해요!</td>
						<td>4.7</td>
					</tr>	
					<tr onclick="location.href='index.php?section=store_detail'">
						<td>2</td>
						<td>맛집2</td>
						<td class="review-contents">맛있고 저렴해요!</td>
						<td>4.7</td>
					</tr>	
					<tr onclick="location.href='index.php?section=store_detail'"> 
						<td>1</td>
						<td>맛집1</td>
						<td class="review-contents">맛있고 저렴해요!</td>
						<td>4.7</td>
					</tr>	
				</table>
			</div>
		</div>
	</section>
</body>
</html>
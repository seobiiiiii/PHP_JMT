<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>메인 페이지</title>
<link rel="stylesheet" type="text/css" href="resources/css/main.css">
</head>
<body>
	<section>
	   <!-- 전체 영역 -->
    	<div class="index-section-wrap">
    	
            <!-- 맛집 랭킹 영역 -->
    		<div class="index-section-left-area">
                <!-- 맛집 랭킹(제목) 영역 -->
    			<div class="index-section-left-title-area">
    				<h3>맛집랭킹</h3>
    			</div>
    			<!-- 맛집 랭킹(콘텐츠) 영역 -->
    			<div class="index-section-left-contents-area">
    			 <!-- DB 연결 시 <ul><li> 태그로 사용해 정보 불러오기 -->
    				<h4>리뷰 순위</h4>
					<?php			
					require_once('db/db.php');
					$rk = 1;
                    for ($i = 0; $i < 5;$i++)
					{
					$sql = $db -> prepare("SELECT * FROM restaurant ORDER BY rt_avg DESC,rt_rvCount DESC LIMIT $i,1");
       				$sql -> execute();
					$result = $sql -> fetch(PDO::FETCH_ASSOC);
					echo "$rk 등 맛집 : ".$result['rt_name']."<br><br>";
	                $rk++;
					}                   
					?>
    				<hr/>
    				<h4 >별점 순위</h4>
    				<?php			
					require_once('db/db.php');
					$rk = 1;
                    for ($i = 0; $i < 5;$i++)
					{
					$sql = $db -> prepare("SELECT * FROM restaurant ORDER BY rt_rvCount DESC,rt_avg DESC LIMIT $i,1");
       				$sql -> execute();
					$result = $sql -> fetch(PDO::FETCH_ASSOC);
					echo "$rk 등 맛집 : ".$result['rt_name']."<br><br>";
	                $rk++;
					}                   
					?>
    			</div>		
    		</div>
    		
    		<!-- 점심 메뉴 추천 & 학식 영역 -->
    		<div class="index-section-center-area">
                <!-- 점심 메뉴 추천 영역 -->
    			<div class="index-section-center-up-area">
                    <!-- 점심 메뉴 추천(제목) 영역 -->
        			<div class="index-section-center-up-title-area">
        				<h3>점심 메뉴 추천</h3>
        			</div>
        			<!-- 점심 메뉴 추천(콘텐츠) 영역 -->
					<form action="procces_mb.php?mode=recommend" method="post">
        			<div class="index-section-center-up-contents-area">
        				<input type="button" value="메뉴 추천" onclick="location.href='procces_mb.php?mode=recommend'">
        				<p>점심 메뉴 추천 영역입니다.</p>
        				<p>점심 메뉴 추천 영역입니다.</p>
       				</div>
					</form>
        		</div>
    			<!-- 학식 영역 -->
    			<div class="index-section-center-down-area">
                    <!-- 학식(제목) 영역 -->
        			<div class="index-section-center-down-title-area">
        				<h3 onclick="location.href='index.php?section=school_lunch'">학식</h3>
        			</div>
        			<!-- 학식(콘텐츠) 영역 -->
        			<div class="index-section-center-down-contents-area" onclick="location.href='index.php?section=school_lunch'">
            			<p>동양미래대학교 학식 영역입니다.</p>
            			<p>동양미래대학교 학식 영역입니다.</p>
        			</div>
        		</div>
    		</div>
    		
    		<!-- 리뷰 영역 -->
    		<div class="index-section-right-area">
                <!-- 리뷰 제목 영역 -->
    			<div class="index-section-right-title-area">
    					<h3 onclick="location.href='index.php?section=store_review'">리뷰</h3>
    				</div>
    				<!-- 리뷰 콘텐츠 영역 -->
    				<div class="index-section-right-contents-area">
    					<!-- DB 연결 시 <ul><li> 태그로 사용해 정보 불러오기 -->
    					<p onclick="location.href='index.php?section=store_detail'">1번 리뷰 내용 영역입니다.</p>
    					<p onclick="location.href='index.php?section=store_detail'">2번 리뷰 내용 영역입니다.</p>
    					<p onclick="location.href='index.php?section=store_detail'">3번 리뷰 내용 영역입니다.</p>
    					<p onclick="location.href='index.php?section=store_detail'">4번 리뷰 내용 영역입니다.</p>
    					<p onclick="location.href='index.php?section=store_detail'">5번 리뷰 내용 영역입니다.</p>
    					<p onclick="location.href='index.php?section=store_detail'">6번 리뷰 내용 영역입니다.</p>
    					<p onclick="location.href='index.php?section=store_detail'">7번 리뷰 내용 영역입니다.</p>
    					<p onclick="location.href='index.php?section=store_detail'">8번 리뷰 내용 영역입니다.</p>
    					<p onclick="location.href='index.php?section=store_detail'">9번 리뷰 내용 영역입니다.</p>
    					<p onclick="location.href='index.php?section=store_detail'">10번 리뷰 내용 영역입니다.</p>
    				</div>
    			</div>
    		</div>
	</section>
</body>
</html>
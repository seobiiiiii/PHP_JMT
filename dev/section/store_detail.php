<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<script>
    var mapContainer = document.getElementById('map'), // 지도를 표시할 div
        mapOption = {
            center: new daum.maps.LatLng(37.537187, 127.005476), // 지도의 중심좌표
            level: 5 // 지도의 확대 레벨
        };

    //지도를 미리 생성
    var map = new daum.maps.Map(mapContainer, mapOption);
    //주소-좌표 변환 객체를 생성
    var geocoder = new daum.maps.services.Geocoder();
    //마커를 미리 생성
    var marker = new daum.maps.Marker({
        position: new daum.maps.LatLng(37.537187, 127.005476),
        map: map
    });


    function sample5_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                var addr = data.address; // 최종 주소 변수

                // 주소 정보를 해당 필드에 넣는다.
                document.getElementById("sample5_address").value = addr;
                // 주소로 상세 정보를 검색
                geocoder.addressSearch(data.address, function(results, status) {
                    // 정상적으로 검색이 완료됐으면
                    if (status === daum.maps.services.Status.OK) {

                        var result = results[0]; //첫번째 결과의 값을 활용

                        // 해당 주소에 대한 좌표를 받아서
                        var coords = new daum.maps.LatLng(result.y, result.x);
                        document.getElementById("map_x").value = result.y;
                        document.getElementById("map_y").value = result.x;
                        // 지도를 보여준다.
                        mapContainer.style.display = "block";
                        map.relayout();
                        // 지도 중심을 변경한다.
                        map.setCenter(coords);
                        // 마커를 결과값으로 받은 위치로 옮긴다.
                        marker.setPosition(coords)
                    }
                });
            }
        }).open();
    }
</script>
<title>맛집 상세 페이지</title>
<link rel="stylesheet" type="text/css" href="resources/css/store_detail.css">
</head>
<body>
	<section>
		<!-- 맛집 상세 페이지 전체 영역 -->
		<div class="store-detail-review-wrap">
			
			<!-- 맛집 상세 제목 영역 -->
    		<div class="store-review-title-area">
    			<h2>맛집 상세</h2>
    			<hr>
    		</div>
    		
    		<!-- 맛집 상세 전체 영역 -->
    		<div class="store-detail-area">
    		
    			<!-- 왼쪽 여백 영역 -->
    			<div class="left-blank-area">
    
    			</div>
    			
    			<!-- 맛집명 & 메뉴판 영역 -->
    			<div class="store-detail-name-left-area">
    				<!-- 맛집명 영역 -->
    				<div class="store-detail-name-left-up-area">
    					<!-- 맛집명 제목 영역 -->
    					<div class="store-detail-name-left-up-title-area">
    						<h3>맛집명</h3>
    					</div>
    					<!-- 맛집명 콘텐츠 영역 -->
    					<div class="store-detail-name-left-up-contents-area">
    						<p>동양미래대학교</p>
    					</div>
    				</div>
    				<!-- 메뉴판 영역 -->
    				<div class="store-detail-menu-left-down-area">
    					<!-- 메뉴판 제목 영역 -->
    					<div class="store-detail-menu-left-down-title-area">
    						<h3>메뉴판</h3>
    					</div>
    					<!-- 메뉴판 이미지 영역 -->
    					<div class="store-detail-menu-left-down-contents-area">
    						<p>메뉴판 이미지 영역입니다.</p>
    					</div>
    				</div>
    			</div>	
    			
    			<!-- 대표메뉴 제목 & 이미지 영역 -->
    			<div class="store-detail-ceo-menu-center-area">
    				<!-- 대표메뉴 영역 -->
    				<div class="store-detail-ceo-menu-center-up-area">
    					<!-- 대표메뉴 제목 영역 -->
    					<div class="store-detail-ceo-menu-center-up-title-area">
    						<h3>대표메뉴</h3>
    					</div>
    					<!-- 대표메뉴 이미지 영역 -->
    					<div class="store-detail-ceo-menu-center-up-img-area">
    						<p>대표메뉴 이미지 영역</p>
    					</div>
    				</div>
    				<!-- 대표메뉴 설명 영역 -->
    				<div class="store-detail-ceo-menu-center-down-area">
    					<!-- 대표메뉴 제목 영역 -->
    					<div class="store-detail-ceo-menu-center-down-title-area">
    						<h3>대표메뉴</h3>
    					</div>
    					<!-- 대표메뉴 콘텐츠 영역 -->
    					<div class="store-detail-ceo-menu-center-down-contents-area">
    						<p>대표메뉴 설명 영역</p>
    					</div>
    				</div>
    			</div>
    			
    			<!-- 위치 영역 -->
    			<div class="store-map-right-area">
    				<!-- 위치 제목 영역 -->
    				<div class="store-map-right-title-area">
    					<h3>위치</h3>
    				</div>
    				<!-- 위치 콘텐츠 영역 -->
    				<div class="store-map-right-contents-area">
    				    <!-- * 카카오맵 - 지도퍼가기 -->
    					<input type="hidden" id="map_x" value=""/>
						<input type="hidden" id="map_y" value=""/>
						<input type="text" id="sample5_address" placeholder="주소">
						<input type="button" onclick="sample5_execDaumPostcode()" value="주소 검색"><br>
						<div id="map" style="width:500px;height:400px;margin-top:10px;display:none">
						</div>

						<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
						<script src="//dapi.kakao.com/v2/maps/sdk.js?appkey=957a6814a0d0515de14996fe3d4c2fce&libraries=services"></script>
    					
    				</div>
    			</div>

    			<!-- 오른쪽 여백 영역 -->
    			<div class="right-blank-area">
    			
    			</div>
    		</div>
    		
    		<!-- 맛집리뷰 영역 -->
    		<div class="store-review-title-area">
    			<h2>맛집 리뷰</h2>
    			<hr>
    		</div>
    		<div class="store-review-table-area">
    			<table>
    				<tr>
    					<td id="table-padding-css">
    						<div class="store-review-table-review-rating-area">
    							<p><h3>2건</h3>의 평가</p>
    						</div>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<div class="store-review-table-star-rating-area">
    							<div class="store-review-table-star-rating-number-area">
    								<h3>75점</h3>
    							</div>
    							<div class="store-review-table-star-rating-star-area">
        							<form name="star-rating" id="star-rating" method="post" action="./save">
            							<fieldset>
            								<input type="radio" name="star-score" value="5" id="star1"><label for="star1">⭐</label> 
            								<input type="radio" name="star-score" value="4" id="star2"><label for="star2">⭐</label>
            								<input type="radio" name="star-score" value="3" id="star3"><label for="star3">⭐</label> 
            								<input type="radio" name="star-score" value="2" id="star4"><label for="star4">⭐</label> 
            								<input type="radio" name="star-score" value="1" id="star5"><label for="star5">⭐</label>
            							</fieldset>
            						</form>
            					</div>
    						</div>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<div class="store-review-table-score-review-title-area">
    							평점 및 리뷰
    						</div>
    						<div class="store-review-table-score-review-star-rating-area">
    							<form name="star-rating" id="star-rating" method="post" action="./save">
        							<fieldset>
        								<input type="radio" name="star-score" value="5" id="star1"><label for="star1">⭐</label> 
        								<input type="radio" name="star-score" value="4" id="star2"><label for="star2">⭐</label> 
        								<input type="radio" name="star-score" value="3" id="star3"><label for="star3">⭐</label>
        								<input type="radio" name="star-score" value="2" id="star4"><label for="star4">⭐</label>
        								<input type="radio" name="star-score" value="1" id="star5"><label for="star5">⭐</label>
        							</fieldset>
    							</form>
    						</div>
    						<div class="store-review-textarea-area">
    							<form method="post" href="#">
    								<textarea placeholder="리뷰 내용을 입력해 주세요.">
    								</textarea>
    							</form>
    						</div>
    						<div class="store-review-textarea-btn-area">
    							<input type="submit" value="리뷰 등록" onclick="alert('\[ 동양미래대학교 맛집 추천 \]\n리뷰가 등록되었습니다!');"/>
    						</div>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<hr>
    						<p>리뷰 내용입니다.</p>
    						<hr>
    					</td>
    				</tr>
    			</table>
    		</div>
    	</div>
	</section>
</body>
</html>
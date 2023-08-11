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
<title>맛집 제보 페이지</title>
<link rel="stylesheet" type="text/css"href="resources/css/store_report.css">
</head>
<body>
	<section>
		<!-- 맛집 제보 페이지 전체 영역 -->
		<div class="store_report-wrap">
			<div class="store_report-title-area">
				<h2>맛집 제보</h2>
				<hr>
			</div>
			<!-- 맛집이름, 음식분야, 개인적인 평점 및 리뷰 감싸는 영역 -->
			<div class="store_report-input-area">
				<!-- 맛집이름, 음식분야, 개인적인 평점 및 리뷰 영역 -->
				<div class="store_report-input-left-area">
					<!-- 맛집 이름 전체 영역 -->
					<div class="div-padding">
						<div class="store_report-input-left-name-wrap-area">
						<!-- 맛집 이름 영역 -->
    						<div class="store_report-input-left-name-title-area">
    							<h3>맛집 이름</h3>
    						</div>
    						<!-- 맛집명 input 영역 -->
    						<div class="store_report-input-left-name-input-area">
    							<input type="text" name="store_report-input-left-name-input-area" id="store_report-input-left-name-input-area" placeholder="맛집명을 입력해 주세요.">
    						</div>
						</div>
						<!-- 음식 분야 전체 영역 -->
						<div class="store_report-input-left-field-wrap-area">
							<!-- 음식 분야 제목 영역 -->
							<div class="store_report-input-left-field-title-area">
								<h3>음식 분야</h3>
							</div>
							<!-- 음식 분야 SelectBox 영역 -->
							<div class="store_report-input-left-field-select-wrap-area">
								<div class="store_report-input-left-field-select-area">
									<select name="food-field">
										<option value="none">음식 분야</option>
										<option value="kor_food">한식</option>
										<option value="jpn_food">일식</option>
										<option value="chn_food">중식</option>
										<option value="usa_food">양식</option>
										<option value="alcohol">술집</option>
										<option value="drinking">카페</option>
										<option value="etc">기타</option>
									</select>
								</div>
								<!-- 음식 분야 기타 input 영역 -->
								<div class="store_report-input-left-field-input-area">
									<input type="text" name="store_report-etc" id="store_report-etc" placeholder="음식 분야가 '기타'일 경우, 이곳에 기타 내용을 작성해 주세요.">
								</div>
							</div>
						</div>
						<!-- 개인적인 평점 및 리뷰 전체 영역 -->
						<div class="store_report-input-left-review-wrap-area">
							<!-- 개인적인 평점 및 리뷰 제목 영역 -->
							<div class="store_report-input-left-review-title-area">
								<h3>개인적인 평점 및 리뷰</h3>
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
							<div class="store_report-input-left-review-textarea-area">
								<textarea placeholder="리뷰 내용을 입력해 주세요.">
    							</textarea>
							</div>
						</div>
					</div>
				</div>
				
				<!-- 지도 영역 -->
				<div class="store_report-input-right-area">
					<div class="store_report-input-right-map-area">
						<div class="store-map-right-contents-area">
    				    <!-- * 카카오맵 - 지도퍼가기 -->
    					<input type="hidden" id="map_x" value=""/>
						<input type="hidden" id="map_y" value=""/>
						<input type="text" id="sample5_address" placeholder="주소">
						<input type="button" onclick="sample5_execDaumPostcode()" value="주소 검색"><br>
						<div id="map" style="width:500px;height:400px;margin-top:10px;display:none">
						</div>

						<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
						<script src="//dapi.kakao.com/v2/maps/sdk.js?appkey=957a6814a0d0515de14996fe3d4c2fce"></script>
    					
    					</div>
    				</div>
    					
    			</div>
			</div>
				</div>
			</div>
			<div class="menu-food-img-wrap">
				<div class="menu-wrap-area">
					<div class="menu-img-file-title-area">
						<h3>메뉴판 이미지 업로드</h3>
					</div>
					<div class="menu-img-file-area">
						<input type="file" name="menu-img-file" id="menu-img-file">
					</div>
				</div>
				<div class="food-wrap-area">
    				<div class="menu-img-file-title-area">
    					<h3>대표메뉴 이미지 업로드</h3>
    				</div>
    				<div class="food-img-file-area">
    					<input type="file" name="food-img-file" id="food-img-file">
    				</div>
    			</div>
			</div>
			<div class="store-report-btn-area">
				<input type="submit" value="맛집 제보" name="store-report-submit" id="store-report-submit">
			</div>
		</div>
	</section>
</body>
</html>
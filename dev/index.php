

<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>동양미래대학교 맛집 추천</title>
<link rel="stylesheet" type="text/css" href="resources/css/common.css">
<link rel="shortcut icon" type="image/x-icon" href="resources/img/dmu_shortcut.ico">
</head>
<body>
	<!-- 공통 부분(헤더) -->
    	<?php include 'header.php';?>
		
		<!-- 페이지 링크 연결 -->
		<?php
            if (isset($_GET['section'])) {
                $section = $_GET["section"];
                    switch ($section) {
                    case "main":
                        include 'section/main.php';
                        break;
                    case "store_list":
                        include 'section/store_list.php';
                        break;
                    case "store_review":
                        include 'section/store_review.php';
                        break;
                    case "store_report":
                        include 'section/store_report.php';
                        break;
                    case "store_menu":
                        include 'section/store_menu.php';
                        break;
                    case "login":
                        include 'section/login.php';
                        break;
                    case "signup":
                        include 'section/signup.php';
                        break;
                    case "school_lunch":
                        include 'section/school_lunch.php';
                        break;
                    case "store_detail":
                        include 'section/store_detail.php';
                        break;
                    default:
                        break;
                    }   
        }
    ?>  	
		
    	<!-- section 영역 -->
		<?php
            if (! isset($_GET['section'])) {
                include 'section/main.php';
            }
        ?>
		
		<!-- 공통 부분(푸터) -->
    	<?php include 'common/footer.php';?>	
    </body>
</html>
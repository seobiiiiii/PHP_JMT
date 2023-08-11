<?php
session_start(); 
require_once('db/db.php'); 
//db 파일 가지고 오기 위해 사용중 경로는 파일 기준으로 해서 사용하면됨

switch ($_GET['mode'])
    {/*mode 값을 url로 받으려한거임 회원가입 페이지에서 
        폼 안에 action="procces_mb.php?mode=register" 써주면됨
        */
    case 'register': //회원가입 구현
        $id = $_POST['id'];
        $pw = $_POST['pw'];
        $pw_chk = $_POST['pw_chk'];

        //비밀번호 6자리, 영문+숫자 조합확인 
        $num_pw = preg_match('/[0-9]/u', $pw);
        $eng_pw = preg_match('/[a-z]/u', $pw);
        if(!$id&& !$pw)
        {
            errMsg("아이디와 비밀번호를 입력해주세요.");
        }elseif(!$id)
        {
            errMsg('아이디를 입력해주세요.');
        }elseif (!$pw ) 
        {
            errMsg("비밀번호를 입력해주세요.");
        }
        if(strlen($pw) < 6)
        {
            errMsg("비밀번호 6자리 이상으로 설정해야 합니다.");
        }
 
        if(preg_match("/\s/u", $pw) == true)
        {
            errMsg("비밀번호는 공백없이 입력해주세요.");     
        }
 
        if( $num_pw == 0 || $eng_pw == 0)
        {
            errMsg("영문과 숫자를 혼합하여 입력해주세요.");  
        }

        //회원가입시 입력한 비밀번호 일치여부
        if($pw != $pw_chk)
        {
            errMsg("비밀번호가 일치하지 않습니다.");
        }
        // 아이디에 문자가 들어가거나 8자리가 아닌경우
        $num_id = preg_match('/[0-9]/u', $id);
        $eng_id = preg_match('/[a-z]/u', $id);

        if(strlen($id) < 8 || $eng_id > 0)
        {
            errMsg("아이디는 학번을 입력해야합니다.");  
        }

        /* id / pw / pw_chk 잘 들어왔는지 확인용
        echo $id.','.$pw.','.$pw_chk;
        */           
        $sql = $db -> prepare('INSERT INTO member(id, pw) 
        VALUE(:id, :pw)');
        // prepare 실행할 명령문을 준비하고 명령문 객체 반환하기 위해 사용

        $sql -> bindParam(':id',$id);
        $sql -> bindParam(':pw',$pw);
        //bindParam pdo 가 가진 파라메터에 변수값 저장

        $sql -> execute(); 
        //준비된 명령문을 실행하기 위해 사용
        
        header('location:index.php'); //가입 완료시 메인페이지로 가게함 
        break;


    case 'login': //로그인 구현
        $id = $_POST['id'];
        $pw = $_POST['pw'];

        $sql = $db -> prepare("SELECT * FROM member WHERE id=:id");
        $sql -> bindParam(":id",$id);
        $sql -> execute();

        $row = $sql -> fetch();
        //fetch()실행된 명령문의 결과를 가지고 옴

        if(!$id&& !$pw)
        {
            errMsg("아이디와 비밀번호를 입력해주세요.");
        }elseif(!$id)
        {
            errMsg('아이디를 입력해주세요.');
        }elseif (!$pw ) 
        {
            errMsg("비밀번호를 입력해주세요.");
        } elseif(!isset($row['id']))
        {
            errMsg('존재하지 않는 아이디입니다.');
        } elseif($pw != $row['pw'])
        {
            errMsg('비밀번호를 다시 입력해주세요.');
        }
        $_SESSION['id'] = $row['id'];    

        header('location:index.php');
        break;


    case 'logout': //로그아웃
            session_unset();
            header('location:index.php');
        break;

    case 'recommend':  //점메추
        
        $sql = $db -> prepare("SELECT * FROM restaurant ORDER BY RAND() limit 1");
        $sql -> execute();
        $result = $sql -> fetch();
        

        echo "
        <script>
        window.alert('맛집이름 : $result[1] / 종류 : $result[2] / 대표메뉴 $result[3]');
        history.back(1);
        </script>";
        break;

    
    }
?>


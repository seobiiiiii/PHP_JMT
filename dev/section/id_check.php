<?php /* 잘되는지 확인하려고 회원가입 부분 대충 만들어서 테스트 하려했는데 
폼에서 입력한것이 db 로 넘어갈때 오류 떠서 확인 못함  회원가입 페이지
나오면 연결해서 테스트 해보면서 수정함 2022/11/20*/ 
    require_once('../db/db.php'); //db 파일 가지고 오기 위해 사용
   
    $id = $_GET["id"]; //form 에서 받을 아이디

    if(!$id)
    {
        echo  "<br><p><center>아이디를 입력해주세요.</center></p><br>
        <center><input type=button value=창닫기 onclick='self.close()'></center>
        ";
    }else
    {
        $sql = $db -> prepare("select * from member where id=:id");
        $sql -> bindParam(':id',$id);
        $sql -> execute();
        $count = $sql -> rowCount(); 
        $num_id = preg_match('/[0-9]/u', $id);
        //폼에서 입력한 아이디를 받아 sql에 검색해 나오면 카운트 up

        if($count<1 && strlen($id) == 8)
        {// 검색했을때 나온것이 없으니 가능
            echo 
            "<br><p><center>사용 가능한 아이디입니다.</center></p><br>
            <center><input type=button value=창닫기 onclick='self.close()'></center>";
        } else if(strlen($id) < 8) 
        {
            echo 
            "<br><p><center>아이디는 학번 8자리를 입력해야합니다</center></p><br>
            <center><input type=button value=창닫기 onclick='self.close()'></center>";
        }else
        {// 검색했을때 나온것이 있어 1보다 크니 불가능
            echo 
            "<br><p><center>이미 존재하는 아이디입니다.</center></p><br>
            <center><input type=button value=창닫기 onclick='self.close()'></center>";
            }
        
    }
?>
<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>중복확인</title>
</head>
</html>
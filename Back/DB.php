<?php
    $dns = "mysql:host=localhost;dbname=jmt;charset=utf8";
    $username="root";
    $pw="";

    try 
	{//통상적 처리
        $db = new PDO($dns, $username, $pw);
        echo '접속성공 축하합니다!';
   	 } catch (PDOException $th) 
	{//예외가 발생한 경우
        echo '접속실패 : ' . $th->getMessage();
  	}

    /*db 구성
    CREATE TABLE member (
  num int NOT NULL auto_increment,
  id int(8) UNIQUE NOT NULL,
  psw1 varchar(20) NOT NULL,
  psw2 varchar(20) NOT NULL,
  PRIMARY KEY (num);
)
    */
?>
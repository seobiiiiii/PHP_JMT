<?php
$dns = "mysql:host=localhost;dbname=jmt;charset=utf8";
$username="root";
$pw="";

try 
{//통상적 처리
    $db = new PDO($dns, $username, $pw);
    //echo '접속성공 축하합니다!';
    } catch (PDOException $th) 
{//예외가 발생한 경우
    echo '접속실패 : ' . $th->getMessage();
  }

  function errMsg($msg){
    echo "<script>
        window.alert('$msg');
        history.back(1);
    </script>";
    exit;
}

/*
    CREATE TABLE member (
  num int NOT NULL auto_increment,
  id int(8) UNIQUE NOT NULL,
  pw varchar(20) NOT NULL,
  PRIMARY KEY (num);
)




CREATE TABLE restaurant (
rt_num int NOT NULL auto_increment,
rt_name varchar(20) NOT NULL,
rt_value varchar(20) NOT NULL,
rt_menu varchar(20) NOT NULL,
rt_avg double NOT NULL,
rt_rvCount int NOT NULL,
PRIMARY KEY (rt_num);
) 



CREATE TABLE review (
rv_num int NOT NULL,
rv_story text NOT NULL,
rv_value varchar(20) NOT NULL,
rv_time datetime NOT NULL,
)





CREATE TABLE hak (
day varchar(40) NOT NULL,
k_food varchar(40) NOT NULL,
il_food varchar(40) NOT NULL,
)
*/
?>

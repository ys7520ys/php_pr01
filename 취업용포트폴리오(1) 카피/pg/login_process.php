<?php

$id = (isset($_POST['id']) && $_POST['id'] != '') ? $_POST['id'] : '';
$pw = (isset($_POST['pw']) && $_POST['pw'] != '') ? $_POST['pw'] : '';

if($id == '') { // 만약에 아이디가 비어있다면 조건문이 실행된다.
  $arr = ['result' => 'empty_id'];
  die(json_encode($arr)); // {"result" : "empty_id"}
  //L> 상단처럼 die의 값으로 구성하지 않고, echo '{"result":"empty_id"}'로 해도 상관없다
}

if($pw == '') { // 만약에 아이디가 비어있다면 조건문이 실행된다.
  $arr = ['result' => 'empty_pw'];
  die(json_encode($arr)); // {"result" : "empty_pw"}
  //L> 상단처럼 die의 값으로 구성하지 않고, echo '{"result":"empty_id"}'로 해도 상관없다
}
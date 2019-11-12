<?php

error_reporting(E_ALL);//エラーを表示させる
ini_set('display_errors','on');  //画面にエラーを表示させる


//1.post送信された場合
if(!empty($_POST)){

//エラーメッセージを表示

define('MSG01','入力必須だよ');
define('MSG02','emailの形式で入力してください');
define('MSG03','パスワードがあっていません');
define('MSG04','半角英数字のみご利用いただけます');
define('MSG05','６文字以上で入力してください');

//配列$err_msgを用意

$err_msg = array();
}

//2.フォームが入力されていない場合
if(empty($_POST['email'])){

$err_msg['email'] = MSG01;

}
if(empty($_POST['pass'])){

$err_msg['pass'] = MSG01;

}
if(empty($_POST['pass_retype'])){

$err_msg['pass_retype'] = MSG01;

}
//フォームが入力された場合には$err_msgの中身は無くなるのでその場合の処理！
if(empty(err_msg)){

   //変数にユーザー情報を入力
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $pass_re = $_POST['pass_re'];

  //emailの形式ではない場合
  if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)){
    $err_msg['email'] = MSG02;

}
  //パスワードとパスワード再入力があっていない場合
  if($pass !== $pass_re){

  $err_msg['pass_re'] = MSG03;


  }
  //パスワードとパスワード再入力が半角英数字の場合
  if(!preg_match("/^[a-zA-Z0-9]+$/", $pass) {
    $err_msg['pass'] = MSG04
  }//phpで文字数はmb strlen(変数名)を使用する！
  eleseif(mb strlen($pass)  < 6 ){

   $err_msg 


  }













 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ホームページのタイトル</title>
    <style>
      body{
        margin: 0 auto;
        padding: 150px;
        width: 25%;
        background: #fbfbfa;
      }
      h1{ color: #545454; font-size: 20px;}
      form{
        overflow: hidden;
      }
      input[type="text"]{
        color: #545454;
        height: 60px;
        width: 100%;
        padding: 5px 10px;
        font-size: 16px;
        display: block;
        margin-bottom: 10px;
        box-sizing: border-box;
      }
      input[type="password"]{
        color: #545454;
        height: 60px;
        width: 100%;
        padding: 5px 10px;
        font-size: 16px;
        display: block;
        margin-bottom: 10px;
        box-sizing: border-box;
      }
      input[type="submit"]{
        border: none;
        padding: 15px 30px;
        margin-bottom: 15px;
        background: #3d3938;
        color: white;
        float: right;
      }
      input[type="submit"]:hover{
        background: #111;
        cursor: pointer;
      }
      a{
        color: #545454;
        display: block;
      }
      a:hover{
        text-decoration: none;
      }
      .err_msg{
        color: #ff4d4b;
      }
    </style>
  </head>








<body>
  <h1>ユーザー登録</h1>
  <form method="post">
      <span class="err_msg">
      <input type="text" name="email"  placeholder="email" value=""

      <span class="err_msg">
      <input type="password" name="pass"  placeholder="パスワード" value=""

      <span class="err_msg">
      <input type="password" name="pass_retype"  placeholder="パスワード再入力" value="">

      <input type="submit" value="送信">

      </form>
      <a href="mypage.php">マイページへ</a>

    </body>
    </html>

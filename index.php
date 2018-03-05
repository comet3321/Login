<?php
require_once('function.php');
require_once('config.php');

session_start();
//ログイン済みの処理
if (isset($_SESSION['EMAIL'])) {
  echo 'ようこそ' .  h($_SESSION['EMAIL']) . "さん<br>";
  echo "<a href='/logout.php'>ログアウトはこちら。</a>";
  exit;
}
 ?>

 <!DOCTYPE html>
 <html lang="ja">
   <head>
     <meta charset="utf-8">
     <title>Login</title>
   </head>
   <body>
     <h1>ようこそ、ログインしてください。</h1>
     <form  action="main.php" method="post">
       <input type="email" name="email">email
       <input type="password" name="password">password
       <button type="submit">Sign In!</button>
     </form>
     <h1>初めての方はこちら</h1>
     <form action="signup.php" method="post">
       <input type="email" name="email">email
       <input type="password" name="password">password
       <button type="submit">Sign Up!</button>
       <p>※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>
     </form>
   </body>
 </html>

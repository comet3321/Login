<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

function getEmails($email){
  try {
    $pdo = new PDO(DSN, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("select email from userDeta where email = ?");
    $stmt->execute([$email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
  } catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
  }
}

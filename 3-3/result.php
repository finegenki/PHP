<?php

  //②フォームからのデータを受け取ります
  $my_name = $_POST['my_name'];
  $number = $_POST['number'];
  
  

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
  $bango = $number * mt_rand(1,6);
  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
  if($bango >= 37){
    $omikuji = '残念';
  }else if($bango >= 26){
    $omikuji = '大吉';
  }else if($bango >= 21){
    $omikuji = '吉';
  }else if($bango >= 16){
    $omikuji = '中吉';
  }else if($bango >= 11){
    $omikuji = '小吉';
  }else{
    $omikuji = '凶';
  }  
?>
  <!-- //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう -->
  <?php echo date('Y-m-d H:i:s',time()); ?>
  <p>名前は、<?php echo $my_name; ?>です。</p>
  <p>番号は、<?php echo $bango; ?>です。</p>
  <p>結果は、<?php echo $omikuji; ?>です。</p>


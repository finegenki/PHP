<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$network = $_POST['network'];
$webpage = $_POST['webpage'];
$mysql = $_POST['mysql'];
$network_answer = $_POST['network_answer'];
$webpage_answer = $_POST['webpage_answer'];
$mysql_answer = $_POST['mysql_answer'];
$name = $_POST['name'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function Answer($question,$question_answer){
    if($question == $question_answer){
        echo '正解！';
    }else{
        echo '残念・・・';
    }   
}
?>
<link rel="stylesheet" href="stylesheet.css">

<p class="initial"><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php Answer($network,$network_answer); ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php Answer($webpage,$webpage_answer); ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php Answer($mysql,$mysql_answer); ?>


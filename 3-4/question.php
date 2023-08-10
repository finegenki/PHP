<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$network = ["80","22","20","21"];
$webpage = ["PHP","Python","JAVA","HTML"];
$mysql = ["join","select","insert","update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$network_answer = $network[0];
$webpage_answer = $webpage[3];
$mysql_answer = $mysql[1];
?>
<link rel="stylesheet" href="stylesheet.css">

<p class="initial">お疲れ様です<?php echo $name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">

<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($network as $value){ ?>
    <input type="radio" name="network" value="<?php echo $value; ?>"><?php echo $value; ?>
<?php } ?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($webpage as $value){ ?>
    <input type="radio" name="webpage" value="<?php echo $value; ?>"><?php echo $value; ?>
<?php } ?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($mysql as $value){ ?>
    <input type="radio" name="mysql" value="<?php echo $value; ?>"><?php echo $value; ?>
<?php } ?>
<br>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="network_answer" value="<?php echo $network_answer; ?>" />
<input type="hidden" name="webpage_answer" value="<?php echo $webpage_answer; ?>" />
<input type="hidden" name="mysql_answer" value="<?php echo $mysql_answer; ?>" />
<input type="hidden" name="name" value="<?php echo $name; ?>" />

<input type="submit" value="回答する" class="btn">
</form>
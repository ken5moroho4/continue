<html>
<head><title>miracleave株式会社社員専用ページ</title></head>
<link rel="stylesheet" href="form.css">
<body>

<h1>miracleave株式会社社員専用ページ</h1>

<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
  <textarea id="view_today" name="personal_name" rows="1" cols="20"></textarea>
<br><br>
<textarea name="contents" rows="8" cols="40" placeholder="投稿する内容を入力してください">
</textarea><br><br>
<script type="text/javascript">
document.getElementById("view_today").innerHTML = getToday();

function getToday() {
	var now = new Date();
	var year = now.getFullYear();
	var mon = now.getMonth()+1; //１を足すこと
	var day = now.getDate();
	var you = now.getDay(); //曜日(0～6=日～土)

	//曜日の選択肢
	var youbi = new Array("日","月","火","水","木","金","土");
	//出力用
	var s = "日付:" + year + "年" + mon + "月" + day + "日 (" + youbi[you] + ")";
	return s;
}
</script>
<input type="submit" name="btn1" value="投稿する">
</form>
<textarea name="name" rows="8" cols="80">
    <?php
    $filename = 'toukou_1.txt';
    if (!empty($_POST["personal_name"])) {
          $date_of_post = $_POST['personal_name'];
          echo ($date_of_post);
    }
    if (!empty($_POST["contents"])) {
          $contents = $_POST['contents'];
          echo ($contents);
          $fp = fopen($filename, "w");
          fwrite($fp, "write sample");
          fclose($fp);
    }

    ?>
    </textarea>
  </body>
</html>

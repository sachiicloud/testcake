<?php

//①データ取得ロジックを呼び出す
include_once('access.php');

$userData = getUserData($_GET);
$list = explode(' ', $userData);
$cnt = count($list);

?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>キーワード検索機能</title>
<!-- <link rel="stylesheet" href="style.css">-->
<!-- Bootstrap読み込み（スタイリングのため） -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
<h1 class="col-xs-10 col-xs-offset-1">検索フォーム</h1>
<div class="col-xs-10 col-xs-offset-1 well">

	<?php //②検索フォーム ?>
	<form method="get">
		<div class="form-group">
			<label for="InputName">名前</label>
			<input name="name" class="form-control" id="InputName" value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?>">
		</div>
		<button type="submit" class="btn btn-default" name="search">検索</button>
	</form>

</div>
<div class="col-xs-10 col-xs-offset-1">
	<a href="/testkeyword/mente.php?id=0"><div  class="btn btn-default" name="mod" style="margin-bottom:20px;">新規</div></a>
	<?php //③取得データを表示する ?>
	<?php if(isset($userData) && count($userData)): ?>
		<p class="alert alert-success"><?php echo $cnt ?>件見つかりました。</p>

		<table class="table">
			<thead>
				<tr>
					<th>入力</th>
					<th>結果</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td><?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?></td>
						<td><?php echo htmlspecialchars($userData) ?></td>
					</tr>
			</tbody>
		</table>
	<?php else: ?>
		<p class="alert alert-danger">検索対象は見つかりませんでした。</p>
	<?php endif; ?>

</div>
</body>
</html>

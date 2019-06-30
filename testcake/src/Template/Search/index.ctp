<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>キーワード検索機能</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
<h1 class="col-xs-10 col-xs-offset-1" style="padding-top: 30px; width:65%;">検索フォーム</h1>
<a href="/testcake/mente/" style="margin-top:50px; position: absolute;"><div  class="btn btn-default" name="ret">メンテ画面へ</div></a>

<div class="col-xs-10 col-xs-offset-1 well">
	<?php //②検索フォーム ?>
	<form method="get" style="margin-top: 30px;">
		<div class="form-group">
			<label for="InputName">キーワード</label>
			<input name="name" class="form-control" id="InputName" value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?>">
		</div>
		<button type="submit" class="btn btn-default" >検索</button>
	</form>

</div>
<div class="col-xs-10 col-xs-offset-1" style="padding-bottom: 30px;">
	<?php //③取得データを表示する ?>
	<?php if(isset($userData)): ?>
		<p class="alert alert-success"><?php echo $userData == null? 0: count(explode(' ', $userData)) ?>件見つかりました。</p>

		<table class="table">
			<thead>
				<tr>
					<th  style="width:20%">入力</th>
					<th>結果</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td><?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?></td>
						<td><?php echo $userData == null? '': htmlspecialchars($userData) ?></td>
					</tr>
			</tbody>
		</table>
	<?php else: ?>
		<p class="alert alert-danger">検索対象は見つかりませんでした。</p>
	<?php endif; ?>

</div>
</body>
</html>

	<h1>Index Page</h1>                                                     <!--  -->
	<p>this is test View.</p>
	<p>message: <?php echo $msg; ?></p>                                     <!-- hello!と表示 -->
	<p> </p>
	<p>Data.</p>
	<p> 
		<form method="post" action="./form" name="form1">    　　　　　　　 <!-- method:送信の際の転送方法（post本文としてデータを送信）action:送信先プログラムのURLを指定name名前-->
			<div><input type="text" name="text1" id="text1"></div>　　　　  <!-- type=textテキスト入力欄　名前がtext1 -->
			<div><input type="checkbox" name="check1" id="check1"></div>   
			<label for="check1">check1</label></div>　　　　　　　　　　　  <!-- チェックするときにチェックボックスの横の文字を押しても認証されるように -->
			<div><input type="radio" value="radio_A"
				name="radio1" id="radio_a">
			<label for="radio_a">Radio A</label>
			<input type="radio" value="radio_B"
				name="radio1" id="radio_b">
			<label for="radio_b">Radio B</label><div>
			<div><input type="submit" value="送る">                          <!-- 送信ボタン -->
		</form>
	
	</p>
	<div>
		<ul>
			<?php foreach($datas as $data): ?>　
			<li><?php echo $data; ?></li>
			<?php endforeach; ?>
			</ul>                                                              <!-- onetwoのループ表示 -->
	</div>


 <h1>Index Page</h1>                                                   
	<p>this is test View.</p>
	<p><?php echo $result; ?></p>
	<p><?php echo $msg; ?></p>
	<p>
		<?php                                                 
			echo $this->Form->create(false,array('type'=>'post','action'=>'.'));
			echo $this->Form->text('text1');
			echo $this->Form->checkbox('check1');
			echo $this->Form->label('check1',"checkbox1");
			echo $this->Form->radio('radio1',
				array('male' => '男性',
					'female' => '女性'));
			echo $this->Form->select('select1',
				array("Mac" => 'マック',
					"Windows" => 'ウィンドウズ',
					"Linux" => 'リナックス'));
			echo $this->Form->end("送信");
		?>
	</P>
	</div>
	
<!-- $thisFormプロパティにフォームヘルパーが組み込まれる、creat,text,endが大事 -->
<!-- 6createメソッド（オブジェクト自身に対する操作）でフォーム生成開始 nullにするとモデルを探しに行ってしまう-->
<!-- 7typeはフォームタグのメソッド属性を指定post, getのどちらか、actionで送信先（自分） -->
<!-- 7：入力フィールド　$this=>Form=>text(名前,連想配列） -->
<!-- 8: チェックボックスの□　$this=>Form=>checkbox(名前,連想配列） -->
<!-- 9：チェックボックスの文字 -->
<!--10:ラジオボタン　radio(名前、作成するラジオボタン名を配列にまとめる、連想配列）-->
<!--13:セレクトメニュー　select(名前、配列、連想配列) -->
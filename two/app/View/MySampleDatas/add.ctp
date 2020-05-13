<h1>Add Page</h1>
<p>MySampleData Add Form.</p>
<?php
  echo $this->Form->create('MySampleData'); //モデル名の指定をしてそのモデルのデータを扱う
  echo $this->Form->input('name');          //あとの必要な項目
  echo $this->Form->error('name');          //バリデーション（フィールド名）
  echo $this->Form->input('mail');
  echo $this->Form->error('mail');
  echo $this->Form->input('tel');
  echo $this->Form->error('tel');
  echo $this->Form->submit("送信");
  echo $this->Form->end();
?>
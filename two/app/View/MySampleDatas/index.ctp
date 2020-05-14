<!-- 普通のデータ取り出し後表示 -->
<!--
<h1>Index Page</h1>
<p>MySampleData Index View.</p>
<table>
<?php foreach ($datas as $data): ?>
  <tr>
		 <td><?php echo $data['MySampleData']['name']; ?></td>
    		 <td><?php echo $data['MySampleData']['mail']; ?></td>
    		 <td><?php echo $data['MySampleData']['tel']; ?></td> --> <!-- find allの場合 -->
    	<!-- <td><?php echo $data; ?></td>  listのとき名前だけのリストをつくる -->
  <!--
  </tr>
<?php endforeach; ?>
</table>
-->

<!-- ページネーション -->
<h1>Index Page</h1>
<p>MySampleData Index View.</p>
<table cellpadding="0" cellspacing="0">
  <tr>
  	  <!-- ↓それぞれの項目で並べ替える sortで並べ替えのリンクのテキストを生成する。そこを押す度順番が変わる-->
      <th><?php echo $this->Paginator->sort('id');?></th>
      <th><?php echo $this->Paginator->sort('name');?></th>
      <th><?php echo $this->Paginator->sort('mail');?></th>
      <th><?php echo $this->Paginator->sort('tel');?></th>
  </tr>
  <!-- ↓配列で変数datasの配列から順にデータを取り出す　さらに個別の値を取り出す -->
  <!-- $dataの構造はモデル名をキーにモデルのデータが保管されている -->
  <?php foreach ($datas as $data): ?>
  <tr>
    <td><?php echo $data['MySampleData']['id']; ?>&nbsp;</td>
    <td><?php echo $data['MySampleData']['name']; ?>&nbsp;</td>
    <td><?php echo $data['MySampleData']['mail']; ?>&nbsp;</td>
    <td><?php echo $data['MySampleData']['tel']; ?>&nbsp;</td>
  </tr>
  <?php endforeach; ?>
</table>
<!-- ↓最初へ次のページへなど飛ぶボタン、とページ番号（他にもある）-->
<div>
  <?php
    echo $this->Paginator->first('<< ');
    echo $this->Paginator->prev('< ');
    echo $this->Paginator->numbers(
        array('separator' => '/','modulus'=>2));
    echo $this->Paginator->next(' >');
    echo $this->Paginator->last(' >>');
  ?>
</div>

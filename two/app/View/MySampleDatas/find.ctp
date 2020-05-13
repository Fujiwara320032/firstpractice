 
<h1>Index Page</h1>
<p>MySampleData Find View.</p>

<!--
<form method="post" action="./find">
  ID:<input type="text" name="id" />
  <input type="submit" />
</form>
 
<table>
<?php if (isset($data)): ?>
  <tr>
    <td>Name:</td>
    <td><?php echo $data['MySampleData']['name']; ?></td>
  </tr>
  <tr>
    <td>Mail:</td>
    <td><?php echo $data['MySampleData']['mail']; ?></td>
  </tr>
  <tr>
    <td>Tel:</td>
    <td><?php echo $data['MySampleData']['tel']; ?></td>
  </tr>
<?php endif; ?>
</table>
-->

<!-- 一つ(名前)だけ検索 -->
<!--
<?php
  echo $this->Form->create('MySampleData');
  echo $this->Form->input('name');
  echo $this->Form->end('Submit');
?>
 
<?php if (isset($data)): ?>
  <pre><?php print_r($data); ?></pre>
<?php endif; ?>
 -->
 
 <!-- 複数条件(名前とメアド)検索 -->
 <h1>Index Page</h1>
<p>MySampleData Find View.</p>
<?php
  echo $this->Form->create('MySampleData');
  echo $this->Form->input('name');
  echo $this->Form->input('mail');
  echo $this->Form->end('Submit');
?>
 
<?php if (isset($data)): ?>
  <pre><?php print_r($data); ?></pre>
<?php endif; ?>

 
 
 
 
 
 
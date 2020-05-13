<h1>Edit Page</h1>
<p>MySampleData Delete Form.</p>
<?php
  echo $this->Form->create('MySampleData');
  echo $this->Form->input('id');
  echo $this->Form->input('name');
  echo $this->Form->end('Submit');
?>
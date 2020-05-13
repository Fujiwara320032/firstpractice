<h1>Index Page</h1>
<p>MySampleData Index View.</p>
<table>
<?php foreach ($datas as $data): ?>
  <tr>
		 <td><?php echo $data['MySampleData']['name']; ?></td>
    		 <td><?php echo $data['MySampleData']['mail']; ?></td>
    		 <td><?php echo $data['MySampleData']['tel']; ?></td><!-- find allの場合 -->
    	<!-- <td><?php echo $data; ?></td>  名前だけのリストをつくる -->
  </tr>
<?php endforeach; ?>
</table>


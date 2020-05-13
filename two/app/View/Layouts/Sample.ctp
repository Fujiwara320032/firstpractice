<!-- ページの構造 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   <!-- htmlのバージョン宣言 -->
<html xmlns="http://www.w3.org/1999/xhtml">                      <!-- バージョン１で必要な宣言 -->
<head>
  <?php echo $this->Html->charset(); ?>              <!-- 最初に出力することで、文字コードの設定 -->
  <title>
    <?php echo $title_for_layout; ?>
  </title>
  <?php
    echo $this->Html->meta('icon');               
    echo $this->Html->css('sample');             
    echo $scripts_for_layout;                     
  ?>                                              <!-- ファビコンwebroot/favicon.ico --> <!-- スタイルシートのlinkタグを自動出力 webroot/css/sample.css --><!-- スクリプトを出力 -->
</head>
<body>
  <div id="container">                             <!-- ボディにまず配置し、この中にページの基本的な表示ないようを組み込む -->
    <div id="header">                              <!-- ヘッダー -->
      <?php echo $header_for_layout; ?>
    </div>
    <div id="content">                             <!-- ビューの内容がこの中に入る -->
      <?php echo $this->Session->flash(); ?>       <!-- セッションヘルパーを使う分 今回は特にない -->
      <?php echo $content_for_layout; ?>           <!-- コンテンツ出力　これ大事 -->
    </div>
    <div id="footer">                               <!-- フッター -->
      <?php echo $footer_for_layout; ?>
    </div>
  </div>
 </body>
</html>
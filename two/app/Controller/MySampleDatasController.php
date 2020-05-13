<?php
App::uses('AppController','Controller');

class MySampleDatasController extends AppController {


	function index(){
		//layout関係
		$this->layout = "Sample";
		$this->set("header_for_layout","Sample Application");
		 $this->set("footer_for_layout","copyright by Fujiwara. 2020.");
        // 以下がデータベース関係
        //all全て、firstデータの最初のものだけをとる、listデータのリストをつくる、countデータ数を得る
        $datas = $this->MySampleData->find('all');
		$this->set('datas',$datas);
	}
	
	//IDを入力して検索
	//function find(){
		//レイアウト
    	/*$this->layout = "Sample";
    	$this->set("header_for_layout","Sample Application");
    	$this->set("footer_for_layout","copyright by SYODA-Tuyano. 2011.");
     
    	if (isset($this->data['id'])){
      		$id = $this->data['id'];
      		$status = array(
      			                      //モデル名.項目名　ID　の連想配列（MySampleDataモデルクラスidが$idのデータを検索する）
        		'conditions' => array('MySampleData.id' => $id) //大きいものを出したいときは.id<'=>$id、テキストのあいまい検索はlike
      		);
      		$data = $this->MySampleData->find('first', $status);
     	} else {
      		$data = null;
     	}
     	$this->set('data',$data);
     } */
     	
     	//マジック検索（太郎と検索→太郎の詳細を持ってくる）
     	public function find(){
    		// レイアウト関係
    		$this->layout = "Sample";
    		$this->set("header_for_layout", "Sample Application");
   			$this->set("footer_for_layout", "copyright by SYODA-Tuyano. 2011.");
   			
    		// post時の処理
    		  //一つのデータのみ指定
    		/*if ($this->request->is('post')) {
    			//$変数=$this->Modelクラス->findAllBy項目名（検索する値）;=検索されたnameのものをもってくる(findbyだと最初のだけとってくる)
      			$data = $this->MySampleData->findByName($this->request->data('MySampleData.name'));
      			$this->set('data',$data);
      		}*/
      		
      		  //AND、OR検索
    			if ($this->request->is('post')) {
      				$name = $this->request->data('MySampleData.name');
      				$mail = $this->request->data('MySampleData.mail');
      				//nameとmailの入力フィールドを用意し、名前とメアドそれぞれ検索をする。どちらか一方でもあっていれば探し出す
      				$opt = array("OR" => array (
          				"MySampleData.name" => $name,
          				"MySampleData.mail" => $mail
        			));
        			                                               //conditionsに上の$optを設定することによって複数条件の検索ができる
      				$data = $this->MySampleData->find('all',array('conditions' => $opt));
         			$this->set('data',$data);
      			}
  		}
     
    
	public function add() {     //フォームはこのアクション自身に送信される
   		// レイアウト関係
   		$this->layout = "Sample";
   		$this->set("header_for_layout", "Sample Application");
   		$this->set("footer_for_layout", "copyright by SYODA-Tuyano. 2011.");
		// post時の処理
   		if ($this->request->is('post')) {     //post送信されたらフォームが送信されたと考えられる
      		$this->MySampleData->save($this->request->data);     //送信されたフォームのデータからモデルを作成し保存する処理（MySampleDataはモデルクラス）これでDBに保存できる
    	}
  	}
  	
  	public function edit($id) {
    	// レイアウト関係
    	$this->layout = "Sample";
    	$this->set("header_for_layout", "Sample Application");
    	$this->set("footer_for_layout", "copyright by SYODA-Tuyano. 2011.");
    	// post時の処理
    	$this->MySampleData->id = $id;
    	if ($this->request->is('post') || $this->request->is('put')) {      //postもputもあったか
      		$this->MySampleData->save($this->request->data);
      		$this->redirect(array('action' => 'index'));
    	} else {
      		$this->request->data = $this->MySampleData->read(null, $id);    //モデルから読み込んだデータをフォームに表示
    	}
  	}
  	
  	public function del($id) {
    	// レイアウト関係
    	$this->layout = "Sample";
    	$this->set("header_for_layout", "Sample Application");
    	$this->set("footer_for_layout", "copyright by SYODA-Tuyano. 2011.");
    	$this->MySampleData->id = $id;
    	// post時の処理
    	if ($this->request->is('post') || $this->request->is('put')) {
    	    //postされた場合だけ削除の処理をする            //送信されたフォームからIDを取得
      		$this->MySampleData->delete($this->request->data('MySampleData.id'));
    	} else {
      		$this->request->data = $this->MySampleData->read(null, $id);
    	}
  	}
}


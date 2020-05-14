<?php

App::uses('AppController','Controller');          //CakePHPに用意されているライブラリをロードするためのもの、（クラス名、パッケージ名）AppControllerのクラスを継承
App::uses('Sanitize','Utility');                  //サニタイズ

class SampleController extends AppController {    //classコントローラー名extendsクラス継承のもと
	
	public function index() {                     //関数宣言のfunction、アクション名
		//$this->modelClass = null;                 //モデルがないよ（フォームヘルパーのデフォルトではモデルに設定されたテーブルのデータを送信するフォームを生成する機能を持っている）
		$this->layout ="Sample";
		$this->set("header_for_layout","こんにちは");
		$this->set("footer_for_layout","copyright by Fujiwara. 2020.");
		$this->set("msg","Welcome to my page");
		if($this->request->data){                 //カッコ内にフォームの送信された情報が連想配列としてまとめられる。だからデータがあればフォームに送信されている、なければ普通にアクセスしていると判断
			$result = "[result]";
			$result .= "<br>text1:".Sanitize::     
				stripAll($this->request->data['text1']); //テキストをサニタイズ
			$result .= "<br>check1:".
				$this->request->data['check1'];    //dataによって取り出す
			$result .= "<br>radio1:".
				$this->request->data['radio1'];
			$result .= "<br>select1:".
				$this->request->data['select1'];
		} else {
			$result = "no data.";
		}
		$this->set("result",$result);
	}
	
}

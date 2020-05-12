<?php

App::uses('AppController','Controller');          //CakePHPに用意されているライブラリをロードするためのもの、（クラス名、パッケージ名）AppControllerのクラスを継承
App::uses('Sanitize','Utility');

class SampleController extends AppController {    //classコントローラー名extendsクラス継承のもと
	public function index() {                     //public関数宣言のfunctionアクション名
		$this->set("title_for_layout","Index Page"); //タイトルはここに設定
		$this->set("msg","hello!");               //$this->set(変数名、値）これをViewで$msgとすればhello!とでる
		$this->set("datas",array("One","Two"));   //ループで取り出す
		$this->autoLayout = false;
	}
	
	public function form() {
		$text = $this -> data["text1"];
		$check = isset($this -> data["check1"])?
			"On" : "Off";
		$radio1 = $this -> data["radio1"];
		$this -> set("text1",$text1);
		$this -> set("check1",$check1);
		$this -> set("radio1",$radio1);
	}
}

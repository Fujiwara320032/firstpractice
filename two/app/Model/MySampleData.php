<?php
App::uses('AppModel','Model');
//バリデーション
class MySampleData extends AppModel {

	
	public $validate = array(
    'name'=>array(
      'rule'=>'isUnique',                                       //バリデーション名
      'required'=>true,                                         //必須項目かどうか（からでもいいならallowEmpty）
      'message'=>'必ずユニークな名前を入力してください。'       //エラーメッセージ
    ),                                                          //on　createかupdateのみでどっちの時に機能させるか指定する。無い時は両方
    'mail'=>array(
      'rule'=>'email',
      'required'=>true,
      'message'=>'メールアドレスを入力ください。'
    ),
    'tel'=>array(
      'rule'=>'alphaNumeric',
      'required'=>true,
      'message'=>'半角英数字で入力ください。-は付けないでください。'
    )
  );

}

/*
バリデーションの種類
・独自で作れる →'mail'=>array(
      			'rule'=>array('checkMyRule',2),
      			'message'=>'偶数を入力ください。'
      			クラスの外に
      			function checkMyRule($val,$num){
   				 $n = $val['mail'];
   				 return $n % $num == 0;
・blank　　　　→空を許可するかどうか
・boolean　　　→真偽値のみ入力を許可　　　　（true,false・0,1のみ使用可）
・cc　　　　　 →クレジットカード番号
・comparison　 →比較演算子を使った数字の比較（10以上を指定する場合'rule'=>array('comparison','<',10)
・date　　　　 →日付　　　　　　　　　　　　 ('rule'=>array('date','ymd')
・decimal　　　→実数を指定　　　　　　　　　（'rule'=>array('decimal','2')
・email　　　　→
・equalTo　　　→
・extension　　→
・ip　　　　　 →
・isUnique　　 →
・minLength　　→
・maxLength　　→
・money　　　　→
・multipul　　 →
・inList　　　 →
・numeric　　　→
・notEmpty　　 →
・phone　　　　→
・postal　　　 →
・range　　　　→
・ssn　　　　　→
・url　　　　　→
いろいろあるね！！！
*/

<?php
App::uses('AppModel', 'Model');
 
class GuestBook extends AppModel {
	//GuestBookにアクセスしてもMySampleDataから値を持ってくることができるようになる
	public $belongsTo = "MySampleData";
}
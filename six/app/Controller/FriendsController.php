<?php
class FriendsController extends AppController{
	public function index(){
		$options = array(
			'conditions' => array(
				'Friend.first_name' => 'Andy',
				'Friend.id <' => 2000 
			),
			'order' => array('Friends.first_name ASC'),
			'limit' => 10
		);
		$data = $this->Friend->find('all',$options);
	}
}


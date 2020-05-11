class Friend extends AppModel{

	public $virtualFields = array{
		'full_name' =>
		'CONCAT(Friend.first_name," ",Friend.last_name)'
	);
}


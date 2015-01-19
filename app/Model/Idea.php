<?php 
class Idea extends AppModel {
	public $validate = array(
		'body' => 'notEmpty'
	);
}
 ?>
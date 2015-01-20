<?php 
class Idea extends AppModel {
	public $validate = array(
		'body' => 'notEmpty'
	);
	public function isOwnedBy($post, $user){
		return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
	}
}
 ?>
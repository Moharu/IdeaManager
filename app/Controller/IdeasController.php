<?php 
class IdeasController extends AppController {
	public $helpers = array('Html','Form');
	public $components = array('Session');

	public function index(){
		$this->set('ideas',$this->Idea->find('all'));
	}

	public function view($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid idea'));
		}

		$idea = $this->Idea->findById($id);
		if (!$idea) {
			throw new NotFoundException (__('Invalid idea'));
		}
		$this->set('ideas', $idea);
	}

	public function add(){
		if($this->request->is('Post')){
			$this->Idea->create();
			if($this->Idea->save($this->request->data)){
				$this->Session->setFlash(__('Your idea has been saved.'));
				return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash(__('Unable to add your idea.'));
		}
	}

	public function edit($id = null){
		if(!$id){
			throw new NotFoundException(__('Invalid idea.'));
		}
		$idea = $this->Idea->findById($id);
		if(!$idea){
			throw new NotFoundException(__('Invalid idea.'));
		}
		if($this->request->is(array('idea','put'))){
			$this->Idea->id = $id;
			if ($this->Idea->save($this->request->data)){
				$this->Session->setFlash(__('Your idea has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your idea.'));
		}
		if(!$this->request->data){
			$this->request->data = $idea;
		}
	}

	public function delete($id){
		if($this->request->is('get')){
			throw new MethodNotAllowedException();
		}

		if($this->Idea->delete($id)){
			$this->Session->setFlash(
				__('The idea with id: %s has been deleted.', h($id))
			);
			return $this->redirect(array('action'=>'index'));
		}
	}
}
 ?>

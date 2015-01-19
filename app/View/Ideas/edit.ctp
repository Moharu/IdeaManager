<!-- File: /app/View/Ideas/edit.ctp -->

<h1>Edit Idea</h1>
<?php 
	echo $this->Form->create('Idea');
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Save Idea');
 ?>
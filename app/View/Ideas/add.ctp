<!-- File: /app/View/Ideas/add.ctp -->

<h1> Add Idea </h1>
<?php 
	echo $this->Form->create('Idea');
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->end('Save Idea')
 ?>
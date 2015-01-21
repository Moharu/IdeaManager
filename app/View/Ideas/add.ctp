<!-- File: /app/View/Ideas/add.ctp -->

<h1> Add Idea </h1>
<?php 
	echo $this->Form->create('Idea', array('maxlength' => '400'));
	echo $this->Form->input('title', array('type' => 'hidden'));
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->end('Save Idea')
 ?>
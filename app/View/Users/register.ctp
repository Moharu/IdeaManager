<!-- app/View/Users/register.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend id="titleregister"><?php echo __('Register') ?></legend>
		<?php 
		echo $this->Form->input('username',array('maxlength'=>'15'));
		echo $this->Form->input('password',array('minlength'=>'6','maxlength'=>'12'));
		echo $this->Form->input('img',array('label'=>'Profile image link'));
		echo $this->Form->input('role', array('options' => array ('author' => 'Author')));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!-- File: /app/View/Ideas/index.ctp -->
<div id="problems">
<p style="text-align:center; font-size:150%; color: lightgray"> > <?php echo $this->Html->link('Add Idea', array('controller' => 'ideas', 'action' => 'add')); ?> < </p>
<table>
	<?php foreach ($ideas as $idea): ?>
		<tr>
			<td width="18%" style="text-align:center; max-width: 98px;"><img style='height:60px; width: 60px;' src="<?php
			echo $idea['Idea']['img'];
			?>"><b><?php echo $idea['Idea']['title']; ?></b></td>
			<td width="65%">
				<?php 
				echo $idea['Idea']['body'];
				 ?>
			</td>
			<td> <?php 
				echo $this->Form->postLink('Delete', array('action' => 'delete', $idea['Idea']['id']),
					array('confirm' => 'Are you sure?')
					); ?>
				<?php echo $this->Html->link('Edit',array('action' => 'edit', $idea['Idea']['id'])); ?>
		</tr>
	<?php endforeach; ?>
	<?php unset($idea) ?>
</table>
</div>
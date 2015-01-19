<!-- File: /app/View/Ideas/index.ctp -->
<table>
	<?php foreach ($ideas as $idea): ?>
		<tr>
			<td> <?php echo $this->Html->link($idea['Idea']['title'],array('controller' => 'ideas', 'action' => 'view', $idea['Idea']['id'])); ?> </td>
			<td width="50%">
				<?php 
				echo $idea['Idea']['body'];
				 ?>
			</td>
			<td> <?php 
				echo $this->Form->postLink('Delete', array('action' => 'delete', $idea['Idea']['id']),
					array('confirm' => 'Are you sure?')
					); ?>
				<?php echo $this->Html->link('Edit',array('action' => 'edit', $idea['Idea']['id'])); ?>
			<td> <?php echo $idea['Idea']['created']; ?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset($idea) ?>
</table>

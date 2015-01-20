<!-- File: /app/View/Users/index.ctp -->
<table>
	<?php foreach ($users as $user): ?>
		<tr>
			<td> <?php echo $this->Html->link($user['User']['id'],array('controller' => 'ideas', 'action' => 'view', $user['User']['id'])); ?> </td>
			<td width="50%">
				<?php 
				echo $user['User']['username'];
				 ?>
			</td>
			<td> <?php 
				echo $this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id']),
					array('confirm' => 'Are you sure?')
					); ?>
				<?php echo $this->Html->link('Edit',array('action' => 'edit', $user['User']['id'])); ?>
			<td> <?php echo $user['User']['created']; ?></td>
		</tr>
	<?php endforeach; ?>
	<?php unset($user) ?>
</table>

<!-- File: /app/View/Posts/view.ctp -->
<h1> <?php echo h($idea['Idea']['title']); ?></h1>
<p><small>Created: <?php echo $idea['Idea']['created']; ?> </small></p>
<p><?php echo h($idea['Idea']['body']) ?></p>
<p>Actions: <?php echo $this->Html->link('Edit',array ('action' => 'edit', $idea['Idea']['id'])); ?>
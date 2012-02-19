<div class="taxes form">
<?php echo $this->Form->create('Tax');?>
	<fieldset>
		<legend><?php echo __('Edit Tax'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('name');
		echo $this->Form->input('value');
		echo $this->Form->input('restaurant_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tax.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tax.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Restaurants'), array('controller' => 'restaurants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant'), array('controller' => 'restaurants', 'action' => 'add')); ?> </li>
	</ul>
</div>

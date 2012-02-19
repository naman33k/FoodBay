<div class="dishes form">
<?php echo $this->Form->create('Dish');?>
	<fieldset>
		<legend><?php echo __('Edit Dish'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('price');
		echo $this->Form->input('description');
		echo $this->Form->input('photo');
		echo $this->Form->input('MenuSection');
		echo $this->Form->input('Order');
		echo $this->Form->input('Tag');
		echo $this->Form->input('TimeInterval');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Dish.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Dish.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Rating Dishes'), array('controller' => 'rating_dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rating Dish'), array('controller' => 'rating_dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Sections'), array('controller' => 'menu_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Section'), array('controller' => 'menu_sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Intervals'), array('controller' => 'time_intervals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Interval'), array('controller' => 'time_intervals', 'action' => 'add')); ?> </li>
	</ul>
</div>

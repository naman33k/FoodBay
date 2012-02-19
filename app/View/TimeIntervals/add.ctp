<div class="timeIntervals form">
<?php echo $this->Form->create('TimeInterval');?>
	<fieldset>
		<legend><?php echo __('Add Time Interval'); ?></legend>
	<?php
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
		echo $this->Form->input('Dish');
		echo $this->Form->input('MenuSection');
		echo $this->Form->input('RestaurantService');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Time Intervals'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Sections'), array('controller' => 'menu_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Section'), array('controller' => 'menu_sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurant Services'), array('controller' => 'restaurant_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant Service'), array('controller' => 'restaurant_services', 'action' => 'add')); ?> </li>
	</ul>
</div>

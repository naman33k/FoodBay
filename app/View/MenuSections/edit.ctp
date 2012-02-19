<div class="menuSections form">
<?php echo $this->Form->create('MenuSection');?>
	<fieldset>
		<legend><?php echo __('Edit Menu Section'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('menu_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('Dish');
		echo $this->Form->input('TimeInterval');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MenuSection.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MenuSection.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Menu Sections'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Intervals'), array('controller' => 'time_intervals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Interval'), array('controller' => 'time_intervals', 'action' => 'add')); ?> </li>
	</ul>
</div>

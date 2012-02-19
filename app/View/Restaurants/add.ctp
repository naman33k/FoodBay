<div class="restaurants form">
<?php echo $this->Form->create('Restaurant');?>
	<fieldset>
		<legend><?php echo __('Add Restaurant'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('location_id');
		echo $this->Form->input('photo');
		echo $this->Form->input('description');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
		echo $this->Form->input('phone_number');
		echo $this->Form->input('phone_number_alt_1');
		echo $this->Form->input('phone_number_alt_2');
		echo $this->Form->input('delivery_time');
		echo $this->Form->input('Cuisine');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Restaurants'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurant Ratings'), array('controller' => 'restaurant_ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant Rating'), array('controller' => 'restaurant_ratings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurant Services'), array('controller' => 'restaurant_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant Service'), array('controller' => 'restaurant_services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuisines'), array('controller' => 'cuisines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuisine'), array('controller' => 'cuisines', 'action' => 'add')); ?> </li>
	</ul>
</div>

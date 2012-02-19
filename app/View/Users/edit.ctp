<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('address');
		echo $this->Form->input('phone_number');
		echo $this->Form->input('location_id');
		echo $this->Form->input('Cuisine');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fav Orders'), array('controller' => 'fav_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fav Order'), array('controller' => 'fav_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rating Dishes'), array('controller' => 'rating_dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rating Dish'), array('controller' => 'rating_dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurant Ratings'), array('controller' => 'restaurant_ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant Rating'), array('controller' => 'restaurant_ratings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuisines'), array('controller' => 'cuisines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuisine'), array('controller' => 'cuisines', 'action' => 'add')); ?> </li>
	</ul>
</div>

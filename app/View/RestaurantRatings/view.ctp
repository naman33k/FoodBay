<div class="restaurantRatings view">
<h2><?php  echo __('Restaurant Rating');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($restaurantRating['RestaurantRating']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($restaurantRating['User']['name'], array('controller' => 'users', 'action' => 'view', $restaurantRating['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Restaurant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($restaurantRating['Restaurant']['name'], array('controller' => 'restaurants', 'action' => 'view', $restaurantRating['Restaurant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($restaurantRating['RestaurantRating']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review'); ?></dt>
		<dd>
			<?php echo h($restaurantRating['RestaurantRating']['review']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Restaurant Rating'), array('action' => 'edit', $restaurantRating['RestaurantRating']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Restaurant Rating'), array('action' => 'delete', $restaurantRating['RestaurantRating']['id']), null, __('Are you sure you want to delete # %s?', $restaurantRating['RestaurantRating']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurant Ratings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant Rating'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurants'), array('controller' => 'restaurants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant'), array('controller' => 'restaurants', 'action' => 'add')); ?> </li>
	</ul>
</div>

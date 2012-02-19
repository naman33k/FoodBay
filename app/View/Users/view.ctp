<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Location']['name'], array('controller' => 'locations', 'action' => 'view', $user['Location']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Fav Orders');?></h3>
	<?php if (!empty($user['FavOrder'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['FavOrder'] as $favOrder): ?>
		<tr>
			<td><?php echo $favOrder['id'];?></td>
			<td><?php echo $favOrder['user_id'];?></td>
			<td><?php echo $favOrder['order_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fav_orders', 'action' => 'view', $favOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fav_orders', 'action' => 'edit', $favOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fav_orders', 'action' => 'delete', $favOrder['id']), null, __('Are you sure you want to delete # %s?', $favOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Fav Order'), array('controller' => 'fav_orders', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Orders');?></h3>
	<?php if (!empty($user['Order'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id'];?></td>
			<td><?php echo $order['user_id'];?></td>
			<td><?php echo $order['total'];?></td>
			<td><?php echo $order['rating'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']), null, __('Are you sure you want to delete # %s?', $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Rating Dishes');?></h3>
	<?php if (!empty($user['RatingDish'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Dish Id'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['RatingDish'] as $ratingDish): ?>
		<tr>
			<td><?php echo $ratingDish['id'];?></td>
			<td><?php echo $ratingDish['user_id'];?></td>
			<td><?php echo $ratingDish['dish_id'];?></td>
			<td><?php echo $ratingDish['rating'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rating_dishes', 'action' => 'view', $ratingDish['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rating_dishes', 'action' => 'edit', $ratingDish['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rating_dishes', 'action' => 'delete', $ratingDish['id']), null, __('Are you sure you want to delete # %s?', $ratingDish['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rating Dish'), array('controller' => 'rating_dishes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Restaurant Ratings');?></h3>
	<?php if (!empty($user['RestaurantRating'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Restaurant Id'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Review'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['RestaurantRating'] as $restaurantRating): ?>
		<tr>
			<td><?php echo $restaurantRating['id'];?></td>
			<td><?php echo $restaurantRating['user_id'];?></td>
			<td><?php echo $restaurantRating['restaurant_id'];?></td>
			<td><?php echo $restaurantRating['rating'];?></td>
			<td><?php echo $restaurantRating['review'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'restaurant_ratings', 'action' => 'view', $restaurantRating['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'restaurant_ratings', 'action' => 'edit', $restaurantRating['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'restaurant_ratings', 'action' => 'delete', $restaurantRating['id']), null, __('Are you sure you want to delete # %s?', $restaurantRating['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Restaurant Rating'), array('controller' => 'restaurant_ratings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cuisines');?></h3>
	<?php if (!empty($user['Cuisine'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Cuisine'] as $cuisine): ?>
		<tr>
			<td><?php echo $cuisine['id'];?></td>
			<td><?php echo $cuisine['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cuisines', 'action' => 'view', $cuisine['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cuisines', 'action' => 'edit', $cuisine['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cuisines', 'action' => 'delete', $cuisine['id']), null, __('Are you sure you want to delete # %s?', $cuisine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cuisine'), array('controller' => 'cuisines', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

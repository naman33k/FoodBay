<div class="restaurants view">
<h2><?php  echo __('Restaurant');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($restaurant['Location']['name'], array('controller' => 'locations', 'action' => 'view', $restaurant['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number Alt 1'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['phone_number_alt_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number Alt 2'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['phone_number_alt_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delivery Time'); ?></dt>
		<dd>
			<?php echo h($restaurant['Restaurant']['delivery_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Restaurant'), array('action' => 'edit', $restaurant['Restaurant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Restaurant'), array('action' => 'delete', $restaurant['Restaurant']['id']), null, __('Are you sure you want to delete # %s?', $restaurant['Restaurant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Menus');?></h3>
	<?php if (!empty($restaurant['Menu'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Restaurant Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($restaurant['Menu'] as $menu): ?>
		<tr>
			<td><?php echo $menu['id'];?></td>
			<td><?php echo $menu['restaurant_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menus', 'action' => 'view', $menu['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menus', 'action' => 'edit', $menu['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menus', 'action' => 'delete', $menu['id']), null, __('Are you sure you want to delete # %s?', $menu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Restaurant Ratings');?></h3>
	<?php if (!empty($restaurant['RestaurantRating'])):?>
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
		foreach ($restaurant['RestaurantRating'] as $restaurantRating): ?>
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
	<h3><?php echo __('Related Restaurant Services');?></h3>
	<?php if (!empty($restaurant['RestaurantService'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Restaurant Id'); ?></th>
		<th><?php echo __('Minorder'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($restaurant['RestaurantService'] as $restaurantService): ?>
		<tr>
			<td><?php echo $restaurantService['id'];?></td>
			<td><?php echo $restaurantService['location_id'];?></td>
			<td><?php echo $restaurantService['restaurant_id'];?></td>
			<td><?php echo $restaurantService['minorder'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'restaurant_services', 'action' => 'view', $restaurantService['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'restaurant_services', 'action' => 'edit', $restaurantService['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'restaurant_services', 'action' => 'delete', $restaurantService['id']), null, __('Are you sure you want to delete # %s?', $restaurantService['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Restaurant Service'), array('controller' => 'restaurant_services', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Taxes');?></h3>
	<?php if (!empty($restaurant['Tax'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th><?php echo __('Restaurant Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($restaurant['Tax'] as $tax): ?>
		<tr>
			<td><?php echo $tax['id'];?></td>
			<td><?php echo $tax['type'];?></td>
			<td><?php echo $tax['name'];?></td>
			<td><?php echo $tax['value'];?></td>
			<td><?php echo $tax['restaurant_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'taxes', 'action' => 'view', $tax['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'taxes', 'action' => 'edit', $tax['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'taxes', 'action' => 'delete', $tax['id']), null, __('Are you sure you want to delete # %s?', $tax['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cuisines');?></h3>
	<?php if (!empty($restaurant['Cuisine'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($restaurant['Cuisine'] as $cuisine): ?>
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

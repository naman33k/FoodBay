<div class="timeIntervals view">
<h2><?php  echo __('Time Interval');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($timeInterval['TimeInterval']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($timeInterval['TimeInterval']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($timeInterval['TimeInterval']['end_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Time Interval'), array('action' => 'edit', $timeInterval['TimeInterval']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Time Interval'), array('action' => 'delete', $timeInterval['TimeInterval']['id']), null, __('Are you sure you want to delete # %s?', $timeInterval['TimeInterval']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Intervals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Interval'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Sections'), array('controller' => 'menu_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Section'), array('controller' => 'menu_sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurant Services'), array('controller' => 'restaurant_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant Service'), array('controller' => 'restaurant_services', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dishes');?></h3>
	<?php if (!empty($timeInterval['Dish'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($timeInterval['Dish'] as $dish): ?>
		<tr>
			<td><?php echo $dish['id'];?></td>
			<td><?php echo $dish['name'];?></td>
			<td><?php echo $dish['price'];?></td>
			<td><?php echo $dish['description'];?></td>
			<td><?php echo $dish['photo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dishes', 'action' => 'view', $dish['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dishes', 'action' => 'edit', $dish['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dishes', 'action' => 'delete', $dish['id']), null, __('Are you sure you want to delete # %s?', $dish['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Menu Sections');?></h3>
	<?php if (!empty($timeInterval['MenuSection'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Menu Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($timeInterval['MenuSection'] as $menuSection): ?>
		<tr>
			<td><?php echo $menuSection['id'];?></td>
			<td><?php echo $menuSection['menu_id'];?></td>
			<td><?php echo $menuSection['name'];?></td>
			<td><?php echo $menuSection['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menu_sections', 'action' => 'view', $menuSection['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menu_sections', 'action' => 'edit', $menuSection['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menu_sections', 'action' => 'delete', $menuSection['id']), null, __('Are you sure you want to delete # %s?', $menuSection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Menu Section'), array('controller' => 'menu_sections', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Restaurant Services');?></h3>
	<?php if (!empty($timeInterval['RestaurantService'])):?>
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
		foreach ($timeInterval['RestaurantService'] as $restaurantService): ?>
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

<div class="restaurantServices view">
<h2><?php  echo __('Restaurant Service');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($restaurantService['RestaurantService']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($restaurantService['Location']['name'], array('controller' => 'locations', 'action' => 'view', $restaurantService['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Restaurant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($restaurantService['Restaurant']['name'], array('controller' => 'restaurants', 'action' => 'view', $restaurantService['Restaurant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minorder'); ?></dt>
		<dd>
			<?php echo h($restaurantService['RestaurantService']['minorder']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Restaurant Service'), array('action' => 'edit', $restaurantService['RestaurantService']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Restaurant Service'), array('action' => 'delete', $restaurantService['RestaurantService']['id']), null, __('Are you sure you want to delete # %s?', $restaurantService['RestaurantService']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurant Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant Service'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurants'), array('controller' => 'restaurants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant'), array('controller' => 'restaurants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Intervals'), array('controller' => 'time_intervals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Interval'), array('controller' => 'time_intervals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Time Intervals');?></h3>
	<?php if (!empty($restaurantService['TimeInterval'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($restaurantService['TimeInterval'] as $timeInterval): ?>
		<tr>
			<td><?php echo $timeInterval['id'];?></td>
			<td><?php echo $timeInterval['start_time'];?></td>
			<td><?php echo $timeInterval['end_time'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'time_intervals', 'action' => 'view', $timeInterval['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'time_intervals', 'action' => 'edit', $timeInterval['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'time_intervals', 'action' => 'delete', $timeInterval['id']), null, __('Are you sure you want to delete # %s?', $timeInterval['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Time Interval'), array('controller' => 'time_intervals', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

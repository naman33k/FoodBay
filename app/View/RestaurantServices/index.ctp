<div class="restaurantServices index">
	<h2><?php echo __('Restaurant Services');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('location_id');?></th>
			<th><?php echo $this->Paginator->sort('restaurant_id');?></th>
			<th><?php echo $this->Paginator->sort('minorder');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($restaurantServices as $restaurantService): ?>
	<tr>
		<td><?php echo h($restaurantService['RestaurantService']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($restaurantService['Location']['name'], array('controller' => 'locations', 'action' => 'view', $restaurantService['Location']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($restaurantService['Restaurant']['name'], array('controller' => 'restaurants', 'action' => 'view', $restaurantService['Restaurant']['id'])); ?>
		</td>
		<td><?php echo h($restaurantService['RestaurantService']['minorder']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $restaurantService['RestaurantService']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $restaurantService['RestaurantService']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $restaurantService['RestaurantService']['id']), null, __('Are you sure you want to delete # %s?', $restaurantService['RestaurantService']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Restaurant Service'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurants'), array('controller' => 'restaurants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant'), array('controller' => 'restaurants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Intervals'), array('controller' => 'time_intervals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Interval'), array('controller' => 'time_intervals', 'action' => 'add')); ?> </li>
	</ul>
</div>

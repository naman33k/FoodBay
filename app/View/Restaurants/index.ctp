<div class="restaurants index">
	<h2><?php echo __('Restaurants');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="actions"><?php echo __('Actions');?></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('location_id');?></th>
			<th><?php echo $this->Paginator->sort('photo');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('phone_number');?></th>
			<th><?php echo $this->Paginator->sort('phone_number_alt_1');?></th>
			<th><?php echo $this->Paginator->sort('phone_number_alt_2');?></th>
			<th><?php echo $this->Paginator->sort('delivery_time');?></th>
			
	</tr>
	<?php
	foreach ($restaurants as $restaurant): ?>
	<tr>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $restaurant['Restaurant']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $restaurant['Restaurant']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $restaurant['Restaurant']['id']), null, __('Are you sure you want to delete # %s?', $restaurant['Restaurant']['id'])); ?>
			<?php echo $this->Html->link(__('Make Order'), array('action' => 'makeorder',$restaurant['Restaurant']['id'])); ?>
		</td>
		<td><?php echo h($restaurant['Restaurant']['id']); ?>&nbsp;</td>
		<td><?php echo h($restaurant['Restaurant']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($restaurant['Location']['name'], array('controller' => 'locations', 'action' => 'view', $restaurant['Location']['id'])); ?>
		</td>
		<td><?php echo h($restaurant['Restaurant']['photo']); ?>&nbsp;</td>
		<td><?php echo h($restaurant['Restaurant']['description']); ?>&nbsp;</td>
		<td><?php echo h($restaurant['Restaurant']['address']); ?>&nbsp;</td>
		<td><?php echo h($restaurant['Restaurant']['email']); ?>&nbsp;</td>
		<td><?php echo h($restaurant['Restaurant']['phone_number']); ?>&nbsp;</td>
		<td><?php echo h($restaurant['Restaurant']['phone_number_alt_1']); ?>&nbsp;</td>
		<td><?php echo h($restaurant['Restaurant']['phone_number_alt_2']); ?>&nbsp;</td>
		<td><?php echo h($restaurant['Restaurant']['delivery_time']); ?>&nbsp;</td>
		
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
		<li><?php echo $this->Html->link(__('New Restaurant'), array('action' => 'add')); ?></li>
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

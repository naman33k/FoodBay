<div class="menuSections index">
	<h2><?php echo __('Menu Sections');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('menu_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($menuSections as $menuSection): ?>
	<tr>
		<td><?php echo h($menuSection['MenuSection']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($menuSection['Menu']['id'], array('controller' => 'menus', 'action' => 'view', $menuSection['Menu']['id'])); ?>
		</td>
		<td><?php echo h($menuSection['MenuSection']['name']); ?>&nbsp;</td>
		<td><?php echo h($menuSection['MenuSection']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $menuSection['MenuSection']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $menuSection['MenuSection']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $menuSection['MenuSection']['id']), null, __('Are you sure you want to delete # %s?', $menuSection['MenuSection']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Menu Section'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Intervals'), array('controller' => 'time_intervals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Interval'), array('controller' => 'time_intervals', 'action' => 'add')); ?> </li>
	</ul>
</div>

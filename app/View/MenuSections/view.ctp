<div class="menuSections view">
<h2><?php  echo __('Menu Section');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($menuSection['MenuSection']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($menuSection['Menu']['id'], array('controller' => 'menus', 'action' => 'view', $menuSection['Menu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($menuSection['MenuSection']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($menuSection['MenuSection']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Menu Section'), array('action' => 'edit', $menuSection['MenuSection']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Menu Section'), array('action' => 'delete', $menuSection['MenuSection']['id']), null, __('Are you sure you want to delete # %s?', $menuSection['MenuSection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Sections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Section'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Intervals'), array('controller' => 'time_intervals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Interval'), array('controller' => 'time_intervals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dishes');?></h3>
	<?php if (!empty($menuSection['Dish'])):?>
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
		foreach ($menuSection['Dish'] as $dish): ?>
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
	<h3><?php echo __('Related Time Intervals');?></h3>
	<?php if (!empty($menuSection['TimeInterval'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($menuSection['TimeInterval'] as $timeInterval): ?>
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

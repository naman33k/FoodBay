<div class="dishes view">
<h2><?php  echo __('Dish');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['photo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dish'), array('action' => 'edit', $dish['Dish']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dish'), array('action' => 'delete', $dish['Dish']['id']), null, __('Are you sure you want to delete # %s?', $dish['Dish']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rating Dishes'), array('controller' => 'rating_dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rating Dish'), array('controller' => 'rating_dishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Sections'), array('controller' => 'menu_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Section'), array('controller' => 'menu_sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Intervals'), array('controller' => 'time_intervals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Interval'), array('controller' => 'time_intervals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rating Dishes');?></h3>
	<?php if (!empty($dish['RatingDish'])):?>
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
		foreach ($dish['RatingDish'] as $ratingDish): ?>
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
	<h3><?php echo __('Related Menu Sections');?></h3>
	<?php if (!empty($dish['MenuSection'])):?>
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
		foreach ($dish['MenuSection'] as $menuSection): ?>
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
	<h3><?php echo __('Related Orders');?></h3>
	<?php if (!empty($dish['Order'])):?>
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
		foreach ($dish['Order'] as $order): ?>
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
	<h3><?php echo __('Related Tags');?></h3>
	<?php if (!empty($dish['Tag'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dish['Tag'] as $tag): ?>
		<tr>
			<td><?php echo $tag['id'];?></td>
			<td><?php echo $tag['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tags', 'action' => 'edit', $tag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tags', 'action' => 'delete', $tag['id']), null, __('Are you sure you want to delete # %s?', $tag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Time Intervals');?></h3>
	<?php if (!empty($dish['TimeInterval'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dish['TimeInterval'] as $timeInterval): ?>
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

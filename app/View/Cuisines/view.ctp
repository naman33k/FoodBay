<div class="cuisines view">
<h2><?php  echo __('Cuisine');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cuisine['Cuisine']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cuisine['Cuisine']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cuisine'), array('action' => 'edit', $cuisine['Cuisine']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cuisine'), array('action' => 'delete', $cuisine['Cuisine']['id']), null, __('Are you sure you want to delete # %s?', $cuisine['Cuisine']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuisines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuisine'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurants'), array('controller' => 'restaurants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant'), array('controller' => 'restaurants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Restaurants');?></h3>
	<?php if (!empty($cuisine['Restaurant'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone Number'); ?></th>
		<th><?php echo __('Phone Number Alt 1'); ?></th>
		<th><?php echo __('Phone Number Alt 2'); ?></th>
		<th><?php echo __('Delivery Time'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cuisine['Restaurant'] as $restaurant): ?>
		<tr>
			<td><?php echo $restaurant['id'];?></td>
			<td><?php echo $restaurant['name'];?></td>
			<td><?php echo $restaurant['location_id'];?></td>
			<td><?php echo $restaurant['photo'];?></td>
			<td><?php echo $restaurant['description'];?></td>
			<td><?php echo $restaurant['address'];?></td>
			<td><?php echo $restaurant['email'];?></td>
			<td><?php echo $restaurant['phone_number'];?></td>
			<td><?php echo $restaurant['phone_number_alt_1'];?></td>
			<td><?php echo $restaurant['phone_number_alt_2'];?></td>
			<td><?php echo $restaurant['delivery_time'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'restaurants', 'action' => 'view', $restaurant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'restaurants', 'action' => 'edit', $restaurant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'restaurants', 'action' => 'delete', $restaurant['id']), null, __('Are you sure you want to delete # %s?', $restaurant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Restaurant'), array('controller' => 'restaurants', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users');?></h3>
	<?php if (!empty($cuisine['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Phone Number'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cuisine['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['name'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $user['address'];?></td>
			<td><?php echo $user['phone_number'];?></td>
			<td><?php echo $user['location_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

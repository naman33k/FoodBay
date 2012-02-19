<div class="menus view">
<h2><?php  echo __('Menu');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Restaurant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($menu['Restaurant']['name'], array('controller' => 'restaurants', 'action' => 'view', $menu['Restaurant']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Menu'), array('action' => 'edit', $menu['Menu']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Menu'), array('action' => 'delete', $menu['Menu']['id']), null, __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurants'), array('controller' => 'restaurants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant'), array('controller' => 'restaurants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Sections'), array('controller' => 'menu_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Section'), array('controller' => 'menu_sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Menu Sections');?></h3>
	<?php if (!empty($menu['MenuSection'])):?>
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
		foreach ($menu['MenuSection'] as $menuSection): ?>
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

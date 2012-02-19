<div class="favOrders view">
<h2><?php  echo __('Fav Order');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($favOrder['FavOrder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($favOrder['User']['name'], array('controller' => 'users', 'action' => 'view', $favOrder['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($favOrder['Order']['id'], array('controller' => 'orders', 'action' => 'view', $favOrder['Order']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fav Order'), array('action' => 'edit', $favOrder['FavOrder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fav Order'), array('action' => 'delete', $favOrder['FavOrder']['id']), null, __('Are you sure you want to delete # %s?', $favOrder['FavOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fav Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fav Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>

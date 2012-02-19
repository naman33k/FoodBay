<div class="ratingDishes view">
<h2><?php  echo __('Rating Dish');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ratingDish['RatingDish']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ratingDish['User']['name'], array('controller' => 'users', 'action' => 'view', $ratingDish['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dish'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ratingDish['Dish']['name'], array('controller' => 'dishes', 'action' => 'view', $ratingDish['Dish']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($ratingDish['RatingDish']['rating']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rating Dish'), array('action' => 'edit', $ratingDish['RatingDish']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rating Dish'), array('action' => 'delete', $ratingDish['RatingDish']['id']), null, __('Are you sure you want to delete # %s?', $ratingDish['RatingDish']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rating Dishes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rating Dish'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
	</ul>
</div>

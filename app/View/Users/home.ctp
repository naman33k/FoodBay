<div>

Hi <b><?php echo($user['User']['name']); ?></b> <br>

This is supposed to be your home page <br>

You can make orders at restaurants by visiting the restaurant index <?php echo $this->Html->link(__('here'), array('controller'=>'restaurants','action' => 'index'));?>

</div>

<?php
$this->breadcrumbs = array(
    $this->nameController => array('admin'),
    $model->name,
);

$this->menu = array(
    array('label' => $this->labelController['Create'] . $this->nameController, 'url' => array('create')),
    array('label' => $this->labelController['Update'] . $this->nameController, 'url' => array('update', 'id' => $model->paper_approval_id)),
    array('label' => $this->labelController['Delete'], 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->paper_approval_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => $this->labelController['Manage'] . $this->nameController, 'url' => array('admin')),
);
?>

<h2><?php echo $this->labelController['View'] . $this->nameController; ?> # <?php echo $model->name; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'paper_approval_id',
		'paper_no',
		'member_id',
		'tel',
		'go',
		'request',
		'length_go',
		'num_person',
		'responsible',
		'place_id',
		'departure_time',
		'back_time',
		'status',
		'create_at',
	),
)); ?>

<?php

$this->breadcrumbs = array(
    $this->nameController => array('admin'),
    $this->labelController['Create'] . $this->nameController,
);


$this->menu = array(
    array('label' => $this->labelController['Manage'] . $this->nameController, 'url' => array('admin')),
);
?>

<h2><?php echo $this->labelController['Create'] . $this->nameController; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
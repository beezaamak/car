
<?php

$this->breadcrumbs = array(
    $this->nameController => array('admin'),
    $model->paper_no => array('view', 'id' => $model->paper_approval_id),
    $this->labelController['Update'] . $model->paper_no,
);

$this->menu = array(
    array('label' => $this->labelController['Create'] . $this->nameController, 'url' => array('create')),
    array('label' => $this->labelController['View'] . $model->paper_no, 'url' => array('view', 'id' => $model->paper_approval_id)),
    array('label' => $this->labelController['Manage'] . $this->nameController, 'url' => array('admin')),
);
?>

<h2><?php echo $this->labelController['Update']; ?> # <?php echo $model->paper_no; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
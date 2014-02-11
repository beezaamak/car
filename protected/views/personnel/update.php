
<?php
$this->breadcrumbs = array(
    $this->nameController => array('admin'),
    $model->name => array('view', 'id' => $model->personnel_id),
    $this->labelController['Update'] . $model->name,
);

$this->menu = array(
    array('label' => $this->labelController['Create'] . $this->nameController, 'url' => array('create')),
    array('label' => $this->labelController['View'] . $model->name, 'url' => array('view', 'id' => $model->personnel_id)),
    array('label' => $this->labelController['Manage'] . $this->nameController, 'url' => array('admin')),
);
?>

<h2><?php echo $this->labelController['Update']; ?> # <?php echo $model->name; ?></h2>

<?php
$this->renderPartial('_form', array(
    'model' => $model,
    'file' => $file,
));
?>
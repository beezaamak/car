
<?php
$this->breadcrumbs = array(
    $this->nameController => array('admin'),
    $model->subject => array('view', 'id' => $model->news_id),
    $this->labelController['Update'] . $model->subject,
);

$this->menu = array(
    array('label' => $this->labelController['Create'] . $this->nameController, 'url' => array('create')),
    array('label' => $this->labelController['View'], 'url' => array('view', 'id' => $model->news_id)),
    array('label' => $this->labelController['Manage'] . $this->nameController, 'url' => array('admin')),
);
?>

<h2><?php echo $this->labelController['Update']; ?> # <?php echo $model->subject; ?></h2>

<?php
$this->renderPartial('_form', array(
    'model' => $model,
    'file' => $file,
));
?>
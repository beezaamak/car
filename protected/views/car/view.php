
<?php
$this->breadcrumbs = array(
    $this->nameController => array('admin'),
    $model->car_no,
);

$this->menu = array(
    array('label' => $this->labelController['Create'] . $this->nameController, 'url' => array('create')),
    array('label' => $this->labelController['Update'] . $this->nameController, 'url' => array('update', 'id' => $model->car_id)),
    array('label' => $this->labelController['Delete'], 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->car_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => $this->labelController['Manage'] . $this->nameController, 'url' => array('admin')),
);
?>

<h2><?php echo $this->labelController['View'] . $this->nameController; ?> # <?php echo $model->car_no; ?></h2>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'license_no',
        array(
            'name' => 'date_registration',
            'value' => Tools::DateTimeToShow($model->create_at, '/', false),
        ),
        'brand.name',
        'engine_no',
        'personnel.name',
        array(
            'name' => 'create_at',
            'value' => Tools::DateTimeToShow($model->create_at, '/', false),
        ),
    ),
));
?>

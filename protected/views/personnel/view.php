
<?php
$this->breadcrumbs = array(
    $this->nameController => array('admin'),
    $model->name,
);

$this->menu = array(
    array('label' => $this->labelController['Create'] . $this->nameController, 'url' => array('create')),
    array('label' => $this->labelController['Update'] . $this->nameController, 'url' => array('update', 'id' => $model->personnel_id)),
    array('label' => $this->labelController['Delete'], 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->personnel_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => $this->labelController['Manage'] . $this->nameController, 'url' => array('admin')),
);
?>

<h2><?php echo $this->labelController['View'] . $this->nameController; ?> # <?php echo $model->name; ?></h2>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'name',
        'position.name',
        'tel',
        array(
            'name' => 'create_at',
            'value' => Tools::DateTimeToShow($model->create_at, "/", false)
        ),
        array(
            'type' => 'raw',
            'name' => 'pic',
            'value' => CHtml::image(Yii::app()->params['pathUpload'] . $model->pic, '', array(
//                'class' => 'form_image',
                'style' => 'width: 430px;'
            )),
        ),
    ),
));
?>

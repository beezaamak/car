
<?php
$this->breadcrumbs = array(
    $this->nameController => array('admin'),
    $model->subject,
);

$this->menu = array(
    array('label' => $this->labelController['Create'] . $this->nameController, 'url' => array('create')),
    array('label' => $this->labelController['Update'], 'url' => array('update', 'id' => $model->news_id)),
    array('label' => $this->labelController['Delete'], 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->news_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => $this->labelController['Manage'] . $this->nameController, 'url' => array('admin')),
);
?>

<h2><?php echo $this->labelController['View'] . $this->nameController; ?> #  <?php echo $model->subject; ?></h2>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
//        'news_id',
        'subject',
        array(
            'name' => 'create_at',
            'value' => Tools::DateTimeToShow($model->create_at, '/', true),
        ),
        array(
            'name' => 'update_at',
            'value' => Tools::DateTimeToShow($model->update_at, '/', true),
        ),
        'description',
        array(
            'type' => 'raw',
            'name' => 'pic',
            'value' => CHtml::image(Yii::app()->params['pathUpload'] . $model->pic, '', array(
                'style' => 'width: 430px;'
            )),
        ),
    ),
));
?>

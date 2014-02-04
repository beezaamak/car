<?php
$this->breadcrumbs = array(
    $this->nameController => array('admin'),
    $this->labelController['Manage'],
);

$this->menu = array(
    array('label' => $this->labelController['Create'] . $this->nameController, 'url' => array('create')),
);
?>
<h2><?php echo $this->nameController; ?></h2>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'car-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'summaryText' => Yii::app()->params['summaryTextGrid'],
    'columns' => array(
        array(
            'header' => Yii::t('menu', 'ลำดับ'),
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
            'htmlOptions' => array(
                'style' => 'width: 50px; text-align: center;'
            ),
        ),
        'license_no',
        array(
            'name' => 'brand_id',
            'value' => '$data->brand->name',
            'htmlOptions' => array(
                'style' => 'width: 100px; text-align: center;'
            ),
        ),
        array(
            'name' => 'personnel_id',
            'value' => '$data->personnel->name',
            'htmlOptions' => array(
                'style' => 'width: 100px; text-align: center;'
            ),
        ),
        array(
            'name' => 'date_registration',
            'value' => 'Tools::DateTimeToShow($data->date_registration, "/", false)',
            'htmlOptions' => array(
                'style' => 'width: 80px; text-align: center;'
            ),
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>

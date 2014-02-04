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
    'id' => 'position-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'summaryText' => Yii::app()->params['summaryTextGrid'],
    'columns' => array(
        array(
            'header' => Yii::t('menu', 'ลำดับ'),
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
            'htmlOptions' => array(
                'style' => 'width: 50px; text-align: center;'
            )
        ),
        'name',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>

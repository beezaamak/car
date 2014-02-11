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
    'id' => 'paper-approval-grid',
    'dataProvider' => $model->getData(),
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
        array(
            'name' => 'paper_no',
            'value' => '$data->paper_no',
            'htmlOptions' => array(
                'style' => 'width: 100px;',
            ),
        ),
        'go',
        array(
            'name' => 'status',
            'value' => 'Status::$paper[$data->status]',
//            'value' => '$data->status',
            'htmlOptions' => array(
                'style' => 'width: 80px;',
            ),
        ),
        array(
            'name' => 'create_at',
            'value' => '$data->create_at',
            'htmlOptions' => array(
                'style' => 'width: 80px;',
            ),
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>

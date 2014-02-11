
<?php
$this->breadcrumbs = array(
    $this->nameController => array('admin'),
    $model->paper_no,
);

$this->menu = array(
    array('label' => $this->labelController['Create'] . $this->nameController, 'url' => array('create')),
    array('label' => $this->labelController['Update'] . $this->nameController, 'url' => array('update', 'id' => $model->paper_approval_id)),
    array('label' => $this->labelController['Delete'], 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->paper_approval_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => $this->labelController['Manage'] . $this->nameController, 'url' => array('admin')),
);
?>

<h2><?php echo $this->labelController['View'] . $this->nameController; ?> # <?php echo $model->paper_no; ?></h2>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
//        'paper_approval_id',
        'paper_no',
        array(
            'name' => 'member_id',
            'value' => $model->member->name,
        ),
        'tel',
        'go',
        'request',
        'length_go',
        'num_person',
        'responsible',
        array(
            'name' => 'place_id',
            'value' => $model->place->name,
        ),
        array(
            'name' => 'departure_time',
            'value' => Tools::DateTimeToShow($model->departure_time, '/', true),
//            'value' => $model->departure_time,
        ),
        array(
            'name' => 'back_time',
            'value' => Tools::DateTimeToShow($model->back_time, '/', true),
        ),
        'status',
        'create_at',
    ),
));
?>
<div class="row buttons">
    <?php
    echo CHtml::button('แก้ไขเอกสาร', array(
        'onClick' => 'window.location="' .
        Yii::app()->createUrl('paperApproval/update', array(
            'id' => $model->paper_approval_id
        )) . '"',
    ));
    ?>
</div>

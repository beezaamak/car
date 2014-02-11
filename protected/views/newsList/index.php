<h2><?php echo $this->nameController; ?></h2>
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'summaryText' => Yii::app()->params['summaryTextList'],
    'sorterHeader' => 'เรียงจาก',
    'itemView' => '_list', // refers to the partial view named '_post'
    'ajaxUpdate' => false,
    'sortableAttributes' => array(
        'create_at' => 'วันที่สร้าง',
        'update_at' => 'วันที่แก้ไข',
    ),
));
?>
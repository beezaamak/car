<h2>ข้อมูลรถยนต์ส่วนกลาง</h2>
<ul class="list-1">
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider,
        'itemView' => '_list', // refers to the partial view named '_post'
        'summaryText' => Yii::app()->params['summaryTextList'],
        'sorterHeader' => 'เรียงจาก',
        'ajaxUpdate' => false,
        'sortableAttributes' => array(
            'name' => 'ชื่อ',
            'position_id' => 'ตำแหน่ง',
        ),
    ));
    ?>
</ul>
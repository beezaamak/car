<h2>ข้อมูลรถยนต์ส่วนกลาง</h2>
<ul class="list-1">
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider,
        'summaryText' => Yii::app()->params['summaryTextList'],
        'sorterHeader' => 'เรียงจาก',
        'itemView' => '_list', // refers to the partial view named '_post'
        'sortableAttributes' => array(
            'license_no' => 'เลขทะเบียน',
            'create_at' => 'สร้างใหม่',
        ),
    ));
    ?>
</ul>
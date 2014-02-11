<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'paper-approval-grid',
    'dataProvider' => $dataProvider,
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
            'name' => 'member_id',
            'value' => '$data->member->name',
            'htmlOptions' => array(
                'style' => 'width: 100px;',
            ),
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
            'type' => 'raw',
            'value' => '($data->status == 3)? "<div style=\"color: red; font-style: italic;\">".Status::$paper[$data->status]."</div>" : Status::$paper[$data->status]',
            'htmlOptions' => array(
                'style' => 'width: 80px;',
            ),
            'filter' => Status::$paper,
        ),
        array(
            'name' => 'create_at',
            'value' => 'Tools::DateTimeToShow($data->create_at, "/", true)',
            'htmlOptions' => array(
                'style' => 'width: 80px;',
            ),
            'filter' => false,
        ),
        array(
            'type' => 'raw',
            'header' => '',
//            'value' => 'acceptPaper($data->paper_approval_id)',
            'value' => 'CHtml::link("ข้อมูล", array("view", "id"=>$data->paper_approval_id), array("rel" => "facebox"))',
        ),
//        array(
//            'class' => 'CButtonColumn',
//            'template' => '{view} {delete}',
//            'buttons' => array(
//                'view' => array(
//                    'url' => '',
//                ),
//            ),
//        ),
    ),
));

//$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
//    'id' => 'mydialog',
//    // additional javascript options for the dialog plugin
//    'options' => array(
//        'title' => 'คำร้องขอใช้รถยนต์ส่วนกลาง',
//        'autoOpen' => false,
//        'width' => 600,
//    ),
//));
//
//echo '<div id="test"></div>';
//
//$this->endWidget('zii.widgets.jui.CJuiDialog');
//
//function acceptPaper($id) {
//    return CHtml::button('ดูรายละเอียด', array("onClick" => CHtml::ajax(array(
//                    'url' => Yii::app()->createUrl('/paperApprovalList/view', array('id' => $id)),
//                    'success' => 'function(data){
//                        document.getElementById("test").innerHTML=data;
//                        $(\'#mydialog\').dialog("open"); return false;
//                    }
//                    ',
//                    'dataType' => 'html',
//                ))
//    ));
//}

?>
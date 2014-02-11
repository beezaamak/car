<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'accept-form',
        ));
?>
<div class="row">
    <?php
    echo $form->labelEx($model, 'month', array('class' => 'inline'));
    echo $form->dropDownList($model, 'month', Thai::$thaimonth_full, array('empty' => 'ทั้งหมดของปี'));
    echo $form->error($model, 'month');
    ?>
</div>
<div class="row">
    <?php
    echo $form->labelEx($model, 'year', array('class' => 'inline'));
    echo $form->textField($model, 'year');
    echo $form->error($model, 'year');
    ?>
</div>
<div class='row button text-center'>
    <?php
    echo CHtml::button('ค้นหา', array(
        'onClick' => CHtml::ajax(array(
            'url' => CHtml::normalizeUrl(array('search')),
            'type' => 'post',
            'data' => 'js:$("#accept-form").serialize()',
            'update' => '#show_detail',
        )),
    ));
    ?>
</div>

<?php
$this->endWidget();
?>

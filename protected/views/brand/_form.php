<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'brand-form',
        'enableAjaxValidation' => false,
    ));
    ?>
    <?php echo $form->errorSummary($model); ?>
    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php
        echo $form->textField($model, 'name', array(
            'size' => 100,
            'maxlength' => 255,
        ));
        ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>
    <div class="row buttons">
        <?php
        echo CHtml::submitButton($model->isNewRecord ? 'สร้าง' : 'บันทึก', array(
            'class' => 'buttonk3',
        ));
        ?>
    </div>
    <?php $this->endWidget(); ?>
</div><!-- form -->
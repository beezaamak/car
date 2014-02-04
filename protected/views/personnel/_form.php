<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'personnel-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>


    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'position_id'); ?>
        <?php echo $form->dropDownList($model, 'position_id', Lists::position(), array('empty' => $this->labelController['messageSelect'])); ?>
        <?php echo $form->error($model, 'position_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'tel'); ?>
        <?php echo $form->textField($model, 'tel'); ?>
        <?php echo $form->error($model, 'tel'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'สร้าง' : 'บันทึก'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
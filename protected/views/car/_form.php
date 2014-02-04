<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'car-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>


    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'license_no'); ?>
        <?php echo $form->textField($model, 'license_no', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'license_no'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'date_registration'); ?>

        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'date_registration',
            'language' => 'th',
            'options' => array(
                'showAnim' => 'fold',
                'dateFormat' => 'yy-mm-dd',
                'changeMonth' => true,
                'changeYear' => true,
            ),
            'htmlOptions' => array(
                'style' => 'height:20px;'
            ),
        ));
        ?>
        <?php echo $form->error($model, 'date_registration'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'brand_id'); ?>
        <?php echo $form->dropDownList($model, 'brand_id', Lists::brand(), array('empty' => $this->labelController['messageSelect'])); ?>
        <?php echo $form->error($model, 'brand_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'car_no'); ?>
        <?php echo $form->textField($model, 'car_no', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'car_no'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'engine_no'); ?>
        <?php echo $form->textField($model, 'engine_no', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'engine_no'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'personnel_id'); ?>
        <?php echo $form->dropDownList($model, 'personnel_id', Lists::personnel(), array('empty' => $this->labelController['messageSelect'])); ?>
        <?php echo $form->error($model, 'personnel_id'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'สร้าง' : 'บันทึก'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
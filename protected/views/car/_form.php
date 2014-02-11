<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'car-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        ),
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

    <?php if (!$model->isNewRecord): ?>
        <div class="row" style="padding: 10px; border: 1px solid #444; border-radius: 5px; text-align: center;">
            <?php
            echo CHtml::image(Yii::app()->params['pathUpload'] . $model->pic, '', array(
//                'style' => 'width: 200px;',
                'class' => 'form_image',
            ));
            ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <?php echo $form->labelEx($file, 'file'); ?>
        <?php echo $form->fileField($file, 'file'); ?>
        <?php echo $form->error($file, 'file'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'สร้าง' : 'บันทึก'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
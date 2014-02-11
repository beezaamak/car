<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'paper-approval-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>


    <?php echo $form->errorSummary($model); ?>

    <div class="row div50">
        <?php echo $form->labelEx($model, 'paper_no'); ?>
        <?php echo $form->textField($model, 'paper_no', array('maxlength' => 100, 'style' => 'width: 90%;')); ?>
        <?php echo $form->error($model, 'paper_no'); ?>
    </div>

    <div class="row div50">
        <?php echo $form->labelEx($model, 'tel'); ?>
        <?php echo $form->textField($model, 'tel', array('maxlength' => 255, 'style' => 'width: 100%;')); ?>
        <?php echo $form->error($model, 'tel'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'go'); ?>
        <?php echo $form->textArea($model, 'go', array('maxlength' => 255, 'style' => 'width: 100%;')); ?>
        <?php echo $form->error($model, 'go'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'request'); ?>
        <?php echo $form->textArea($model, 'request', array('maxlength' => 255, 'style' => 'width: 100%;')); ?>
        <?php echo $form->error($model, 'request'); ?>
    </div>

    <div class="row div50">
        <?php echo $form->labelEx($model, 'length_go'); ?>
        <?php echo $form->textField($model, 'length_go', array('maxlength' => 255, 'style' => 'width: 90%;')); ?>
        <?php echo $form->error($model, 'length_go'); ?>
    </div>

    <div class="row div50">
        <?php echo $form->labelEx($model, 'num_person'); ?>
        <?php echo $form->textField($model, 'num_person', array('maxlength' => 10, 'style' => 'width: 100%;')); ?>
        <?php echo $form->error($model, 'num_person'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'responsible'); ?>
        <?php echo $form->textField($model, 'responsible', array('style' => 'width: 45%;')); ?>
        <?php echo $form->error($model, 'responsible'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'place_id'); ?>
        <?php
        echo $form->dropDownList($model, 'place_id', Lists::place(), array(
            'empty' => $this->labelController['messageSelect'],
            'style' => 'width: 46%;',
        ));
        ?>
        <?php echo $form->error($model, 'place_id'); ?>
    </div>
    <?php
    Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
    ?>
    <div class="row div50">
        <?php echo $form->labelEx($model, 'departure_time'); ?>
        <?php
        $this->widget('CJuiDateTimePicker', array(
            'model' => $model,
            'attribute' => 'departure_time',
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
        <?php echo $form->error($model, 'departure_time'); ?>
    </div>

    <div class="row div50">
        <?php echo $form->labelEx($model, 'back_time'); ?>
        <?php
        $this->widget('CJuiDateTimePicker', array(
            'model' => $model,
            'attribute' => 'back_time',
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
        <?php echo $form->error($model, 'back_time'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'สร้าง' : 'บันทึก'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
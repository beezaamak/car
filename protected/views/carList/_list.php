<li class="extra">
    <a href="#show_pic_<?php echo $data->car_id; ?>" rel='facebox'>
        <?php
        echo CHtml::image(Yii::app()->params['pathUpload'] . $data->pic, '', array(
            'style' => 'width: 100px;',
        ));
        ?>
    </a>
    <p> 
        <strong><?php echo '[' . $data->license_no . ']' . $data->brand->name; ?></strong>
        <b><a href="#show_detail_<?php echo $data->car_id; ?>" rel='facebox'>Read More</a></b>
    </p>
</li>
<div id="show_detail_<?php echo $data->car_id; ?>" style='display: none;'>
    <?php
    $model = Car::model()->findByPk($data->car_id);
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'attributes' => array(
            'license_no',
            array(
                'name' => 'date_registration',
                'value' => Tools::DateTimeToShow($model->create_at, '/', false),
            ),
            'brand.name',
            'engine_no',
            'personnel.name',
            array(
                'name' => 'create_at',
                'value' => Tools::DateTimeToShow($model->create_at, '/', false),
            ),
        ),
    ));
    ?>
</div>
<div id='show_pic_<?php echo $data->car_id; ?>' style="display: none;">
    <?php
    echo CHtml::image(Yii::app()->params['pathUpload'] . $data->pic, '', array(
        'style' => 'width: 600px;'
    ));
    ?>    
</div>


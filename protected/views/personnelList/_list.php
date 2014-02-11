<li class="extra">
    <?php
    echo CHtml::image(Yii::app()->params['pathUpload'] . $data->pic, '', array(
        'style' => 'width: 100px;',
    ));
    ?>
    <p> 
        <strong><?php echo $data->name; ?></strong>
        <label><?php echo $data->tel; ?></label>
        <b><a href="#show_detail_<?php echo $data->personnel_id; ?>" rel='facebox'>Read More</a></b>
    </p>
    <div id="show_detail_<?php echo $data->personnel_id; ?>" style='display: none;'>
        <?php
        echo CHtml::image(Yii::app()->params['pathUpload'] . $data->pic, '', array(
            'style' => 'width: 600px;'
        ));

        $model = Personnel::model()->findByPk($data->personnel_id);
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'name',
                'position.name',
                'tel',
                array(
                    'name' => 'create_at',
                    'value' => Tools::DateTimeToShow($model->create_at, "/", false)
                ),
            ),
        ));
        ?>
    </div>
</li>


<div>
    <div style="display: inline-block; width: 20%;">
        <?php
        echo CHtml::image(Yii::app()->params['pathUpload'] . $data->pic, '', array(
            'style' => 'width: 100px; margin-right: 10px; margin-bottom: 10px;',
        ));
        ?>
    </div>
    <div style="display: inline-block; width: 70%;">
        <h3><?php echo $data->subject; ?></h3>
        <p>
            <?php echo Tools::subText($data->description, 100); ?>
            <a href="#show_detail_<?php echo $data->news_id; ?>" rel='facebox'>Read More</a>
        </p>
    </div>
</div>
<div id='show_detail_<?php echo $data->news_id; ?>' style="display: none;">
    <h2 style="font-style: italic;"><?php echo $data->subject; ?></h2>
    <hr />
    <?php
    echo CHtml::image(Yii::app()->params['pathUpload'] . $data->pic, '', array(
        'style' => 'width: 700px;',
    ));

    $model = News::model()->findByPk($data->news_id);

    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'attributes' => array(
//        'news_id',
            'description',
            array(
                'name' => 'member_id',
                'value' => $model->member->name,
            ),
            array(
                'name' => 'create_at',
                'value' => Tools::DateTimeToShow($model->create_at, '/', true),
            ),
            array(
                'name' => 'update_at',
                'value' => Tools::DateTimeToShow($model->update_at, '/', true),
            ),
        ),
    ));
    ?>
</div>

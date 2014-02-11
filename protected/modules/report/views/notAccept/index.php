
<h2><?php echo $this->nameController; ?></h2>
<div class="wide form search">
    <?php
    $this->renderPartial('/search/search_month', array(
        'model' => $model,
    ));
    ?>
</div>
<div id='show_detail'>
    <?php
    $this->renderPartial('_list', array(
        'model' => $paper,
        'dataProvider' => $dataProvider,
    ));
    ?>
</div>


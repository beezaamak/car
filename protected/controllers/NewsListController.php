<?php

class NewsListController extends Controller {

    public $nameController = 'ข่าวประชาสัมพันธ์';

    public function actionIndex() {

        $dataProvider = new CActiveDataProvider('News');

        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

}
